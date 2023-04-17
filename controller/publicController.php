<?php

if(isset($_GET['page'])){

    switch($_GET['page']){
        
        case 'electrophone': 
            $elec = donneCatInstru($db);
            include "../view/public_view/electrophone.php";
            break;
        
        case 'idiophone':
            $idioph = Idioph($db) ;
            include "../view/public_view/idiophone.php";
            break;
        
        case 'membranophone':
            $membranophone = Membranophone($db);
            include "../view/public_view/membranophone.php";
            break;

        case 'contact':
          
            include "../view/public_view/contact.php";
            break;

    default:
    $instru = donneInstru($db);
        include_once "../view/public_view/homePage.php";
        break;
    }
}else{
    $instru = donneInstru($db);
    include_once "../view/public_view/homePage.php";
}
