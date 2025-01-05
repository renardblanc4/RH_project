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

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Fiche de renseignements</h2>
                <p>NB: Cette fiche est établie afin d'actualiser celle archivée dans le dossier professionnel. Elle servira également dans le cadre de la mise en place d'un plan de carrière. Elle doit être donc complètée avec soin et transmise à la direction de l'administration et des ressources financières (DARF).</p>

                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                                <li class="active" id="account"><strong>Etat civil, Situation professionnelle, Situation familiale</strong></li>
                                <li id="personal"><strong>Diplome obtenus / en cours de préparation</strong></li>
                                <li id="payment"><strong>Formation, Stage et Séminaire auxquels vous avez participé hors du CRIPEN</strong></li>
                                <li id="confirm"><strong>Formation, Stage et Séminaire auxquels vous avez participé hors du CRIPEN</strong></li>
                            </ul>
                    <div class="progress">
                    	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                	</div>
                    <br>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                        	<div class="row">
                        		<div class="col-7">
                                <h2 class="fs-title">Information Personnelles</h2>
                            	</div>
                            	
                            </div>

                            <label class="fieldlabels">Charger une photo de vous:</label>
                            <input type="file" name="pic" accept="image/*" >

                            <label class="fieldlabels">Nom: *</label>
                            <input type="text" name="nom" placeholder="Nom" required/>
                             
                            <label class="fieldlabels"> Situation matrimoniale</label>
                                    
                                    <select class="list-dt" required>
                                        <option selected> Choisir       </option>
                                        <option>Célibataire</option>
                                        <option>Marié(e)</option>
                                        <option>Divorcé(e)</option>
                                        <option>Veuf(e)</option>
                                        
                                    </select>
</br>
                            <label class="fieldlabels" for="birthday">Date de naissance:</label>
                            <input type="date" id="birthday" name="birthday" required>
                            <label class="fieldlabels">Adresse : *</label>
                            <input type="text" name="adresse" placeholder="adresse" required/>
                            <label class="fieldlabels">Téléphone: *</label>
                            <input type="tel" name="telephone" placeholder="Téléphone" required/>
                            <label class="fieldlabels">Date de recrutement:</label>
                            <input type="date" id="recrutement" name="recrutement" required>
                            <label class="fieldlabels">Date d'affectation:</label>
                            <input type="date" id="affectation" name="affectation" required>
                            <label class="fieldlabels">Email: *</label>
                            <input type="email" name="email" placeholder="Email " required/>
                            <label class="fieldlabels">Nom de la personne a contacter en cas d'urgence : *</label>
                            <input type="text" name="personne_urgence" placeholder="Nom de la personne a contacter en cas d'urgence" required/>
                            <label class="fieldlabels">Téléphone: *</label>
                            <input type="tel" name="telephone1" placeholder="Téléphone" required/>
                            <label class="fieldlabels">Fonction exercée au CRIPEN: *</label>
                            <input type="text" name="fonction" placeholder="Fonction exercée au CRIPEN" required/>
                            <label class="fieldlabels">Commission/Service: *</label>
                            <input type="text" name="service" placeholder="Commission/Service" required/>
                            <label>Affectation précédentes : (veuillez indiquer les deux derniers établissements scolaire ou vous avez enseigné)</label>
                            <label class="fieldlabels">Nom de l'établisement : *</label>
                            <input type="text" name="etablisement1" placeholder="Nom de l'établisement" required/>
                            <label class="fieldlabels">Période: *</label>
                            <input type="text" name="periode" placeholder="exemple 2020/2022" required/>
                            <label class="fieldlabels">Nom de l'établisement : *</label>
                            <input type="text" name="etablisement1" placeholder="Nom de l'établisement" required/>
                            <label class="fieldlabels">Période: *</label>
                            <input type="text" name="periode" placeholder="exemple 2020/2022" required/>
                            
                        </div>
                        <input type="button" name="next" class="next action-button" value="Suivant"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                        		<div class="col-7">
                                <h2 class="fs-title">Diplome Obtenus/en cours de préparation</h2>
                            	</div>
                            	
                            </div>
                            <label>Veuillez indiquer les deux diplômes les plus élevés détenus en produire une copie si possible </label>
