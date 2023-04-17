<?php


//requete SQL pour recuperer les données dans la table catégorie mais seulement la catégorie ID 3 avec les instruments liés
function Idioph($db){
    $retour = $db->query('SELECT i.`nom`,i.`resume`,i.`url`,i.`description`,i.`son`, im.img_url FROM `instruments` i LEFT JOIN image im ON im.instruments_id = i.id WHERE i.categorie_id = 2 ');
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($data);
    return $data;
}
?>
