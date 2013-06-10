CURRENT="/home/pi/camera-pi/www/images/output.jpg"
ARCHIVE="/home/pi/camera-pi/www/images/archive/snapshot-$(date +%Y%m%d-%H%M).jpg"

df -H | grep rootfs |grep -vE '^Filesystem|tmpfs|cdrom' | awk '{ print $5 " " $1 }' | while read output;
do
  echo $output
  usep=$(echo $output | awk '{ print $1}' | cut -d'%' -f1  )
  partition=$(echo $output | awk '{ print $2 }' )
  if [ $usep -le 95 ]; then
	echo "Okay to take a new snapshot"
	/opt/vc/bin/raspistill --timeout 1000 --output $CURRENT
	cp $CURRENT $ARCHIVE
  fi
done

