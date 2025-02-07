<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/form_ajout.js') }}"></script>

<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('css/form_ajout.css') }}">

   
</head>

<body>
<!-----------------------------Partie HTML--------------------------------------------->

<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Fiche de renseignements</strong></h2>
                <p>NB : blablabla</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Etat civil, Situation professionnelle, Situation familiale</strong></li>
                                <li id="personal"><strong>Diplome obtenus / en cours de préparation</strong></li>
                                <li id="payment"><strong>Formation, Stage et Séminaire auxquels vous avez participé hors du CRIPEN</strong></li>
                                <li id="confirm"><strong>Formation, Stage et Séminaire auxquels vous avez participé hors du CRIPEN</strong></li>
                            </ul>
                            <!-- fieldsets -->


                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Information Personnelles</h2>
                                    <input type="text" name="nom" placeholder="Nom"/>
                                    <div class="col-9">
                                    
                                    <label>Situation matrimoniale</label>
                                    
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected> Choisir       </option>
                                                <option>Célibataire</option>
                                                <option>Marié(e)</option>
                                                <option>Divorcé(e)</option>
                                                <option>Veuf(e)</option>
                                                
                                            </select>
                                            
                                        </div>

                                        <div >
                                        <label for="birthday">Date de naissance:</label>
                                        <input type="date" id="birthday" name="birthday"></div>
  
                                       
                 
                                     
                                <input type="text" name="adresse" placeholder="adresse"/>
                                <input type="tel" name="telephone" placeholder="Téléphone"/>
                                <div >
                                        <label >Date de recrutement:</label>
                                        <input type="date" id="recrutement" name="recrutement">
                                    </div>

                                <div >
                                        <label >Date d'affectation:</label>
                                        <input type="date" id="affectation" name="affectation"></div>
                                      
                                        <input type="email" name="email" placeholder="Email"/>
                                        <input type="text" name="personne_urgence" placeholder="Nom de la personne a contacter en cas d'urgence"/>
                                        <input type="text" name="fonction" placeholder="Fonction exercée au CRIPEN"/>
                                        <input type="text" name="service" placeholder="Commission/Service"/>

                                        <label>Affectation précédentes : (veuillez indiquer les deux derniers établissements scolaire ou vous avez enseigné)</label>
                                        <input type="text" name="etablisement1" placeholder="Nom de l'établisement"/>
                                        <input type="text" name="etablisement1" placeholder="Nom de l'établisement"/>
                                        
                                    </div>

                                <input type="button" name="next" class="next action-button" value="Suivant"/>
                            </fieldset>
                            <fieldset>



                          
                            
                                <div class="form-card">
                                    <h2 class="fs-title">Diplome Obtenus</h2>
                                    <label>Veuillez indiquer les deux diplômes les plus élevés détenus en produire une copie si possible </label>
                                    <input type="text" name="diplome1" placeholder="Intitulé du diplôme"/>
                                    <input type="text" name="diplome1Annee" placeholder="Année d'obtention"/>
                                    <input type="text" name="diplome2" placeholder="Intitulé du diplôme"/>
                                    <input type="text" name="diplome2Annee" placeholder="Année d'obtention"/>
                                    
                                    <h2 class="fs-title">Diplome en cours de préparation</h2>
                                    
                                    <input type="text" name="diplome_en_cours" placeholder="Intitulé du diplôme"/>
                                </div>

                                                 <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                                <input type="button" name="next" class="next action-button" value="Suivant"/>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div>
                                        <br>
                                    </div>
                                    <label class="pay">Card Holder Name*</label>
                                    <input type="text" name="holdername" placeholder=""/>
                                    <div class="row">
                                        <div class="col-9">
                                            <label class="pay">Card Number*</label>
                                            <input type="text" name="cardno" placeholder=""/>
                                        </div>
                                        <div class="col-3">
                                            <label class="pay">CVC*</label>
                                            <input type="password" name="cvcpwd" placeholder="***"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label class="pay">Expiry Date*</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select>
                                            <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button name="previous" class="previous action-button-previous"> Précédent</button>
                                <button name="make_payment" class="next action-button"> Confirmer</button>
                                
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3">
                                            <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
 









    

/* Accordion styles */
 .accordion {
            width: 100%;
            max-width: 384px;
            margin: 30px auto 20px;
            background: #FFF;
            border-radius: 4px;
        }

        .accordion .link {
            cursor: pointer;
            display: block;
            padding: 15px 15px 15px 42px;
            color: #4D4D4D;
            font-size: 14px;
            font-weight: 700;
            border-bottom: 1px solid #CCC;
            position: relative;
            transition: all 0.4s ease;
        }

        .accordion li:last-child .link { border-bottom: 0; }

        .accordion li i {
            position: absolute;
            top: 16px;
            left: 12px;
            font-size: 18px;
            color: #595959;
            transition: all 0.4s ease;
        }

        .accordion li i.fa-chevron-down {
            right: 12px;
            left: auto;
            font-size: 16px;
        }

        .accordion li.open .link { color: #AA00FF; }
        .accordion li.open i { color: #AA00FF;}
        .accordion li.open i.fa-chevron-down {
            transform: rotate(180deg);
        }

        .submenu {
            display: none;
            background: #444359;
            font-size: 14px;
        }

        .submenu li { border-bottom: 1px solid #4b4a5e; }

        .submenu a {
            display: block; 
            text-decoration: none;
            color: #d9d9d9;
            padding: 12px;
            padding-left: 42px;
            transition: all 0.25s ease;
        }

        .submenu a:hover {
            background: #b63b4d;
            color: #FFF;
        }



* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
}

/*Background color*/
#grad1 {
    background-color: #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA);
}

/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 20px;
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;

    /*stacking fieldsets above each other*/
    position: relative;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

#msform fieldset .form-card {
    text-align: left;
    color:rgba(0, 0, 0, 0.92);
}

#msform input, #msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0;
}

/*Blue Buttons*/
#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
}

/*Previous Buttons*/
#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
}

/*Dropdown List Exp Date*/
select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px;
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue;
}

/*The background card*/
.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
}

/*FieldSet headings*/
.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey;
}

#progressbar .active {
    color: #000000;
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative;
}

/*Icons in the ProgressBar*/
#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023";
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007";
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d";
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c";
}

/*ProgressBar before any progress*/
#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px;
}

/*ProgressBar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before, #progressbar li.active:after {
    background: skyblue;
}

/*Imaged Radio Buttons*/
.radio-group {
    position: relative;
    margin-bottom: 25px;
}

.radio {
    display:inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor:pointer;
    margin: 8px 2px; 
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
}

/*Fit image in bootstrap div*/
.fit-image{
    width: 100%;
    object-fit: cover;
} 




$(document).ready(function() {
    var current_fs, next_fs, previous_fs; // fieldsets
    var opacity;

    $(".next").click(function() {
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        // Ajouter la classe active dans le progressbar
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        // Afficher le prochain fieldset
        next_fs.show();
        // Cacher le fieldset actuel avec animation
        current_fs.animate({ opacity: 0 }, {
            step: function(now) {
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({ 'opacity': opacity });
            },
            duration: 600
        });
    });

    $(".previous").click(function() {
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        // Retirer la classe active dans le progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        // Afficher le précédent fieldset
        previous_fs.show();
        current_fs.animate({ opacity: 0 }, {
            step: function(now) {
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({ 'opacity': opacity });
            },
            duration: 600
        });
    });
});

