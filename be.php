<html>
<head>
<title>Renovate</title>
<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One|Anton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Styles/newstyle.css">

<style>
    html{
        height: 100%;
    }
    body {
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
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
	
	.budget{
		top: 40%;
		left: 60%
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


<div class="budget">
<form name="calc">

<form name="calc">

<table align="center">

  <tr align="right">
   <td class="row2" ><span> Type </span></th>
   <td class="row2" ><span> Select </span></th>
  </tr>


  <tr align="right">
   <td class="row" ><span> Interior Painting</span></td>
   <td class="row" ><input type="checkbox" name="item1"></td>
  </tr>

  <tr align="right">
   <td class="row"><span> Exterior Painting</span></td>
   <td class="row"><input type="checkbox" name="item2"></td>
  </tr>

  <tr align="right">
   <td class="row"><span> Polishing </span></td>
   <td class="row"><input type="checkbox" name="item3"></td>
  </tr>

  <tr align="right">
   <td class="row"><span> Waterproofing </span></td>
   <td class="row"><input type="checkbox" name="item4" ></td>
  </tr>
  
   <tr align="right">
   <td class="row"><span> Indore Texture </span></td>
   <td class="row"><input type="checkbox" name="item5" ></td>
  </tr>
  
   <tr align="right">
   <td class="row"><span> Outdoor Texure </span></td>
   <td class="row"><input type="checkbox" name="item6" ></td>
  </tr><br>

<tr align="right">
   <td class="row"><span> Total Carpet Area . </span></td>           
   <td class="row"><input type="text" id="firstNumber" placeholder="in Squar feet" required></td><br>
  </tr>

  <tr align="center">
    <td class="row">
       <input type="button" onClick="count()" value="Continue" ><br><br>
       <input type="reset" value="Reset" >
    </td>
  </tr>


</table>

</form>
</div align="right">

<p>Your <b>Estimated cost is</b> :
<span id ="result" ></span>
</p>

<script>

function count() {
var item1price = 35;
var item2price = 25;
var item3price = 53;
var item4price = 30;
var item5price = 150;
var item6price = 35;

 if (calc.item1.checked){
   var witem1 = document.calc.item1.value = item1price; }
   else {
   var witem1 = document.calc.item1.value = 0; }

 if (calc.item2.checked){
   var witem2 = document.calc.item2.value = item2price; }
   else {
   var witem2 = document.calc.item2.value = 0; }

 if (calc.item3.checked) {
   var witem3 = document.calc.item3.value = item3price; }
   else {
   var witem3 = document.calc.item3.value = 0; }

 if (calc.item4.checked) {
   var witem4 = document.calc.item4.value = item4price;}
   else {
   var witem4 = document.calc.item4.value = 0; }
   
   if (calc.item5.checked) {
   var witem5 = document.calc.item5.value = item5price;}
   else {
   var witem5 = document.calc.item5.value = 0; }
   
   if (calc.item6.checked) {
   var witem6 = document.calc.item6.value = item6price;}
   else {
   var witem6 = document.calc.item6.value = 0; }

 // document.calc.pay.value = witem1 + witem2 + witem3 + witem4;
//document.getElementById('pay').innerHTML = witem1 + witem2 + witem3 + witem4;
 
 //mypractic
result1= witem1 + witem2 + witem3 + witem4 + witem5 + witem6;
 num1 = document.getElementById("firstNumber").value;
 document.getElementById("result").innerHTML =result1 * num1;
 }
</script>
</body>
</html>