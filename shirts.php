<?php
include('inc/products.php');
$pageTitle = "Full Catalog";
$section = "shirts";
include('inc/header.php'); ?>

    <div class="section shirts page">
        
        <div class="wrapper">
            
            <h1><?php echo $pageTitle; ?></h1>
            
            <!-- PHP used to generate list in order to fix whitespace problem -->
            <ul class="products">
                <?php foreach($products as $product_id => $product) {
                    echo get_list_view_html($product_id, $product);
                }?>
            </ul>
            
        </div>
        
    </div>

<?php include('inc/footer.php'); ?>