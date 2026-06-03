@extends('layouts.app')

@section('title','artikel')

@section('content')   
<div class="delete">
    <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST">
         @csrf

    @method('DELETE')
    <h3>delete artikel {{$artikel->judul}}</h3>
    <button type="submit" class="btn">
        Delete
    </button>
    <a href="/artikel/detail/{{ $artikel->id }}" class="btn">Cancel</a>
    </form>
</div>
@endsection
