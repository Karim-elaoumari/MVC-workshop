<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $data['title'] ?></h1>

    <ul>
        <?php  foreach($data['utilisateurs'] as $utilisateur){ ?>
         <li>
            <h2><?= $utilisateur['nom']?></h2>
            <p><?= $utilisateur['email']?></p>
         </li>
         <?php }?>
    </ul>
</body>
</html>