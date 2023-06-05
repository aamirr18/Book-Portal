<!-- <div id="colorbox">
<div id="cboxContent">
	<a href="<?php echo $back; ?>">&laquo; Back</a>
	<div id="description">
		By: <b><?php echo $user->first_name; ?></b><br />
		Price: Rs. <?php echo $product->price; ?><br />
		Contact: <?php echo $user->phone ?><br />
		<?php if(!empty($product->pur_year)) {	echo "Purchased In: ". $product->pur_year;	} ?>
		<div style="margin-left: 20px; ">
			<img src="<?php echo ASSETS.$product->image_path(); ?>" width="50%"/>	
		</div>
		<div class="message">
			<p><?php echo $product->description; ?> </p>
		</div>
	</div>
</div>
</div> -->

<!-- <link href="<?php echo STYLESHEETS; ?>bootstrap.min.css" rel="stylesheet"> -->
<?php include_layout_template('header.php', ["pageName" => "Product Detail"]); ?>
<div id="colorbox">
<div id="cboxContent">
	<a href="<?php echo $back; ?>">&laquo; Back</a>
	<div id="description" class="row">
		<div style="" class="col-md-6">
			<img src="<?php echo ASSETS.$product->image_path(); ?>" width="50%"/>	
		</div>
		<div class="message col-md-2">
			
			<p>By: <b><?php echo $user->first_name; ?></b> </p>
			<p>Price: Rs. <?php echo $product->price; ?><br /> </p>
			<p>Contact: <?php echo $user->phone ?> </p>
			<p><?php if(!empty($product->pur_year)) {	echo "Purchased In: ". $product->pur_year;	} ?> </p>
			<p><?php echo $product->description; ?> </p>
			<button class="btn btn-primary disabled">Chat</button><span style="margin-left: 10px" class="ml-2 badge bg-danger">Coming Soon</span>
		</div>
	</div>
</div>
</div>
