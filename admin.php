<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>xml-php</title>
    <style>
        .inp{
            margin-bottom: 10px;
        }
    </style>
    
</head>
<body>
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
        <div class="accordion" id="accordionExample" style="margin: none;">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Programme cinema
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row" style="background-image: url(images/cinema.svg);background-size:contain;background-repeat:no-repeat;background-position:center;opacity:100%;height:300px;">
                    </div>
                    <form action="processCinema.php" method="POST">
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >ID</label>
                            <input type="text" id="topic" class="form-control"  name="id" style="opacity: 90%;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Nom</label>
                            <input type="text" id="topic" class="form-control"  name="nom" style="opacity: 90%;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Genre</label>
                            <input type="text" id="topic" class="form-control"  name="genre" style="opacity: 90%;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Duree</label>
                            <input type="text" id="topic" class="form-control"  name="duree" style="opacity: 90%;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Realisateur</label>
                            <input type="text" id="topic" class="form-control"  name="realisateur" style="opacity: 90%;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Langue</label>
                            <input type="text" id="topic" class="form-control"  name="langue" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                <label for="ajout" >Acteur</label>
                                <input type="text" style="margin-bottom: 10px;" id="ajout" class="form-control"  name="acteur" style="opacity: 90%;">
                                <div class="div" id="champs"></div>
                                <input type="button" class="bouton" name="add_button"  onclick="addActor();" value="Add"/>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Annee</label>
                            <input type="number" id="topic" class="form-control" name="annee" min="1900" max="2099" step="1" value="2016" style="opacity: 90%;"/>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Note</label>
                            <input type="text" id="topic" class="form-control"  name="note" style="opacity: 90%;">
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Spectateur</label>
                            <input type="text" id="topic" class="form-control"  name="spectateur" style="opacity: 90%;">
                            </div>
                            <div class="form-group col-md-6 col-sm-6">
                            <label for="topic" >Synopsis</label>
                            <input type="text" id="topic" class="form-control"  name="synopsis" style="opacity: 90%;">
                            </div>
                            
                            <div class="form-group col-md-12 col-sm-12 bg-light">
                                <label for="topic">Projections</label>
                                <div class="form-group bg-success" style="margin-bottom: 10px;padding: 10px;margin-top: 10px;border-radius:1%;">
                                    <label for="topic" >Horaire</label>
                                    <input type="text" id="topic" class="form-control" placeholder="horaire" name="horaire" style="opacity: 90%;">
                                    <label for="topic" >Jour</label>
                                    <select class="form-select" name="jour" aria-label="Default select example">
                                        <option selected>Lundi</option>
                                        <option value="1">Mardi</option>
                                        <option value="2">Mercredi</option>
                                        <option value="3">Jeudi</option>
                                        <option value="3">Vendredi</option>
                                        <option value="3">Samedi</option>
                                        <option value="3">Dimanche</option>
                                    </select>
                                </div>
                                <div id="projectField"></div>
                                <input type="button" class="bouton" name="add_button"  onclick="addProjection();" value="Add Projection"/>
                            </div>

                            <div class="col-md-12 text-center mt-5">
                            <button type="submit" name='submit' class="btn btn-warning"> Enregistrer</button>
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
                <div class="accordion-body">
                <div class="row" style="background-image: url(images/restau.svg);background-size:contain;background-repeat:no-repeat;background-position:center;opacity:100%;height:300px;">
                </div>
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
                <div class="accordion-body">
                <div class="row" style="background-image: url(images/exam.svg);background-size:contain;background-repeat:no-repeat;background-position:center;opacity:100%;height:300px;">

                </div>
                <form action="processExamen.php" method="POST">
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
                            <select class="form-select" name="mois" aria-label="Default select example">
                                        <option selected>Jan</option>
                                        <option value="1">Fev</option>
                                        <option value="2">Ma</option>
                                        <option value="3">Av</option>
                                        <option value="3">Ma</option>
                                        <option value="3">Juin</option>
                                        <option value="3">Juil</option>
                                        <option selected>Aout</option>
                                        <option value="1">Sep</option>
                                        <option value="2">Oct</option>
                                        <option value="3">Nov</option>
                                        <option value="3">Dec</option>  
                            </select>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                            <label for="note" >Annee</label>
                            <input type="number" id="topic" name="annee" class="form-control" min="1900" max="2099" step="1" value="2022" style="opacity: 90%;"/>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 bg-light">
                                <label for="topic">Questions</label>
                                <div class="form-group bg-success" style="margin-bottom: 10px;padding: 10px;margin-top: 10px;border-radius:1%;">
                                    <label for="topic">Texte</label>
                                    <input type="text" id="topic" class="form-control" placeholder="Texte" name="topic" style="opacity: 90%;">
                                </div>
                                <div id="questionField"></div>
                                <input type="button" class="bouton" name="add_button"  onclick="addQuestion();" value="Add Question"/>
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
<script> 
   
    function addActor() { 
        let c=document.getElementById('champs')
        let r=document.createElement('input')
        r.classList.add("form-control")
        r.classList.add("inp")
        c.append(r)
    }
    function addProjection() { 
        let c=document.getElementById('projectField')
        projection='<div class="form-group bg-success" style="margin-bottom: 10px;padding: 10px;margin-top: 10px;border-radius:1%;"> <label for="topic" >Horaire</label> <input type="text" id="topic" class="form-control" placeholder="horaire" name="horaire" style="opacity: 90%;"> <label for="topic" >Jour</label> <select class="form-select" aria-label="Default select example" name=""> <option selected>Lundi</option><option value="Mardi">Mardi</option><option value="Mercredi">Mercredi</option><option value="Jeudi">Jeudi</option><option value="Vendredi">Vendredi</option><option value="Samedi">Samedi</option><option value="Dimanche">Dimanche</option></select></div>'
        c.insertAdjacentHTML('afterend', projection);
    } 
    function addQuestion() { 
        let c=document.getElementById('questionField')
        question='<div class="form-group bg-success" style="margin-bottom: 10px;padding: 10px;margin-top: 10px;border-radius:1%;"> <label for="topic" >Texte</label> <input type="text" id="topic" class="form-control" placeholder="Texte" name="topic" style="opacity: 90%;"></div>'
        c.insertAdjacentHTML('afterend', question);
    } 
</script> 

</html>