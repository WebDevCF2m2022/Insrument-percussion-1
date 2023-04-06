<?php

$item = $db->query('SELECT titre FROM articles ORDER BY id DESC');   /*$db défini dans index */
$item = $db->query('SELECT titre FROM articles WHERE titre LIKE "%q%" ORDER BY id DESC');

?>
<form method="GET" >
    <input type="search" name="loupe" placeholder="votre recherche:">
    <input type="submit" value="Valider">
</form>

<ul>
    <?php while($i = $item->fetch()){ ?>
        <li><?= $i['titre'] ?> </li>
<?php }  ?>
</ul>
