<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<title>Page Title</title>
	
	<!-- Main CSS -->
	<link rel="stylesheet" href="/chores/css/styles.css">

	<!-- Payload CSS -->
	<?php echo Payload::get_css(); ?>

	<!-- Modernizr -->
	<script src="/chores/bower_components/modernizr/modernizr.js"></script>

</head>
<body>

	<div class="page">
			<?php echo $primary_header; ?>

		<main>
			<!-- you can enter php tag here with echo $main_content; -->
            <?php echo $main_content; ?>
		</main>
      
        </div>
		
	</div>

	<!-- Include Common Scripts -->
	<script src="/chores/bower_components/jquery/dist/jquery.js"></script>
	<script src="/chores/bower_components/ReptileForms/dist/reptileforms.js"></script>

	<!-- Get JS -->
	<script>var app = {};app.settings=<?php echo Payload::get_settings(); ?>;</script>
	<?php echo Payload::get_js(); ?>
	
	<!-- Main JS -->
	<script src="/chores/js/main.js"></script>

</body>
</html>