<?php
//requete sql pour récupérer données dans la table instruments et image liée

function donneInstru($db){

$retour = $db->query('SELECT i.`nom`,i.`resume`,i.`url`,i.`description`,i.`son`, im.img_url FROM `instruments` i LEFT JOIN image im ON im.instruments_id = i.id');

 $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);
return $data;
}
