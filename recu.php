<?php
$bdd =new PDO('mysql:host=localhost;dbname=exos2','root','');


extract($_POST);
if(isset($nom) && !empty($nom) && isset($prenom) && !empty($prenom)&& isset($email) && !empty($email)){
    
$inser=$bdd->prepare("INSERT INTO user(nom,prenom,email) VALUES(?,?,?)");
$inser->execute(array($nom,$prenom,$email)); 
    echo"<div class='alert alert-success'>Compte créer avec success!!!!!</a></div>";

}else{
    echo"<div class='alert alert-danger'>Tous les champs sont obligatoire</div>";
}




//mysql_query($bdd) or die(mysql_error());

?>