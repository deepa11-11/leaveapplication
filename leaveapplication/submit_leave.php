<?php
// Include database connection
include_once("database.php");

// Get form data
$employee_name = $_POST['Student_name'];
$leave_type = $_POST['leave_type'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$reason = $_POST['reason'];

// Check if connection is successful
if ($conn) {
    // Insert data into database
    $sql = "INSERT INTO leave_requests (Student_name, leave_type, start_date, end_date, reason) 
            VALUES ('$Student_name', '$leave_type', '$start_date', '$end_date', '$reason')";
    if ($conn->query($sql) === TRUE) {
        echo "Leave request submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Failed to connect to the database.";
}

// Close database connection
$conn->close();
?>

