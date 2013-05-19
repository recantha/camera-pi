raspivid -o - -t 99999999 -w 800 -h 600 --hflip | avconv -i - -f flv http://localhost:8090/feed1.ffm

#cvlc -vvv stream:///dev/stdin --sout '#standard{access=http,mux=ts,dst=:8080}' :demux=h264
