<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Client</title>
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
        <div class="accordion" id="accordionExample" style="margin: none;">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Programme cinema
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php
                        if (file_exists('./xml/programme.xml')) {
                            $xml = simplexml_load_file('./xml/programme.xml');
                            // $films = new SimpleXMLElement($xml);
                            foreach($xml->film as $film){
                                //$film = $xml->film[0];

                                echo '<strong>Nom: </strong>',$film['nom'],"<br>" ;
                                echo '<strong>Genre:</strong>',$film['genre'],"<br>" ;
                                echo '<strong>Duree: </strong>',$film['duree'],"<br>" ;
                                echo '<strong>Realisateur: </strong>',$film['realisateur'],"<br>" ;
                                echo '<strong>Langue: </strong>',$film['lang'],"<br>","<br>" ;

                                echo "<strong>Les acteur du film: </strong>";
                                foreach($xml->film->acteurs->acteur as $acteur ){
                                    echo '<br>',$acteur;
                                }

                                echo "<br><br>";

                                echo "<strong>Annee: </strong>",$film->annee,"<br>";
                                echo "<strong>Note presse: </strong>",$film->note['presse'],"<br>";
                                echo "<strong>Note spectateur: </strong>",$film->note['spectateurs'],"<br><br>";

                                echo "<strong>Synopsis: </strong>",$film->synopsis,"<br><br>";

                                foreach($xml->film->projections->projection as $projection ){
                                    echo "<strong>Jour de projection: </strong>",$projection['jour'],"<br>";
                                    foreach($projection->horaire as $horaire ){
                                        echo "<strong>Horaire: </strong>",$horaire,"<br>";
                                    }
                                    echo "<br>";
                                }

                                echo '<hr class="rounded" style="border-top: 8px solid #bbb;border-radius: 5px;color:grey;"> <br>';

                            }


                        } else {
                            exit('Echec lors de l\'ouverture du fichier programme.xml.');
                        }
                    ?>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Description restaurant
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                        <?php
                            if (file_exists('./xml/restauration.xml')) {
                                $xml = simplexml_load_file('./xml/restauration.xml');
                        
                                $information = $xml->information;
                                $carte = $xml->carte;
                                $menus = $xml->menus;
                        
                                
                                echo '<strong> Informations </strong> <br><br>';
                                echo '<strong>Nom: </strong>',$information->nom,"<br>" ;
                                echo '<strong>Restaurateur: </strong>',$information->restaurateur,"<br>" ;
                                echo '<strong>Telephone: </strong>',$information->coordonnees,"<br>" ;
                                echo '<strong>Adresse: </strong>',$information->adresse,"<br>" ;
                                echo '<strong>Description: </strong> <br>','<u>',$information->description->liste,"</u><br>" ;
                                echo $information->description->paragraphe->parties,"<br>" ;
                        
                                echo '<br><hr class="rounded" style="border-top: 8px solid #bbb;border-radius: 5px;color:grey;"> <br>';
                        
                                echo '<strong> Carte </strong> <br><br>';
                                $int = 1;
                                foreach($carte->plat as $plat){
                                    echo '<u>Item ',$int,'</u> <br>';
                                    echo '<strong>Categorie: </strong>',$plat['indication'],"<br>" ;
                                    foreach($plat->description_pm->partie as $partie){
                                        echo '<strong>Description: </strong>',$partie,"<br>";
                                    }
                                    echo '<strong>Prix: </strong>',$plat->prix,$plat->prix['devise'],"<br>";
                                    $int++;
                                }
                        
                                echo '<br><hr class="rounded" style="border-top: 8px solid #bbb;border-radius: 5px;color:grey;"> <br>';
                                echo '<strong> Menus </strong> <br><br>';
                        
                                foreach ($menus->menu as $menu){
                                    echo '<strong>Titre: </strong>',$menu['titre'],"<br>" ;
                                    foreach($menu->description_pm->partie as $partie){
                                        echo '<strong>Description: </strong>',$partie,"<br>";
                                    }
                                    echo "<br>";
                                    $num = 1;
                                    foreach($menu->element as $element){
                                        foreach($carte->plat as $plat){
                                            if((string)$plat['id'] == (string)$element['ref'] ){
                                                echo '<u>Item ',$num,'</u> <br>';
                                                echo '<strong>Categorie: </strong>',$plat['indication'],"<br>" ;
                                                foreach($plat->description_pm->partie as $partie){
                                                    echo '<strong>Description: </strong>',$partie,"<br>";
                                                }
                                                echo '<strong>Prix: </strong>',$plat->prix,$plat->prix['devise'],"<br>";
                                                $num++;
                                            }
                                            
                                        }
                                    }
                                    echo "<br>";
                                    echo "<br>";
                        
                                    echo '<strong>Prix total: </strong>',$menu->prix,$menu->prix['devise'],"<br>";
                                    echo "<br>";
                        
                                }
                            } else {
                                exit('Echec lors de l\'ouverture du fichier examen.xml.');
                            }
                            
                        ?>  
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Examen
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <?php
                            if (file_exists('./xml/examen.xml')) {
                                $xml = simplexml_load_file('./xml/examen.xml');
                                // $films = new SimpleXMLElement($xml);

                                echo '<strong>Code: </strong>',$xml['code'],"<br>" ;
                                echo '<strong>Titre:</strong>',$xml['titre'],"<br>" ;
                                echo '<strong>Mois: </strong>',$xml['mois'],"<br>" ;
                                echo '<strong>Annee: </strong>',$xml['annee'],"<br>" ;
                                echo '<hr class="rounded" style="border-top: 8px solid #bbb;border-radius: 5px;backgroud-color:grey;">';

                                echo "<strong>Questions: </strong>";
                                echo "<br>";
                                $int = 1;
                                foreach($xml->questions->question->xpath('//partie') as $partie){


                                    echo "<strong> ==> : </strong>",$partie,"<br>";

                                    // foreach($question->xpath('//partie') as $partie ){
                                    //     echo "<strong>",(string)$int,"  : </strong>",$partie,"<br>";
                                    // }
                                    $int++;
                                }
                                echo "<br><br>";
                            } else {
                                exit('Echec lors de l\'ouverture du fichier examen.xml.');
                            }
                    ?>

                </div>
                </div>
            </div>
        </div>
    </div>

     
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>