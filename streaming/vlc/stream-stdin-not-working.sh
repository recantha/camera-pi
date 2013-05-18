raspivid -w 400 -h 300 -t 1000000 -o - | cvlc -vvv file:///dev/stdin --noaudio --sout '#standard{access=http,mux=ts,dst=:8090}'
