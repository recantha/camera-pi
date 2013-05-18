raspivid -t 999999 -w 800 -h 600 --hflip -o - | nc 10.0.0.46 5001
