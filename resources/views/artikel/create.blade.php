@extends('layouts.app')

@section('title','artikel')

@section('content')   
<h1>Tambah Artikel</h1>
<div class="card">
    <form action="{{route('artikel.store')}}" method="POST" enctype="multipart/form-data">
    
        @csrf
    
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="judul"  value="{{ old('judul') }}">
            @error('judul')
                <p class="error">
                    *{{ $message }}
                </p>
            @enderror
        </div>
    
        <br>
    
        <div class="form-group">
            <label>Isi</label>
            <textarea name="isi">{{ old('isi') }}</textarea>
            @error('isi')
                <p class="error">
                    *{{ $message }}
                </p>
            @enderror
        </div>

        <div class="form-group">
            <input
    type="file"
    name="gambar"
>
        </div>
    
        <br>
    
        <button type="submit" class="btn">
            Simpan
        </button>
        <a href="/artikel" class="btn">cancel</a>
    
    </form>
</div>
@endsection
