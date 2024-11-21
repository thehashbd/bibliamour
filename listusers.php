<?php
        
    
    

    $title = "Users List";
    include 'header.php';
    include 'menu.php';

?>
<div class="container">


<h1>Users List</h1>



<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Photo</th>
     <th scope="col">Actions</th>
  </thead>
  <tbody>
  
  <?php

// Connection :
require_once("conn.php");
$req="SELECT * FROM users";
$ps=$pdo->prepare($req);
$ps->execute();
while($row=$ps->fetch()) 
  {     
?>

 <tr>     
 <th scope="row"><?=$row['id']?></th>
<td><?=$row['name']?></td>
<td><?=$row['email']?></td>
<td><?=$row['role']?></td>
<td><img src="images/<?=$row['photo']?>" width="100px" height="100px"></td>

<td><a href="delete.php?id=<?=$row['id']?>">Delete</a>       <a href="edit.php?id=<?=$row['id']?>" >Edit</a></td>

</tr>

<?php  
}
?>

</tbody>

</table>


</div>
<?php
    include 'footer.php';
?>
