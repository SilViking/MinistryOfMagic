<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">
    <img src="/imgs/logo.png" width="50" height="50" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/homee">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cadastrar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('funcionarios.create')}}">Cadastrar funcionário</a>
            <a class="dropdown-item" href="{{route('salas.create')}}">Cadastrar Sala</a>
            <a class="dropdown-item" href="{{route('departamentos.create')}}">Cadastrar Departamento</a>
          </div>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Listar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('salas.index')}}">Listar Salas</a>
            <a class="dropdown-item" href="{{route('departamentos.index')}}">Listar Departamentos</a>
          </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/alocarfuncionario">Alocar Funcionário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/exibir">Exibir Funcionários</a>
      </li>      
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
    </ul>
  </div>
</nav>
