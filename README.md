# User-Entry-Web-System

This project provides a minimal web-based system for capturing user data—specifically, **Name** and **Age**—and storing it in a structured **MySQL database** via PHP.

##  Objective

To implement a foundational web application where users can enter their personal information through a styled HTML form. The submitted data is securely stored in a MySQL table named `users`.

## File Structure

- `index.php`  
  HTML page with a styled input form allowing users to submit their name and age. Data is sent via POST method.

- `y.php`  
  PHP script that connects to the MySQL database (`users`) and inserts submitted `Name` and `Age` values securely using prepared statements. Upon success, a confirmation message is displayed with a return link to the homepage.

## Database Structure

- **Database Name**: `users`
- **Table Name**: `users`

### Table Columns:

| Column | Type         | Attributes         |
|--------|--------------|--------------------|
| ID     | INT          | AUTO_INCREMENT, PRIMARY KEY |
| Name   | VARCHAR(100) | NOT NULL           |
| Age    | INT          | NOT NULL           |

Example records from the table include:

- ID: 1, Name: Alyaa, Age: 22  
- ID: 2, Name: Majd, Age: 22

## How It Works

1. The user opens `http://localhost/form.html` while XAMPP is running.
2. The form collects name and age, then submits the data to `y.php`.
3. The PHP script processes and inserts the data into the `users` table.
4. A success message appears, with a button to return to the form.

## Features

- Clean, responsive UI design
- Secure database interaction using prepared statements
- Confirmation feedback after successful submission
- Local deployment through XAMPP (Apache & MySQL)

## Created by Alyaa ⭐

