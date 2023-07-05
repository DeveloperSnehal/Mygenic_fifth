<?php include("header.php"); ?>

<section class="page_breadcrumbs_Product-Details ds color parallax section_padding_top_75 section_padding_bottom_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Product Details</h2>
                <ol class="breadcrumb highlightlinks">
                    <li> <a href="index.php"> Home </a> </li>
                    <li> <a href="product.php">Product</a> </li>
                    <li> <a href="sub-categoryview.php">Sub-Category</a> </li>
                    <li class="active">Product Details</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
    <div class="container">
        <div class="row">
          <?php
               require ('connection/connect.php');

               $Product_Name=$_GET['Product_Name'];
               $sql = "SELECT * FROM `productdetails`WHERE Product_Name='$Product_Name'";
               $result = mysqli_query($con,$sql);
               $check_crud = mysqli_num_rows($result) > 0;

               if($check_crud)
               {
                  while($row = mysqli_fetch_array($result))
                  {
                    ?>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="with_border with_padding" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset ;border:none;">
                        <div itemscope="" itemtype="http://schema.org/Product" class="product type-product row">
                            <div class="col-md-6" style="border: 2px solid #046e7a;">
                                <div class="images">
                                    <a href="images/shop/01.png" itemprop="image" class="woocommerce-main-image zoom" data-rel="prettyPhoto[product-gallery]">
                                        <?php echo '<img class="attachment-shop_single wp-post-image muted_background" src="./admin/product_images/'.$row['Product_Image'].'" width="350px"; height="500px"; alt=" ">' ?>
                                    </a>
                                </div>
                            </div>
                            <div class="summary entry-summary col-md-6" style="background-color: honeydew; padding-bottom: 29px;">
                                <h1 itemprop="name" class="product_title entry-title"><?php echo $row['Product_Name']; ?></h1>
                                <div class="product_meta"> <span class="posted_in">
                                    <span class="grey">Product Chemical:</span>
                                        <span class="categories-links detail-text">
                                            <span><?php echo $row['Product_Chemical']; ?></span>
                                        </span>
                                    </span>
                                </div>
                                <div class="product_meta"> <span class="posted_in">
                                    <span class="grey">Product Form:</span>
                                        <span class="categories-links detail-text">
                                           <span><?php echo $row['Product_Form']; ?></span>
                                        </span>
                                    </span>
                                </div>
                                <div class="product_meta"> <span class="posted_in">
                                    <span class="grey">Company Name:</span>
                                        <span class="categories-links detail-text">
                                           <span><?php echo $row['Company_Name']; ?></span>
                                        </span>
                                    </span>
                                </div>
                                <div class="product_meta"> <span class="posted_in">
                                    <span class="grey">Product Storage:</span>
                                        <span class="categories-links detail-text">
                                          <span><?php echo $row['Product_Storage']; ?></span>
                                        </span>
                                    </span>
                                </div>
                                <div class="product_meta"> <span class="posted_in">
                                    <span class="grey">Product Packing:</span>
                                        <span class="categories-links detail-text">
                                           <span><?php echo $row['Product_Packing']; ?></span>
                                        </span>
                                    </span>
                                </div>
                                <div class="product_meta"> <span class="posted_in">
                                    <span class="grey">Product Category:</span>
                                        <span class="categories-links detail-text">
                                           <span><?php echo $row['category_name']; ?></span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- .summary.col- -->
                    </div>
                    <!-- .product.row -->
                </div>
                <?php
                  }
                }
              else
              {

              }
            ?>
        </div>
        <!--eof .col-sm-8 (main content)-->
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