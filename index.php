<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
     $firstname = "Alexandr"
     $lastname = "Dulovec"
     $age = "16"
     $profession = "student"
     $city = "Choťovice "
     $avatar = "pikachu.jpg"
    ?>
 <h1>Výpis profil</h1>
 <img src="<?php echo $avatar;?>" alt= "avatar uživatele"
<ul> 
  <li>Jméno: <?php echo $firstname; ?></li>
  <li>Další položky k výpisu</li>
  <li>Přijmení: <?php echo $lastname ?></li>
  <li>Věk: <?php echo $age ?></li>
  <li>Profese: <?php echo $profession ?></li>
  <li>město bydliště <?php echo $city ?></li>
  </ul>
</body>
</html>