# Student Management System

This is a simple CRUD (Create, Read, Update, Delete) application for managing student records. It's built using PHP and MySQL.

## Features

- View all students in a table format
- Add new students
- Update existing student information
- Delete student records

## Technologies Used

- PHP
- MySQL
- HTML
- CSS (Bootstrap for styling)
- JavaScript (Bootstrap's JavaScript for modal functionality)

## File Structure

- `index.php`: Main page displaying all students and containing the "Add Student" modal
- `header.php`: Contains the header HTML
- `footer.php`: Contains the footer HTML
- `dbcon.php`: Database connection file
- `insert_data.php`: Handles the insertion of new student records
- `update_data.php`: Handles the updating of existing student records
- `delete_data.php`: Handles the deletion of student records

## Setup

1. Ensure you have PHP and MySQL installed on your server.
2. Create the database structure.
3. Update the `dbcon.php` file with your database credentials.
4. Place all files in your server's web directory.
5. Access the application through your web browser.

## Usage

- To view all students, simply load the index page.
- To add a new student, click the "ADD STUDENTS" button and fill out the modal form.
- To update a student's information, click the "Update" button next to their record.
- To delete a student's record, click the "Delete" button next to their record.
