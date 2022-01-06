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

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];    
      $folder = "image/".$filename;


    $sql = "INSERT INTO pet (petname, lifespan, category, filename)
    VALUES ('".$_POST["petname"]."','".$_POST["lifespan"]."','".$_POST["category"]."','".$_POST["filename"].")";

if (move_uploaded_file($tempname, $folder))  {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}

    $result = mysqli_query($conn,$sql);
}

?>

<form action="" method="post"> 
<label id="first"> First name:</label><br/>
<input type="text" name="petname"><br/>

<label id="first">lifespan</label><br/>
<input type="number" name="lifespan"><br/>

<label id="first">category</label><br/>
<input type="text" name="category"><br/>

<input type="file" name="uploadfile" value="" />

<button type="submit" name="save">save</button>

</form>

</body>
</html>