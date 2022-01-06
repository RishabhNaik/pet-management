 <?php

include("config.php");

  if(isset($_POST['save']))
{
  $petname=$_POST['petname'];
	$lifespan=$_POST['lifespan'];
	$category=$_POST['category'];
  $paragraph=$_POST['paragraph'];

  if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "images/".$_FILES['f1']['name']);
    $img="images/".$_FILES['f1']['name'];
    }
    echo $img;
  
    $sql = "INSERT INTO pet (petname,category,lifespan,photo,paragraph) VALUES ('$petname','$category','$lifespan','$img','$paragraph')";

    $result = mysqli_query($conn,$sql);
    echo "inserted successfully..!";
}



?>

<form action="" method="post" enctype="multipart/form-data"> 
<label id="first"><b>First name:</b></label><br/>
<input type="text" name="petname"><br/>

<label id="first"><b>lifespan:</b></label><br/>
<input type="number" name="lifespan"><br/>

<label id="first"><b>category:</b></label><br/>
<input type="text" name="category"><br/>

<input type="file" name="f1"><br>

<label id="first"><b>Description:</b></label><br/>
<input type="text" name="paragraph" minlength="10"><br/>


<button type="submit" name="save">save</button>

</form>
