<?php include("header.php"); ?>

<section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
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
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="with_border with_padding ">
                    <div itemscope="" itemtype="http://schema.org/Product" class="product type-product row">
                        <div class="col-md-6">
                            <div class="images">
                                <a href="images/shop/01.png" itemprop="image" class="woocommerce-main-image zoom" data-rel="prettyPhoto[product-gallery]">
                                    <img src="images/shop/01.png" class="attachment-shop_single wp-post-image muted_background" alt="" title="">
                                </a>
                             </div>
                        </div>
                        <div class="summary entry-summary col-md-6">
                            <h1 itemprop="name" class="product_title entry-title">Item Title</h1>
                            <div class="product_meta"> <span class="posted_in">
                                <span class="grey">Product Chemical:</span>
                                    <span class="categories-links small-text">
                                        <a rel="category" href="#">Product Cat</a>
                                    </span>
                                </span>
                            </div>
                            <div class="product_meta"> <span class="posted_in">
                                <span class="grey">Product Form:</span>
                                    <span class="categories-links small-text">
                                        <a rel="category" href="#">Product Cat</a>
                                    </span>
                                </span>
                            </div>
                            <div class="product_meta"> <span class="posted_in">
                                <span class="grey">Company Name:</span>
                                    <span class="categories-links small-text">
                                        <a rel="category" href="#">Product Cat</a>
                                    </span>
                                </span>
                            </div>
                            <div class="product_meta"> <span class="posted_in">
                                <span class="grey">Product Storage:</span>
                                    <span class="categories-links small-text">
                                        <a rel="category" href="#">Product Cat</a>
                                    </span>
                                </span>
                            </div>
                            <div class="product_meta"> <span class="posted_in">
                                <span class="grey">Product Packing:</span>
                                    <span class="categories-links small-text">
                                        <a rel="category" href="#">Product Cat</a>
                                    </span>
                                </span>
                            </div>
                            <div class="product_meta"> <span class="posted_in">
                                <span class="grey">Product Category:</span>
                                    <span class="categories-links small-text">
                                        <a rel="category" href="#">Product Cat</a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- .summary.col- -->
                </div>
                <!-- .product.row -->
            </div>
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