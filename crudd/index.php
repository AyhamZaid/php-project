<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>


body{
    background-image:url("https://wallpapercave.com/wp/wp2406521.jpg");
    background-size:cover;
    color:red;

}

h1{
        text-align:center;
        color :red;
}
img{
    width:400px;
    margin:0 auto;
    
}
.container{
    padding:5%;
}
p{
    color:red;
    font-size:20px;
    
}
.btn_enter:link {
  text-decoration: none;
}
.btn_enter{
    border:solid red 1px;
    color : #111;
    background-color:red;
    font-size:30px;
    border-radius:10px;
}
.btn_enter:visited {
  color: cyan;
}

.btn_enter:hover {
 color: lightgreen;
}
</style>




<body>
<?php include 'header.php';?>
<h1>
<?php
$title ="Try to be like Us";
echo $title;
?>
</h1>

<div class="container">
  <div class="row">
    <div class="col"><img id="img" src="http://www.pngall.com/wp-content/uploads/3/Hacker-PNG-Pic.png"  alt="deadpool"></div>
    <div class="col"><storng><p>Join us now to hack nasa and google,
    be smart and chiose the right way to hack.</p></storng>
    <a class="btn_enter" href="login.php">Enter Now To join</a>
    </div>
    <div class="col"><h1></h1></div>
    
  </div>
</div>

</body>
</html>