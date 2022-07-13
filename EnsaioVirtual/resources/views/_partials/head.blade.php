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
  <div class="container w-75 p-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
          <div class="row">
            <div class="col-10">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('show.index') }}">Shows </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('rehearsal.index') }}">Ensaios </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('setlist.index') }}">Setlist </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('users.index') }}">Usuários </a>
                </li>
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
                    <a class="nav-link"  href="{{ route('login') }}">Entrar</a>
                  </li>
                  <li>
                    <a class="nav-link" href="{{ route('register') }}">Cadastrar</a>
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
</body>
