<!DOCTYPE html>
<html>
<head>
	<title>Show data</title>
</head>
<body>
	<table class="table" cellspacing="10" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  	<?php 
  	$i=1;
  	foreach ($data as $key => $value) {
  		# code...
  	?>
    <tr>
      <th scope="row"><?= $i++ ?></th>
      <td><?=$value->name?></td>
      <td><?=$value->email?></td>
      <td><?=$value->phone?></td>
      <td>
      	<a href=""><button>Edit</button></a>
      	<form action="delete_data" method="POST">
      		<input type="hidden" name="id" value="<?= $value->id ?>">
      		<button type="submit">DELETE</button>
      	</form>
      </td>
    </tr>
    <?php }  ?>
    
  </tbody> 
</table>


</body>
</html>