<?php /*Ce fichier gére la relation avec la BD */?>

<?php 


$conn = new PDO("mysql:host=localhost;dbname=testweb","root","");
 
function addUser($nom,$prenom,$adresse,$formation_id){
    
    global $conn;
    $sql = "INSERT INTO utilisateur VALUES (null, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$nom,PDO::PARAM_STR);
    $stmt->bindParam(2,$prenom,PDO::PARAM_STR);
    $stmt->bindParam(3,$adresse,PDO::PARAM_STR);
    $stmt->bindParam(4,$formation_id,PDO::PARAM_INT);
    return $stmt ->execute();
}

function deleteUser($id){

    global $conn; 
 
     $sql= "DELETE FROM utilisateur WHERE id=?";
     $stmt=$conn->prepare($sql);
     //3 le type 
     //id a recupérer 
     $stmt->bindParam(1,$id,PDO::PARAM_INT);
    
     return $stmt ->execute();
}

function updatetUser($id){
  
    global $conn;
 
     $sql = "UPDATE FROM utilisateur SET nom=:nom prenom:=prenom adresse:=adresse formantio_id:=foramtion_id WHERE id:=id";
     $stmt=$conn->prepare($sql);
    $stmt->bindParam('id',$id,PDO::PARAM_INT);
    $stmt->bindParam('nom',$nom,PDO::PARAM_STR);
    $stmt->bindParam('prenom',$prenom,PDO::PARAM_STR);
    $stmt->bindParam('prenom',$adresse,PDO::PARAM_STR);
    $stmt->bindParam('formation_id',$formatio_id,PDO::PARAM_STR);
    
     return $stmt->ecxecute();
}

function getUser($id){
    
    global $conn;
    $sql = "SELECT * FROM  utilisateur WHERE id=?";
    
    $stmt = $conn->prepare($sql);

    $stmt ->execute([$id]);

    return $stmt->fetch();
}
function getAllUser(){
    
    global $conn;
    $sql = "SELECT * FROM  utilisateur ";
    
    $stmt = $conn->prepare($sql);

    $stmt ->execute();
    
    return $stmt->fetchAll();
}

?>