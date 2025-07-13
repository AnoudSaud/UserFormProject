# User Form Project

This is a simple PHP + MySQL web application that allows users to submit their **name** and **age**, and toggle a **status** value (0 or 1).

---

## 📌 Features

- Submit a form with name and age
- Save data into a MySQL database
- Display all users in a table
- Toggle each user's status between 0 and 1
- Reflect changes immediately on the page

---

## 🧰 Technologies Used

- HTML
- CSS (basic inline)
- PHP
- MySQL

---

## ⚙️ How to Run the Project

1. Download or clone the repository
2. Place the files inside your local server directory (`htdocs` if you're using XAMPP)
3. Create a MySQL database named `user_form_db`
4. Run the following SQL to create the table:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    status TINYINT(1) DEFAULT 0
);
```

5. Start Apache and MySQL from XAMPP
6. Open your browser and go to: `http://localhost/UserFormProject/index.php`

---

## 📸 Example

![screenshot](https://i.imgur.com/X4WnZ6p.png)

---

## 📂 Files Included

- `index.php` – Form and table view
- `add_user.php` – Handle form submissions
- `toggle_status.php` – Toggle user status
- `db.php` – Database connection

---

## 📬 Contact

For any questions, reach out to [your GitHub username].