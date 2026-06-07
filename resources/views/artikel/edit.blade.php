@extends('layouts.app')

@section('title','artikel')

@section('content')    
<div class="edit">
    
    <h1>{{$artikel->judul}}</h1>
    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div>
        <label>Isi</label>
        <textarea name="isi">{{ $artikel->isi }}</textarea>
         @error('isi')
                <p class="error">
                    *{{ $message }}
                </p>
        @enderror
    </div>
    <div>
        @if($artikel->gambar)

    <img
        src="{{ asset('storage/' . $artikel->gambar) }}"
        width="200"
    >

@endif
        <input
    type="file"
    name="gambar"
>
    </div>
    <button type="submit" class="btn">
        Simpan
    </button>
    <a href="{{ route('artikel.show', $artikel->id) }}" class="btn">Cancel</a>
    </form>  
</div>
@endsection
