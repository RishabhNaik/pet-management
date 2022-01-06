<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">

<title>test</title>


</head>
<body>

 <?php

include("config.php");

  if(isset($_POST['save']))
{
  $petname=$_POST['petname'];
	$lifespan=$_POST['lifespan'];
	$category=$_POST['category'];


  if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "images/".$_FILES['f1']['name']);
    $img="images/".$_FILES['f1']['name'];
    }
    echo $img;
  
    $sql = "INSERT INTO pet (petname,category,lifespan,image) VALUES ('$petname','$category','$lifespan','$img')";

    $result = mysqli_query($conn,$sql);
    echo "inserted successfully..!";
}



?>

<form action="" method="post" enctype="multipart/form-data"> 
<label id="first"> First name:</label><br/>
<input type="text" name="petname"><br/>

<label id="first">lifespan</label><br/>
<input type="number" name="lifespan"><br/>

<label id="first">category</label><br/>
<input type="text" name="category"><br/>

<input type="file" name="f1">

<button type="submit" name="save">save</button>

</form>

</body>
</html>