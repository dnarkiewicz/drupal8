#!/bin/bash

# CERTS: mimics mysql_ssl_rsa_setup, but adds custom -subj
# CA
openssl req -newkey rsa:2048 -days 3650 -nodes \
    -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=*.d8.dev" \
    -keyout ./docker/certs/ca-key.pem \
    -out    ./docker/certs/ca-req.pem
openssl rsa \
    -in  ./docker/certs/ca-key.pem \
    -out ./docker/certs/ca-key.pem
openssl x509 -sha256 -days 3650 -set_serial 1 -req \
    -in      ./docker/certs/ca-req.pem \
    -signkey ./docker/certs/ca-key.pem \
    -out     ./docker/certs/ca.pem


# SERVER *
openssl req -newkey rsa:2048 -days 3650 -nodes \
    -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=*.d8.dev" \
    -keyout ./docker/certs/star-server-key.pem \
    -out    ./docker/certs/star-server-req.pem
openssl rsa \
    -in  ./docker/certs/star-server-key.pem \
    -out ./docker/certs/star-server-key.pem
openssl x509 -sha256 -days 3650 -set_serial 2 -req \
    -in    ./docker/certs/star-server-req.pem \
    -CA    ./docker/certs/ca.pem \
    -CAkey ./docker/certs/ca-key.pem \
    -out   ./docker/certs/star-server-cert.pem
openssl req -new -sha256 \
    -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=*.d8.dev" \
    -key ./docker/certs/star-server-key.pem \
    -out ./docker/certs/star-server-csr.pem
# SERVER DB
openssl req -newkey rsa:2048 -days 3650 -nodes \
    -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=db.d8.dev" \
    -keyout ./docker/certs/db-server-key.pem \
    -out    ./docker/certs/db-server-req.pem
openssl rsa \
    -in  ./docker/certs/db-server-key.pem \
    -out ./docker/certs/db-server-key.pem
openssl x509 -sha256 -days 3650 -set_serial 2 -req \
    -in    ./docker/certs/db-server-req.pem \
    -CA    ./docker/certs/ca.pem \
    -CAkey ./docker/certs/ca-key.pem \
    -out   ./docker/certs/db-server-cert.pem
# SERVER ES
openssl req -newkey rsa:2048 -days 3650 -nodes \
    -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=es.d8.dev" \
    -keyout ./docker/certs/es-server-key.pem \
    -out    ./docker/certs/es-server-req.pem
openssl rsa \
    -in  ./docker/certs/es-server-key.pem \
    -out ./docker/certs/es-server-key.pem
openssl x509 -sha256 -days 3650 -set_serial 2 -req \
    -in    ./docker/certs/es-server-req.pem \
    -CA    ./docker/certs/ca.pem \
    -CAkey ./docker/certs/ca-key.pem \
    -out   ./docker/certs/es-server-cert.pem


# CLIENT DB
openssl req -newkey rsa:2048 -days 3650 -nodes \
    -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=db.d8.dev" \
    -keyout ./docker/certs/db-client-key.pem \
    -out    ./docker/certs/db-client-req.pem
openssl rsa \
    -in  ./docker/certs/db-client-key.pem \
    -out ./docker/certs/db-client-key.pem
openssl x509 -sha256 -days 3650 -set_serial 3 -req \
    -in    ./docker/certs/db-client-req.pem \
    -CA    ./docker/certs/ca.pem \
    -CAkey ./docker/certs/ca-key.pem \
    -out   ./docker/certs/db-client-cert.pem
openssl verify \
    -CAfile ./docker/certs/ca.pem \
            ./docker/certs/db-server-cert.pem \
            ./docker/certs/db-client-cert.pem
# CLIENT ES
openssl req -newkey rsa:2048 -days 3650 -nodes \
    -subj "/C=US/ST=Virginia/L=Falls Church/O=CTAC/CN=es.d8.dev" \
    -keyout ./docker/certs/es-client-key.pem \
    -out    ./docker/certs/es-client-req.pem
openssl rsa \
    -in  ./docker/certs/es-client-key.pem \
    -out ./docker/certs/es-client-key.pem
openssl x509 -sha256 -days 3650 -set_serial 3 -req \
    -in    ./docker/certs/es-client-req.pem \
    -CA    ./docker/certs/ca.pem \
    -CAkey ./docker/certs/ca-key.pem \
    -out   ./docker/certs/es-client-cert.pem
openssl verify \
    -CAfile ./docker/certs/ca.pem \
            ./docker/certs/es-server-cert.pem \
            ./docker/certs/es-client-cert.pem
# LOAD CA
# sudo security add-trusted-cert -d -r trustRoot -k /Library/Keychains/System.keychain Docker/usagov-docker/docker/certs/ca.pem

