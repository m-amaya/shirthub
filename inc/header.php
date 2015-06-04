<html>
<head>
	<title><?php echo "ShirtHub | " . $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">


			<h1 class="branding-title"><a href="./">ShirtHub Logo</a></h1>

			<ul class="nav">
				<li class="shirts <?php if ($section=="shirts") { echo "on"; } ?>"><a href="shirts.php">Shirts</a></li>
				<li class="contact <?php if ($section=="contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a href="#">Shopping Cart</a></li>
			</ul>

		</div>

	</div>

	<div id="content">