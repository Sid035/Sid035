<!DOCTYPE html>
<html>
    <head>
	<title>Renovate</title>
    <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One|Anton&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Styles/newstyle.css"> 
  <style>

 body{
   margin: 0px;
   display: center;
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
		justify-content: center;
		align-items: center;
}
 .p{
        position: absolute;
        top:55%;
        left:50%;
        font-family: "Anton";
        transform:translate(-50%,-50%);
    }
    .p{
        color:black;
        text-shadow: 3px 3px 5px #474747;
        font-family: "Anton";
        font-size: 30px;
    
    }

 .line{
        position: absolute;
        top:130%;
        left:41%;
        transform:translate(-50%,-50%);
        text-shadow: 3px 3px 5px #474747;
    }
    .line{
        color:black;
        font-family: "Dokdo";
        font-size: 30px;
    
    }
/*=================================
Images
=================================*/	
	
main{
      margin-left: 120px;
        width: 100%;
        margin-top: 507px;
}
.boxx{
 width: 20%;
 float: left;
 padding: 7px;
 padding-left: 10px;  
 display: block;

}

img{
 width: 100%;
    border-radius: 4px;

}

img:hover{
  transform: scale(1.3,1.3);
  transition: .3s transform;

}
    @keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }


  </style>
</head>
    
        <body>
         <header>
        <div class="page-header">
            <div class="logo"><a href="#">
            <img src="image/logo3.png" style="width:60%;height:90%;"></a>
            </div>
            <nav>
            <ul>
                
                <li><a href="home.php"><em>Home</em></a></li>
                <li><a href="be.php"><em>Budget Estimation</em></a></li>
                <li><a href="buy.php"><em>Store</em></a></li>
                <li><a href="about.php"><em>About us</em></a></li>
                <li><a href="feedback.php"><em>Feedback</em></a></li>
                <li><a href="logout.php" target="_top"><em>Logout</em></a></li>
            </ul>
        </nav>
        </div>
    </header> 
			<div class="p">
			<p><B>RENOVATE</B> is the easiest way to paint your home or office, bringing in technology, automation and service guarantee.<br>
			 All of <B>RENOVATE</B> painters are trained and background checked, and there is a full team of project managers to guarantee job completion and satisfaction.<br>
          We are on a mission to create happy homes, and have come a long way only to go further. Just let us know where and when, we???ll take of the rest. Happy Painting!</p>
          </div>
		  
		  
		  
		   <div class="line">
 <h1>
some work done by our team
</h1>
</div>


<main>
 <div class="boxx">
<img src="image/1.jpg"></div>
<div class="boxx">
<img src="image/8.jpg"></div>
<div class="boxx">
<img src="image/4.jpg"></div>
<div class="boxx">
<img src="image/5.jpg"></div>
<div class="boxx">
<img src="image/12.jpg"></div>
<div class="boxx">
<img src="image/9.jpg"></div>
<div class="boxx">
<img src="image/11.jpg"></div>
<div class="boxx">
<img src="image/10.jpg"></div>
<div class="boxx">
<img src="image/14.jpg"></div>

</main>
		  
	   </body>
   
</html>