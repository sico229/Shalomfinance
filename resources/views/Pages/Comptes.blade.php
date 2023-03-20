@extends('Template.layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Comptes.css') }}">
@endsection
@section('contenu')
    <section id="section1">
        <div class="cover">
            <h2> Nos Comptes bancaires</h2>
        </div>
    </section>
    <section id="section2">
        <p>Nous vous accompagnons dans vos projets et nous vous proposons diverses formules de comptes bancaires:</p>

        <div>
            <details>
                <summary>Le compte Epargne</summary>
                <div class="container px-2 row">
                    <div class="col-md-6">
                        <p>Le compte épargne est une formule de compte encore appelé livret</p>
                        <p>Ce type de compte bancaire vous permet de mettre une partie de vos revenues de côté pour un
                            projet à
                            court, moyen ou long terme.</p>
                        <p>Votre épargne est rémunéré à hauteur de 3.4% l'an net d'impôt</p>
                        <p>Votre argent est disponible 24H sur 24</p>
                        <p><a class="btn btn-center" href="{{ route('Register') }}">Ouvrir un compte Epargne</a></p>
                    </div>
                    <div class="col-md-6">
                        <img class="img img-thumbnail" src="{{ asset('public/img/comptes/epargne.jpg') }}" alt="">
                    </div>
                </div>
            </details>
            <details>
                <summary>Le compte Courant</summary>
                <div class="container px-2 row">
                    <div class="col-md-6">
                        <p>Le compte courant vous permet de domicilier votre argent chez nous.</p>
                        <p>Votre compte courant vous permet de bénéficier d'une carte de crédit visa pour vos retraits dans
                            les
                            distributeurs et pour les achats</p>
                        <p>En ouvrant un compte courant chez nous, vous bénéficiez d'un accompagnement personnalisé et de
                            nombreuses
                            solutions innovantes</p>
                        <p>Votre argent est disponible 24H sur 24</p>
                        <p><a class="btn btn-center" href="{{ route('Register') }}">Ouvrir un compte Courant</a></p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('public/img/comptes/courant.webp') }}" alt="" class="img img-thumbnail">
                    </div>
                </div>
            </details>
            <details>
                <summary>Le compte Professionnel</summary>
                <div class="container px-2 row">
                    <div class="col-md-6">
                        <p>Le compte courant vous permet de domicilier votre argent chez nous.</p>
                        <p>Votre compte courant vous permet de bénéficier d'une carte de crédit visa pour vos retraits dans
                            les
                            distributeurs et pour les achats</p>
                        <p>En ouvrant un compte courant chez nous, vous bénéficiez d'un accompagnement personnalisé et de
                            nombreuses
                            solutions innovantes</p>
                        <p>Votre argent est disponible 24H sur 24</p>
                        <p><a class="btn btn-center" href="{{ route('Register') }}">Ouvrir un compte Courant</a></p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('public/img/comptes/pro.webp') }}" alt="" class="img img-thumbnail">
                    </div>
                </div>
            </details>
        </div>
    </section>
    <section id="section2">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('public/img/comptes/1.png') }}" alt="" class="img img-thumbnail">
            </div>
            <div class="col-md-7">
                <h4>Bénéficiez de votre carte Visa</h4>
                <p>Dès l'ouverture de votre compte en ligne, faites la demande de votre carte de retrait Visa</p>
                <p>La carte Visa de <span class="shalom">SHALOMFINANCE</span> vous permet d'effectuer des retraits dans tous
                    les distributeurs en Union
                    Européénne sans frais et à des tarifs exceptionnels partout ailleurs dans le monde</p>
            </div>
        </div>

        <div class="py-5 d-flex justify-content-center">
            <a href="{{ route('Register') }}">Ouvrir un compte en ligne</a>
        </div>
    </section>
    <section id="section3">
        <h4 class="w-100 text-center mt-5">Ouvrez votre compte en ligne depuis chez vous!</h4>
        <h6 class="w-100 text-center">Facile et en quelques clics, ouvrez votre compte en ligne sans vous déplacer de chez
            vous</h6>

        <div>
            <div>
                <span>1</span>
                <p>Remplissez votre demande en ligne</p>
            </div>
            <div>
                <span>2</span>
                <p>Envoyez vos documents justificatifs</p>
            </div>
            <div>
                <span>3</span>
                <p>Votre compte en ligne est ouvert</p>
            </div>
        </div>
        <div>
            <a href="{{ route('Register') }}">Ouvrir un compte en ligne</a>
        </div>
    </section>
@endsection
