#!/bin/bash

export DOMAIN="d8.loc"
export SUBS="star db es s3 redis"
export SERIAL=1

function gen_ca {
    # CERTS: mimics mysql_ssl_rsa_setup, but adds custom -subj
    # CA
    SUB=${1-*}
    openssl req -newkey rsa:2048 -days 3650 -nodes \
        -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=${SUB}.${DOMAIN}" \
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
    SUB=${1-star}

    gen_cert "$SUB" server
    gen_cert "$SUB" client

    openssl verify \
        -CAfile ./docker/certs/ca.pem \
                ./docker/certs/${SUBNAM}-server-cert.pem \
                ./docker/certs/${SUBNAM}-client-cert.pem
}

function gen_cert {
    SUB=${1-star}
    SUBNAM="$SUB"
    if [ "$SUB" == "star" ]; then SUB='*'; fi;
    LOC=${2-server}

    openssl req -newkey rsa:2048 -days 3650 -nodes \
        -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=${SUB}.${DOMAIN}" \
        -keyout ./docker/certs/${SUBNAM}-${LOC}-key.pem \
        -out    ./docker/certs/${SUBNAM}-${LOC}-req.pem
    openssl rsa \
        -in  ./docker/certs/${SUBNAM}-${LOC}-key.pem \
        -out ./docker/certs/${SUBNAM}-${LOC}-key.pem
    openssl x509 -sha256 -days 3650 -set_serial $SERIAL -req \
        -in    ./docker/certs/${SUBNAM}-${LOC}-req.pem \
        -CA    ./docker/certs/ca.pem \
        -CAkey ./docker/certs/ca-key.pem \
        -out   ./docker/certs/${SUBNAM}-${LOC}-cert.pem
    openssl req -new -sha256 \
        -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=${SUB}.${DOMAIN}" \
        -key ./docker/certs/${SUBNAM}-${LOC}-key.pem \
        -out ./docker/certs/${SUBNAM}-${LOC}-csr.pem
    ((SERIAL++))
    # sudo security add-trusted-cert -d -r trustRoot ./docker/certs/${SUBNAM}-${LOC}-cert.pem
}

gen_ca
for SUB in $SUBS; do
    gen_certs $SUB
done;
