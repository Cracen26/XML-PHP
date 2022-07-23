<?php
    if (file_exists('./xml/programme.xml')) {
        $xml = simplexml_load_file('./xml/programme.xml');
        // $films = new SimpleXMLElement($xml);


        $film = $xml->film[0];

        echo 'Nom : ',$film['nom'],"<br>" ;
        echo 'Genre :',$film['genre'],"<br>" ;
        echo 'Duree: ',$film['duree'],"<br>" ;
        echo 'Realisateur: ',$film['realisateur'],"<br>" ;
        echo 'Langue: ',$film['lang'],"<br>","<br>" ;

        echo " Les acteur du film :";
        foreach($xml->film->acteurs->acteur as $acteur ){
            echo '<br>',$acteur;
        }

        echo "<br><br>";

        echo "Annee: ",$film->annee,"<br>";
        echo "Note presse: ",$film->note['presse'],"<br>";
        echo "Note spectateur: ",$film->note['spectateurs'],"<br><br>";

        echo "Synopsis: ",$film->synopsis,"<br><br>";

        foreach($xml->film->projections->projection as $projection ){
            echo "Jour de projection: ",$projection['jour'],"<br>";
            foreach($projection->horaire as $horaire ){
                echo "Horaire: ",$horaire,"<br>";
            }
            echo "<br>";
        }


    } else {
        exit('Echec lors de l\'ouverture du fichier testA.xml.');
    }

    

   
    





?>