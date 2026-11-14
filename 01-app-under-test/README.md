# 📱 Application Under Test (AUT)

This folder contains the PHP and MySQL application that serves as the **Application Under Test (AUT)** for this QA Sandbox.

## 🚀 Setup Instructions

To get this application running locally for testing, follow these steps:

1. **Database Setup:** Import the `peliculas.sql` file into your local MySQL server (e.g., via phpMyAdmin). The database will be named `cine`.
2. **Configure Connection:** Open `conexion.php` and replace the placeholders (`your_database_name`, `your_username`, `your_password_here`) with your local database credentials (e.g., `root` and empty password for XAMPP).
3. **Run the App:** Place this `01-app-under-test` folder in your local server (e.g., `htdocs` for XAMPP) and open `index.php` in your browser.

## 🛠️ Tech Stack
- **Backend:** PHP
- **Database:** MySQL (using PDO and Prepared Statements for security)
- **Frontend:** HTML5, CSS3

## 🎯 QA Scope & Features to Test

This application is intentionally designed to be tested. As a QA, the following areas are ready for validation:

- **CRUD Operations:** Create, Read, Update, and Delete movies via the User Interface.
- **Input Validation:** Frontend (HTML5 `required` attributes) and Backend (PHP `empty()` checks, year range validation).
- **Error Handling:** Testing empty states (no movies in the database) and handling invalid IDs.
- **XSS Prevention:** The UI uses `htmlspecialchars()` to prevent Cross-Site Scripting.

*(Note: For API testing, refer to the `api/` folder and its specific README).*
