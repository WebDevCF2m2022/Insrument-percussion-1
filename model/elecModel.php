<?php


//requete SQL pour recuperer les données dans la table catégorie mais seulement la catégorie ID 3 avec les instruments liés
function donneCatInstru($db){
    $retour = $db->query('SELECT i.`nom`,i.`resume`,i.`url`,i.`description`,i.`son`, im.img_url FROM `instruments` i LEFT JOIN image im ON im.instruments_id = i.id WHERE i.categorie_id = 3 LIMIT 0, 6');
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($data);
    return $data;
}
?>
