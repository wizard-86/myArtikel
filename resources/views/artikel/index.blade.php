@extends('layouts.app')

@section('title','artikel')

@section('content')
    <a href="{{route('artikel.create')}}" class="btn">Add</a>
    <h1>Daftar Artikel</h1>
    @foreach($artikels as $artikel)

        <x-artikel-card :artikel="$artikel" />

    @endforeach
    {{ $artikels->links() }}
@endsection