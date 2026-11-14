# 🎬 Movie Management System: PHP REST API & CRUD

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![QA Ready](https://img.shields.io/badge/QA_Automation-Ready-success?style=for-the-badge)

## 📋 Project Overview
A robust, fully functional CRUD (Create, Read, Update, Delete) application built with **PHP and MySQL** to manage a movie catalog. The system features a clean user interface and, most importantly, a comprehensive **REST API** designed for programmatic access and integration testing.

## 🎯 Objective & QA Perspective
The primary goal was to architect a secure backend using **PDO (PHP Data Objects)** and **prepared statements** to prevent SQL injection. 

From a **Quality Assurance perspective**, this project serves as an ideal test bed for API automation. Understanding the underlying backend logic, HTTP status codes, and JSON data structures is essential for designing effective test cases and automating API validations.

## ✨ Key Features

| Feature | Description |
| :--- | :--- |
| **Full CRUD Operations** | Seamless creation, reading, updating, and deletion of movie records. |
| **REST API Integration** | Exposes JSON endpoints (GET, POST, PUT, DELETE) ready for automated API testing. |
| **Data Validation** | Strict validation of required fields and year ranges to ensure data integrity. |
| **Error Handling** | Returns appropriate HTTP status codes (200, 201, 204, 400, 404, 405) for precise test assertions. |
| **Secure Architecture** | Separation of concerns and secure database connection using PDO. |

## 🛠️ Technologies Used

- **Backend:** PHP
- **Database:** MySQL
- **Security:** PDO (PHP Data Objects), Prepared Statements
- **Frontend:** HTML5, CSS3
- **Version Control:** Git, GitHub

## 📂 Folder Structure
````
   21-php-movie-crud/
   ├── api/
   │   └── peliculas.php       # REST API endpoints (GET, POST, PUT, DELETE)
   ├── css/
   │   └── style.css           # Styling (dark theme, UI components)
   ├── conexion.php            # Secure database connection (PDO)
   ├── index.php               # Movie list (READ)
   ├── crear.php               # Create form (CREATE)
   ├── editar.php              # Edit form (UPDATE)
   ├── eliminar.php            # Delete logic (DELETE)
   ├── peliculas.sql           # Database export (schema + initial data)
   └── README.md
````


