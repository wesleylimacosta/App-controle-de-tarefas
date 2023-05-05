@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Acesso negado</div>
                    <div class="card-body">
                        <label class="form-label">Vocẽ não tem acesso a esse recurso</label><br>
                        <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
