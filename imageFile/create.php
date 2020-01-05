<?php 


//var_dump($_FILES['image']);

$name = $_FILES['image']['name'];//название папки
$tmp_name = $_FILES['image']['tmp_name'];//место где лежит 

//move_uploaded_file($tmp_name, "uploads/image.png");

move_uploaded_file($tmp_name,  "uploads/" . $name);//место куда переносим

 ?>

 <img src="uploads/no-user.jpg" alt="">