@extends('layouts.base')

@section('title', 'My records')

@section('main')

    <p class="text-right"><a href="{{ route('bb.add') }}">Add advertisement</a></p>
    @if (count($bbs) > 0)
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Product</th>
                <th>Price, rub</th>
                <th colspan="2">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bbs as $bb)
                <tr>
                    <td><h3>{{ $bb->title }}</h3></td>
                    <td>{{ $bb->price }}</td>
                    <td><a href="{{ route('bb.edit', ['bb' => $bb->id]) }}">Изменить</a></td>
                    <td><a href="{{ route('bb.delete', ['bb' => $bb->id]) }}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
    @if (count($bbs) === 0)
    <h1>Нет объявлений</h1>
    @endif
@endsection
