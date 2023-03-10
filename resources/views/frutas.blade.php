@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row justify-content-md-center">
            <div col-md-12>
                <form action="{{ url('frutas/importar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <label for="formFile" class="form-label">Seleccione el archivo Excel</label>
                        <input class="form-control" type="file" id="formFile" name="documento"> 
                        <br>
                        <button type="submit" class="btn btn-primary">Importar</button> 
                </form>
            </div>
    </div>
</div>
@endsection