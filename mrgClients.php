<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <title>Document</title>
</head>
<body>

<div class="jumbotron">
    <h1>Liste des étudiants</h1>
</div>

<br>
<div class="container">
<table class="table table-dark table-hover">
 <tr>
    <td>Id</td>
    <td>Fistname</td>
    <td>Lastname</td>
    <td>Email</td>
    <td>Phone</td>
    <td>Actions</td>
   </tr>
   <?php 
   include 'Classes/client.class.php';
   $client = new client;
   $listClients = $client->readAllClients();
   while ($data = $listClients->fetch()) 
      { echo '<tr>';
        echo '<td>'.$data['id'].'</td>';
        echo '<td>'.$data['firstname'].'</td>';
        echo '<td>'.$data['lastname'].'</td>';
        echo '<td>'.$data['email'].'</td>';
        echo '<td>'.$data['phone'].'</td>';
        
       
        echo '<td><a href="editer.php?id='.$data['id'].'">
        <input type="button"  type="button" class="btn btn-outline-primary" value="Modifier" /></a>        ';  
        echo '<a href="delete.php?id='.$data['id'].'">
        <button type="button" class="btn btn-danger">delete</button></a></td>';  
        echo '</tr>';
    }


?>

</table>
<a class="btn btn-primary" href="creare.php">Insérer</a>} 
       
      
          
      


  
  
</table>
</div>
</body>
</html>