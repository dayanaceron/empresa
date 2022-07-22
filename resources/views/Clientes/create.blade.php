@extends('Template.template')
@section('plantillaweb')

<div class="container justify-center">
    <h2>Formulario Registro</h2>
    <form action="{{route('Cliente.store')}}" method="post" class="form">
        {{ csrf_field() }}
     <div class="mb-3">
       
       {{-- input doble --}}
        
        <div class="mb-3">
            <label for="" class="form.label">Nombre:</label>
            <input type="text" class="form-control" name="NombreS">
            
            
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tipo_documento:</label>
            <input type="text" class="form-control" name="Tipo_documento">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">numero_doc</label>
            <input type="tel" class="form-control" name="Numero_doc">
        </div>

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">direccion</label>
        <input type="text" class="form-control" name="Direccion">
    </div>

    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Celular</label>
        <input type="number" class="form-control" name="Celular">
    </div>

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">email</label>
        <input type="email" class="form-control" name="Email">
    </div>



        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>
@endsection
