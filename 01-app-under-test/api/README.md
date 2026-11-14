# 🔌 REST API - Endpoints & Testing

This folder contains the REST API for the movie catalog (Application Under Test). 

It is designed to return standard HTTP status codes and JSON payloads, making it the perfect target for **API Automation Testing** (e.g., using Postman or REST Assured).

## 📋 Endpoints Under Test

| Method | Endpoint | Description | Expected HTTP Status |
| :--- | :--- | :--- | :--- |
| `GET` | `/api/peliculas.php` | Retrieve all movies | `200 OK` |
| `GET` | `/api/peliculas.php?id=1` | Retrieve a specific movie | `200 OK` / `404 Not Found` |
| `POST` | `/api/peliculas.php` | Create a new movie | `201 Created` / `400 Bad Request` |
| `PUT` | `/api/peliculas.php?id=1` | Update an existing movie | `200 OK` / `400 Bad Request` |
| `DELETE` | `/api/peliculas.php?id=1` | Delete a movie | `204 No Content` / `404 Not Found` |

## 📦 Example JSON Payload (For POST and PUT)

When testing the `POST` or `PUT` endpoints, the API expects a JSON body with the following structure:

```json
{
    "titulo": "The Matrix",
    "director": "Lana Wachowski",
    "genero": "Sci-Fi",
    "anio": 1999,
    "duracion": 136
}
```

## 🛡️ QA Testing Scenarios to Validate

- **Happy Path (Success):** Sending valid data should return `201` (POST) or `200` (PUT) and persist the data in the database.
- **Validation (Bad Request):** Sending empty fields or an invalid year (e.g., 1800) should return `400 Bad Request`.
- **Not Found:** Requesting, updating, or deleting a non-existent ID (e.g., `id=9999`) should return `404 Not Found`.
