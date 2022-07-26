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

		<title>TCWebworks | My Work</title>
	</head>
	<body>

		<?php include('navigation.php'); ?>
		<?php include('header.php'); ?>				

		<?php include('includes/mywork.php'); ?>
		<?php include('includes/contactform.php'); ?>
		<?php include("footer.php"); ?>
		<?php include("includes/ganalytics.html"); ?>
	</body>
</html>