<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="https://img.favpng.com/23/12/7/xml-icon-xml-file-format-symbol-icon-interface-icon-CiAK3h6c.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            XML-Client
            </a>
        
        </nav>
</div>
<br>
<div class="container">
    <div class="row text-center bg-light">
        <h3>Cinema</h3>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <img src="images/v.svg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-6 bg-info" style="opacity:70%;">
            <?php
                if (file_exists('xml/cinema.xml')) {
                    $xml = simplexml_load_file('xml/cinema.xml');
                    echo $xml->film[0]->synopsis;
                } else {
                    exit('Echec lors de l\'ouverture du fichier test.xml.');
                }
            ?>
        </div>
    
    </div>
    <br>
    <div class="row text-center bg-light">
        <h3>Examen</h3>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <img src="images/v.svg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-6 bg-info" style="opacity:70%;">
            <?php
                if (file_exists('xml/cinema.xml')) {
                    $xml = simplexml_load_file('xml/cinema.xml');
                    echo $xml->film[0]->synopsis;
                } else {
                    exit('Echec lors de l\'ouverture du fichier test.xml.');
                }
            ?>
        </div>
    
    </div>
    <br>
    <div class="row text-center bg-light">
        <h3>Restaurant</h3>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <img src="images/v.svg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-6 bg-info" style="opacity:70%;">
            <?php
                if (file_exists('xml/cinema.xml')) {
                    $xml = simplexml_load_file('xml/cinema.xml');
                    echo $xml->film[0]->synopsis;
                } else {
                    exit('Echec lors de l\'ouverture du fichier test.xml.');
                }
            ?>
        </div>
    
    </div>
</div>

<br>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>