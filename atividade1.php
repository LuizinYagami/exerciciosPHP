<?php
  $caractere=isset($_GET["caractere"])?$_GET["caractere"]:"a";
      if($caractere=="a" || $caractere=="A" || $caractere=="e" || $caractere=="E" || $caractere=="i" || $caractere== "I"
         || $caractere=="o"|| $caractere=="O" || $caractere=="u" || $caractere=="U") {
          echo"O caractere digitado é: VOGAL";
      }
      else{
          echo"O caractere digitado é: CONSOANTE";
      }
 
?>