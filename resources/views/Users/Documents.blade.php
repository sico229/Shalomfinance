@extends('Template.layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Documents.css') }}">
@endsection
@section('contenu')
    <div id="Documents">
        <div class="container">
            <h6>{{ $user->civilite . ' ' . $user->nom . ' ' . $user->prenom . ',' }}</h6>
            <p>Pour finaliser l'ouverture de votre compte en ligne, veuillez nous envoyer les documents justificatifs de
                votre identité et de votre domicile</p>
            <p>Les documents acceptés sont: </p>
            <ul>
                <li>
                    <strong>justificatif d'identité</strong>
                    <ul>
                        <li>- Carte Nationale d'identité</li>
                        <li>- Passeport</li>
                        <li>- Permis de conduire</li>
                        <li>- Carte de séjour</li>
                    </ul>
                </li>
                <li>
                    <strong>justificatif de domicile</strong>
                    <ul>
                        <li>- Facture d'électricité, de téléphone ou d'eau</li>
                        <li>- Avis d'imposition</li>
                        <li>- Attestation de résidence</li>
                    </ul>
                </li>
            </ul>
            <p>Après envoi de vos documents, nos services anti-fraude étudieront la validité de vos justificatifs et nous
                procéderont à l'ouverture de votre compte en ligne si vos documents sont autentiques</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="user" value="{{ $user->token }}">
                <div class="form-group col-sm-4 my-2">
                    <input type="hidden" name="ErrType" class="ErrType"
                        value="Veuillez préciser le type de document d'identité">
                    <input type="hidden" name="Erreurs" value="Erreur dans votre formulaire">
                    <input type="hidden" name="RetourUpload"
                        value="Vos documents ont bien été envoyés. Nous les étudions et vous aurez un retour dans les heures à suivre. Merci de nous choisir">
                    <input type="hidden" name="DocumentsEnvoyes" value="Documents envoyés">
                    <select class="form-select form-select-sm typeIdentite" aria-label=".form-select-sm example">
                        <option value="" selected>Type de justificatif d'identité</option>
                        <option value="Carte Nationale d'identité">Carte Nationale d'identité</option>
                        <option value="Passeport">Passeport</option>
                        <option value="Titre de séjour">Titre de séjour</option>
                        <option value="Permis de conduire">Permis de conduire</option>
                    </select>
                </div>
                <div class="preview1" id="preview1">

                </div>
                <div class="input-group mb-3">
                    <input type="file" id="identiteFiles" name="identites[]" multiple>
                    <input type="hidden" name="identiteVide"
                        value="Vous n'avez pas choisi une photo de votre justificatif d'identité">

                    <label for="identiteFiles" class="identite">
                        <i class="bi bi-cloud-upload"></i>
                        Choisir les photos de votre justificatif d'identite
                    </label>
                </div>
            </div>
            <div>
                <div class="form-group col-sm-4 my-2">
                    <input type="hidden" name="ErrDom" class="ErrDomicile"
                        value="Veuillez préciser le type de justificatif de domicile">
                    <select class="form-select form-select-sm typeDomicile" aria-label=".form-select-sm example">
                        <option value="" selected>Type de justificatif de domicile</option>
                        <option value="Facture d'électricité">Facture d'électricité</option>
                        <option value="Avis d'imposition">Avis d'imposition</option>
                        <option value="Autres">Autres</option>
                    </select>
                </div>
                <div class="preview1" id="preview2">

                </div>
                <div class="input-group mb-3">
                    <input type="file" id="domicileFile" name="images[]" accept="image/*" multiple>
                    <input type="hidden" name="domicileVide"
                        value="Vous n'avez pas choisi une photo de votre justificatif de domicile">

                    <label for="domicileFile" class="domicile">
                        <i class="bi bi-cloud-upload"></i>
                        Choisir les photos de votre justificatif de domicile
                    </label>
                </div>
            </div>

            <div class="form-group w-100">
                <button class="btn validator12">ENVOYER MES DOCUMENTS</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('public/js/Documents.js') }}"></script>
@endsection
