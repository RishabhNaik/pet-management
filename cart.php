<?php
include_once 'config.php';
session_start();


$result = mysqli_query($conn,"SELECT ROW_NUMBER() OVER () row_num,count(c.id),c.id,c.petname,c.specie,c.price,c.c_id,u.id FROM cart c,users u where u.id=c.c_id group by petname order by row_num");

?>


<table>
	<tr>
	<td>Sno</td>
	<td>Petname</td>
	<td>Specie</td>
	<td>Price</td>
	</tr>
	<?php
	$i=0;
	$sum=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">

	<td><?php echo $row["row_num"]; ?></td>
	<td><?php echo $row["petname"]; ?></td>
	<td><?php echo $row["specie"]; ?></td>
	<td><?php echo $row["price"]; ?></td>
	<?php $sum+= $row["price"]; 
	
	?>
	<td><a href="delete_cart.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
	
	
</table>

<h3>Your total cost is <?php echo $sum; ?> </h3>