<?php include('numeroprimo.class.php');?>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Numero primo</title>
</head>
<body>
  <form action="#" method="post">
    Numero desejado: <input type="number" name="numerodesejado" required/><br>
    <button type="submit">Calcular</button>
  </form>
  </br></br>
  <?php

 
      $pessoa = new Numeroprimo();
      
	  
      $pessoa->setNumerodesejado($_POST['numerodesejado']);
 
      echo 'Olá '.$pessoa->primo().'</strong> de imposto.';
    
  ?>
</body>
</html>