# Client Management System

A simple, user-friendly **Client Management System** built with PHP and MySQL that allows users to manage client information through CRUD (Create, Read, Update, and Delete) operations.

## Features

- **Add Clients:** Register new clients with their name, email address, phone number, and physical address.
- **View Clients:** Display a list of registered clients, including their details and date added.
- **Edit Client Information:** Update existing client records whenever information changes.
- **Delete Clients:** Remove client records from the database.
- **Form Validation:** Check that all required fields are completed before submitting client information.
- **Database Integration:** Store and manage client records using MySQL.

## Technologies Used

- **PHP** – Server-side logic and CRUD operations.
- **MySQL** – Database management and storage.
- **HTML5** – Web page structure.
- **CSS3** – Styling and layout.
- **Bootstrap** – Responsive design and user interface components.
- **XAMPP** – Local development environment.

## Purpose

This project was developed to practise and demonstrate full-stack web development skills, including PHP programming, database integration, SQL queries, and implementing CRUD functionality in a web application.

## Getting Started

1. Install [XAMPP](https://www.apachefriends.org/).
2. Clone or download this repository into the `htdocs` directory.
3. Start Apache and MySQL from the XAMPP Control Panel.
4. Create a MySQL database named `clients`.
5. Create a `users` table with the required client fields.
6. Update `config.php` with your database connection settings.
7. Open the application in your browser at `http://localhost/clients/`.

## Future Improvements

- Implement stronger server-side validation.
- Use prepared statements to improve database security.
- Add search and filtering functionality.
- Implement user authentication and authorization.
- Improve error handling and user feedback.