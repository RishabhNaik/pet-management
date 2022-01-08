
<?php

  include("config.php");

  if(isset($_POST['save'])){
    $petname=$_POST['petname'];
	  $age=$_POST['age'];
	  $specie=$_POST['specie'];
    $paragraph=$_POST['paragraph'];

    if($_FILES['f1']['name']){
      move_uploaded_file($_FILES['f1']['tmp_name'], "images/".$_FILES['f1']['name']);
      $img="images/".$_FILES['f1']['name'];
    }
    // echo '<script> alert("$img")</script>';
    $sql = "INSERT INTO pet (petname,specie,age,image,paragraph) VALUES ('$petname','$specie','$age','$img','$paragraph')";

    $result = mysqli_query($conn,$sql);
    echo '<script> alert("inserted successfully..!")</script>';
}
?>

<?php include('templates/header2.php'); ?>
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
      <label id="first"><b>age:</b></label><br/>
      <input type="number" name="age" placeholder="Enter age" ><br/>
    </div>
    <div class="form_addpets">
      <label id="first"><b>specie:</b></label><br/>
      <select id="select-state" name="specie" required>
            <option value="">Select a specie...</option>
            <option value="Cat">Cat</option>
            <option value="Dog">Dog</option>
            <option value="Fish">Fish</option>
      </select>
      <br/>
    </div>
    <div class="form_addpets">
      <label id="first"><b>Add image:</b></label><br/>
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