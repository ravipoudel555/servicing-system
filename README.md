# Installing Dependencies

-   `composer install`
-   `npm install`

# Some Artisan Commands

## Creating Modules

-   `php artisan make:controller Api/[ControllerName] --api`
-   `php artisan make:factory [ControllerName]Factory`
-   `php artisan make:model [ModelName]`
-   `php artisan make:seeder [SeederName]`
-   `php artisan make:model [ModelName] -m`
-   `php artisan make:model [ModelName] -mc`

## Database

-   `php artisan migrate`
-   `php artisan migrate:refresh`
-   `php artisan migrate:reset`
-   `php artisan migrate:rollback`
-   `php artisan migrate:status`
-   `php artisan migrate:install`
-   `php artisan migrate:refresh --seed`

## Seeding

-   `php artisan db:seed`
-   `php artisan db:seed --class=[SeederName]`

### Missing api.php file?

The [api.php] route file is no longer present by default

Ref: https://laravel.com/docs/11.x/releases#opt-in-routing

Create the [api.php] file:

-   `php artisan install:api`

## Clear Config, Cache & Refresh Autoload in Laravel

-   `php artisan config:clear`
-   `php artisan cache:clear`
-   `composer dump-autoload`

## Generating Key

This command creates a secure random key and puts it in your [.env]
APP_KEY is a 32-character base64-encoded string used by Laravel for:

-   Encryption (e.g., encrypted cookies, user data)
-   Hashing
-   Session security

-   `php artisan key:generate`

## Running the Docker

-   `docker-compose -f docker-compose.local.yaml up --build -d`

## Opening Bash/Shell in Docker

-   `docker-compose -f docker-compose.local.yaml exec app bash`

# Git Commands

#### Git is a distributed version control system that allows you to track changes to your codebase.

## Initialize Git

#### Initialize a new Git repository in your project directory. It creates a .git directory in your project.

-   `git init`

## Add Files

#### Add all files/changes to the staging area.

#### Only the changes which are staged will be included in the next commit.

-   `git add .`

## Commit

#### Commit the changes to the repository. Once you are satisfied with the changes, you can make a commit.

#### We follow the conventional commit format to write commit messages.

Ref: https://www.conventionalcommits.org/en/v1.0.0/

-   `git commit -m "Initial commit"`

## Pushing to Remote Source

#### Push the changes to GitHub/GitLab/Bitbucket. This will push the changes to the remote repository.

-   `git remote add origin <repository-url>`
-   `git branch -M main`
-   `git push -u origin main`

### SSH Setup

#### SSH is a secure way to connect to remote servers.

#### Generate a new SSH key pair.

-   `ssh-keygen -t ed25519 -C "your_email@example.com"`

#### Add the SSH key to your GitHub account.

-   Copy the contents of your public key file (e.g., `~/.ssh/id_ed25519.pub`)
-   Paste the key into the "Key" field
-   Give the key a title (e.g., "Personal MacBook")
-   Click "Add SSH key"

#### Test the SSH connection.

-   `ssh -T git@github.com`

#### If the connection is successful, you should see a message like "Hi username! You've successfully authenticated, but GitHub does not provide shell access."

## Postman

### Script for saving access token

const response = pm.response.json()

console.log(response)

console.log(response.token)

pm.collectionVariables.set('accessToken', response.token);
