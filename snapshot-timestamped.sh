FILENAME="snapshot-$(date +%Y%m%d-%H%M%S).jpg"
FILEPATH="/home/pi/camera-pi/www/images/snapshots/$FILENAME"

#echo "hickup" | sudo -S /opt/vc/bin/raspicam --width 800 --height 600 --timeout 1000 --output $FILEPATH > /dev/null 2>&1
echo "hickup" | sudo -S /opt/vc/bin/raspicam --width 800 --height 600 --timeout 10 --output $FILEPATH 

echo -n $FILENAME

