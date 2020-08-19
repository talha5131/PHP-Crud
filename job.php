<?php
include("connection.php");
?>

<head>

    <!-- Basic Page Needs
		================================================== -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
		================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
		================================================== -->
    <link rel="icon" href="public/assets/img/favicon/favicon-32x32.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/assets/img/favicon/favicon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/assets/img/favicon/favicon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="public/assets/img/favicon/favicon-54x54.png">

    <!-- CSS
		================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="public/assets/css/responsive.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="public/assets/css/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="public/assets/css/prettyPhoto.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="public/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="public/assets/css/owl.theme.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="public/assets/css/flexslider.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="public/assets/css/cd-hero.css">
    <!-- Style Swicther -->
    <link id="style-switch" href="public/assets/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->

    <style>
        .col-md-12 ul h4 {
            text-transform: none;
            color: black;
        }

        .ts-testimonial-content .temping-logo {
            float: left;
            margin: 0 30%;
            width: 35%;
            height: 11%;
            border-radius: 0%;
        }

        .classic {
            /* margin-top: 6px;
            margin-left: 15px; */
            font-size: 20px;
            text-align: center;
            margin-top: 25%;
            color: black;
        }

        /* .temping-logo{
            margin: 0 38%;
            width: 150px;
        } */
        .vertical-hr {
            border-left: 6px solid #51284f;
            height: 480px;
        }

        .vertical-hr1 {
            position: relative;
            left: 100px;
            border-left: 2px solid #51284f;
            height: 95px;
        }

        .fas,
        .far {
            color: #51284f;
            font-size: 20px;
            /* border-right:1px solid #51284f; */
            margin-right: 15px;
        }
    </style>
</head>

<!-- Main container start -->

<section id="main-container">
    <div class="container">

        <!-- Services -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <?php
                $readQuery = "SELECT * FROM client";
                // $readQuery = "SELECT * FROM client WHERE ID='2'";

                $readData =  mysqli_query($conn, $readQuery);
                while ($result = mysqli_fetch_assoc($readData)) {
                    echo '                <div class="ts-testimonial-content" style="margin: 0 25%;padding-bottom: 50px;">
                    <img src="public/assets/images/temping-logo.png" alt="testimonial" class="temping-logo">
                    <div class="row">
                        <div class="col-md-12 heading">
                            <h3 class="classic">You Applied For The Job.</h3>
                        </div>
                    </div>
                    <div class="row vertical-hr">
                        <div class="col-md-12 col-sm-12">
                            <img src="public/assets/images/clients/testimonial1.jpg" alt="testimonial" style="position: relative;top:10px;color: black;">
                            <div class="vertical-hr1">
                                <h3 style="padding-top: 3%;position: relative;left: -50px;top:20px;color: black;">' . $result['name'] . '</h3>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12 col-sm-12">
                            <ul style="list-style-type:none">
                                <h4>
                                    <li><i class="far fa-envelope"></i>' . $result['email'] . '</li>
                                </h4>
                                <h4>
                                    <li><i class="fas fa-phone-alt"></i>' . $result['phone_number'] . '</li>
                                </h4>
                                <h4>
                                    <li><i class="fas fa-key"></i> 0123456789</li>
                                </h4>
                                <h4>
                                    <li><i class="fas fa-file-alt"></i> ABCDEFG</li>
                                </h4>

                                <h4>
                                    <li><i class="fas fa-map-marker-alt"></i> London</li>
                                </h4>
                                <h4>
                                    <li><i class="far fa-clock"></i> Full Time / Half Time</li>
                                </h4>
                                <h4>
                                    <li><i class="fas fa-pound-sign"></i> 20</li>
                                </h4>
                                <h4>
                                    <li><i class="far fa-building"></i> XYZ</li>
                                </h4>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="ts-testimonial-author">
                        <h3 class="name">Tahlia Bidmead<span>Chief Operation Officer</span></h3>
                    </div> -->
                </div>';
                    // $i++;
                }
                ?>
                <!-- Testimonial content end -->
                <br><br>
                <h5 style="margin: 0 35%;">Thanks For Applying For This Job.</h5>
            </div><!-- End col-md-6 -->
        </div><!-- Content row  end -->

    </div>
    <!--/ container end -->

</section>
<!--/ Main container end -->

</div><!-- Body inner end -->
<?php

// $totalRowsSelected =  mysqli_num_rows($readData);
// echo "Total Rows Selected Are " . $totalRowsSelected . "<br>";

// $result = mysqli_fetch_assoc($readData);
// $resultlength = count($result);  
// echo "Result Length Is " . $resultlength . "<br>";
// echo $result['name'] . " " . $result['email'] . " " . $result['phone_number']. "<br>";
?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
    </tr>

    <?php
    if ($readData) {
        // $i = 1;
        // echo "Data Read";
        while ($result = mysqli_fetch_assoc($readData)) {
            echo "<tr>
        <td>" . $result['name'] . "</td>
        <td>" . $result['email'] . "</td>
        <td>" . $result['phone_number'] . "</td>
        </tr>";
            // $i++;
        }
    } else {
        // echo "Data Not Read";
    }
    // echo $result['name'] . " " . $result['email'] . " " . $result['phone_number'];
    ?>
    <!-- <script>
console.log("YES");
</script> -->
</table>