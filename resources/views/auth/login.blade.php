@extends('layouts.app')

@section('title', 'login')


@section('content')
     <form action="/login" method="POST">
    
        @csrf
    
        <div class="form-group">
            <label>username</label>
            <input type="text" name="username"  value="{{ old('username') }}">
            {{-- @error('judul')
                <p class="error">
                    *{{ $message }}
                </p>
            @enderror --}}
        </div>
    
        <br>
    
        <div class="form-group">
            <label>password</label>
            <input type="password" name="password"  value="{{ old('password') }}">
            {{-- @error('isi')
                <p class="error">
                    *{{ $message }}
                </p>
            @enderror --}}
        </div>
    
        <br>
    
        <button type="submit" class="btn">
            Login
        </button>
        <a href="/" class="btn">Back</a>
    
    </form>
@endsection
