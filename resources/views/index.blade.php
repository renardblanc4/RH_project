@extends('layouts.app')



@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Liste des employes</h1>

    <!-- Formulaire de recherche -->
    

    <div class="d-flex mb-3">
        <input type="text" id="searchInput" placeholder="Rechercher par nom" class="form-control me-2" onkeyup="searchDocuments()">
    </div>

   
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        
                        <th>Nom</th>
                        <th>Situation matrimoniale</th>
                        <th>Date de naissance</th>
                        <th>Adresse</th>
                        <th>Téléphone portable et/ou fixe</th>
                        <th>Date de recrutement</th>
                        <th>Email</th>
                        <th>Date d'affectation au CRIPEN</th>
                        <th>Nom de la personne à contacter en cas d'urgence</th>
                        <th>Téléphone à contacter en cas d'urgence</th>
                        <th>Fonction exercée au CRIPEN</th>
                        <th>Commission/service</th>
                        
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="documentsTable">
                    @foreach ($employes as $employe)
                        <tr>
                            
                            <td>{{ $employe->nom }}</td>
                            <td>{{ $employe->situation_matrimoniale }}</td>
                            <td>{{ $employe->date_naissance }}</td>
                            <td>{{ $employe->adresse }}</td>
                            <td>{{ $employe->telephone }}</td>
                            <td>{{ $employe->date_recrutement }}</td>
                            <td>{{ $employe->email }}</td>
                            <td>{{ $employe->date_affectation }}</td>
                            <td>{{ $employe->nom_personne_urgence }}</td>
                            <td>{{ $employe->telephone_urgence }}</td>
                            <td>{{ $employe->fonction }}</td>
                            <td>{{ $employe->commission }}</td>
                          
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
</div>
<script>
    function searchDocuments() {
        var input = document.getElementById('searchInput').value.toUpperCase();
        var table = document.getElementById('documentsTable');
        var tr = table.getElementsByTagName('tr');
    
        for (var i = 0; i < tr.length; i++) {
            var td = tr[i].getElementsByTagName('td')[0];
            if (td) {
                var txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(input) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
@endsection


