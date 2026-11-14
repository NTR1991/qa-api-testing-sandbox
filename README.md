# 🧪 QA API Testing Sandbox: PHP REST API & CRUD

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![Postman](https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white)
![QA Automation](https://img.shields.io/badge/QA_Automation-Ready-success?style=for-the-badge)

## 📋 Project Overview
This repository is my **QA Automation Sandbox**. It contains a fully functional CRUD (Create, Read, Update, Delete) application built with **PHP and MySQL**, which serves as the **Application Under Test (AUT)**. 

The primary goal of this project is to demonstrate my skills in **Software Quality Assurance**, focusing on API testing, edge case validation, security testing, and backend automation preparation.

## 🎯 QA Objectives & Test Strategy
- **Test Case Design:** Preparing scenarios for valid and invalid inputs (e.g., year out of range, empty fields, negative duration).
- **API Assertions:** Validating expected HTTP status codes (`200`, `201`, `204`, `400`, `404`) and JSON payload structures.
- **Security Testing:** The backend uses PDO and prepared statements, allowing QA to practice SQL injection validation. The frontend uses `htmlspecialchars()` to prevent XSS attacks.
- **State Validation:** Testing the "Empty State" (what the user sees when there is no data) and error handling (e.g., trying to edit/delete a non-existent movie).

## 📂 Repository Structure

```
qa-api-testing-sandbox/
│
├── 01-app-under-test/            # The application under test (PHP & MySQL)
│   ├── api/
│   │   └── peliculas.php         # REST API endpoints (GET, POST, PUT, DELETE)
│   ├── css/
│   │   └── style.css             # Frontend styling
│   ├── conexion.php              # Secure PDO connection (Placeholders used)
│   ├── index.php                 # UI: Read (includes Empty State validation)
│   ├── crear.php                 # UI: Create
│   ├── editar.php                # UI: Update
│   ├── eliminar.php              # UI: Delete
│   └── peliculas.sql             # Database schema & seed data
│
├── 02-api-tests-postman/         # Automated API Tests (Postman Collection)
│   └── (Coming soon...)
│
└── README.md
```

## 🚀 How to Run the Application Under Test

1. **Database Setup:** Import the `01-app-under-test/peliculas.sql` file into your local MySQL server (e.g., via phpMyAdmin). The database will be named `cine`.
2. **Configure DB Connection:** Open `01-app-under-test/conexion.php` and update the placeholders (`your_database_name`, `your_username`, `your_password_here`) with your local XAMPP/MySQL credentials.
3. **Run the App:** Place the `01-app-under-test` folder in your local server (e.g., `htdocs`). Open `index.php` in your browser.

## 🔌 REST API Endpoints (Ready for Testing)

The application exposes the following endpoints, designed to return standard HTTP status codes for precise test assertions:

| Method | Endpoint | Description | Expected Response |
| :--- | :--- | :--- | :--- |
| `GET` | `/api/peliculas.php` | Retrieve all movies | `200 OK` + JSON Array |
| `GET` | `/api/peliculas.php?id=1` | Retrieve a specific movie | `200 OK` + JSON Object |
| `POST` | `/api/peliculas.php` | Create a new movie | `201 Created` + JSON Object |
| `PUT` | `/api/peliculas.php?id=1` | Update an existing movie | `200 OK` + JSON Object |
| `DELETE` | `/api/peliculas.php?id=1` | Delete a movie | `204 No Content` |

### Example: Create a movie (POST)

```json
{
    "titulo": "The Matrix",
    "director": "Lana Wachowski",
    "genero": "Sci-Fi",
    "anio": 1999,
    "duracion": 136
}
```

## 🛠️ Technologies & Concepts Applied

- **Backend:** PHP
- **Database:** MySQL, PDO, Prepared Statements
- **Frontend:** HTML5, CSS3
- **QA Focus:** Input Validation, Error Handling, HTTP Status Codes, XSS Prevention, JSON Serialization.

---
## 👤 Author

**Nestor Reyes**  
*IT Support Specialist & QA Automation | Java, SQL, JUnit*  
[LinkedIn](https://linkedin.com/in/nestor-reyes-) | [GitHub](https://github.com/NTR1991)
