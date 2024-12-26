<?php
if (isset($_POST['submit-form'])) {
    // Database connection
    include '../db_connect/connection.php'; // Replace with your database connection file

    $project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
    $year_range = mysqli_real_escape_string($conn, $_POST['year_range']);

    // Handle a single image
    if (isset($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_name = time() . '-' . basename($_FILES['image']['name']);
        $upload_dir = 'ongoingproject/'; // Directory to save images

        if (move_uploaded_file($image_tmp_name, $upload_dir . $image_name)) {
            // Insert data into the ongoingprojects table
            $insert_query = "INSERT INTO ongoingprojects (image_name, project_name, year_range) 
                             VALUES ('$image_name', '$project_name', '$year_range')";

            if (mysqli_query($conn, $insert_query)) {
                echo "<script>
                        alert('Project details inserted successfully!');
                        window.location.href = 'addongoingdetails.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Error: " . mysqli_error($conn) . "');
                        window.location.href = 'addongoingdetails.php';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Failed to upload image.');
                    window.location.href = 'addongoingdetails.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('No image uploaded or there was an error uploading.');
                window.location.href = 'addongoingdetails.php';
              </script>";
    }
}

?>
