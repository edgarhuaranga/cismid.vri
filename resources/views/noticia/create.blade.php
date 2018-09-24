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
                                <h3 class="title">Crear noticia</h3>
                                <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p>
                                <form method="post" action="/manage/noticias">
                                    {{csrf_field()}}
                                    <div class="form-group name">
                                        <label for="name">Título</label>
                                        <input type="text" class="form-control" placeholder="El título de la noticia" name="titulo">
                                    </div>
                                    <div class="form-group email">
                                        <label for="email">Breve descripción<span class="required">*</span></label>
                                        <input type="text" class="form-control" placeholder="Pequeña descripción para resúmen" name="descripcion_breve">
                                    </div><!--//form-group-->
                                    <div class="form-group phone">
                                        <label for="phone">Imagen</label>
                                        <input type="text" class="form-control" placeholder="Ruta imagen de la noticia" name="url_imagen">
                                    </div><!--//form-group-->

                                    <button type="submit" class="btn btn-theme">Crear noticia</button>
                                </form>
                            </article><!--//contact-form-->

                              <nav class="pagination-container text-center">
  		                        <ul class="pagination">
  		                            <li class="page-item disabled">
  		                                <a class="page-link" href="#" arial-label="previous">
  		                                    <span aria-hidden="true">&laquo;</span>
  		                                    <span class="sr-only">Previous</span>
  		                                </a>
  		                            </li>
  		                            <li class="page-item active"><a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
  		                            <li class="page-item"><a class="page-link" href="#">2</a></li>
  		                            <li class="page-item"><a class="page-link" href="#">3</a></li>
  		                            <li class="page-item"><a class="page-link" href="#">4</a></li>
  		                            <li class="page-item"><a class="page-link" href="#">5</a></li>
  		                            <li class="page-item">
  		                                <a class="page-link" href="#">
  		                                    <span aria-hidden="true">&raquo;</span>
  		                                    <span class="sr-only">Next</span>
  		                                </a>
  		                            </li>
  		                        </ul><!--//pagination-->
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
