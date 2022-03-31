
<!DOCTYPE html>
<html>
<head>
<title>Renovate</title>
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One|Anton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Styles/newstyle.css">
<style
>body{
        background-image: url('image/img4.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    
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
    <div class="image">
    <div class="body-bg">
        <div class="title">
            <h1>Suppervised<br> Hassle-Free <br>Home Painting Services</h1>

        </div>
        <div class="box">
            <h2>CONTACT OUR EXPERT TODAY</h2>
    <form action="insert.php" method="POST" >
            
         <div class="inputBox">
           <input type="text" name="name" required>
          <label>Name:</label>
            </div>
       <div class="inputBox">
           <input type="text" name="mobile_number" required pattern="[0-9]{10}">
           <label>Mobile Number:</label>
      </div>
      <div class="inputBox">
            <input type="text" name="address" required>
           <label>Address:</label>
             </div>
             <div class="inputBox">
                    <input type="datetime-local" name="date" required>
                  
                     </div>
                     <div class="inputBox">
                            <input type="email" name="email" required>
                           <label>Email ID:</label>
                             </div>
       <input type="submit" name="sub" value="Get Appointment">
    </form>
    </div>      
   
    </div>
</div>





    </body>
</html>