<div class="main-nav-wrapper">
    <div class="container">
      <nav class="main-nav navbar navbar-expand-md" role="navigation">
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button><!--//nav-toggle-->

          <div class="navbar-collapse collapse" id="navbar-collapse">
              <ul class="nav navbar-nav">
                  <li class="nav-item"><a class="active nav-link" href="index-2.html">Inicio</a></li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Académico<i class="fas fa-angle-down"></i></a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="courses.html">Cursos</a>
                          <a class="dropdown-item" href="course-single.html">Programa de prácticas</a>
                          <a class="dropdown-item" href="course-single-2.html">Visitas técnicas</a>
                      </div><!--//dropdown-menu-->
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios<i class="fas fa-angle-down"></i></a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Investigación<i class="fas fa-angle-down"></i></a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                          <a class="dropdown-item" href="news.html">Líneas de investigación</a>
                          <a class="dropdown-item" href="news.html">Revistas</a>
                          <a class="dropdown-item" href="news-single.html">Congresos</a>
                          <a class="dropdown-item" href="news-single-2.html">Investigadores</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laboratorios<i class="fas fa-angle-down"></i></a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                          @foreach ($grupos as $grupo)
                            <a class="dropdown-item" href="/grupo/{{$grupo->id}}">{{$grupo->nombre_grupo}}</a>
                          @endforeach

                      </div>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="/eventos">Eventos</a></li>
                  <li class="nav-item"><a class="nav-link" href="/noticias">Noticias</a></li>


              </ul><!--//nav-->
          </div><!--//navabr-collapse-->

    </nav><!--//main-nav-->
  </div><!--//container-->
</div><!--//main-nav-container-->
