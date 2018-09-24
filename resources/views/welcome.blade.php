@extends('layouts.master')
@section('content')
  <div class="content container">
      <div id="promo-slider" class="slider flexslider">
          <ul class="slides">
              @foreach ($promos as $promo)
                <li>
                    <img src="{{$promo->path_imagen}}"  width="1140" height="350"/>
                    <p class="flex-caption">
                        <span class="main" >{{$promo->texto_principal}}</span>
                        <br />
                        <span class="secondary clearfix" >{{$promo->texto_secundario}}</span>
                    </p>
                </li>
              @endforeach
          </ul>
      </div>

      <section class="promo box box-dark">
        <div class="row">
            <div class="col-lg-9 col-12">
            <h1 class="section-heading">{{$basics->nombre_centro}}</h1>
                <p>{{$basics->descripcion_centro}}</p>
            </div>
            <div class="col-lg-3 col-12">
                <a class="btn btn-cta" href="#"><i class="fas fa-play-circle"></i>Visítanos</a>
            </div>
        </div>
      </section>
      <section class="news">
          <h1 class="section-heading text-highlight"><span class="line">Últimas noticias</span></h1>
          <div class="carousel-controls">
              <a class="prev" href="#news-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
              <a class="next" href="#news-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
          </div><!--//carousel-controls-->
          <div class="section-content clearfix">
              <div id="news-carousel" class="news-carousel carousel slide">
                  <div class="carousel-inner">
                      <div class="item carousel-item active">
                        <div class="row">
                          @foreach ($noticias_par as $noticia)
                            <div class="col-lg-4 col-12 news-item">
                                <h2 class="title"><a href="news-single.html">{{$noticia->titulo}}</a></h2>
                                <img class="thumb" src="{{$noticia->url_imagen}}"  height="100" width="100"/>
                                <p>{{$noticia->descripcion_breve}}</p>
                                <a class="read-more" href="/noticias/{{$noticia}}">Más detalles<i class="fas fa-chevron-right"></i></a>
                            </div><!--//news-item-->
                          @endforeach
                        </div><!--//row-->
                      </div><!--//item-->
                      <div class="item carousel-item">
                        <div class="row">
                          @foreach ($noticias_impar as $noticiai) as $noticia)
                            <div class="col-lg-4 col-12 news-item">
                                <h2 class="title"><a href="news-single.html">{{$noticiai->titulo}}</a></h2>
                                <img class="thumb" src="{{$noticiai->url_imagen}}"  alt="" />
                                <p>{{$noticiai->descripcion_breve}}</p>
                                <a class="read-more" href="/noticias/{{$noticiai}}">Más detalles<i class="fas fa-chevron-right"></i></a>
                            </div><!--//news-item-->
                          @endforeach
                        </div><!--//row-->
                      </div><!--//item-->
                  </div><!--//carousel-inner-->
              </div><!--//news-carousel-->
          </div><!--//section-content-->
      </section><!--//news-->

      <div class="row cols-wrapper">
          <div class="col-lg-3 col-12">
              <section class="events">
                  <h1 class="section-heading text-highlight"><span class="line">Eventos</span></h1>
                  <div class="section-content">
                      @foreach($eventos as $evento)
                        <div class="event-item">
                            <p class="date-label">
                                <span class="month">{{$evento->getMes()}}</span>
                                <span class="date-number">{{$evento->getDia()}}</span>
                            </p>
                            <div class="details">
                                <h2 class="title">{{$evento->titulo}}</h2>
                                <p class="time"><i class="far fa-clock"></i>{{$evento->horario}}</p>
                                <p class="location"><i class="fas fa-map-marker-alt"></i>{{$evento->lugar}}</p>
                            </div><!--//details-->
                        </div><!--event-item-->
                      @endforeach
                      <a class="read-more" href="events.html">All events<i class="fas fa-chevron-right"></i></a>
                  </div><!--//section-content-->
              </section><!--//events-->
          </div><!--//col-md-3-->
          <div class="col-lg-6 col-12">
              <section class="video">
                  <h1 class="section-heading text-highlight"><span class="line">Video Tour</span></h1>
                  <div class="carousel-controls">
                      <a class="prev" href="#videos-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                      <a class="next" href="#videos-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
                  </div><!--//carousel-controls-->
                  <div class="section-content">
                     <div id="videos-carousel" class="videos-carousel carousel slide">
                          <div class="carousel-inner">
                              <div class="carousel-item item active">
                                <div class="embed-responsive embed-responsive-16by9 mb-2">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/r9LelXa3U_I?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                              </div><!--//item-->
                              <div class="carousel-item item">
                                  <div class="embed-responsive embed-responsive-16by9 mb-2">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/RcGyVTAoXEU?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                              </div><!--//item-->
                              <div class="carousel-item item">
                                  <div class="embed-responsive embed-responsive-16by9 mb-2">
                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/Ks-_Mh1QhMc?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                              </div><!--//item-->
                          </div><!--//carousel-inner-->
                     </div><!--//videos-carousel-->
                      <p class="description">Aenean feugiat a diam tempus sodales. Quisque lorem nulla, ultrices imperdiet malesuada at, suscipit vel lorem. Nulla dignissim nisi ac aliquet semper.</p>
                  </div><!--//section-content-->
              </section><!--//video-->
          </div>
          <div class="col-lg-3 col-12">
              <section class="links">
                  <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
                  <div class="section-content">
                      <p><a href="#"><i class="fas fa-caret-right"></i>E-learning Portal</a></p>
                      <p><a href="#"><i class="fas fa-caret-right"></i>Gallery</a></p>
                      <p><a href="#"><i class="fas fa-caret-right"></i>Job Vacancies</a></p>
                      <p><a href="#"><i class="fas fa-caret-right"></i>Contact</a></p>
                  </div><!--//section-content-->
              </section><!--//links-->

          </div><!--//col-md-3-->
      </div><!--//cols-wrapper-->

  </div><!--//content-->
  </div><!--//wrapper-->
@endsection
