<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>xml-examen</title>
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

    <h1> EXAMEN </h1>
</body>

</html>

<?php

    if (file_exists('./xml/examen.xml')) {
        $examen = simplexml_load_file('./xml/examen.xml');
        

        // Affichage des information sur l'examen 
        echo "<br>";
        echo "Code de l'examen: ",$examen['code'],"<br>";
        echo "Titre: ",$examen['titre'],"<br>";
        echo "Mois: ",$examen['mois'],"<br>";
        echo "Annee: ",$examen['annee'],"<br>";

        
        foreach ($examen->questions->question as $question ){

        }

    
    }else {
        exit('Echec lors de l\'ouverture du fichier examen.xml.');
    }
    


?>