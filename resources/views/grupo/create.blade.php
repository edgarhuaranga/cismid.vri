@extends('layouts.admin_master')
@section('content')

  <div class="content container">
              <div class="page-wrapper">
                  <header class="page-heading clearfix">
                      <h1 class="heading-title float-left">Grupos</h1>
                  </header>
                  <div class="page-content">
                      <div class="row page-row">
                          <div class="news-wrapper col-lg-8 col-md-7">

                            <article class="contact-form col-lg-8 col-md-7  col-12 page-row">
                                <h3 class="title">Crear grupo</h3>
                                <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p>
                                <form method="post" action="/manage/grupos">
                                    {{csrf_field()}}
                                    <div class="form-group name">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" name="nombre_grupo">
                                    </div>
                                    <div class="form-group email">
                                        <label >Descripción<span class="required">*</span></label>
                                        <textarea name="descripcion_grupo" rows="8" cols="80"></textarea>
                                    </div><!--//form-group-->
                                    <div class="form-group phone">
                                        <label>Correo grupo</label>
                                        <input type="email" class="form-control" name="correo_grupo">
                                    </div><!--//form-group-->

                                    <button type="submit" class="btn btn-theme">Crear grupo</button>
                                </form>
                            </article><!--//contact-form-->

                              <nav class="pagination-container text-center">
  		                        
  		                    </nav>

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
