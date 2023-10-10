#! /bin/bash

curl -v localhost/api/events \
    -X POST \
    -H "Content-Type: application/json" \
    -d '{"title":"New Event","text":"Event description","creator_id":2}' \
    -H "Authorization: Bearer 2|3kc54SvcW7S6ibCx74IZ3NrDR3Nf6GGYMxbBFbnc"
    #-H "Authorization: Bearer 3|PrqRCXBEwLspHMzAM1GCZKSOCvmLMgkT0P3HbXwz"