# 📦 Online Grocery Store ~Cuisine

A simple PHP-based online grocery store interface featuring categories for fruits, vegetables, snacks, meat, dairy, and grains. Users can browse products, log in or sign up, and manage a cart (currently for fruit and meat items only).

---

## 📝 Project Description

Cuisine is a beginner-friendly web application for online grocery shopping. It allows users to explore various product categories, view item details, and add selected products to their cart. The login system enables user authentication for a personalized experience.

---

## 🗂️ Project Structure

```
project/
├── cart.php
├── catagories.html
├── connect.php
├── cool.html
├── dairyeggs.html
├── details.php
├── fruit.html
├── grain.html
├── home.html
├── login.php
├── loginsys.php
├── meat.html
├── selected_fruit.php
├── selected_meat.php
├── snacks.html
├── veg.html
├── images/
├── screenshots/
│   ├── home.png
│   ├── login.png
│   ├── cart.png
│   └── categories.png
├── login img.png
└── logo.jpg
```

---

## 🚀 Features

- 🔐 User login and registration system
- 🛒 Cart management (for fruit and meat categories)
- 📁 Product category browsing
- 🖼️ Visual UI with product images
- Responsive design

---

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3
- **Backend:** PHP
- **Database:** MySQL (managed via phpMyAdmin)
- **Icons & Fonts:** Font Awesome, Google Fonts

---

## 🖼️ Screenshots

Below are some screenshots from the application (located in the `screenshots/` folder):

### Home Page
![Home Page](https://github.com/vyshnaviGadamsetty/grocery-store-cuisine/blob/0b69ad84bb54e7136fc5c2f318affc542e1625ad/screenshots/home.png)

### Login Page
![Login Page](https://github.com/vyshnaviGadamsetty/grocery-store-cuisine/blob/0b69ad84bb54e7136fc5c2f318affc542e1625ad/screenshots/login.png)

### Fruits Page
![Fruits Page](https://github.com/vyshnaviGadamsetty/grocery-store-cuisine/blob/0b69ad84bb54e7136fc5c2f318affc542e1625ad/screenshots/fruits.png)
### Categories Page
![Categories Page](https://github.com/vyshnaviGadamsetty/grocery-store-cuisine/blob/0b69ad84bb54e7136fc5c2f318affc542e1625ad/screenshots/categories.png)

### Cart Page
![Bill Page](https://github.com/vyshnaviGadamsetty/grocery-store-cuisine/blob/0b69ad84bb54e7136fc5c2f318affc542e1625ad/screenshots/bill.png)

---

## ✅ Getting Started

1. **Clone or Download the Repository.**
2. **Move the Project Folder** to your server directory (e.g., `htdocs` for XAMPP).
3. **Start Apache and MySQL** using the XAMPP control panel.
4. **Open your browser** and go to:  
   `http://localhost/project/home.html`

---

## 🗃️ Database Setup (via phpMyAdmin)

1. Visit `http://localhost/phpmyadmin` in your browser.
2. Click **"New"** to create a new database.
3. Name the database **`grocery_store`** and click **Create**.
4. Select your new database, click **"SQL"**, and paste:

   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(50) NOT NULL UNIQUE,
       password VARCHAR(255) NOT NULL
   );

   CREATE TABLE cart (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       image VARCHAR(255) NOT NULL,
       price INT NOT NULL,
       quantity INT NOT NULL
   );
   ```

5. Click **Go** to execute.

> ⚠️ Ensure your `connect.php` file uses the correct database name (`grocery_store`) and credentials (default for XAMPP is `root` with no password).

---

## 📝 Notes & Disclaimer

- The cart functionality currently works only for the **fruit** and **meat** categories.
- This project is intended for learning and demonstration purposes.
- For production use:
  - Hash passwords securely (`password_hash()`)
  - Use prepared statements to prevent SQL injection
  - Implement session management for user login state

---

## 📄 License

This project is provided for educational -Gadamsetty Sri Vyshnavi
