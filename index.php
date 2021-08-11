<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">The Four Seasons Resorts</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/car1.jpg" alt="car1" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/car2.jpg" alt="car2" width="1100" height="500">
      <div class="carousel-caption"> 
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/car3.jpg" alt="car3" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
	<div class="carousel-item">
      <img src="images/car4.jpg" alt="car4" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="m-5">
	<div >
		<h2 class="text-center"> About Us</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 col-12">
			<img src="images/a.jpg" class="img-fluid aboutimg" >
		</div>
		<div class="col-lg-6 col-12">
			<p> A landmark in itself, The Four Seasons Resorts has been acknowledged as preferred residence
			od visiting heads of state and global icons for over 20 years and epitomizes the luxury resort experience.
			The Four Seasons Resorts is recognised the world over for delivering exceptional hospitality, an amalgam of world-class refinement inspired by the heritage and nobility of Indian 
			traditions.This luxury resort welcomes guests to 412 rooms and 25 suites each of which is triumph of stunning aesthetics. The resort has an enviable collection of culinary destinations, alongside magnificient conference
			and banquet venues and unmatched wellness facilities. We strive to deliver a hospitality experience that is beyond our guest expectations.  </p>
			<a href="#" class="btn btn-success">Wanna Know More</a>		
		</div>
	</div>
</section>

<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Our Services </h2>
	</div>
	<div class="mt-5 container-fluid">
		<div class="row">
			 <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/restaurant.jpeg" alt="Card image" width="350px" height="235px">
				  <div class="card-body text-center">
				    <h4 class="card-title">Restaurant</h4>
					<a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			 </div>
			 <div style="height:10%;"></div>
			  <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/f1.jpg" alt="Card image" width="350px" height="235px">
				  <div class="card-body text-center">
				    <h4 class="card-title">Swimming Pool</h4>
					<a href="#" class="btn btn-primary">See Profile</a>
				</div>
				</div>
			 </div>
			  <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/f3.jpeg" alt="Card image" width="350px" height="235px">
				  <div class="card-body text-center">
				    <h4 class="card-title">Gym</h4>
					<a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/parties.jpeg" alt="Card image" width="350px" height="235px">
				  <div class="card-body text-center">
				    <h4 class="card-title">Event & Party Venues</h4>
					<a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/f5.jpeg" alt="Card image" width="350px" height="235px">
				  <div class="card-body text-center">
				    <h4 class="card-title">Spa</h4>
					<a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			 </div>
			 <div class="col-lg-4 col-md-4 col-12">
			 	<div class="card" >
				  <img class="card-img-top" src="images/f6.jpg" alt="Card image" width="350px" height="235px">
				  <div class="card-body text-center">
				    <h4 class="card-title">Meeting Rooms</h4>
					<a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			 </div>
		</div>
	</div>
</section>



<section class="m-5">
	<div class="pt-5">
		<h2 class="text-center"> Gallery</h2>
	</div>
	<div class="row mt-5">
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g1.jpeg" width="350px" height="235px">
		</div>
		<div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g2.jpeg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g3.jpeg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g4.jpeg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g5.jpeg" width="350px" height="235px"">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g6.jpeg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g7.jpeg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g8.jpg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g91.jpeg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g10.jpeg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g11.jpg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g12.jpg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g13.jpg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g14.jpg" width="350px" height="235px">
		</div><div class="col-lg-4 col-md-4 col-12  mb-4">
			<img src="images/g15.jpg" width="350px" height="235px">
		</div>
</section>


<section class="my-5">
	<div class="pt-5">
		<h1 class="text-center">  Contact Us </h1>
	</div>

	<div class="w-50 m-auto">
		<form action="userdata.php" method="post">
		<div class="form-group">
	    <label for="pwd">Username:</label>
	    <input type="text" class="form-control" name="user" >
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="email" class="form-control" name="email" autocomplete="off">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Mobile:</label>
	    <input type="text" class="form-control" name="mobile">
	  </div>
		<div class="form-group">
			<label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment"></textarea>

		</div>
	

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
		
	</div>
</section>

<footer>
	<div class=" bg-dark text-center text-capitalize">
		<h5 class="py-3 text-white">The Four Seasons Resorts</h5>
	</div>
</footer>



</body>
</html>