
# Laravel Contact Manager 📇

🔗 **Live Demo**: [https://contact.creativeskillindia.in](https://contact.creativeskillindia.in)
```md


A secure and flexible contact management application built with Laravel. This app supports full CRUD operations for contacts, XML import functionality, and intelligent duplicate detection — perfect for managing data efficiently.

## 🚀 Features

- Contact listing with pagination
- Add, edit, and delete contacts
- Import contacts via XML upload
- Duplicate detection and logging
- Validation for file uploads and MIME types
- Built using Laravel 10+

## 🛠️ Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/hemant115/-Laravel-Contact-Manager.git
   cd Laravel-Contact-Manager
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Create `.env` file:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database in `.env`, then run migrations:

   ```bash
   php artisan migrate
   ```

5. Start the development server:

   ```bash
   php artisan serve
   ```

## 📂 XML Import

You can import contacts by uploading an XML file formatted like this:

```xml
<contacts>
  <contact>
    <name>John Doe</name>
    <email>john@example.com</email>
    <phone>1234567890</phone>
  </contact>
</contacts>
```

## 🧠 Duplicate Detection

After import, duplicates (based on name/email/phone) are logged and can be viewed via `/contacts/duplicates`.

## 🧪 Testing

Run the test suite:

```bash
php artisan test
```

## 📌 Routes Overview

| Method | URI                     | Action          |
|--------|-------------------------|------------------|
| GET    | /contacts               | List contacts    |
| POST   | /contacts/import        | Import XML       |
| GET    | /contacts/duplicates    | View duplicates  |
| POST   | /contacts               | Store contact    |
| PUT    | /contacts/{id}          | Update contact   |
| DELETE | /contacts/{id}          | Delete contact   |
