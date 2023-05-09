<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="stylesheet" href="css/all.css">

<?php if($basename=='index.php'){ ?>
	<link rel="stylesheet" href="css/home.css">
<?php } else {?>
	<link rel="stylesheet" href="css/all.css">
<?php }?>
</head>
<body>
	<!-- <a class="accessibility" href="#header">Back to top</a>
		<a class="accessibility" href="#main">Skip to Content</a> -->
		<div id="wrapper">
			<header id="header" class="header sticky-top">
				<div class="topbar py-2 sticky-hide">
					<div class="container d-flex justify-content-end">
						<a href="tel:14444444444" class="text-dark mx-2">1-000-000-0000</a>
						<a href="mailto:info@logo.com" class="text-dark mx-2">info@logo.com</a>
					</div>
				</div>
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<div class="container-fluid">
							<a class="navbar-brand" href="#">Navbar</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0 touchnav" id="nav">
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="#">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#myTab">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#data1">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Dropdown</a>
										<ul>
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
										</ul>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
									</li>
								</ul>
								<form action="#" class="search-form" method="post">
									<a href="javascript:void(0)"  class="search-opner"><i class="fa fa-search"></i></a>
									<div class="field">
										<input placeholder="search" accesskey="4" class="input" type="search">
										<button type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>
							</div>
						</div>
					</nav>
				</div>
			</header>