@extends('layouts.app')

@section('content')
<a href="{{ route('user.index') }}">regresar</a>
<form method="post" action="{{ route('user.store') }}">

    @csrf
    
    <label for="">Numero Documento: </label>
    <input type="text" name="nro_doc"/>

    <label for="">nombre usuario: </label>
    <input type="text" name="nombre_usuario"/>

    <label for="">Email: </label>
    <input type="text" name="email"/>

    <label for="">Password: </label>
    <input type="password" name="password"/>

    <label for="">Id del rol: </label>
    <input type="text" name="id_rol"/>

    <input type="submit" value="Create"/>

</form>
