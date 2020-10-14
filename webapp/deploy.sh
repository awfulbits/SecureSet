rsync -avz -e "ssh -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null" --progress ./* centos@julian.run:/var/www/julian.run/html
# --delete # Disable delete flag while working on twilio integration
