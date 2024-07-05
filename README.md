# Creating a Database Using XAMPP

This guide will walk you through the steps to create a database using XAMPP, which includes Apache, MySQL, PHP, and Perl.

## Prerequisites

1. **XAMPP Installed**: Ensure XAMPP is installed on your system. You can download it from [Apache Friends](https://www.apachefriends.org/index.html).
2. **Start XAMPP**: Start the XAMPP Control Panel and ensure Apache and MySQL are running.

## Steps to Create a Database

1. **Access PHPMyAdmin**:

   - Open your web browser and go to `http://localhost/phpmyadmin`.
   - This will open the PHPMyAdmin interface, which is used for managing MySQL databases.

2. **Login**:

   - If prompted, enter your MySQL username and password. By default, the username is `root` and there's no password.

3. **Create a New Database**:

   - Click on the "Databases" tab in the top menu.
   - Enter a name for your new database in the "Create database" field.
   - Click on the "Create" button.

4. **Database Configuration**:
   - You've successfully created a new database. You can now create tables and manage your database using SQL queries or PHPMyAdmin's graphical interface.

## Example Usage

```sql
CREATE DATABASE mydatabase;
```
