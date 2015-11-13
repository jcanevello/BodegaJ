<!DOCTYPE html>
<html>

<!-- Mirrored from superhero.phoonio.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2015 06:26:06 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>SuperheroAdmin - Bootstrap Admin Template</title>
	
	<!-- bootstrap -->
	<link href="/media/css/bootstrap/bootstrap.css" rel="stylesheet" />

	<!-- libraries -->
	<!-- <link href="/media/css/libs/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" /> -->
	<link href="/media/css/libs/font-awesome.css" type="text/css" rel="stylesheet" />

	<!-- global styles -->
	<link rel="stylesheet" type="text/css" href="/media/css/compiled/layout.css">
	<link rel="stylesheet" type="text/css" href="/media/css/compiled/elements.css">

	<!-- this page specific styles -->
    <link rel="stylesheet" href="/media/css/libs/fullcalendar.css" type="text/css" />
    <link rel="stylesheet" href="/media/css/libs/fullcalendar.print.css" type="text/css" media="print" />
    <link rel="stylesheet" href="/media/css/compiled/calendar.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/media/css/libs/morris.css" type="text/css" />
	<link rel="stylesheet" href="/media/css/libs/daterangepicker.css" type="text/css" />
	<link rel="stylesheet" href="/media/css/libs/jquery-jvectormap-1.2.2.css" type="text/css" />
	
	<!-- Favicon -->
	<link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>

	<!-- google font libraries -->
	<link href='../fonts.googleapis.com/cssf58a.css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--[if lt IE 8]>
		<link href="/media/css/libs/font-awesome-ie7.css" type="text/css" rel="stylesheet" />
	<![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-49262924-1', 'phoonio.com');
	  ga('send', 'pageview');

	</script>
</head>
<body>
	<?php echo $header ?>
	<div class="container">
		<div class="row">
			<?php echo $navbar ?>
			<div class="col-md-10" id="content-wrapper">
				<div class="row">
					<div class="col-lg-12">
                        <?php echo $content ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo $footer ?>	
</body>

<!-- Mirrored from superhero.phoonio.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2015 06:28:58 GMT -->
</html>

