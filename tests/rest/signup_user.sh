#! /bin/bash

curl -v localhost/api/signup \
    -X POST \
    -H "Content-Type: application/json" \
    -d '{"login":"vasya","password":"vasya","first_name":"vasya","last_name":"pupkin"}'