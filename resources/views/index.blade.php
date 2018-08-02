@extends('plantillas.primera')

@section('contenido')
  <main role="main" class="main">
          <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:0!important;">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="first-slide" src="{{\Storage::url('img/10.jpg')}}" alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Formá Parte!</h1>
                    <p>Disfruta de todos los beneficios que te brinda el ser miembro la comunidad mas grandes de compra y venta de muebles y articulos para el hogar.</p>
                    <p><a class="btn btn-lg btn-primary" href="/register" role="button">Unite aca</a></p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                  </div>
                </div>
              </div>

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>



      <section>
        <h2>¿Qué nos caracteriza?</h2>
        <article class="atributo">
          <div class="atr_img">
            <img src="img/circle.png" alt="">
          </div>
          <div class="atr_p">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </article>
        <article class="atributo">
          <div class="atr_img">
            <img src="img/circle.png" alt="">
          </div>
          <div class="atr_p">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </article>
        <article class="atributo">
          <div class="atr_img">
            <img src="img/circle.png" alt="">
          </div>
          <div class="atr_p">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          </div>
        </article>
      </section>

          <!-- carrousel2 -->
      <section class="carrousel2">
                <div class="example__demo duo__cell">
                  <div class="carousel carousel--cell-selector carru" data-flickity="{&quot;initialIndex&quot;: 2,  &quot;cellSelector&quot;: &quot;.carousel-cell&quot;, &quot;pageDots&quot;: false, &quot;wrapAround&quot;: true }">
                    <div class="static-banner static-banner1">Ultimos productos</div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                  </div>
                </div>

      </section>
    </main>

@endsection
