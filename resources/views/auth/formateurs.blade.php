@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Remplissez les informations en tant que formateur !') }}</div>

                <div class="card-body">

                {{--{!! dd(request()->all())!!}--}}
                    <form method="POST" action="{{ route('register.custom', ) }}">
                        @csrf
                        <input type="text" name="old_request[]" value="{{ json_encode(request()->all()) }}">
                        <div class="row mb-3">
                            <label for="specialite" class="col-md-4 col-form-label text-md-right">{{ __('Specialite') }}</label>

                            <div class="col-md-6">
                                <input id="specialite" type="text" class="form-control @error('specialite') is-invalid @enderror" name="specialite" value="{{ old('specialite') }}" required autocomplete="specialite" autofocus>

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                                @error('specialite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('exprience') }}" required autocomplete="exprience">

                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="etude" class="col-md-4 col-form-label text-md-right">{{ __('Nombre d\'Etude') }}</label>

                            <div class="col-md-6">
                                <input id="etude" type="number" class="form-control @error('etude') is-invalid @enderror" name="etude" required autocomplete="etude">

                                @error('etude')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="niveau" class="col-md-4 col-form-label text-md-right">{{ __('Niveau') }}</label>

                            <div class="col-md-6">
                                <select id="niveau" class="form-control" name="niveau">
                                    <option value="0">License</option>
                                    <option value="1">Master</option>
                                    <option value="2">Doctora</option>
                                </select>

                                @error('niveau')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="diplome" class="col-md-4 col-form-label text-md-right">{{ __('Diplome') }}</label>

                            <div class="col-md-6">
                                <input id="diplome" type="text" class="form-control" name="diplome">

                                @error('diplome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
