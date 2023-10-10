#! /bin/bash

# Get One event
curl -v localhost/api/events/5 \
    -H "Accept: application/json" | jq