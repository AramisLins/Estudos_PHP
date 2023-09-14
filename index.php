<?php
    $contador = 0;
    $imgs = array("https://www.fundacred.org.br/site/wp-content/uploads/2017/02/batman-logo-big.gif",
         "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrCKi515tEj0-P9KT0DeRQHOrY1NqepcMbyBo2xx8&s", 
         "https://m.media-amazon.com/images/I/614A1IMHVeL._AC_UF894,1000_QL80_.jpg",
          "https://logosmarcas.net/wp-content/uploads/2021/08/Flash-Simbolo.jpg",
          "https://logosmarcas.net/wp-content/uploads/2020/12/Green-Lantern-Simbolo.png",
          "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbFO0Df_Je_U9dFFGEnqMhwL_-8qE99aFQKwiigdOlRQ&s");

     echo '<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Heroix</title>
     </head>
     <body>';

    while($contador < count($imgs)){
        echo "<p>Olá super : <img style ='width: 40px' src = ".$imgs[$contador]." >Como vai ?</p>";
        $contador++;
    }

    echo "</body>
    </html>";


    
    // while($contador <= 5){
    //     echo "Tem alguém com sono<br>";
    //     $contador++;
    // }
    // $nomes = array("jose", "maria", "carlos");
    // while($contador < 3){
    //     echo $nomes[$contador];
    //     $contador++;
    // }
    


?>