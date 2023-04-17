<?php
//affichez les instruments de la catégorie électrophone avec un foreach
foreach ($elec as $key => $value) {
    echo $value['nom'];
    echo $value['resume'];
    echo $value['url'];
    echo $value['description'];
    echo $value['son'];
    echo $value['img_url'];
    //affichez des images liées à chaque instrument avec le nom de l'instrument
}
?>
