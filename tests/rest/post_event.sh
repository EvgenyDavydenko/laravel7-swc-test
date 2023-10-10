#! /bin/bash

curl -v localhost/api/events \
    -X POST \
    -H "Content-Type: application/json" \
    -d '{"title":"New Event","text":"Event description","creator_id":2}' | jq