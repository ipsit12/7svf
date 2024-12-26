<?php
// Database connection
include '../db_connect/connection.php'; // Adjust the path to your database connection file

if (isset($_GET['id'])) {
    $serial = mysqli_real_escape_string($conn, $_GET['id']);
    
    // Delete query
    $delete_query = "DELETE FROM ongoingprojects WHERE serial = '$serial'";

    if (mysqli_query($conn, $delete_query)) {
        // Redirect to the page with the table after successful deletion
        echo "<script>
                alert('Project deleted successfully!');
                window.location.href = 'view_projects.php'; // Replace with your page
              </script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Redirect if no ID is provided
    header("Location: your_table_page.php"); // Replace with your page
    exit();
}
?>
