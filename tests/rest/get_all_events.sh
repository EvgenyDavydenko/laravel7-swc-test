#! /bin/bash

# Get All events
curl -v localhost/api/events \
    -H "Accept: application/json" | jq