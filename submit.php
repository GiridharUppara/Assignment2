<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $semester = $_POST['semester'];
    $subjects = $_POST['subjects'];
    $password = $_POST['password'];

    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>USN:</strong> $usn</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Semester:</strong> $semester</p>";
    echo "<p><strong>Subjects:</strong> $subjects</p>";
    echo "<p><strong>Password:</strong> (hidden for security purposes)</p>";
} else {
    echo "<h2>Form not submitted properly!</h2>";
}
?>
