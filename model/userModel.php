<?php
//requete sql pour récupérer données users dans la table users
function donneUser($db){
    $retour = $db->query('SELECT * FROM `users`');
    $data =  $retour->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
//requete sql pour verifier si l'utilisateur existe dans la table users
function verifUser($db, $email, $password){
    $retour = $db->prepare('SELECT * FROM `users` WHERE `lemail` = :lemail AND `motdepasse` = :motdepasse');
    $retour->bindValue(':email', $email, PDO::PARAM_STR);
    $retour->bindValue(':password', $password, PDO::PARAM_STR);
    $retour->execute();
    $data =  $retour->fetch(PDO::FETCH_ASSOC);
    return $data;
}
