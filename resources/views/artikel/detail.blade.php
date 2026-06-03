@extends('layouts.app')

@section('title','artikel')

@section('content')   
<div class="detail">
    <h1>{{$artikel->judul}}</h1>
    <p>{{$artikel->isi}}</p>
    <p>{{$artikel->isi}}</p>
    <a href="{{route('artikel.index')}}" class="btn">close</a>
    <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn">edit</a>
    <form action="/artikel/{{$artikel->id}}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn">
        delete
    </button>

</form>
</div>
@endsection