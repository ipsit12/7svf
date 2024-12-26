
<?php include "../db_connect/connection.php"; ?>
<?php 
$id = $_GET['id'];

// Fetch campaign data
$sql = "SELECT * FROM campaign WHERE id='$id'";
$sql_result = mysqli_query($conn, $sql);

if ($sql_result && mysqli_num_rows($sql_result) > 0) {
    $row = mysqli_fetch_assoc($sql_result);
    
    // Retrieve data from the campaign
    $images = $row['image']; // Assuming 'image' holds multiple images separated by commas
    $name = $row['name'];
    $mobile = $row['mobile'];
    $category = $row['category'];
    $fund_required = $row['fund_required'];
    $spokes = $row['spokes'];
    $description = $row['description'];
    $city = $row['city'];
    $dist = $row['dist'];
    $state = $row['state'];
    $pin = $row['pin'];

    // Insert into `exploercampaign` table
    $insert = "INSERT INTO `exploercampaign`(`campaign_id`, `image`, `name`, `phone`, `category`, `fund_required`, `spokes`, `description`, `city`, `dist`, `state`, `pin`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insert);

    if ($stmt) {
        // Bind parameters (Note: Added `$images` parameter for images)
        mysqli_stmt_bind_param($stmt, "ssssssssssss", $id, $images, $name, $mobile, $category, $fund_required, $spokes, $description, $city, $dist, $state, $pin);

        if (mysqli_stmt_execute($stmt)) {
            echo "Campaign data inserted successfully";
            ?>
            <script>
                window.location.assign('Campaign.php');
            </script>
            <?php
        } else {
            echo "Error executing statement: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
} else {
    echo "Error fetching campaign data: " . mysqli_error($conn);
}

// Update campaign status
$status = $_GET['status'] ?? '';
if ($status) {
    $update = "UPDATE campaign SET status = '$status' WHERE id='$id'";
    mysqli_query($conn, $update);
}

header('Location: Campaign.php');
exit;
?>
