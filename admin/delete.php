<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "SMSDB";

$data = mysqli_connect($host, $user, $password, $db);

if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['registration_number'])) {
    $registration_number = mysqli_real_escape_string($data, $_GET['registration_number']);

    // First delete from 'course' table
    $deleteCourses = "DELETE FROM course WHERE registration_number = '$registration_number'";
    mysqli_query($data, $deleteCourses);

    // Then delete from 'students' table
    $deleteStudent = "DELETE FROM students WHERE registration_number = '$registration_number'";
    $result = mysqli_query($data, $deleteStudent);

    if ($result) {
        header("Location: view_student.php");
        exit();
    } else {
        echo "Error deleting student: " . mysqli_error($data);
    }
} else {
    echo "No student selected to delete.";
}
?>
