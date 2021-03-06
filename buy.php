<?php
    session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>Renovate</title>
	<meta name= viewport content= "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/buyhomestyle.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One|Anton&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
/*=================================
header login img
=================================*/
header nav li img{
    height: 20px;
    width: 20px;
}

/*=================================
slideshow
=================================*/

.slidershow{
  width: 700px;
  height: 400px;
  overflow: hidden;
}
.middle{
  position: absolute;
  top: 105%;
  left: 50%;
  transform: translate(-50%,-50%);
  shadow: 0 15px 25px rgba(0,0,0,0.5) ;
}
.navigation{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}
.bar{
  width: 50px;
  height: 10px;
  border: 2px solid #fff;
  margin: 6px;
  cursor: pointer;
  transition: 0.4s;
}
.bar:hover{
  background: #fff;
}

input[name="r"]{
    position: absolute;
    visibility: hidden;
}

.slides{
  width: 500%;
  height: 100%;
  display: flex;
}

.slide{
  width: 20%;
  transition: 0.6s;
}
.slide img{
  width: 100%;
  height: 100%;
}

#r1:checked ~ .s1{
  margin-left: 0;
}
#r2:checked ~ .s1{
  margin-left: -20%;
}
#r3:checked ~ .s1{
  margin-left: -40%;
}
#r4:checked ~ .s1{
  margin-left: -60%;
}
#r5:checked ~ .s1{
  margin-left: -80%;
}

/*=================================
Products
=================================*/

marquee{
      font-size: 30px;
      font-weight: 800;
      color: #8ebf42;
      font-family: "Racing Sans One";
      }

.main{
	position: absolute;
top: 150%;
left: 5%;
 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }

.image img{
	 width: 100%;
  height: 100%;
  display: flex;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
 }

.title{
 color: black;
  text-align: center;
  padding: 10px;
  
 }

h1{
  color: black;
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
  color: black;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 40px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}
</style>
	
</head>
<body>

	<header>
		<nav>
			<div class="row clearfix">
				<img src="image/logo5.png" class="logo">

				<ul class="main-nav animated slideInDown" id="check-class">
					<li><a href="home.php">Home</a></li>
					<li><a href="buy.php#product">Products </a></li>
					
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>

		<div class="main-content-header">
			<h2> WELCOME TO <span class="colorchange">RENOVATE</span>.<br>
				CREATIVE ONLINE STORE </h2>
			<a href="buy.php" class="btn btn-full"> click to order</a>
		</div>
	</header>
	
	
	
	 <div class="slidershow middle">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="image/12.jpg" alt="">
        </div>
        <div class="slide">
          <img src="image/4.jpg" alt="">
        </div>
        <div class="slide">
         <img src="image/9.jpg" alt="">
        </div>
        <div class="slide">
         <img src="image/10.jpg" alt="">
        </div>
        <div class="slide">
          <img src="image/1.jpg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
	
	
</div>



<form action="pdf.php" method="POST" >
<div class="main" id="product">
<marquee> BUY BEAUTIFUL WALL STICKERS FOR BEAUTIFUL HOME...</marquee>
<div class="card">

<div class="image">
   <img src="image/e5.jpg">
</div>
<div class="title">
<h1>Nature</h1>
</div>
<div class="des">
 <p>Rs. 250</p>
 <input type="submit" class="btn"  value="Buy" >
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/e2.jpg">
</div>
<div class="title">
 <h1>
Lovely Butterflies</h1>
</div>
<div class="des">
 <p>Rs. 180</p>
 <input type="submit" class="btn" value="Buy">
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/e3.jpg">
</div>
<div class="title">
 <h1>
Tree Acrylic Crystal</h1>
</div>
<div class="des">
 <p>Rs. 500</p>
 <input type="submit" class="btn" value="Buy" name="add_to_cart">
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/e6.jpg">
</div>
<div class="title">
 <h1>
Tree with Lovely Butterflies</h1>
</div>
<div class="des">
 <p>Rs. 190</p>
 <input type="submit" class="btn" value="Buy" name="add_to_cart">
</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/e7.jpg">
</div>
<div class="title">
 <h1>
DECOR Cafe Decal Style Nature</h1>
</div>
<div class="des">
 <p>Rs. 549</p>
 <input type="submit" class="btn" value="Buy" name="add_to_cart">
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="image/e8.jpg">
</div>
<div class="title">
 <h1>
Heaven Decors Vinyl Bird with Bicycle and tree</h1>
</div>
<div class="des">
 <p>Rs. 549</p>
 <input type="submit" class="btn" value="Buy" name="add_to_cart">
</div>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="image/e9.jpg">
</div>
<div class="title">
 <h1>
Wall Guru Radha with Krishna</h1>
</div>
<div class="des">
 <p>Rs. 600</p>
 <input type="submit" class="btn" value="Buy" name="add_to_cart">

</div>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="image/e10.jpg">
</div>
<div class="title">
 <h1>
Beautiful Green Village Wall Stickar</h1>
</div>
<div class="des">
 <p>Rs. 569</p>
 <input type="submit" class="btn" value="Buy" name="add_to_cart">
</div>
</div>			
			
		
	
</body>
</html>


