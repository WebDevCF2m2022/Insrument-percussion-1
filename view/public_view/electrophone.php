<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/3010b1eaf1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
    <script defer  src="js/captcha.js"></script>

    <title>Document</title>
</head>
<body>
        
    <!--header-->
    <?php include 'include/header.inc.php' ?>

<?php
//affichez les instruments de la catégorie électrophone avec un foreach
foreach ($elec as $key => $value): 
   // echo $value['nom'];
    //echo $value['resume'];
    //echo $value['url'];
    //echo $value['description'];
    //echo $value['son'];
    //echo $value['img_url'];
    

?>
    <ul>
    <li class="car">

                  <div class="descrip">
                  <img src="<?=$value['img_url']?>" alt="" width="150px">
                        <h3><?=$value['nom'];?></h3>
                        <p><?=$value['description'];?></p>
                        
                       
                  </div>
                </li>
    </ul>
      
<?php endforeach; ?>
<?php include 'include/footer.inc.php' ?>
</body>
</html>

