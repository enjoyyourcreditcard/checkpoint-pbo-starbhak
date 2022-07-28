<div class="head">
    <img class="gambar" src="assets/images/default-pp.jpg">
    <div class="text1">
        <h2>Check Point</h2>
        <br>
        <h5><i class="bi bi-person-fill"></i> {{ auth()->user()->name }}</h5>
        <h5><i class="bi bi-postcard-fill"></i> {{ auth()->user()->nik }}</h5>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-info">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('catatan-perjalanan*') ? 'active' : ''}}" href="/catatan-perjalanan">Catatan Perjalanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/isi-data">Isi Data</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="nav-link" type="submit" style="border: none; background: none">log
                            out</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>