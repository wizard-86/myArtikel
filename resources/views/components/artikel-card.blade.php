<div class="card">

    <h2>{{ $artikel->judul }}</h2>

    <p>{{ $artikel->isi }}</p>

    <br>

    <a href="{{ route('artikel.show', $artikel->id) }}" class="btn">
        Detail
    </a>

</div>