</br>
                            <label class="fieldlabels">Intitulé du diplôme: *</label>
                            <input type="text" name="diplome1" placeholder="Intitulé du diplôme"/>
                            <div>
                                     <label for="file"  class="file-upload-button">Ajouter un fichier:</label>
                                     <input type="file" name="file[]" id="file" accept="application/pdf" multiple required onchange="updateFileName()" required>
                                            
                            </div>
                            
                            <label class="fieldlabels">Intitulé du diplôme: *</label>
                            <input type="text" name="diplome2" placeholder="Intitulé du diplôme" />
                            <div>
                                    <label for="file"  class="file-upload-button">Ajouter un fichier:</label>
                                    <input type="file" name="file[]" id="file" accept="application/pdf" multiple required onchange="updateFileName()">
                                            
                             </div>

                             <label class="fieldlabels">Diplome en cours de préparation</label>
                                    
                            <input type="text" name="diplome_en_cours" placeholder="Intitulé du diplôme"/>
                                    
                            
                        </div>
                        <input type="button" name="next" class="next action-button" value="Suivant"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Formation, Stage et Séminaire auxquels vous avez participé hors du CRIPEN :</h2>
                            	</div>
                            	
                            </div>

                            <label class="fieldlabels">Intitulé</label>
                                    
                            <input type="text" name="formation" placeholder="Intitulé "/>

                
                            <div class="row">
                                 <div class="col-md-6">
                                    <label class="fieldlabels">Durée</label>
                                    <input type="text" class="form-control" name="duree" placeholder="exemple : 5 jours" />
                                </div>
                                <div class="col-md-6">
                                    <label class="fieldlabels">Année</label>
                                    <input type="text" class="form-control" name="annee" placeholder="Année" />
                                </div>
                            </div>


                                    <label class="fieldlabels">Intitulé</label>
                                    
                                    <input type="text" name="formation" placeholder="Intitulé "/>
        
                        
                                    <div class="row">
                                         <div class="col-md-6">
                                            <label class="fieldlabels">Durée</label>
                                            <input type="text" class="form-control" name="duree" placeholder="exemple : 5 jours" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="fieldlabels">Année</label>
                                            <input type="text" class="form-control" name="annee" placeholder="Année" />
                                        </div>
                                    </div>

                                    <label class="fieldlabels">Intitulé</label>
                                    
                                    <input type="text" name="formation" placeholder="Intitulé "/>
        
                        
                                    <div class="row">
                                         <div class="col-md-6">
                                            <label class="fieldlabels">Durée</label>
                                            <input type="text" class="form-control" name="duree" placeholder="exemple : 5 jours" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="fieldlabels">Année</label>
                                            <input type="text" class="form-control" name="annee" placeholder="Année" />
                                        </div>
                                    </div>

                                    <label class="fieldlabels">Veuillez produire si possible une des attestations reçues</label>

                                    <div>
                                    <label for="file"  class="file-upload-button">Ajouter un fichier:</label>
                                    <input type="file" name="file[]" id="file" accept="application/pdf" multiple required onchange="updateFileName()">
                                            
                                    </div>

                                    <div class="form-group">
                                         <input type="checkbox" id="attestation" name="attestation" required>
                                         <label for="attestation">J'atteste l'exactitude des renseignements portés sur la présente fiche</label>
                                    </div>



                           
                        </div>
                        <input type="button" name="next" class="next action-button" value="Envoyer"/>
                        <input type="button" name="previous" class="previous action-button-previous" value="Précédent"/>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                        	<div class="row">
                        		<div class="col-7">
                            		<h2 class="fs-title">Terminer:</h2>
                            	</div>
                            	
                            </div>
                            <br><br>
                            <h2 class="purple-text text-center"><strong>Succès!</strong></h2>
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <img src="{{ asset('images/succes.png') }}" class="fit-image">
                                </div>
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">Merci d'avoir complété la fiche de renseignements.</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
	</div>
</div>

</body>

</html>