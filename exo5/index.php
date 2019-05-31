<?php

$annee = date('Y');
$noel = mktime(8, 0, 0, 12, 25, $annee);

if ($noel < time())
    $noel = mktime(8, 0, 0, 12, 25, ++$annee);

$tps_restant = $noel - time(); // Différence entre Noël et maintenant.
?>
<!Doctype html>
<html>
    <head>
        <meta charset="UFT-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Partie 9 Exo5</title> 
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="row" style="height:300px">
                <div class="col-12 my-auto">
                    <h3 class="text-info"><?php
                        $annee = mktime();
                        $date1 = mktime(0, 0, 0, 5, 16, 2016);
                         $tps_restant = intval((($annee - $date1)/24)/3600);
                         echo $tps_restant;
                        ?> jours entre ce jour et le 16 Mars 2016.</h3>
                    
                    <?php 
                    //calcul aussi possible et plus pratique !
                    $currentDate = new DateTime("now");
                    $prevDate = new DateTime("2016-05-16");
                    $different = $currentDate->diff($prevDate);
                    
                    echo $different->days .' jours';  
                    ?>
                  
                </div> 
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>