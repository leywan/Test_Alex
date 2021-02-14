@extends('base')

@section('content')
    <br>
    <div class="container">
        <div class="row card bg-dark">
            <h4 class="card-header text-white">Création d'un site</h4>
            <div class="card-body text-white">
                <form action="{{ 'site' }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="status">Enseigne commerciale :</label>
                            <input type="enseigne" class="form-control  @error('enseigne') is-invalid @enderror" name="enseigne" id="enseigne" placeholder="Enseigne commerciale" value="{{ old('enseigne') }}"></div>
                        @error('enseigne')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-6">
                            <label for="permanence_id">Permanence :</label>
                            <input type="permanence_id" class="form-control  @error('permanence_id') is-invalid @enderror" name="permanence_id" id="permanence_id" placeholder="permanence_id ID" value="{{ old('permanence') }}"></div>
                        @error('permanence_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="adresse" class="col-md2 col-form-label">Adresse postale :</label>
                            <input type="adresse" class="form-control  @error('adresse') is-invalid @enderror" name="adresse" id="adresse" placeholder="Adresse" value="{{ old('adresse') }}"></div>
                        @error('adresse')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-6">
                        <label for="adresse2" class="col-md2 col-form-label">Complément d'adresse :</label>
                            <input type="adresse2" class="form-control  @error('adresse2') is-invalid @enderror" name="adresse2" id="adresse2" placeholder="Adresse complémentaire" value="{{ old('adresse2') }}"></div>
                        @error('adresse2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="cp" class="col-md2 col-form-label">Code Postal :</label>
                            <input type="cp" class="form-control  @error('cp') is-invalid @enderror" name="cp" id="cp" placeholder="Code postal" value="{{ old('cp') }}"></div>
                        @error('cp')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-10">
                        <label for="ville" class="col-md2 col-form-label">Ville :</label>
                            <input type="ville" class="form-control  @error('ville') is-invalid @enderror" name="ville" id="ville" placeholder="Ville" value="{{ old('ville') }}"></div>
                        @error('ville')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="tel" class="col-md2 col-form-label">Téléphone :</label>
                            <input type="tel" class="form-control  @error('tel') is-invalid @enderror" name="tel" id="tel" placeholder="Tél" value="{{ old('tel') }}"></div>
                        @error('tel')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-6">
                        <label for="etat" class="col-md2 col-form-label">Etat :</label>
                            <input type="etat" class="form-control  @error('etat') is-invalid @enderror" name="etat" id="etat" placeholder="Etat" value="{{ old('etat') }}"></div>
                        @error('etat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
