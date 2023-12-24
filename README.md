# serenatto

This is a website to showcase the delicious products of Serenatto's bistro and manage everything through CRUD operations. Additionally, it provides the functionality to generate a PDF report about the items on the menu.

## Introduction

Serenatto is a PHP and MySQL project that allows users to view our tasty products, and admins to perform Create, Read, Update, and Delete (CRUD) operations, and generate reports on the performance of items on the site.

## Dependencies

To ensure that serenatto works correctly, make sure you have the following dependencies installed:

- PHP (version 8.2 or higher)
- MySQL
- Composer

## Installation

Follow the steps below to set up the development environment:

1. **Clone the Repository:**
   ```
   git clone https://gitlab.com/alura-courses-code/php/serenatto.git
   ```

2. **Install Dependencies with Composer:**
   ```
   composer install
   ```

3. **MySQL Configuration:**
   - Create a `.env` file at the root of the project.
   - Add the database configurations to the `.env` file. Example:
     ```
     DB_HOST=localhost
     DB_PORT=3306
     DB_DATABASE=fantastic_bistro
     DB_USERNAME=your_username
     DB_PASSWORD=your_password
     ```

4. **Start the PHP Server:**
   ```
   php -S localhost:8000
   ```

5. Open the browser and access `http://localhost:8000` to see serenatto in action!

## Usage

Serenatto is intuitive and easy to use. Explore the product viewing options, perform CRUD operations to manage the website's content, and if needed, generate detailed reports on the performance of items.

## Contributing

If you wish to contribute to this project, feel free to open a merge request. We welcome all forms of contribution!

## License

This project is licensed under the [MIT](https://gitlab.com/alura-courses-code/php/serenatto/-/blob/main/LICENSE). Refer to the LICENSE file for more details.
