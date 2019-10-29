<?php
require('controlleur.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document </title>
</head>
<body>
    <div class="container">
      <h1>Binevenue Dans notre centre de formation </h1>
       
<form action="?action=add" method="GET" class="form-group">
<div class="form-group"><input type="text" value="<?= $_GET['nom'];?>" name="nom" class ="form-control col-md-6" placeholder="nom"></div>
<div class="form-group"><input type="text" name="prenom" value="<?= $_GET['prenom'];?>"  class ="form-control col-md-6" placeholder="prenom"></div>
<div class="form-group"><input type="text" name="adresse"  value="<?= $_GET['adresse'];?>" class ="form-control col-md-6" placeholder="nom"></div>
<div class="form-group"><input type="text" name="formation_id"  value="<?= $_GET['formation_id'];?>" class ="form-control col-md-6" placeholder="choisissez une formation"></div>
<input type="hidden" name="action" value="add"> 
<button  class="btn btn-success">Ajouter</button>

</form> 
<br>
<?php $users = getAllUser(); ?>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">adresse</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($users as $u){  ?>
    <tr>
      <th scope="row"><?= $u["id"] ?></th>
      <td><?= $u["nom"] ?></td>
      <td><?= $u["prenom"] ?></td>
      <td><?= $u["adresse"] ?></td>
      <td><?= $u["formation_id"] ?></td>
      <td>
        <a href="controlleur.php?action=delete&id=<?= $u["id"] ?>" class="btn btn-danger">delete</a>
        <a href="controlleur.php?action=edit&id=<?= $u["id"] ?>" class="btn btn-info">Edit</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>

</div> 
</div>
</body>
</html>
