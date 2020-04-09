
<?php

include "mainFile.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

    <title>Home work</title>
  </head>
  <body>
  <div class="container ">
   <div class="row ">
  	<div class="col-xl-8">
    <h4 style="margin-top:20px;" >Home Work 01</h4>
    <p >Print data from a form using oop </p>
    <form action="" method="post">
  <div class="form-group">
    <label >Full name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email"  placeholder="Enter email" autocomplete="off">
    
  </div>
  <div class="form-group">
    <label >Contact</label>
    <input type="text" class="form-control" name="phn"  placeholder="contact no." autocomplete="off">
  </div>
  
  <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<div>
	<p style="margin-top: 30px;"></p>
</div>

<?php

$res = new firstForm;



list($res1,$res2,$res3) = $res->one();
echo $res1;
echo "<br>";
echo $res2;
echo "<br>";
echo $res3;

?>
</div>
  
 </body>
</html>