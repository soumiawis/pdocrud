<?php

require('model.php');
$action = isset($_GET['action']) ? $_GET['action'] :'';

switch ($action) {
    case 'add':
     $nom = $_GET['nom'];
     $prenom = $_GET['prenom'];
     $adresse= $_GET['adresse'];
     $formation_id= $_GET['formation_id'];
     addUser($nom,$prenom,$adresse,$formation_id);
        
        break;
    
        case 'delete':
        $id = $_GET['id'];
        deleteUser($id);
        break;

        case 'edit':
        $id = $_GET['id'];
        $user = getClient($id);
        
        
        break;

    case 'update':
    $nom = $_GET['nom'];
     $prenom = $_GET['prenom'];
     $adresse= $_GET['adresse'];
     $formation_id= $_GET['formation_id'];
     updateUser($nom,$prenom,$adresse,$formation_id);
        break;
    
    default:
        
        break;
}

$users = getAllUser();

?>