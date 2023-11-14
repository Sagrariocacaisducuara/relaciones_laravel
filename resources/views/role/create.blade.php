@extends('layouts.app')

@section('content')
<a href="{{ route('role.index') }}">regresar</a>
<form method="post" action="{{ route('role.store') }}">

    @csrf
    
    <label for="">Nombre del rol: </label>
    <input type="text" name="nombre_rol"/>



    <input type="submit" value="Create"/>

</form>