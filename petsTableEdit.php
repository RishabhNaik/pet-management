<?php
 $conn = new mysqli('localhost','root','','getpets');
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

    <form action="petsTableEditQuery.php" method="post">
        <label >id :</label><br>
        <input type="text"  value="<?php echo $row['id'];?>" name="id"/><br>
        <label >petname :</label><br>
        <input type="text"  value="<?php echo $row['petname'];?>" name="petname"/><br>
        <label >specie :</label><br>
        <input type="text" value="<?php echo $row['specie'];?>" name="specie"/><br>
        <label >breed :</label><br>
        <input type="text" value="<?php echo $row['breed'];?>" name="breed"/><br>
        <label >age :</label><br>
        <input type="text" value="<?php echo $row['age'];?>" name="age"/><br>
        <label >color :</label><br>
        <input type="text" value="<?php echo $row['color'];?>" name="color"/><br>
        <!-- <label >image :</label><br>
        <input type="file" value="<?php echo $row['image'];?>" name="f1"><br> -->
        <label >cost :</label><br>
        <input type="text" value="<?php echo $row['cost'];?>" name="cost"/><br>
        <label >paragraph :</label><br>
        <input type="text" value="<?php echo $row['paragraph'];?>" name="paragraph"/><br>
        <input type="submit" value="submit" name="submit"/>

    </form>
    
</body>
</html>
