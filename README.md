# About Web Push Application

    #### Initial Page

    This page contain buttons to Login as user 1 and 2, Trigger Event for an user.

    #### Logging as user
    "Login as 1" and "Login as 2" buttons will route to the respective pages and will show alter when a notification is triggered.

    #### Trigger Event for a user

    In the initial page, by entering user id in the "Trigger Event for user id" input and clicking "Trigger Event" Button will trigger notification for the respective user only if the **is_logged_in is true in the database.**

    #### Active OR Deactivate User
    By entering user id and clicking on the Active or Deactive user button will change the **is_logged_in** true or false respectively.

## Testing

    1. Manually inserted users with id as **1** and **2** with is_logged_in as false.
    2. Clicked on the trigger event button with user id 1 and logged as 1 and 2. Observed that no notification or sweetalert is shown.
    3. Activated the user 1 by giving 1 in the active with user id input.
    4. Triggered notification for user id 2 and results were as expected didn't show any notification for 1 and 2 as user 2 has is_logged_in as false in the database.
    5.  Triggered notification for user id 1 but this time notification is shown for user 1 logged screen but not user 2 logged screen.

# Setup

-   clone the repository in your local system
-   run `composer install`
-   run `npm install`
-   create a new file named `.env` and copy `.env.example` into it.
-   update the database configuration in `.env` with your mysql database configuration
-   create the database for the project
-   run migrations `php artisan migrate`
-   start server `php artisan serve`
-   run `npm run dev` and then `npm run watch` or `npm run hot` to compile the resources and spin up the frontend

## tech:

### Backend

-   Laravel
-   Pusher
-   MySQL

### Frontend

-   Vue2
-   TailwindCSS
-   laravel-echo
-   pusher-js
