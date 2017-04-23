# Boiler Share

## Synopsis

Boiler Share is a cutting-edge, collaborative website for student to find help in classes.

[BoilerShare.purduecs.com](http://boilershare.purduecs.com)

## Features

- [X] Authentication
	- [X] Login
	- [X] Register
- [X] Classrooms
	- [X] Q/A Forum
	- [ ] File Resource Sharing

## Local Environment Setup - Mac (MAMP)

- [ ] Download and Install [MAMP](https://www.mamp.info/en/)
- [ ] Set MAMP Directory to `./public`
- [ ] Create MySQL Database (use a GUI tool such as [Sequel Pro](http://www.sequelpro.com))
- [ ] Download and Install [Composer](https://getcomposer.org/)
- [ ] Create .env: `cp .env.example .env` in the project directory
- [ ] Open `.env` - Fill in your database config
- [ ] Execute `composer install` in the project directory (`php composer.phar install` if using composer.phar)
- [ ] Execute `php artisan key:generate` in the project directory
- [ ] Execute `php artisan migrate` in the project directory
- [ ] Start MAMP Servers

## Accessing Portal

- Locally: http://localhost:8888/  

## Contributors

@harrischristiansen [HarrisChristiansen.com](http://www.harrischristiansen.com) (harris@harrischristainsen.com)  
