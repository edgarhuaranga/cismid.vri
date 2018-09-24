@extends('layouts.admin_master')
@section('content')
  <div class="content container">
              <div class="page-wrapper">
                  <header class="page-heading clearfix">
                      <h1 class="heading-title float-left">{{$grupo->nombre_grupo}}</h1>
                  </header>
                  <div class="page-content">
                      <div class="row page-row">
                          <div class="team-wrapper col-lg-8 col-md-7 col-12">

                              @foreach ($grupo->miembros as $miembro)
                                <div class="row page-row" >
                                    <figure class="thumb col-lg-3 col-4">
                                        <img height="170" width="210" class="img-fluid" src="{{$miembro->url_foto}}"/>
                                    </figure>
                                    <div class="details col-lg-9 col-8">
                                        <h3 class="title">{{$miembro->nombre_miembro}}</h3>
                                        <h4>{{$miembro->cargo_miembro}}</h4>
                                        <p>{{$miembro->interes_miembro}}</p>
                                    </div>
                                </div>
                              @endforeach

                          </div><!--//team-wrapper-->


                          <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">
                              <section class="widget has-divider">
                                  <h3 class="title">Agregar nuevo miembro</h3>
                                  <article class="contact-form col-lg-8 col-md-7  col-12 page-row">
                                      <form method="post" action="/manage/grupos/{{$grupo->id}}/miembros">
                                          {{csrf_field()}}
                                          <div class="form-group name">
                                              <label for="name">Nombre</label>
                                              <input type="text" class="form-control" name="nombre_miembro">
                                          </div>

                                          <div class="form-group phone">
                                              <label>Cargo miembro</label>
                                              <input type="text" class="form-control" name="cargo_miembro">
                                          </div><!--//form-group-->

                                          <div class="form-group phone">
                                              <label>Correo miembro</label>
                                              <input type="email" class="form-control" name="correo_miembro">
                                          </div><!--//form-group-->

                                          <div class="form-group email">
                                              <label >Interés miembro<span class="required">*</span></label>
                                              <textarea name="interes_miembro" rows="8" ></textarea>
                                          </div><!--//form-group-->
                                          <button type="submit" class="btn btn-theme">Agregar miembro</button>
                                      </form>
                                  </article><!--//contact-form-->

                              </section>
                              <section class="widget row-divider">
                                  <h3 class="title">Student Testimonials</h3>
                                  <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                      <div class="carousel-inner">
                                          <div class="carousel-item item">
                                              <blockquote class="quote">
                                                  <i class="fas fa-quote-left"></i>
                                                  I’m very happy interdum eget ipsum. Nunc pulvinar ut nulla eget sollicitudin. In hac habitasse platea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Integer metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.
                                              </blockquote>
                                              <div class="source">
                                                  <p class="people"><span class="name">Marissa Spencer</span><br><span class="title">Curabitur commodo</span></p>
                                                  <img class="profile" src="assets/images/testimonials/profile-1.png" alt="">
                                              </div>
                                          </div>
                                          <div class="carousel-item item">
                                              <blockquote class="quote">
                                                  <i class="fas fa-quote-left"></i>
                                                  I'm very pleased commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.
                                              </blockquote>
                                              <div class="source">
                                                  <p class="people"><span class="name">Marco Antonio</span><br><span class="title"> Gravida ultrices</span></p>
                                                  <img class="profile" src="assets/images/testimonials/profile-2.png" alt="">
                                              </div>
                                          </div>
                                          <div class="carousel-item item active">
                                              <blockquote class="quote">
                                                  <i class="fas fa-quote-left"></i>
                                                  I'm delighted commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.
                                              </blockquote>
                                              <div class="source">
                                                  <p class="people"><span class="name">Kate White</span><br><span class="title"> Gravida ultrices</span></p>
                                                  <img class="profile" src="assets/images/testimonials/profile-3.png" alt="">
                                              </div>
                                          </div>

                                      </div>
                                      <div class="carousel-controls">
                                          <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                                          <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
                                      </div>
                                  </div>
                              </section>
                          </aside>

                      </div><!--//page-row-->
                  </div><!--//page-content-->
              </div><!--//page-->
          </div><!--//content-->
      </div><!--//wrapper-->

@endsection
