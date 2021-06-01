# bee-code-challenge-backend

Intructions to test/start the application:
1. clone the repository
2. run composer install
3. create the .env file 
4. run commands to create the databases
5. run the migrations:migrate command
6. run command to load the data fixtures: bin/console doctrine:migrations:migrate --env=test
7. run the phpunit tests: php ./vendor/bin/phpunit
