# Inventory System API v1

Base URL: `http://localhost:8000/api/v1`

## Auth

### POST /register

Body:

```json
{
  "name": "rani",
  "email": "indah@gmail.com",
  "password": "password",
  "password_confirmation": "password"
}
```

Response (201 Created):

```json
{
  "success": true,
  "data": {
    "user": {
      "id": 1,
      "name": "rani",
      "email": "indah@gmail.com"
    },
    "token": "token"
  },
  "message": "User registered"
}
```

### POST /login

Body:

```json
{
  "email": "indah@gmail.com",
  "password": "password"
}
```

Response (200 OK):

```json
{
  "success": true,
  "data": {
    "user": {
      "id": 1,
      "name": "rani",
      "email": "indah@gmail.com"
    },
    "token": "token"
  },
  "message": "User logged in"
}
```

## Categories

### GET /categories

Menampilkan seluruh data kategori.

### POST /categories

Body:

```json
{
  "name": "Elektronik"
}
```

### GET /categories/{id}

Menampilkan satu data kategori berdasarkan ID.

### PUT /categories/{id}

Body:

```json
{
  "name": "Elektronik Update"
}
```

### DELETE /categories/{id}

Menghapus kategori (Admin Only).

## Items

### GET /items

Menampilkan seluruh data item.

### POST /items

Body:

```json
{
  "name": "Laptop",
  "quantity": 10,
  "price": 5000000,
  "category_id": 1
}
```

### GET /items/{id}

Menampilkan satu data item berdasarkan ID.

### PUT /items/{id}

Body:

```json
{
  "name": "Laptop Update",
  "quantity": 15,
  "price": 6000000,
  "category_id": 1
}
```

### DELETE /items/{id}

Menghapus item (Admin Only).