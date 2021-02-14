@extends('base')

@section('content')
    <br>
    <div class="container">
        <div class="row card bg-dark">
            <h4 class="card-header text-white">Création permanence</h4>
            <div class="card-body text-white">
                <form action="{{ 'permanence' }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="status">Status :</label>
                            <input type="status" class="form-control  @error('status') is-invalid @enderror" name="status" id="status" placeholder="Status de la société" value="{{ old('status') }}"></div>
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-6">
                        <label for="raison">Raison sociale :</label>
                            <input type="raison" class="form-control  @error('raison') is-invalid @enderror" name="raison" id="raison" placeholder="Raison sociale" value="{{ old('raison') }}"></div>
                        @error('raison')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-10">
                        <label for="siret" class="col-md2 col-form-label">N° de SIRET :</label>
                            <input type="siret" class="form-control  @error('siret') is-invalid @enderror" name="siret" id="siret" placeholder="SIRET" value="{{ old('siret') }}"></div>
                        @error('siret')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="form-group col-md-2">
                        <label for="ape" class="col-md2 col-form-label">Code APE :</label>
                            <input type="ape" class="form-control  @error('ape') is-invalid @enderror" name="ape" id="ape" placeholder="Code APE" value="{{ old('ape') }}"></div>
                        @error('ape')
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
                        <label for="email" class="col-md2 col-form-label">Email :</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}"></div>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
