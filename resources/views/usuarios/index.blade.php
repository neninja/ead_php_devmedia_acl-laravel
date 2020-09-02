@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Lista de Usuários</div>
            <table class="table table-bordered">
                <thead>
                  <tr>
                     <th>Username</th>
                     <th>Nome</th>
                     <th>E-mail</th>
                     <th>Cargo</th>
                     <th>Ações</th>
                  </tr>
                </thead>
              <tbody>
                @foreach($usuarios as $usuario)
                 <tr>
                  <td>{{$usuario->login}}</td>
                  <td>{{$usuario->name}}</td>
                  <td>{{$usuario->email}}</td>
                  <td>{{$usuario->cargo}}</td>
                  <td>
                   <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>
                  </td>
                 </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
