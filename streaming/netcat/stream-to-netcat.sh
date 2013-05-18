raspivid -t 999999 --hflip -o - | nc 192.168.1.64 5001
