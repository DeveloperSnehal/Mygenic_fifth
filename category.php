<?php include("header.php"); ?>

<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Our Category</h2>
                <ol class="breadcrumb highlightlinks">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li> <a href="product.php">Products</a> </li>
                    <li class="active">Our Category</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section style="background-color:#fff;">
    <div class="row">
        <div class="col-sm-12 text-center" style="padding-top: 40px;">
            <h2>Category</h2>
            <hr>
        </div>
    </div>
    <div class="container">
        <div class="product-list">
            <div class="row">
                <?php
                    require ('connection/connect.php');

                    $category_id=$_GET['category_id'];
                    $sql = "SELECT * FROM `productdetails` WHERE category_id='$category_id'";
                    $result = mysqli_query($con,$sql);
                    $check_crud = mysqli_num_rows($result) > 0;

                    if($check_crud)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                        <div class="product-name"><?php echo $row['Product_Name']; ?></div>
                            <div class="product-img">
                              <?php echo '<img class="card-img-top img-fluid" src="./admin/product_images/'.$row['Product_Image'].'" style="height: 200px; width: 200px;" alt=" ">' ?>
                            </div>
                            <div class="product-bottom">
                                <div class="product-name"><span style="color:#ed6f1e;">Product Chemical:</span> <?php echo $row['Product_Chemical']; ?></div>
                                <a href="sub-categoryview.php?Product_Chemical=<?php echo $row['Product_Chemical']; ?>" class="blue-btn">View Product</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        }
                    else
                    {

                    }
                ?>
            </div>
        </div>
    </div>
</section>


<section id="subscribe"
    class="section_subscribe cs main_color2 parallax section_padding_50 table_section table_section_md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left">
                <h3 class="bottommargin_0">Have any questions?</h3>
                <p class="fontsize_20 grey margin_0">More Information about to the Mygenic</p>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <div class="widget widget_mailchimp">
                    <form class="signup" action="https://html.modernwebtemplates.com/pharma/" method="get">
                        <div class="form-group">
                             <input class="mailchimp_email form-control" name="email" type="email"placeholder="Email Address">
                        </div>
                        <button type="submit" class="theme_button color1">Sign Up!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php") ?>