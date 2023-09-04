docker-compose -p sandbox up -d --build --force-recreate
docker exec sandbox wait-for-it sandbox_db:3306 -t 60
docker exec sandbox php bin/console.php migrations:migrate
docker exec sandbox php bin/console.php sandbox:create-user test@test.cz administrator test