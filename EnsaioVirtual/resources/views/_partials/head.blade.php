<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="/">Home</a>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('show.index') }}">Próximos Shows </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('contact.index') }}">Contato </a>
                </li>
                @if(Auth()->check() && auth()->user()->is_admin == 1)
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('rehearsal.index') }}">Ensaios </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('setlist.index') }}">Setlist </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('users.index') }}">Usuários </a>
                  </li>
                @endif
              </ul>  
            </div>  
            <div class="col-2">
              <ul class="navbar-nav mr-auto">
                @if(Auth::user())
                  <li class="nav-item">
                    <a class="nav-link" href="">{{ Auth::user()->name }}</a>
                  </li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-dark" >Sair</button>
                  </form>
                @else
                  <li class="nav-item">
                    <a class="nav-link"  href="{{ route('login') }}">Admin</a>
                  </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <br>
   @yield('body')
  </div>
</script>
<footer class="footer navbar-fixed-bottom">
<br>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="https://www.facebook.com/quintajustaoficial">
                  <img src="/Icons/facebook.svg" alt="" width="30" height="24">
                </a>
                <a class="navbar-brand" href="https://www.instagram.com/quintajustaoficial/">
                  <img src="/Icons/instagram.svg" alt="" width="30" height="24">
                </a>
                <a class="navbar-brand" href="https://www.youtube.com/user/BezinhaFreitas/videos">
                  <img src="/Icons/youtube.svg" alt="" width="30" height="24">
                </a>
                <a class="navbar-brand" href="https://soundcloud.com/quintajustaofficial">
                  <img src="/Icons/Cloud.svg" alt="" width="30" height="24">
                </a>                 
              </ul>
            </div>
            <div class="col-2">
              <ul class="navbar-nav mr-auto">
                <span class="navbar-text">Projeto desenvolvido por Bethânia Freitas</span>
              </ul>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </nav>

</footer>
</body>
