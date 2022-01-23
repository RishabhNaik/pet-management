<?php
 include("config.php");
 if($conn->connect_error)
 { 
     die('Connection Failed : '.$conn->connect_error);

 }
 else
 {
     $id = $_REQUEST['id'];
     $stmt = mysqli_query($conn,"select * from pet WHERE id='".$id."';");
     $row = mysqli_fetch_assoc($stmt);
    //  $stmt->execute();
    //  echo "success";
    //
    //  $stmt->close();
    //  $conn->close();

 }
?>
<?php include('templates/csstags.php'); ?>

<div class="form_body_addpets">
  <h3>Edit</h3>
  <hr>
    <form action="petsTableEditQuery.php" method="post">
        <label ><b>id :</b></label><br>
        <input type="text"  value="<?php echo $row['id'];?>" name="id"/><br>
        <label ><b>petname :</b></label><br>
        <input type="text"  value="<?php echo $row['petname'];?>" name="petname"/><br>
        <label ><b>specie :</b></label><br>
        <select id="select-state"  name="specie" required>
            <option value="<?php echo $row['specie'];?>"><?php echo $row['specie'];?></option>
            <option value="Cat">Cat</option>
            <option value="Dog">Dog</option>
            <option value="Fish">Fish</option>
        </select><br>
        <label ><b>breed :</b></label><br>
        <input type="text" value="<?php echo $row['breed'];?>" name="breed"/><br>
        <label ><b>age :</b></label><br>
        <input type="text" value="<?php echo $row['age'];?>" name="age"/><br>
        <label ><b>color :</b></label><br>
        <input type="text" value="<?php echo $row['color'];?>" name="color"/><br>
        <!-- <label >image :</label><br>
        <input type="file" value="<?php echo $row['image'];?>" name="f1"><br> -->
        <label ><b>cost :</b></label><br>
        <input type="text" value="<?php echo $row['cost'];?>" name="cost"/><br>
        <label ><b>paragraph :</b></label><br>
        <input type="text" name="paragraph" minlength="10" value="<?php echo $row['paragraph'];?>"></input>
        <div><br>
        <center><input type="submit" value="submit" name="submit"/>
        </center></div>
    </form>
    </div>
<p></p>
</body>
</html>
