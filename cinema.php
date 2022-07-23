<DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>xml-cinema</title>
    <style>
        .inp{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="https://img.favpng.com/23/12/7/xml-icon-xml-file-format-symbol-icon-interface-icon-CiAK3h6c.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            XML-Validator
            </a>
        </nav>
    </div>
    <br>
    <h1> PROGRAMME DU CINEMA </h1>
</body>


</html>





<?php
    if (file_exists('./xml/programme.xml')) {
        $xml = simplexml_load_file('./xml/programme.xml');
        // $films = new SimpleXMLElement($xml);

        foreach($xml->film as $film){


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
            echo "<br><br>";        
        }
    }else {
        exit('Echec lors de l\'ouverture du fichier testA.xml.');
    }
 
?>