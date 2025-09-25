# 🏠 ExplorePG – Online PG Locator  

A **PHP & MySQL-based web application** for locating and booking Paying Guest (PG) accommodations.  
Built using the **XAMPP stack**, the system manages three roles: **Admin, Owner, and User**.  

---

## 📂 Project Structure  

- **admin/** → Admin dashboard & management pages  
- **owner/** → Owner dashboard for PG management  
- **user/** → User pages for searching & booking PGs  
- **css/** → Stylesheets  
- **js/** → JavaScript files  
- **images/** → Static assets (logos, backgrounds, icons)  
- **config.php / connection.php** → Database configuration  
- **online_hotel.sql** → Database schema and sample data  
- **login.php, ownerreg.php, userreg.php** → Authentication & registration logic  
- **aboutus.html, contactus.php, feedback.html** → Static content pages  

---

## ✅ Features  

### 👩‍💼 Admin  
- Manage users & owners (approve, block, delete)  
- Review & moderate PG listings  
- Handle complaints & feedback  

### 🏘️ Owner  
- Register and log in  
- Add, edit, or remove PG details:  
  - 📍 Location  
  - 💰 Rent  
  - 🛋️ Facilities (Wi-Fi, meals, AC, etc.)  
  - 🏞️ Photos  
- Manage availability  
- View and respond to booking requests  

### 👤 User  
- Register and log in  
- Search PGs by **location, rent, and facilities**  
- View detailed PG information with images and amenities  
- Contact PG owners  
- Book PG rooms online  
- Provide feedback and ratings  

---

## 🛠️ Tech Stack  

- **Backend:** PHP  
- **Frontend:** HTML, CSS, JavaScript  
- **Database:** MySQL  
- **Server:** Apache (XAMPP)  

---

## 🚀 Installation & Setup  
```bash

1️⃣ Clone the Repository  
  -Run the following command in your terminal:  
  -git clone https://github.com/Akashms45/explorePG.git

---

2️⃣ Move Project to XAMPP htdocs  
  -Place the project folder inside your XAMPP `htdocs` directory:
  -C:/xampp/htdocs/explorePG

---

3️⃣ Start Services  
  - Open **XAMPP Control Panel**  
  - Start **Apache** and **MySQL**  

---

4️⃣ Import Database  
  - Open [phpMyAdmin](http://localhost/phpmyadmin)  
  - Create a new database (e.g., `explorepg`)  
  - Import the file **`online_hotel.sql`** from the repo  

---

5️⃣ Configure Database Connection  
  Edit `config.php` or `connection.php` and update credentials:  
  ```php
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "explorepg";

---

6️⃣ Run the Project
  Open your browser and visit:
  http://localhost/explorePG/
