@extends('Template.template')
@section('plantillaweb')

<div class="container justify-center">
    <h2>Formulario Registro</h2>
    <form action="{{route('Cliente.store')}}" method="post" class="form">
        {{ csrf_field() }}
     <div class="mb-3">
       
       {{-- input doble --}}
        
        <div class="mb-3">
            <label for="" class="form.label">fecha:</label>
            <input type="num" class="form-control" name="Fecha">
            
            
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">cliente:</label>
            <input type="text" class="form-control" name="cliente">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Numero_articulos</label>
            <input type="number" class="form-control" name="Numero_articulos">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">codigo_articulo</label>
            <input type="number" class="form-control" name="Codigo_articulo">
        </div>

    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre_articulo</label>
        <input type="text" class="form-control" name="Nombre_articulo">
    </div>
    


    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Sub_total</label>
        <input type="number" class="form-control" name="Sub_total">
    </div>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">IVA</label>
        <input type="number" class="form-control" name="IVA">
    </div>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Valor_total</label>
        <input type="number" class="form-control" name="Valor_total">
    </div>



        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>
</div>
@endsection
