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
    // echo '<script> alert("$img")</script>';
    
  
    $sql = "INSERT INTO pet (petname,category,lifespan,photo,paragraph) VALUES ('$petname','$category','$lifespan','$img','$paragraph')";

    $result = mysqli_query($conn,$sql);
    echo '<script> alert("inserted successfully..!")</script>';
}
?>

<?php include('templates/header.php'); ?>
<?php include('templates/csstags.php'); ?>
<div class="form_body_addpets">
  <h3>Add Your Pets </h3>
  <hr>
  <form action="" method="post" enctype="multipart/form-data"> 
    <div class="form_addpets">
      <label id="first"><b>First name:</b></label><br/>
      <input type="text" name="petname" placeholder="Enter name"><br/>
    </div>
    <div class="form_addpets">
      <label id="first"><b>Lifespan:</b></label><br/>
      <input type="number" name="lifespan" placeholder="Enter lifespan" ><br/>
    </div>
    <div class="form_addpets">
      <label id="first"><b>Category:</b></label><br/>
      <select id="select-state" name="category" required>
            <option value="">Select a category...</option>
            <option value="Cat">Cat</option>
            <option value="Dog">Dog</option>
            <option value="Fish">Fish</option>
      </select>
      <br/>
    </div>
    <div class="form_addpets">
      <label id="first"><b>Add Photo:</b></label><br/>
      <input type="file" name="f1"><br>
    </div>
    <div class="form_addpets">
      <label id="first"><b>Description:</b></label><br/>
      <textarea rows="5" cols="52" type="text" name="paragraph" minlength="10" placeholder="Description about 150 characters"> </textarea>
      <br/>
    </div>
    <div class="form_addpets">
      <button type="submit" name="save">submit</button>
    </div>
  </form>
</div>

<?php include('templates/footer.php'); ?>
<?php include('templates/scriptags.php'); ?>