{{-- resources/views/characters.blade.php --}}
@extends('web::layouts.grids.12')

@section('title', 'Characters List')
@section('page_header', 'Characters List')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список Персонажей</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Имя Персонажа</th>
                    <th>Статус</th>
                    <th>Текущий Скилл</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->character_name }}</td>
                        <td>{{ $user->is_omega ? 'Омега' : 'Альфа' }}</td>
                        <td>{{ $user->current_skill }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection