
# Accedo Application Server

This is a server application to create two endpoint of a webservice to register adn request user history from a Accedo Client Application.


# Requirements

 * PHP `7.1`
 * MySQL Server

# Installation & Usage
This is an application build with Symfony, you can install it via composer.

## Installation

### Step 1: Clone the project

Open a command console, clone the project using git.

```console
$ git clone https://github.com/mherrera05/accedo-server.git <folder-name>
```

This project lives in a public repository.

### Step 2: Install depency via composer

Enter in your project directory and execute the following command to install dependencies:

```console
$ composer install
```

This command requires you to have Composer installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

### Step 3: Create Schema

Having a database for this project and settep up in parameters.yml, just run the following command to create de schema in database:

```console
$ php bin/console doctrine:schema:create
```

### Step 4: Access to folder

Do not forget give access to `/cache` and `/logs` folder for `www-data` user.

```console
sudo setfacl -R -m u:www-data:rwx var/cache var/log
sudo setfacl -dR -m u:www-data:rwx var/cache var/log
```

### Step 5: Enable your site in Apache

Last step is create your virtual host pointing to the server and request by explorer
