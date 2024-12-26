<?php include("include/header.php"); ?>
<?php include "db_connect/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        div.gallery {
            border: 1px solid #ccc;
            margin-bottom: 15px;
            cursor: pointer;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: 400px;
            display: block;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 100%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 100%;
                margin: 6px 0;
            }
        }

        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $select = "SELECT * FROM achievement WHERE id='$id'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $value = $row['image'];
            $myarr = explode(',', $value); // Array of images
            $descriptions = explode('|', $row['description']);
            $firstDescription = $descriptions[0];
            $descriptionWords = explode(' ', $firstDescription);
            $limitedDescription = implode(' ', array_slice($descriptionWords, 0, 50)) . (count($descriptionWords) > 50 ? '...' : '');
    ?>
            <div class="clearfix d-flex justify-content-center">
                <div class="col-lg-8 mt-5">
                     <h2><?php echo $row['name'] ?></h2>
                    <div class="d-flex justify-content-between align-items-center"> 
                    <p style="width:fit-content;"><?php 
                                        $newDate = date("d-m-Y", strtotime($row['date']));
                                        echo $newDate ;  ?></p>
                                        <h6><?php echo $row['venue'] ?></h6></div>
                   
                    <div id="carouselExampleControls" class="carousel slide mx-auto" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($myarr as $index => $image): ?>
                                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                    <div class="responsive">
                                        <div class="gallery" data-toggle="modal" data-target="#imageModal" data-slide-to="<?php echo $index; ?>">
                                            <img src="admin/achievement_image/<?php echo $image; ?>" alt="" width="100%">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <h5><?php echo $row['description']?></h5>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Achievement Gallery</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img id="modalImage" class="d-block w-100" src="" alt="">
                        </div>
                    </div>
                </div>
            </div>

           

    <?php
        }
    }
    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $('#imageModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var slideTo = button.data('slide-to');
            var imgSrc = button.find('img').attr('src');
            $('#modalImage').attr('src', imgSrc);
        });
    </script>

    <?php include("include/footer.php"); ?>

</body>

</html>
<script>
    function filterCategory(category, element) {
        // Remove 'active' class from all categories
        var categories = document.querySelectorAll('#categoryStyleBar li');
        categories.forEach(function(cat) {
            cat.classList.remove('active');
        });

        // Add 'active' class to the clicked category
        element.classList.add('active');

        // Show/Hide service blocks based on the selected category
        var serviceBlocks = document.querySelectorAll('#serviceBlocks .service-block');
        serviceBlocks.forEach(function(block) {
            if (category === 'all') {
                block.style.display = 'block'; // Show all
            } else {
                if (block.getAttribute('data-category') === category) {
                    block.style.display = 'block'; // Show matching category
                } else {
                    block.style.display = 'none'; // Hide non-matching category
                }
            }
        });
    }
</script>