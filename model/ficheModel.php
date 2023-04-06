<?php
//requete sql pour récupérer données dans la table instruments et image liée

function donneInstru($db){

$retour = $db->query('SELECT `nom`,`resume`,`url`,`description`,`son`,`copy_son` FROM `instruments` LEFT JOIN image ON instruments.image_id = image.id');

 $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);
return $data;
}
