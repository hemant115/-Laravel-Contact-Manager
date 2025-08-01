Professional version **Laravel Contact Manager**

---

# Laravel Contact Manager 📇

🔗 **Live Demo**: [https://contact.creativeskillindia.in](https://contact.creativeskillindia.in)

A secure and flexible contact management application built with **Laravel 10+**. This app supports full CRUD operations, XML import functionality, and intelligent duplicate detection — ideal for efficient contact data management.

---

## 🚀 Features

- Paginated contact listing  
- Add, edit, and delete contacts  
- Import contacts via XML upload  
- Intelligent duplicate detection and logging  
- Validation for file uploads and MIME types  
- Built with Laravel 10+

---

## 🛠️ Installation

Follow these steps to set up the project locally:

1. **Clone the repository**  
   ```bash
   git clone https://github.com/hemant115/-Laravel-Contact-Manager.git
   cd Laravel-Contact-Manager
   ```

2. **Install dependencies**  
   ```bash
   composer install
   ```

3. **Create and configure `.env` file**  
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set up your database**  
   Edit the `.env` file with your database credentials, then run:
   ```bash
   php artisan migrate
   ```

5. **Start the development server**  
   ```bash
   php artisan serve
   ```

---

## 📂 XML Import

You can import contacts by uploading an XML file formatted like this:

```xml
<contacts>
  <contact>
    <name>John Doe</name>
    <phone>1234567890</phone>
  </contact>
</contacts>
```

---

## 🧠 Duplicate Detection

After importing, any duplicates (based on name, email, or phone) are automatically logged. You can view them at:

```
/contacts/duplicates
```

---

## 🧪 Testing

Run the test suite using:

```bash
php artisan test
```

---

## 📌 Routes Overview

| Method | URI                   | Action          |
|--------|-----------------------|-----------------|
| GET    | /contacts             | List contacts   |
| POST   | /contacts             | Store contact   |
| PUT    | /contacts/{id}        | Update contact  |
| DELETE | /contacts/{id}        | Delete contact  |
| POST   | /contacts/import      | Import XML      |
| GET    | /contacts/duplicates  | View duplicates |

---

Done
