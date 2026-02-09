timezone="Asia/Manila"
success=false
response=""

while [ "$success" = "false" ]; do
  response=$(curl -s -f "http://worldtimeapi.org/api/timezone/$timezone") # -s silent, -f fail on HTTP error
  if [ $? -eq 0 ]; then
    echo "Curl command succeeded."
    success=true
  else
    echo "Curl command failed. Retrying..."
    # sleep 3
  fi
done

# Print the saved response
date_now=$(echo "$response" | jq -r '.datetime')
timedatectl set-timezone $timezone
timedatectl set-time $date_no
