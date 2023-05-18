<style>
    .nav-link.btn-primary {
        position: relative;
        overflow: hidden;
    }

    .nav-link.btn-primary:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: translate(-50%, -50%);
        transition: width 0.3s ease, height 0.3s ease;
    }

    .nav-link.btn-primary:hover:after {
        width: 300px;
        height: 300px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">Denta<span>Care</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::is('front.home') ? 'active' : '' }}"><a href="{{ route('front.home') }}" class="nav-link">Anasayfa</a></li>
                <li class="nav-item {{ Route::is('front.about') ? 'active' : '' }}"><a href="{{ route('front.about') }}" class="nav-link">Hakkımızda</a></li>
                <li class="nav-item {{ Route::is('front.service') ? 'active' : '' }}"><a href="{{ route('front.service') }}" class="nav-link">Hizmetler</a></li>
                <li class="nav-item {{ Route::is('front.doctors') ? 'active' : '' }}"><a href="{{ route('front.doctors') }}" class="nav-link">Doktorlar</a></li>
                <li class="nav-item {{ Route::is('front.blogs') ? 'active' : '' }}"><a href="{{ route('front.blogs') }}" class="nav-link">Blog</a></li>
                <li class="nav-item {{ Route::is('front.contact') ? 'active' : '' }}"><a href="{{ route('front.contact') }}" class="nav-link">İletişim</a></li>
                <li class="nav-item cta"><a href="#" class="nav-link btn draw-border btn-primary" data-toggle="modal" data-target="#modalRequest"><span>Randevu Al</span></a></li>
           @auth
             <li class="nav-item cta ml-2"><a href="{{ route('dashboard.index') }}" class="nav-link btn draw-border btn-success"><span>{{ auth()->user()->name }}</span></a></li>
                @else
                <li class="nav-item cta ml-2"><a target="_blank" href="{{ route('login.create') }}" class="nav-link btn draw-border btn-success"><span>Doktor Girişi</span></a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
