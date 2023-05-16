## Personal Info QR code

### The goal of this project is to enhance the developers skills in deployment and typescript.

### This project takes user's info and generates a one time QR code

in which they can view their personal info after they scan code.

### BE

This project was created by Laravel. To run this project locally,

    1.Make sure you have installed php you can download php here https://www.php.net/downloads.php.Verify the installation: Run php -v in your terminal.
    2.Run composer install
    3.Copy .env.example to .env `cp .env.example .env`
    3.Run php artisan key:generate
    4.Run php artisan serve
    5.Open http://127.0.0.1:8000 to view it in the browser.

### Cloudinary (S3 alternative and a custom filesystem)

Cloudinary makes it easy for us to store, transform, optimize, and deliver all your media assets with easy-to-use APIs, widgets, or user interface just as how we S3 is used. In order to setup Cloudinary,

1. Create a free account at https://cloudinary.com/
2. Get the Product Environment Credentials (Cloud Name, API Key, API Secret)
3. On your .env file, add the following:
    ```
    CLOUDINARY_API_KEY=
    CLOUDINARY_API_SECRET=
    CLOUDINARY_CLOUD_NAME=
    CLOUDINARY_SECURE=true
    ```
4. You may then change the FILESYSTEM_DISK value to `cloudinary`
5. Use Storage class to upload, retrieve, delete etc.

### Deployment

This project can be deployed via Render just as how we deployed this for production use. Render is a fully-managed cloud platform where you can host static sites, backend APIs, databases, cron jobs, and all your other apps in one place. With Render's free instance types you can spin up Web Services, PostgreSQL databases, and Redis instances at no charge.
To start deployment,

1. A Dockerfile is used to deploy this project. For this instance, we used https://github.com/laravel-fans/laravel-docker to setup full Laravel production environment for Docker. You may use this also on your other Laravel projects to deploy on render.
2. Create an account on Render (https://render.com/)
3. Connect your github account
4. Create a new `Web Service` on Render, and give Render permission to access your new repo.
5. Click Connect
6. Render will detect that you are using a Dockerfile for this instance and will enable the correct settings for your deployment.
7. Supply the needed details such as project name and branch to deploy
8. Click Advanced at the bottom and add your environment variables (e.g. APP_KEY, DB_CONNECTIONS etc.)
9. Click Create Web Service
10. Your application will then start deployment. With the Dockerfile used, it will automatically migrate the tables for you as long as you supply the right environment variables.
11. Deployed! (e.g. https://upskill-be-xbws.onrender.com)
