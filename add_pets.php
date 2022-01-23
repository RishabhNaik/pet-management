
<?php

  include("config.php");
  session_start();


  if(isset($_POST['save'])){
    $petname=$_POST['petname'];
	  $age=$_POST['age'];
	  $specie=$_POST['specie'];
    $breed=$_POST['breed'];
    $color=$_POST['color'];
    $cost=$_POST['cost'];
    $paragraph=$_POST['paragraph'];
    $sid=$_SESSION['id'];

    if($_FILES['f1']['name']){
      move_uploaded_file($_FILES['f1']['tmp_name'], "images/".$_FILES['f1']['name']);
      $img="images/".$_FILES['f1']['name'];
    }
    // echo '<script> alert("$img")</script>';
    $sql = "INSERT INTO pet (s_id,petname,specie,breed,age,color,image,cost,paragraph) VALUES ('$sid','$petname','$specie','$breed','$age','$color','$img','$cost','$paragraph')";

    $result = mysqli_query($conn,$sql);
    echo '<script> alert("Pet added Successfully")</script>';
}
?>


<?php include('templates/csstags.php'); ?>
<?php include('templates/sellerHeader.php'); ?>
<p></p>
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
      <label id="first"><b>Breed:</b></label><br/>
      <input type="text" name="breed" placeholder="Enter breed" ><br/>
    </div>
    <div class="form_addpets">
      <label id="first"><b>color:</b></label><br/>
      <input type="text" name="color" placeholder="Enter color" ><br/>
    </div>
    <div class="form_addpets">
      <label id="first"><b>Add image:</b></label><br/>
      <input type="file" name="f1"><br>
    </div>
    <div class="form_addpets">
      <label id="first"><b>cost:</b></label><br/>
      <input type="number" name="cost" placeholder="Enter cost" ><br/>
    </div>
    <div class="form_addpets">
      <label id="first"><b>Description:</b></label><br/>
      <textarea rows="5" cols="52" type="text" name="paragraph" minlength="10" placeholder="Describe about your pet...!! (50 characters)"></textarea>
      <br/>
    </div>
    <div class="form_addpets">
      <button type="submit" name="save">submit</button>
    </div>
  </form>
</div>
<p></p>

<?php include('templates/footer.php'); ?>
<?php include('templates/scriptags.php'); ?>