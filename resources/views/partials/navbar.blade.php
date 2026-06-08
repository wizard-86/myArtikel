<nav>
        <div class="logo">MyArtikel</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{route('artikel.index')}}">Artikel</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/help">Help</a></li>
        </ul>
        <form action="/logout" method="POST">
         <button type="submit">logout</button>
        </form>
    </nav>