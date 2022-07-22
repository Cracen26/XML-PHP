<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>xml-php</title>
</head>
<body class="bg-light">
    <!-- Image and text -->
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="https://img.favpng.com/23/12/7/xml-icon-xml-file-format-symbol-icon-interface-icon-CiAK3h6c.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            XML-Validator
            </a>
        </nav>
    </div>
    <br>
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Programme cinema
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="background-image: url(images/cinema.svg);background-size:contain;background-repeat:no-repeat;background-position:center;opacity:100%;">
                    <form action="">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Objet</label>
                            <input type="text" id="topic" class="form-control"  name="topic" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="deadline" >Echéance</label>
                            <input type="date" id="deadline" class="form-control" name="deadline" style="opacity: 90%;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="condition" >Conditions</label>
                            <input type="text" id="condition" class="form-control"  name="condition" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="note" >Note</label>
                            <input type="text" id="note" class="form-control"  name="note" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="depart" >Lieu de départ</label>
                            <input type="text" id="depart" class="form-control"  name="departure" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="arrive" >Destination</label>
                            <input type="text" id="arrive" class="form-control"  name="arrival" style="opacity: 90%;">
                            </div>
                            <div class="col-md-12 text-center mt-5">
                            <button type="submit" class="btn btn-warning"> Enregistrer</button>
                            </div>
                        </div>
                    </form>
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
                <div class="accordion-body" style="background-image: url(images/restau.svg);background-size:contain;background-repeat:no-repeat;background-position:center;opacity:100%;">
                <form action="">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Objet</label>
                            <input type="text" id="topic" class="form-control"  name="topic" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="deadline" >Echéance</label>
                            <input type="date" id="deadline" class="form-control" name="deadline" style="opacity: 90%;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="condition" >Conditions</label>
                            <input type="text" id="condition" class="form-control"  name="condition" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="note" >Note</label>
                            <input type="text" id="note" class="form-control"  name="note" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="depart" >Lieu de départ</label>
                            <input type="text" id="depart" class="form-control"  name="departure" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="arrive" >Destination</label>
                            <input type="text" id="arrive" class="form-control"  name="arrival" style="opacity: 90%;">
                            </div>
                            <div class="col-md-12 text-center mt-5">
                            <button type="submit" class="btn btn-warning"> Enregistrer</button>
                            </div>
                        </div>
                    </form>
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
                <div class="accordion-body" style="background-color: teal;">
                <form action="">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Code</label>
                            <input type="text" id="topic" class="form-control"  name="code">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="deadline" >Titre</label>
                            <input type="text" id="deadline" class="form-control" name="titre">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="condition" >Mois</label>
                            <input type="month" id="condition" class="form-control" name="start" min="" value="">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="note" >Annee</label>
                            <input type="year" id="note" class="form-control"  name="note">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="depart" >Lieu de départ</label>
                            <input type="text" id="depart" class="form-control"  name="departure">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="arrive" >Destination</label>
                            <input type="text" id="arrive" class="form-control"  name="arrival">
                            </div>
                            <div class="col-md-12 text-center mt-5">
                            <button type="submit" class="btn btn-warning"> Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>