Database Name: school_system
Tables:
users (Stores admin, teachers, and students)

sql
...............................................................................
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('teacher', 'student') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

subjects (Stores the subjects offered in the school)

sql
...............................................................................
CREATE TABLE subjects (
    subject_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
teacher_subjects (Assigns teachers to specific subjects)

sql
...............................................................................
CREATE TABLE teacher_subjects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    teacher_id INT NOT NULL,
    subject_id INT NOT NULL,
    FOREIGN KEY (teacher_id) REFERENCES users(user_id),
    FOREIGN KEY (subject_id) REFERENCES subjects(subject_id)
);
student_subjects (Assigns students to specific subjects)

sql
...............................................................................
CREATE TABLE student_subjects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    subject_id INT NOT NULL,
    FOREIGN KEY (student_id) REFERENCES users(user_id),
    FOREIGN KEY (subject_id) REFERENCES subjects(subject_id)
);
Sample Data for Testing
To populate the database with some test data:

Insert Admin

sql
...............................................................................
INSERT INTO users (name, email, password, role) 
VALUES ('Admin User', 'admin@example.com', PASSWORD('admin123'), 'admin');
Insert Teachers

sql
...............................................................................
INSERT INTO users (name, email, password, role) 
VALUES 
('Teacher A', 'teacher_a@example.com', PASSWORD('teacher123'), 'teacher'),
('Teacher B', 'teacher_b@example.com', PASSWORD('teacher123'), 'teacher');
Insert Students

sql
...............................................................................
INSERT INTO users (name, email, password, role) 
VALUES 
('Student X', 'student_x@example.com', PASSWORD('student123'), 'student'),
('Student Y', 'student_y@example.com', PASSWORD('student123'), 'student');
Insert Subjects

sql
...............................................................................
INSERT INTO subjects (name) 
VALUES 
('Mathematics'),
('English'),
('Science');
Assign Subjects to Teachers

sql
...............................................................................
INSERT INTO teacher_subjects (teacher_id, subject_id) 
VALUES 
(2, 1), -- Teacher A teaches Mathematics
(3, 2); -- Teacher B teaches English
Assign Subjects to Students

sql
...............................................................................
INSERT INTO student_subjects (student_id, subject_id) 
VALUES 
(4, 1), -- Student X studies Mathematics
(5, 2); -- Student Y studies English
How to Connect to the Database in PHP
Use the following database connection file (includes/db.php):

php
...............................................................................
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school_system";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>