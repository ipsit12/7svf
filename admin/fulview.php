<?php
include('../db_connect/connection.php'); // Include your database connection
$id = $_GET['id'];
$sql = "SELECT `id`, `name`, `adhar`, `image`, `mobile`, `email_id`, `category`, `fund_required`, `spokes`, `description`, `city`, `dist`, `state`, `pin`, `status`, `date` FROM `campaign` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$date= $row['date'];
$newDate = date("d-m-Y", strtotime($date));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Full View</title>
    <link rel="stylesheet" href="path/to/your/css/bootstrap.min.css"> <!-- Bootstrap CSS -->
    <style>
        /* Custom Styles */
        body {
            background: url('https://png.pngtree.com/thumb_back/fh260/background/20210730/pngtree-green-background-banners-modern-banner-image_755329.jpg') no-repeat center center fixed; /* Background image */
            background-size: cover; /* Cover the entire background */
            font-family: Arial, sans-serif;
            color: #fff; /* Set text color to white for better contrast */
        }

        .campaign-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.5); /* Slightly darker shadow for better contrast */
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent white background for content */
            transition: transform 0.3s;
        }

        .campaign-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .campaign-title {
            font-size: 1.6rem; /* Smaller font size */
            text-transform: uppercase; /* Capitalizes all letters */
            text-align: center; /* Centers the text */
            color: #333; /* Default color for title */
            transition: color 0.3s ease; /* Smooth transition for hover effect */
        }

        .campaign-title:hover {
            color: #007bff; /* Changes color on hover */
        }

        .image-scroll {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding-bottom: 10px;
        }

        .image-scroll img {
            max-height: 150px;
            border-radius: 8px;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .image-scroll img:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .campaign-details {
            margin-top: 20px;
            padding: 0 10px;
        }

        .campaign-info p, .campaign-description p {
            color: #555; /* Set text color to dark for readability */
            font-size: 1rem;
            line-height: 1.6;
        }

        .button-group {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        strong
        {
            text-transform:uppercase;
        }
        .button-group a {
            flex: 1; /* Make buttons take equal width */
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            color: white; /* Text color */
            text-decoration: none; /* Remove underline */
        }

        /* Custom Button Colors */
        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            position: relative;
            width: 50%;  /* Set modal width to half of the viewport */
            max-width: 600px;
            max-height: 88%; /* Reduced height to make modal more compact */
            padding: 10px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .modal-content img {
            width: 100%; /* Ensures image fills modal width */
            max-height: 550px; /* Limits the image height */
            object-fit: contain;
            border-radius: 8px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: #333;
            cursor: pointer;
        }

        /* Responsive Layout */
        .campaign-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .campaign-info div {
            flex: 1 1 48%; /* Adjusts size for better spacing */
            margin: 5px 0;
        }

    </style>
</head>
<body>

<div class="campaign-container">
    <?php if($row): ?>
        <h2 class="campaign-title"><?php echo $row['name']; ?></h2>
        
        <!-- Image Scrollable Section -->
        <div class="image-scroll">
            <?php 
            $images = explode(',', $row['image']); // Split images by commas
            foreach ($images as $image): ?>
                <img src="../campaign_image/<?php echo trim($image); ?>" alt="<?php echo $row['name']; ?>" onclick="openModal(this.src)">
            <?php endforeach; ?>
        </div>

        <!-- Campaign Details -->
        <div class="campaign-details">
            <div class="campaign-info">
                <div>
                    <p><strong>Category:-</strong> <?php echo $row['category']; ?></p>
                    <p><strong>Location:-</strong> <?php echo $row['city']; ?>, <?php echo $row['dist']; ?>, <?php echo $row['state']; ?> - <?php echo $row['pin']; ?></p>
                    <p><strong>Date:-</strong> <?php echo $newDate; ?></p>
                </div>
                <div>
                    <p><strong>Fund Required:-</strong> ₹ <?php echo $row['fund_required']; ?></p>
                    <p><strong>Contact:-</strong> <?php echo $row['email_id']; ?> | <?php echo $row['mobile']; ?></p>
                    <!--<p><strong>Adhar Number:-</strong> <?php echo  $row['adhar']; ?></p>-->
                    <p><strong>Time:-</strong> <?php echo $row['time']; ?></p>
                    
                </div>
            </div>
            <div class="campaign-description">
                <p><strong>Description:</strong></p>
                <p><?php echo $row['description']; ?></p>
            </div>

            <!-- Action Buttons -->
            <div class="button-group">
                <a href="editcampaign.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                <a href="delcampaign.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                <?php 
                if ($row['status'] == 0) {
                    echo '<a href="addexplorecampaign.php?id='.$row['id'].'&status=1" class="btn btn-warning">Grant</a>';
                } else {
                    echo '<a href="delactive.php?id='.$row['id'].'&status=1" style="display:none">Deny</a>';
                }
                ?>
            </div>
        </div>
    <?php else: ?>
        <p>Campaign not found.</p>
    <?php endif; ?>
</div>

<!-- Modal for Image Enlarged View -->
<div class="modal" id="imageModal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <img src="" id="modalImage" alt="Enlarged Image">
    </div>
</div>

<script src="path/to/your/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->

<script>
    // Open modal with selected image
    function openModal(src) {
        document.getElementById("modalImage").src = src;
        document.getElementById("imageModal").style.display = "flex";
    }

    // Close modal
    function closeModal() {
        document.getElementById("imageModal").style.display = "none";
    }
</script>

</body>
</html>
