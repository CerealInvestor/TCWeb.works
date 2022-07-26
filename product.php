<?php 
	include 'config/config.php'; 

	if( isset($_GET['product']) ) {
		$product = $_GET['product'];
	}
?>
<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<meta name="author" content="<?php echo META_AUTHOR; ?>">
		<meta name="description" content="<?php echo META_DESC; ?>">
		<meta name="viewport" content="<?php echo META_VIEWPORT; ?>">

		<link rel="stylesheet" href="css/styles.css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />

		<title>TCWebworks | Home</title>
	</head>
	<body>

		<?php include('navigation.php'); ?>
		<?php include('header.php'); ?>				

		<?php
			switch ($product) {
				case 'bespoke':					
					include('products/bespoke.php');
					break;
				case 'hosting':					
					include('products/hosting.php');
					break;
				case 'ecommerce':					
					include('products/ecommerce.php');
					break;
				case 'seo':
					include('products/seo.php');
					break;
				case 'contentmanagement':
					include('products/contentmanagement.php');
					break;
				case 'smallbusiness':
					include('products/smallbusiness.php');
					break;
				case 'techsupport':
					include('products/techsupport.php');
					break;

				default:
					include('products/whatwedo.php');
					break;
			}
		?>
		<?php include('includes/contactform.php'); ?>
		<?php include("footer.php"); ?>
		<?php include("includes/ganalytics.html"); ?>
	</body>
</html>