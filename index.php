<?php
$bdd =new PDO('mysql:host=localhost;dbname=exos2','root','');

  

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    
    
    
<title>EXOS2</title>
</head>
<body>
<center>   
<form id="form">
    <div class="form">
   <h1>INSCRIPTION</h1>
    <div class="error" style="color:red"></div>
     <label for="nom">Nom:</label>
<input type="text" id="nom" name="nom" class="form-control"><br>
<label for="prenom">Prenom:</label>    
<input type="text" id="prenom" name="prenom" class="form-control"> <br>
<label for="email">Email:</label>    
<input type="email" id="email" name="email" class="form-control"><br>    

 <input  class="btn btn-success"type="submit" value="S'INSCRIRE" id="sub">
        <div class="lien"></div>
    <div id="loader" style="display:none"><img  src="ajax-loader.gif"> </div>
    </div>
</form>

    
</center> 
    <script type="text/javascript">
  $(function(){
      $("#form").submit(function(){
          $("#loader").show();
         nom=$(this).find('input[name=nom]').val();
         prenom=$(this).find('input[name=prenom]').val();
         email=$(this).find('input[name=email]').val();
          $.post("recu.php",{nom:nom, prenom: prenom, email: email},function(data){
              $("#loader").hide();
              
              
//              alert(data);
              if(data!="Connectez-vous"){
                  
                  $(".error").empty().append(data);
              }else{
            
           $(".lien").empty().append(data);
                  
              }
              
              
              
          })
         return false;
          
      });
  }); 
 
</script> 
    
    <style>
    
        .form{
            background-color:chocolate;
            padding-top: 10px;
             height: 500px;
                width:500px;
            
            margin-left:200px;
            margin-top: 32px;
            border-radius: 15px;
            
        }
        
        label{
            color:#fff;
            font-size: 25px;
        }
        
        .form-control{
            width: 50%;
        }
        
        
    
    </style>
    

</body>
</html>