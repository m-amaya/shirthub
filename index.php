<?php
$pageTitle = "Home";
include('inc/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>New Spring Arrivals!</h2>

				<?php include('inc/products.php') ?>
				
				<ul class="products">
					<?php 
					$total_products = count($products);
					$positon = 0;
					$list_view_html = "";
					foreach($products as $product_id => $product) {
						$position = $position + 1;
						// Display only latest 4 shirts
						if ($total_products - $position < 4) {
							$list_view_html = get_list_view_html($product_id, $product) . $list_view_html;
						}
					}
					echo $list_view_html; ?>							
				</ul>

			</div>

		</div>

<?php include('inc/footer.php'); ?>	