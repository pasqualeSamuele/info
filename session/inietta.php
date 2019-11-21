<?php
    /*
        PRIMA RICHIAMARE L'INIETTA POI IL LEGGI
    */
    session_start();  //inizio della sessione, da fare in entrambe le pagine
    $_SESSION["idUtente"] = 3; /*assegno valore alla variabile. 
                                in futuro al posto di "3" ci sarà qualcosa salvato su database*/
?>