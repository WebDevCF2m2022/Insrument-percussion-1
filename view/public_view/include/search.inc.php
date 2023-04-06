<?php

$item = $db->query('SELECT instruments FROM categorie ORDER BY id DESC');   /*$db défini dans index */
$item = $db->query('SELECT instruments FROM categorie WHERE instruments LIKE "%' .$google. '%" ORDER BY id DESC');

$item = $db->query('SELECT musiciens FROM categorie ORDER BY id DESC');   /*$db défini dans index */
$item = $db->query('SELECT musiciens FROM categorie WHERE musiciens LIKE "%' .$google. '%"  ORDER BY id DESC');

$item = $db->query('SELECT instruments FROM musiciens ORDER BY id DESC');   /*$db défini dans index */
$item = $db->query('SELECT instruments FROM musiciens WHERE instruments LIKE "%' .$google. '%"  ORDER BY id DESC');

$item = $db->query('SELECT musiciens FROM instruments ORDER BY id DESC');   /*$db défini dans index */
$item = $db->query('SELECT musiciens FROM instruments WHERE musiciens LIKE "%' .$google. '%"  ORDER BY id DESC');



if(isset($_GET['google']) AND !empty($_GET['google'])){
    $google = htmlspecialchars($_GET['google']);

    $i;
}

?>


<form method="GET" >
    <input type="search" name="google" placeholder="votre recherche:">
    <input type="submit" value="Valider">
</form>

<ul>
    <?php while($i = $item->fetch()){ ?>
        <li><?= $i['instruments'] ?> </li>
<?php }  ?>
</ul>
