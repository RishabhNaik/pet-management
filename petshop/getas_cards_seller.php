<style>
.container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}</style>

<?php 


include "config.php";



$results = mysqli_query($conn,"SELECT * FROM pet p,seller s where p.s_id=s.id");




?>

<?php include('templates/header.php'); ?>





  <div class="container">

  <div class="row">
  <div class="col-12">
  <a href="add_pets.php" type="button" class="btn btn-primary btn-lg btn-block">Add pet</a>
		<table class="table table-image">
		  <thead>
		    <tr>
           <th scope="col">Id</th>
		      <th scope="col">Image</th>
		      <th scope="col">Specie</th>
		      <th scope="col">Breed</th>
		      <th scope="col">Price</th>
		      <th scope="col">Description</th>
		    </tr>
		  </thead>
  <?php while($row=mysqli_fetch_array($results)){ ?>
    
		  <tbody>
		    <tr>
		      <td><?php echo $row[0]; ?></td>

		      <td class="w-25">
			      <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['petname']; ?>" width="308px" height="220px">
		      </td>
		      <td><?php echo $row['specie']; ?></td>
		      <td><?php echo $row['breed']; ?></td>
		      <td><?php echo $row['cost']; ?></td>
		      <td><?php echo $row['paragraph']; ?></td>
          <td> <a href="petsTableEdit.php?id=<?php echo $row[0];?>">Edit</a> </td>
            <td> <a href="petsTableDelete.php?id=<?php echo $row[0];?>">Delete</a> </td>
		    </tr>
		  </tbody>
		
    <?php } ?>
    </table>   
    </div>
  </div>
</div>
<?php include('templates/scriptags.php'); ?>
