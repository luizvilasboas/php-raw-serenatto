# php-raw-serenatto

> A bistro website built with vanilla PHP and MySQL, featuring product management and PDF report generation.

## About the Project

Serenatto is a web application for a bistro that allows users to view products and administrators to manage the menu through Create, Read, Update, and Delete (CRUD) operations. A key feature of the project is the ability to generate PDF reports for the items on the menu.

## Tech Stack

*   [PHP](https://www.php.net/)
*   [MySQL](https://www.mysql.com/)
*   [Composer](https://getcomposer.org/)

## Usage

Below are the instructions for you to set up and run the project locally.

### Prerequisites

You need to have the following software installed:

*   [PHP](https://www.php.net/) (version 8.2 or higher)
*   [MySQL](https://www.mysql.com/downloads/)
*   [Composer](https://getcomposer.org/download/)

### Installation and Setup

Follow the steps below:

1.  **Clone the repository**
    ```bash
    git clone https://github.com/luizvilasboas/php-raw-serenatto.git
    ```

2.  **Navigate to the project directory**
    ```bash
    cd php-raw-serenatto
    ```

3.  **Install dependencies**
    ```bash
    composer install
    ```

4.  **Configure the database**
    *   Ensure your MySQL server is running and create a database for the project.
    *   Create a `.env` file in the project root.
    *   Add your database connection details to the `.env` file. Example:
        ```
        DB_HOST=localhost
        DB_PORT=3306
        DB_DATABASE=fantastic_bistro
        DB_USERNAME=your_username
        DB_PASSWORD=your_password
        ```

### Workflow

To run the application, start the built-in PHP server from the project root:
```bash
php -S localhost:8000
```
The application will be available in your browser at `http://localhost:8000`.

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
