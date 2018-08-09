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
                <img class="first-slide" src="{{\Storage::url('img/foto_principal.jpg')}}" alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Ya somos <span id="contador">0</span> usuarios en la comunidad</h1>
                    <p><a class="btn btn-lg btn-primary" href="/register" role="button">¡Sumate!</a></p>
                    <p></p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img class="second-slide" src="{{\Storage::url('img/foto_principal2.jpg')}}" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Los mejores diseños</h1>
                    <p>Buscá el estilo a la medida de tu hogar dentro de nuestras categorias.</p>
                    <p><a class="btn btn-lg btn-primary" href="{{route('producto.categorias')}}" role="button">¡Navegalas!</a></p>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <img class="third-slide" src="{{\Storage::url('img/foto_principal3.jpg')}}" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Furniture</h1>
                    <p>Crea espacios tan audaces como tu espíritu con nuestros productos.</p>
                    <p><a class="btn btn-lg btn-primary" href="{{route('producto.listar')}}" role="button">Encontrá el tuyo</a></p>
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
            <h2>Reclamos</h2>
            <p>Si tenes algún problema. ¡No dudes en avisarnos!.
Lo primero que tienes que hacer es iniciar un reclamo o comunicarte con nuestro centro de atención.
Tenes 10 días desde que recibiste el producto para reclamar si no te llegó lo que esperabas o 21 días desde la fecha de compra, sino lo recibiste.</p>
          </div>
        </article>
        <article class="atributo">
          <div class="atr_img">
            <img src="img/circle.png" alt="">
          </div>
          <div class="atr_p">
            <h2>Envio</h2>
            <p>Si elegis nuestro Shipping, acordamos un día y hora de entrega. Además, podes seguir tu compra hasta que llegue a tus manos con nuestro sistema de trackeo GPS o podes elegir una sucursal del correo más cercano te ir a buscarla cuando te sea posible. Es clave que recibir tu pedido no te sea un problema.
</p>
          </div>
        </article>
        <article class="atributo">
          <div class="atr_img">
            <img src="img/circle.png" alt="">
          </div>
          <div class="atr_p">
            <h2> Medios de Pago</h2>
            <p>
Podes pagar en cuotas sin interés con tu tarjeta de crédito; al contado con tu tarjeta de débito o en efectivo en puntos de pago.
Efectivo: cuando compres te daremos un código para que puedas pagar en cualquier sucursal adherida, ya sea rapipago, pagofacil, farmacity, o cualquiera de nuestros kioscos adheridos.</p>
          </div>
        </article>
      </section>
      <section>
        <h2>Algunos de nuestros productos</h2>
        <article class="productos">
          <div class="prod_img">
              <a href="{{route('producto.ver', [ 'id' => 10 ])}}"><img src="/storage/img\muebles\escritorios\escritorio1.jpg" alt="escritorios"></a>
          </div>
        </article>
        <article class="productos">
          <div class="prod_img">
              <a href="{{route('producto.ver', [ 'id' => 2 ])}}"><img src="\storage\img\muebles\mesas de tv\mesasdetv1.jpg" alt="mesas de tv"></a>
          </div>
        </article>
        <article class="productos">
          <div class="prod_img" >
            <a href="{{route('producto.ver', [ 'id' => 4 ])}}"><img src="\storage\img\muebles\mesas\mesas1.jpg" alt="mesas" ></a>

          </div>
        </article>
        <article class="productos">
          <div class="prod_img">
              <a href="{{route('producto.ver', [ 'id' => 20 ])}}"><img src="/storage/img\muebles\respaldo\respaldos1.jpg" alt="respaldos"></a>
          </div>
        </article>
        <article class="productos">
          <div class="prod_img">
              <a href="{{route('producto.ver', [ 'id' => 4 ])}}"><img src="\storage\img\muebles\sillones\sillones1.jpg" alt="sillones"></a>
          </div>
        </article>
        <article class="productos">
          <div class="prod_img">
            <a href="{{route('producto.ver', [ 'id' => 15 ])}}">  <img src="\storage\img\muebles\sillas\sillas1.jpg" alt="sillas"></a>
          </div>
        </article>
      </section>
      </main>

    </select>
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
    <script src="/js/contador/contador.js"></script>
    </main>

@endsection
