# 🧪 Postman API Test Collection

This folder contains the Postman collection used to automate the testing of the Movie Catalog REST API.

## 🚀 How to Run the Tests

1. Download the `peliculas-api-tests.json` file.
2. Open Postman and click on **Import** > **File** > Select the `.json` file.
3. Make sure your local XAMPP server is running and the database is set up.
4. Use the **Collection Runner** in Postman to run all the API tests at once.

## 🎯 Tests Included

- **GET:** Validates the `200 OK` status code and JSON array structure.
- **POST:** Validates the `201 Created` status code.
- **PUT:** Validates the `200 OK` status code and the success message.
- **DELETE:** Validates the `204 No Content` status code.

## 🛠️ Technologies Used
- **Postman** (Automated testing, assertions, collection runner)
- **JavaScript** (Postman sandbox scripts)
