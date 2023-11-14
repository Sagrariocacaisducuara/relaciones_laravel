
@extends('layouts.app')

@section('content')
    <a href="{{ route('role.create') }}">Create new rol</a>

    @forelse ($rol as $role)
        <li>
            <p>{{ $role->nombre_rol }}</p>

            {{-- Iterar sobre los usuarios asociados con el rol --}}
            @forelse ($role->users as $user)
                <p>{{ $user->nombre_usuario }}</p>
            @empty
                <p>No hay usuarios asociados a este rol</p>
            @endforelse
        </li>
    @empty
        <h6>No hay datos</h6>
    @endforelse
@endsection