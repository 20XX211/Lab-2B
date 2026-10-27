Lab 2B - Campus Event Registration

1. Introduction

This project is an upgraded version of my Lab 2 website. I kept the original website design and added PHP and MySQL to make the event registration function work.

2. Project Features

* Show campus event information.
* Allow students to register for an event.
* Save student registration details in the database.
* View all registered students on another page.
* Keep the original website style, colours and images.

3. Tools Used

* HTML
* CSS
* Bootstrap
* PHP
* MySQL
* XAMPP

4. Main Files

* index.php - The main page with event information and the registration form.
* register.php - Handles the registration form and saves the information.
* registrations.php - Shows all registration records.
* database.sql - Contains the SQL code to create the database and table.
* css/custom.css - Contains the website styles.
* images/ - Stores the images used on the website.

5. How to Run the Project

1. Open XAMPP.
2. Start Apache and MySQL.
3. Open phpMyAdmin and import database.sql.
4. Put the project folder inside the htdocs folder.
5. Open this link in a browser:
    http://localhost/lab2b/
6. Fill in the registration form and submit it.
7. To see the registration records, open:
    http://localhost/lab2b/registrations.php

6. Database Information

The database name is campus_events, and the table name is registrations.

The project uses the following local database settings:

* Host: localhost
* Username: root
* Password: blank by default in XAMPP.

7. Conclusion

In this lab, I upgraded my original website by adding PHP and MySQL. Now, students can register for campus events, and the registration details can be saved in the database and viewed on the website. This lab helped me understand how a website can connect to a database.