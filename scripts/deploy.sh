   ssh-keyscan $SERVER_HOSTNAME >> ~/.ssh/known_hosts
ssh $SERVER_USER@$SERVER_HOSTNAME "rm -rf ~/public_html/staged/*"
scp -r ./src/* $SERVER_USER@$SERVER_HOSTNAME:~/public_html/staged