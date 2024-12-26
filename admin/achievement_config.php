<?php 
include "../db_connect/connection.php"; ?>
<?php 
if(isset($_POST['submit-form'])){
    $name = $_POST['name'];
    $descriptions = $_POST['description'];
    $category = $_POST['category'];
    $date = $_POST['date'];
    // $newDate = date("d-m-Y", strtotime($date));
    $venue = $_POST['venue'];
    $imageFiles = $_FILES["image"];
    $fileNames = array();
    $uploadDirectory = "achievement_image/";

    // Ensure the upload directory exists
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Upload images
    foreach ($imageFiles["tmp_name"] as $key => $tmpName) {
        $fileName = basename($imageFiles["name"][$key]);
        $targetPath = $uploadDirectory . $fileName;

        // Move uploaded file to destination
        if (move_uploaded_file($tmpName, $targetPath)) {
            // Store file name for later insertion
            $fileNames[] = $fileName;
        } else {
            echo "Error uploading file: $fileName";
            exit; // Exit script if file upload fails
        }
    }
    if (!empty($fileNames)) {
        $imageList = implode(',', $fileNames);
        $all_descriptions = implode(',', $descriptions);

        $sql_query = "INSERT INTO `achievement`(`name`, `image`, `category`, `description`,`date`,`venue`) VALUES 
        (?,?,?,?,?,?)";

$stmt = mysqli_prepare($conn, $sql_query);
if ($stmt) {
    // Bind parameters and execute statement
    mysqli_stmt_bind_param($stmt, "ssssss", $name,$imageList,$category,$all_descriptions,$date,$venue);
    if (mysqli_stmt_execute($stmt)) {
        echo "Product inserted successfully";
        ?>
        <script>window.location.assign('achievment.php')</script>
        <?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_stmt_close($stmt);
} else {
    echo "Error: " . mysqli_error($conn);
}
    } else {
        echo "<script>alert('Failed to upload the image');</script>";
    }
}
?>