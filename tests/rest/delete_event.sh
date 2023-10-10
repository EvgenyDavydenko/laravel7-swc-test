#! /bin/bash

curl -v localhost/api/events/15 \
    -X DELETE | jq