#!/bin/bash

[ -f ./env ]     && source ./env
[ -f ../env ]    && source ../env
[ -f ../../env ] && source ../../env
[ -f docker/env ] && source docker/env

export DOMAIN="${DEV_HOST}.${DEV_TLD}"
export SUBS="star db es s3 redis"
export SERIAL=1

function gen_ca {
    # CERTS: mimics mysql_ssl_rsa_setup, but adds custom -subj
    # CA

    openssl req -newkey rsa:2048 -days 3650 -nodes \
        -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=${1}" \
        -keyout ./docker/certs/ca-key.pem \
        -out    ./docker/certs/ca-req.pem
    openssl rsa \
        -in  ./docker/certs/ca-key.pem \
        -out ./docker/certs/ca-key.pem
    openssl x509 -sha256 -days 3650 -set_serial $SERIAL -req \
        -in      ./docker/certs/ca-req.pem \
        -signkey ./docker/certs/ca-key.pem \
        -out     ./docker/certs/ca.pem
    ((SERIAL++))
}

function gen_certs {
    local SUB=${1-star}
    local SUBNAME=$SUB
    if [ "${SUB}"   == "star" ]; then SUB="*"; fi;
    if [ "${SUBNAME}" == "*"  ]; then SUBNAME="star"; fi;

    gen_cert "$SUB" server
    gen_cert "$SUB" client

    openssl verify \
        -CAfile ./docker/certs/ca.pem \
                ./docker/certs/${SUBNAME}-server-cert.pem \
                ./docker/certs/${SUBNAME}-client-cert.pem
}

function gen_cert {
    local SUB=${1-star}
    local SUBNAME=$SUB
    if [ "${SUB}"   == "star" ]; then SUB="*"; fi;
    if [ "${SUBNAME}" == "*"  ]; then SUBNAME="star"; fi;
    local LOC=${2-server}

    openssl req -newkey rsa:2048 -days 3650 -nodes \
        -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=${SUB}.${DOMAIN}" \
        -keyout ./docker/certs/${SUBNAME}-${LOC}-key.pem \
        -out    ./docker/certs/${SUBNAME}-${LOC}-req.pem
    openssl rsa \
        -in  ./docker/certs/${SUBNAME}-${LOC}-key.pem \
        -out ./docker/certs/${SUBNAME}-${LOC}-key.pem
    openssl x509 -sha256 -days 3650 -set_serial $SERIAL -req \
        -in    ./docker/certs/${SUBNAME}-${LOC}-req.pem \
        -CA    ./docker/certs/ca.pem \
        -CAkey ./docker/certs/ca-key.pem \
        -out   ./docker/certs/${SUBNAME}-${LOC}-cert.pem
    openssl req -new -sha256 \
        -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=${SUB}.${DOMAIN}" \
        -key ./docker/certs/${SUBNAME}-${LOC}-key.pem \
        -out ./docker/certs/${SUBNAME}-${LOC}-csr.pem
    ((SERIAL++))
    # sudo security add-trusted-cert -d -r trustRoot ./docker/certs/${SUBNAM}-${LOC}-cert.pem
}

rm -f ./docker/certs/*.pem

gen_ca $DOMAIN
for SUB in $SUBS; do
    gen_certs $SUB
done;
