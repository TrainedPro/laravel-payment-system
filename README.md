# Laravel Payment System Showcase

This project is a simple CRUD (Create, Read, Update, Delete) application for managing payments, built with the Laravel framework. It serves as a portfolio piece to demonstrate proficiency in Laravel development, adherence to best practices, and clean coding standards.

## Project Goal

The primary goal of this repository is to showcase core Laravel skills. It demonstrates:

*   Standard Laravel project structure.
*   Eloquent ORM for database interaction (`Payment` model).
*   Resourceful routing (`PaymentController`).
*   Blade templating engine for views.
*   Form Request validation (`StorePaymentRequest`, `UpdatePaymentRequest`).
*   Adherence to PSR-12 coding standards (enforced by Laravel Pint).
*   Basic database migrations.
*   Clean code principles and removal of unnecessary comments/code.
*   Proper Git version control setup.

## Features

*   List all payments.
*   Add a new payment record.
*   Edit an existing payment record.
*   Delete a payment record.
*   Basic form validation for creating and updating payments.
*   Clean, user-friendly interface (styled with inline CSS).

## Setup and Installation

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/TrainedPro/laravel-payment-system
    cd payment_system
    ```
2.  **Install Composer dependencies:**
    ```bash
    composer install
    ```
3.  **Copy the environment file:**
    ```bash
    cp .env.example .env
    ```
4.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```
5.  **Configure your `.env` file:**
    *   Set up your database connection details (e.g., `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`). By default, it's configured for SQLite (`database/database.sqlite`). If using SQLite, ensure the file exists: `touch database/database.sqlite`
6.  **Run database migrations:**
    ```bash
    php artisan migrate
    ```
7.  **Serve the application:**
    ```bash
    php artisan serve
    ```
    The application will typically be available at `http://127.0.0.1:8000`.

## Key Practices Demonstrated

*   **Model-View-Controller (MVC):** Clear separation of concerns.
*   **Eloquent ORM:** Efficient database interaction.
*   **Resource Controllers:** Standard way to handle CRUD operations.
*   **Form Requests:** Centralized validation logic.
*   **Blade Templating:** Clean view files.
*   **Migrations:** Version control for database schema.
*   **PSR-12 Compliance:** Standardized code formatting.

This project intentionally uses basic inline CSS for styling to keep the focus purely on the Laravel backend implementation.
