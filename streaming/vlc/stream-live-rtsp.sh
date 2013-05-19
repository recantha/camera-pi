raspivid -o - -t 99999999999 -w 800 -h 600 --hflip | cvlc -vvv stream:///dev/stdin --sout '#rtp{sdp=rtsp://:8080/}' :demux=h264
