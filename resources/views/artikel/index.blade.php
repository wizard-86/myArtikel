@extends('layouts.app')

@section('title','artikel')

@section('content')
    <form action="{{ route('artikel.index') }}" method="GET">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Cari artikel..."
    >

    <button type="submit">
        Cari
    </button>
</form>

    <a href="{{route('artikel.create')}}" class="btn">Add</a>
    <h1>Daftar Artikel</h1>
    @foreach($artikels as $artikel)

        <x-artikel-card :artikel="$artikel" />

    @endforeach
    {{ $artikels->links() }}
@endsection