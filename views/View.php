<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>my first project Dejan</title>
    </head>
    <body>
        <form method="post" action = "../controllers/presenter.php">
          Voer een tekst in
          <br>
             <input type="text"  name="naam">
            <input type="submit" name="submit" value="Submit">
        </form>
        <p>
        <?php
        echo $viewData["palindroom"] . "<br>";
        echo $viewData["message"] . "<br>";
        echo $viewData["action"];
        
        ?>
        </p>
    </body>                                           
</html>
