<?php  session_start();
 ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

<script>
 function num_key(evt){
  var iKeyCode;
  if(window.event){ // IE
    iKeyCode = evt.keyCode  
  }
  else if(evt.which){ // Netscape/Firefox/Opera
    iKeyCode = evt.which
  }

  if ((iKeyCode >= 48 && iKeyCode <= 57) || iKeyCode == 8 || iKeyCode == 46){  // 8 Backapace , 46 Delete
  return true;
  }
  else{
  return false;
  }
}

function checkID(id) { 
    if (id.length == 13){
      for(i=0, sum=0; i < 12; i++){
      sum += parseFloat(id.charAt(i))*(13-i); 
      }
      if ((11-sum%11)%10!=parseFloat(id.charAt(12))){
      alert('รหัสบัตรประชาชนไม่ถูกต้อง');
      document.getElementById("sp_result");
      }
      else {
      document.getElementById("sp_result");
      }
    }
}

</script>

<body>
    <BODY bgcolor="#FF9999">

<!-- Navbar 
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Aboutme</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Printer">Printer<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="print.php" class="w3-bar-item w3-button">ปริ้นเตอร์</a>
      <a href="print1.php" class="w3-bar-item w3-button">ปริ้นเตอร์อิงค์แทงค์รุ่นเล็ก</a>
      <a href="print2.php" class="w3-bar-item w3-button">ปริ้นเตอร์อิงค์แทงค์รุ่นใหญ่</a>
    </div>
  </div>
<a href="Pagepost1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ลงทะเบียน</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="สถานที่ท่องเที่ยว">สถานที่ท่องเที่ยว<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="ex1.php" class="w3-bar-item w3-button">สถานที่เที่ยวเชียงใหม่</a>
      <a href="ex.php" class="w3-bar-item w3-button">สถานที่เที่ยวลำปาง</a>

     
    </div>
  </div>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
    <a href="fearn_01.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">test</a>
    <a href="select.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">แสดงข้อมูล</a> -->


<?php  if (@$_SESSION["status"] =="2") {?>
      <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Aboutme</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Printer">Printer<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="print.php" class="w3-bar-item w3-button">ปริ้นเตอร์</a>
      <a href="print1.php" class="w3-bar-item w3-button">ปริ้นเตอร์อิงค์แทงค์รุ่นเล็ก</a>
      <a href="print2.php" class="w3-bar-item w3-button">ปริ้นเตอร์อิงค์แทงค์รุ่นใหญ่</a>
    </div>
  </div>
<a href="Pagepost1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Add User</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="สถานที่ท่องเที่ยว">สถานที่ท่องเที่ยว<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="ex1.php" class="w3-bar-item w3-button">สถานที่เที่ยวเชียงใหม่</a>
      <a href="ex.php" class="w3-bar-item w3-button">สถานที่เที่ยวลำปาง</a>
     </div>
  </div>
<?php include("prm110.php"); ?>
<?php include("prm1120.php"); ?>
<?php include("prm2130.php"); ?>
<?php include("prm3136.php"); ?>


    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
     
    <a href="select.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">แสดงข้อมูล</a>
      

      <?php } else if (@$_SESSION["status"] =="1") { ?>
       <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Aboutme</a>
    <a href="use_pf.php" class="w3-bar-item w3-button w3-padding-large">User Profile</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Printer">Printer<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="print.php" class="w3-bar-item w3-button">ปริ้นเตอร์</a>
      <a href="print1.php" class="w3-bar-item w3-button">ปริ้นเตอร์อิงค์แทงค์รุ่นเล็ก</a>
      <a href="print2.php" class="w3-bar-item w3-button">ปริ้นเตอร์อิงค์แทงค์รุ่นใหญ่</a>
    </div>
  </div>

  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="สถานที่ท่องเที่ยว">สถานที่ท่องเที่ยว<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="ex1.php" class="w3-bar-item w3-button">สถานที่เที่ยวเชียงใหม่</a>
      <a href="ex.php" class="w3-bar-item w3-button">สถานที่เที่ยวลำปาง</a>
    </div>
  </div>
  <?php include("prm110.php"); ?>
<?php include("prm1120.php"); ?>
<?php include("prm2130.php"); ?>
<?php include("prm3136.php"); ?>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
    
    

      <?php } else  if(@$_SESSION["status"] =="") { ?>
        <div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Aboutme</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Printer">Printer<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="print.php" class="w3-bar-item w3-button">ปริ้นเตอร์</a>
      <a href="print1.php" class="w3-bar-item w3-button">ปริ้นเตอร์อิงค์แทงค์รุ่นเล็ก</a>
      <a href="print2.php" class="w3-bar-item w3-button">ปริ้นเตอร์อิงค์แทงค์รุ่นใหญ่</a>
    </div>
  </div>
<a href="Pagepost1.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ลงทะเบียน</a>
  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="สถานที่ท่องเที่ยว">สถานที่ท่องเที่ยว<i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="ex1.php" class="w3-bar-item w3-button">สถานที่เที่ยวเชียงใหม่</a>
      <a href="ex.php" class="w3-bar-item w3-button">สถานที่เที่ยวลำปาง</a>
      </div>
  </div>
  <?php include("prm110.php"); ?>
<?php include("prm1120.php"); ?>
<?php include("prm2130.php"); ?>
<?php include("prm3136.php"); ?>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
    
  
        
      <?php }?> 


    
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
<br>
<br>