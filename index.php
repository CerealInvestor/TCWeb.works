<?php include 'config/config.php'; ?>
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

		<?php include("home.php"); ?>
		<?php include("footer.php"); ?>

		<script src="js/main.js"></script>
		<?php include("includes/ganalytics.html"); ?>
	</body>
</html>