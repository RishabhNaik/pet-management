<?php

include ("config.php");
     $id = $_REQUEST['id'];
     $stmt = mysqli_query($conn,"delete from pet where id='$id';");
    include ("adminTable.php");
    
 ?>