<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url()?>/home">Home</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo site_url()?>/about">About</a></li>
					<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Find</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administrator <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Logout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
<div class="jumbotron">
	<div class="container">
	<form action="$_POST" method="POST" role="form">
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">Nama</label>
			<input type="text" class="form-control" id="" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Kelas</label>
			<input type="text" class="form-control" id="" placeholder="">
		</div>
	<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" id="" placeholder="">
		</div>
		
	
		<button type="submit" class="btn btn-primary">Save</button>
	</form>
	</div>
</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" </script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>