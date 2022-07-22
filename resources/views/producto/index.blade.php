@extends('Template.template')
@section('plantillaweb')

<h2>LISTADO DE clientes</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombes</th>
        <th scope="col">Tipo_documento</th>
        <th scope="col">numero_doc</th>
        <th scope="col">direccion</th>
        <th scope="col">celular</th>
        <th scope="col">email</th>
      </tr>


      
    </thead>
      <tbody>
        @foreach ($ as $T)Cliente
      <tr>
        <th scope="row">{{$T->Nombres}}</th>
        <td scope="row"> {{$T->Tipo_documento}}</td>
        <td scope="row"> {{$T->numero_doc}}</td>
        <td scope="row"> {{$T->direcion}}</td>
        <td scope="row"> {{$T->celular}}</td>
        <td scope="row"> {{$T->email}}</td>
        
        <td>

          <a href="{{route('Cliente.edit',$T)}}" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td>
          <form action="" method="post">
            @method('DELETE')
            @csrf
          <a href="{{route('Cliente.destroy',$T)}}" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Eliminar</a>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$teachers->links()}}
@endsection
