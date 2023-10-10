#! /bin/bash

curl -v localhost/api/signin \
    -X POST \
    -H "Content-Type: application/json" \
    -d '{"login":"vasya","password":"vasya"}'