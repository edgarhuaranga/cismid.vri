@extends('layouts.admin_master')
@section('content')

  <div class="content container">
              <div class="page-wrapper">
                  <header class="page-heading clearfix">
                      <h1 class="heading-title float-left">Noticias</h1>
                  </header>
                  <div class="page-content">
                      <div class="row page-row">
                          <div class="news-wrapper col-lg-8 col-md-7">

                            <article class="contact-form col-lg-8 col-md-7  col-12 page-row">
                                <h3 class="title">Modificar variables globales</h3>
                                <p>Aquí puedes modificar las variables utilizadas en toda la página web</p>
                                <form method="post" action="/manage/basics/update">
                                    {{csrf_field()}}
                                    <div class="form-group name">
                                        <label for="name">Nombre centro</label>
                                        <input type="text" class="form-control" value="{{$basics->nombre_centro}}" name="nombre_centro">
                                    </div>

                                    <div class="form-group name">
                                        <label for="name">Descripcion del centro</label>
                                        <textarea name="descripcion_centro" rows="10" cols="50">
                                          {{$basics->descripcion_centro}}
                                        </textarea>

                                    </div>

                                    <div class="form-group name">
                                        <label for="name">Dirección</label>
                                        <input type="text" class="form-control" value="{{$basics->direccion}}" name="direccion">
                                    </div>

                                    <div class="form-group name">
                                        <label for="name">Distrito</label>
                                        <input type="text" class="form-control" value="{{$basics->distrito}}" name="distrito">
                                    </div>

                                    <div class="form-group name">
                                        <label for="name">Teléfono</label>
                                        <input type="text" class="form-control" value="{{$basics->telefono}}" name="telefono">
                                    </div>

                                    <div class="form-group name">
                                        <label for="name">Correo de contacto</label>
                                        <input type="text" class="form-control" value="{{$basics->correo_centro}}" name="correo_centro">
                                    </div>

                                    <div class="form-group name">
                                        <label for="name">Nosotros</label>
                                        <textarea name="nosotros" rows="20" cols="50">
                                          {{$basics->nosotros}}
                                        </textarea>
                                    </div>


                                    <button type="submit" class="btn btn-theme">Modificar valores</button>
                                </form>
                            </article><!--//contact-form-->

                          </div><!--//news-wrapper-->
                          <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">
                              <section class="widget has-divider">
                                  <h3 class="title">Arcu Aliquet Quam Vel</h3>
                                  <p>Maecenas nisl urna, condimentum ac justo a, adipiscing hendrerit magna. Fusce pharetra laoreet accumsan. Phasellus elit sapien, consequat vel sapien sit amet, condimentum vulputate odio. Aliquam fringilla justo quis est placerat, eu imperdiet lorem cursus. Curabitur pretium nulla lorem, sed egestas ante vestibulum dignissim.</p>
                              </section><!--//widget-->
                              <section class="widget has-divider">
                                  <h3 class="title">Upcoming Events</h3>
                                  <article class="events-item row page-row">
                                          <div class="date-label-wrapper col-lg-3 col-4">
                                              <p class="date-label">
                                                  <span class="month">FEB</span>
                                                  <span class="date-number">18</span>
                                              </p>
                                          </div><!--//date-label-wrapper-->
                                          <div class="details col-lg-9 col-8">
                                              <h5 class="title">Open Day</h5>
                                              <p class="time text-muted">10:00am - 18:00pm<br />East Campus</p>
                                          </div><!--//details-->
                                  </article>
                                  <article class="events-item row page-row">
                                      <div class="date-label-wrapper col-lg-3 col-4">
                                          <p class="date-label">
                                              <span class="month">SEP</span>
                                              <span class="date-number">06</span>
                                          </p>
                                      </div><!--//date-label-wrapper-->
                                      <div class="details col-lg-9 col-8">
                                          <h5 class="title">E-learning at College Green</h5>
                                          <p class="time text-muted">10:00am - 16:00pm<br />Learning Center</p>
                                      </div><!--//details-->
                                  </article>
                                  <article class="events-item row page-row">
                                      <div class="date-label-wrapper col-lg-3 col-4">
                                          <p class="date-label">
                                              <span class="month">JUN</span>
                                              <span class="date-number">23</span>
                                          </p>
                                      </div><!--//date-label-wrapper-->
                                      <div class="details col-lg-9 col-8">
                                          <h5 class="title">Career Fair</h5>
                                          <p class="time text-muted">09:45am - 16:00pm<br />Library</p>
                                      </div><!--//details-->
                                  </article>
                              </section><!--//widget-->
                              <section class="widget">
                                  <h3 class="title">Flickr Photo Stream</h3>
                                  <ul id="flickr-photos"></ul><!--//flickr-photos-->
                              </section><!--//widget-->
                          </aside>
                      </div><!--//page-row-->
                  </div><!--//page-content-->
              </div><!--//page-->
          </div><!--//content-->
      </div><!--//wrapper-->
@endsection
