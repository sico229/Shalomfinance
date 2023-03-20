@extends('Template.Layout2')
@section('styles')
    <link rel="stylesheet" href="{{ asset('public/css/Traducteur.css') }}">
@endsection
@section('contenu')
    <div class="Traducteur container">
        <form action="" method="POST" class="col-md-8 mx-auto">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tables">Tables</label>
                        <input type="text" name="tables" class="form-control">
                        <p>
                            @foreach ($tables as $item)
                                <span>{{ $item . ' ' }}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="langues">Langues</label>
                        <input type="text" name="langues" class="form-control">
                        <p>
                            @foreach ($langues as $item)
                                <span>{{ $item . ' ' }}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <button class="btn btn-md btn-success">Traduire</button>
            </div>
        </form>
    </div>
@endsection
