<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ShoppingFan</title>
  <link rel="stylesheet" href="../../css/principalu.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
</head>
<body>
  <div id="page" class="site page-home">

    <aside class="site-off showmenu desktop hide">
      <div class="off-canvas">
        <div class="canvas-head flexitem">
          <div class="logo"><a href="/"><span class="circle"></span>.ShoppingFan</a></div>
          <a href="" class="t-close flexcenter"><i class="ri-close-line"></i></a>
        </div>
        <div class="departments"></div>
        <nav></nav>
        <div class="thetop-nav"></div>
      </div>
    </aside>

    <header>
      <div class="header-top mobile-hide">
        <div class="container">
          <div class="wrapper flexitem">
            <div class="left">
              <ul class="flexitem main-links">
                <li><a href="#">Blog</a></li>
                <li><a href="#">Featured Products</a></li>
                <li><a href="#">Wishlist</a></li>
              </ul>
            </div>
            <div class="right">
              <ul class="flexitem main-links">
                <li>
                  <a  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span>
                      {{ Auth::user()->name }}
                  </a>

                  <ul>
                    <li>
                      <a  href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      </a></li>
                  
                    </ul>
                  
                 
              </li>
                  <li><a href="#">My account</a></li>
                  <li><a href="#">USD <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                  <ul>
                    <li class="current"><a href="#">USD</a></li>
                    <li><a href="#">EURO</a></li>
                    <li><a href="#">GBP</a></li>
                    <li><a href="#">IDR</a></li>
                  </ul>
                  </li>

                  <li><a href="#">English<span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                  <ul>
                    <li class="current"><a href="#">English</a></li>
                    <li><a href="#">German</a></li>
                    <li><a href="#">Spanish</a></li>
                    <li><a href="#">Bahasa</a></li>
                  </ul>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!--HEADER Top -->

      <div class="header-nav">
        <div class="container">
          <div class="wrapper flexitem">
            <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
            <div class="left flexitem">
              <div class="logo"><a href="/"><span class="circle"></span>.ShoppingFan</a></div>
              <nav class="mobile-hide">
                <ul class="flexitem second-links">
                  <li><a href="#">Inicio</a></li>
                  <li><a href="#">Compras</a></li>
                  <li class="has-child">
                    <a href="#">Subastas
                  <div class="icon-small"><i class="ri-arrow-down-s-line"></i></div>  
                  </a>
                  <div class="mega">
                    <div class="container">
                      <div class="wrapper">
                        <div class="flexcol">
                          <div class="row">
                            <h4>Joyeria</h4>
                            <ul>
                              <li><a href="">Cadenas</a></li>
                              <li><a href="">Esclavas</a></li>
                              <li><a href="">Anillos</a></li>
                              <li><a href="">Relojs</a></li>
                              <li><a href="">Diamantes</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="flexcol">
                          <div class="row">
                            <h4>Prendas</h4>
                            <ul>
                              <li><a href="">Vestidos</a></li>
                              <li><a href="">Faldas</a></li>
                              <li><a href="">Botas</a></li>
                              <li><a href="">Zapatillas</a></li>
                              <li><a href="">Macadas</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="flexcol">
                          <div class="row">
                            <h4>Autos Cl??sicos</h4>
                            <ul>
                              <li><a href="">Benz</a></li>
                              <li><a href="">Ford</a></li>
                              <li><a href="">Renault</a></li>
                              <li><a href="">Skoda</a></li>
                              <li><a href="">Aberdonia</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="flexcol">
                          <div class="row">
                            <h4>Motocicletas</h4>
                            <ul class="women-brands">
                              <li><a href="">Harley Davidson Knucklehead</a></li>
                              <li><a href="">Piaggio Vespa</a></li>
                              <li><a href="">Ducati 916</a></li>
                              <li><a href="">Triumph Bonneville T100</a></li>
                              <li><a href="">Moto Guzzi</a></li>
                            </ul>
                            <a href="#" class="view-all">Ver todo <i class="ri-arrow-right-line"></i></a>
                          </div>
                        </div>

                        <div class="flexcol products">
                          <div class="row">
                            <div class="media">
                              <div class="thumbnail object-cover">
                                <a href="#">
                                <img src="../../assets/img/apparel4.jpg" alt="">
                              </a>
                              </div>
                            </div>
                            <div class="text-content">
                              <h4>Lo quieres!</h4>
                              <a href="#" class="primary-button">Oferta ahora</a> 
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </li>
                  <li><a href="#">Men</a></li>
                  <li>
                    <a href="#">Sports
                  <div class="fly-item"><span>New!</span></div>  
                  </a>
                </li>

                </ul>
              </nav>
            </div>

            <div class="right">
              <ul class="flexitem second-links">
                <li class="mobile-hide"><a href="">
                  <div class="icon-large"><i class="ri-heart-line"></i></div>
                  <div class="fly-item"><span class="item-number">0</span></div>
                  </a></li>
                  <li><a href="#" class="iscart">
                  <div class="icon-large">
                    <i class="ri-shopping-cart-line"></i>
                  <div class="fly-item"><span class="item-number">0</span></div>
                  </div>

                  <div class="icon-text">
                  <div class="mini-text">Total</div>
                  <div class="cart-total">$0.00</div>  
                  </div>  
                  </a></li> 
              </ul>
            </div>
          </div>
        </div>
      </div> 

      <div class="header-main mobile-hide">
        <div class="container wrapper flexitem">
          <div class="left">
            <div class="dpt-cat">
              <div class="dpt-head">
                <div class="main-text">Todas las subastas</div>
                <div class="mini-text mobile-hide">Total 600 Subastas</div>
                <a href="" class="dpt-trigger mobile-hide">
                  <div class="i ri-menu-3-line ri-xl"></div>
                </a>
              </div>
              <div class="dpt-menu">
                <ul class="second-links">
                  <li class="has-child beauty">
                    <a href="">
                      <div class="icon-large"><i class="ri-women-fill"></i></div>
                      Maquillaje
                      <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                    </a>

                    <ul>
                      <li><a href="">Sombras</a></li>
                      <li><a href="">Labiales</a></li>
                      <li><a href="">Rimels</a></li>
                      <li><a href="">Corrector</a></li>
                      <li><a href="">Base</a></li>
                      <li><a href="">Macarillas</a></li>
                      <li><a href="">Espejos</a></li>
                    </ul>
                  </li>


                  <li class="has-child electronic">
                    <a href="">
                      <div class="icon-large"><i class="ri-bluetooth-connect-line"></i></div>
                      Electronicos
                      <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                    </a>
                    <ul>
                      <li><a href="">Televisiones</a></li>
                      <li><a href="">Tablets</a></li>
                      <li><a href="">Camras</a></li>
                      <li><a href="">SmartWatch</a></li>
                      <li><a href="">Audifonos</a></li>
                      <li><a href="">Computadoras</a></li>
                    </ul>
                  </li>

                  <li class="has-child clothing">
                    <a href="">
                      <div class="icon-large"><i class="ri-t-shirt-air-line"></i></div>
                      Prendas
                      <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                    </a>
                    <ul>
                      <li><a href="">Zapatos</a></li>
                      <li><a href="">Tenis</a></li>
                      <li><a href="">Sudaderas</a></li>
                      <li><a href="">Mascadas</a></li>
                      <li><a href="">Pantalones</a></li>
                      <li><a href="">Vestidos</a></li>
                    </ul>
                  </li>

                  <li class="has-child car">
                    <a href="">
                      <div class="icon-large"><i class="ri-car-line"></i></div>
                      Autos
                    </a>
                  </li>

                  <li class="has-child bike">
                    <a href="">
                      <div class="icon-large"><i class="ri-bike-line"></i></div>
                      Bicicletas
                    </a>
                  </li>

                  <li class="has-child Joyas">
                    <a href="">
                      <div class="icon-large"><i class="ri-vip-diamond-fill"></i></div>
                      Joyeria
                      <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                    </a>
                    <ul>
                      <li><a href="">Cadenas</a></li>
                      <li><a href="">Esclavas</a></li>
                      <li><a href="">Anillos</a></li>
                      <li><a href="">Diamantes</a></li>
                      <li><a href="">Dijes</a></li>
                      <li><a href="">Relojs</a></li>
                    </ul>

                  </li>

                  <li class="has-child car">
                    <a href="">
                      <div class="icon-large"><i class="ri-car-line"></i></div>
                      Autos
                    </a>
                  </li>

                  <li class="has-child bike">
                    <a href="">
                      <div class="icon-large"><i class="ri-bike-line"></i></div>
                      Bicicletas
                    </a>
                  </li>

                  <li class="has-child car">
                    <a href="">
                      <div class="icon-large"><i class="ri-car-line"></i></div>
                      Autos
                    </a>
                  </li>

                  <li class="has-child bike">
                    <a href="">
                      <div class="icon-large"><i class="ri-bike-line"></i></div>
                      Bicicletas
                    </a>
                  </li>



                  <li class="has-child homekit">
                    <a href="">
                      <div class="icon-large"><i class="ri-home-fill"></i></div>
                      Muebles
                      <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                    </a>
                    <div class="mega">
                      <div class="flexcol">
                        <div class="row">
                          <h4>Dormitorios</h4>
                          <ul>
                            <li><a href="#">Comoda</a></li>
                            <li><a href="#">Cama</a></li>
                            <li><a href="#">Lamparas</a></li>
                            <li><a href="#">Tocador</a></li>
                            <li><a href="#">Cajonera</a></li>
                          </ul>
                        </div>
                        <div class="row">
                          <h4>Salas</h4>
                          <ul>
                            <li><a href="#">Mueble para TV</a></li>
                            <li><a href="#">Sillones</a></li>
                            <li><a href="#">Alfombras</a></li>
                            <li><a href="#">Buros</a></li>
                            <li><a href="#">Mesas</a></li>
                          </ul>
                        </div>


                      </div>
                    </div>
                  </li>


                </ul>
              </div>
            </div>
          </div>
          <div class="right">
            <div class="search-box">
              <form action="" class="search">
                <span class="icon-large"><i class="ri-search-line"></i></span>
                <input type="search" placeholder="Buscar Subastas" name="" id="">
                <button type="submit">Buscar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </header>

    <main>
      <div class="slider">
        <div class="container">
        <div class="wrapper">
          <div class="myslider swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="item">
                  <div class="image object-cover">
                    <img src="../../assets/img/fondo9.png" alt="">
                  </div>
                  <div class="text-content flexcol">
                    <h4>Bienvenidos</h4>
                    <h2><span>ShoppingFan</span><br><span>Vamos Quien da M??s!</span></h2>
                    <a href="" class="primary-button">Ofertar Ahora</a>
                  </div>
                </div>      
                </div>

                <div class="swiper-slide">
                  <div class="item">
                    <div class="image object-cover">
                      <img src="../../assets/img/fondo8.png" alt="">
                    </div>
                    <div class="text-content flexcol">
                      <h4>Bienvenidos</h4>
                      <h2><span>ShoppingFan</span><br><span>Vamos Quien da M??s!</span></h2>
                      <a href="" class="primary-button">Ofertar Ahora</a>
                    </div>
                  </div>      
                  </div>

                  <div class="swiper-slide">
                    <div class="item">
                      <div class="image object-cover">
                        <img src="../../assets/img/fondo10.png" alt="">
                      </div>
                      <div class="text-content flexcol">
                        <h4>Bienvenidos</h4>
                        <h2><span>ShoppingFan</span><br><span>Vamos Quien da M??s!</span></h2>
                        <a href="" class="primary-button">Ofertar Ahora</a>
                      </div>
                    </div>      
                    </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>

      <!--Slider -->
      <div class="brands">
        <div class="container">
          <div class="wrapper flexitem">
            <div class="item">
              <a href="#">
                <img src="../../assets/img/zara.png" alt="">
              </a>
            </div>

            <div class="item">
              <a href="#">
                <img src="../../assets/img/samsung.png" alt="">
              </a>
            </div>

            <div class="item">
              <a href="#">
                <img src="../../assets/img/oppo.png" alt="">
              </a>
            </div>

            <div class="item">
              <a href="#">
                <img src="../../assets/img/azus.png" alt="">
              </a>
            </div>

            <div class="item">
              <a href="#">
                <img src="../../assets/img/hurley.png" alt="">
              </a>
            </div>

            <div class="item">
              <a href="#">
                <img src="../../assets/img/dng.png" alt="">
              </a>
            </div>

          </div>
        </div>
      </div>

      <!-- brands -->

      <div class="trending">
        <div class="container">
          <div class="wrapper">
            <div class="sectop flexitem">
              <h2><span class="circle"></span><span>Nuevas Subastas</span></h2>
            </div>
            <div class="column">
              <div class="flexwrap">
                <div class="row products big">
                  <div class="item">
                    <div class="offer">
                      <p>Oferta Ahora</p>
                      <ul class="flexcenter">
                        <li>1</li>
                        <li>15</li>
                        <li>27</li>
                        <li>60</li>
                      </ul>
                    </div>
                    <div class="media">
                      <div class="image">
                        <a href="">
                          <img src="../../assets/img/electronic3.jpg" alt="">
                          </a>
                        </div>
                        <div class="hoverable">
                          <ul>
                            <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                            <li><a href=""><i class="ri-eye-line"></i></a></li>
                            <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                          </ul>
                        </div>
                        <div class="discount circle flexcenter"><span>31%</span></div>
                    </div>
                    <div class="content">
                      <div class="raiting">
                        <div class="stars"></div>
                        <span class="mini-text">(2,548)</span>
                      </div>
                      <h3 class="main-links"><a href="#">Aud??fonos Lenovo Stereo</a></h3>
                    <div class="price">
                      <span class="current">$5,500</span>
                      <span class="normal mini-text">$500</span>
                    </div>
                    <div class="stock mini-text">
                      <div class="qty">
                        <span>Stock: <strong class="qty-available">107</strong></span>
                        <span>Sold: <strong class="qty-sold">3,459</strong></span>
                      </div>
                      <div class="bar">
                        <div class="available"></div>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="row products mini">
                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="">
                          <img src="../../assets/img/auto1.jpg" alt="">
                          </a>
                        </div>
                        <div class="hoverable">
                          <ul>
                            <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                            <li><a href=""><i class="ri-eye-line"></i></a></li>
                            <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                          </ul>
                        </div>
                        <div class="discount circle flexcenter"><span>20%</span></div>
                    </div>
                    <div class="content">
                      <h3 class="main-links"><a href="#">Bugatti Type 575C Atlantic de 1936</a></h3>
                    
                      <div class="raiting">
                        <div class="stars"></div>
                        <span class="mini-text">(2,000)</span>
                      </div>                    
                      <div class="price">
                      <span class="current">29,52 ???</span>
                      <span class="normal mini-text">32.52 ???</span>
                    </div>
                    <div class="mini-text">
                      <p>subasta</p>
                      <p>Activa</p>
                    </div>
                    </div>
                  </div>
                    

                    <div class="item">
                      <div class="media">
                        <div class="thumbnail object-cover">
                          <a href="">
                            <img src="../../assets/img/es.jpg" alt="">
                            </a>
                          </div>
                          <div class="hoverable">
                            <ul>
                              <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                              <li><a href=""><i class="ri-eye-line"></i></a></li>
                              <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                            </ul>
                          </div>
                          <div class="discount circle flexcenter"><span>12%</span></div>
                      </div>
                      <div class="content">
                        <h3 class="main-links"><a href="#">Esclava de Oro tejido cubano</a></h3>
                      
                        <div class="raiting">
                          <div class="stars"></div>
                          <span class="mini-text">(1,500)</span>
                        </div>                    
                        <div class="price">
                        <span class="current">$25,990</span>
                        <span class="normal mini-text">$30,000</span>
                      </div>
                      <div class="mini-text">
                        <p>nueva</p>
                        <p>subasta</p>
                      </div>
                      </div>
                    </div>

                      <div class="item">
                        <div class="media">
                          <div class="thumbnail object-cover">
                            <a href="">
                              <img src="../../assets/img/compu.jpg" alt="">
                              </a>
                            </div>
                            <div class="hoverable">
                              <ul>
                                <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                <li><a href=""><i class="ri-eye-line"></i></a></li>
                                <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                              </ul>
                            </div>
                            <div class="discount circle flexcenter"><span>12%</span></div>
                        </div>
                        <div class="content">
                          <h3 class="main-links"><a href="#">Laptop HP</a></h3>
                        
                          <div class="raiting">
                            <div class="stars"></div>
                            <span class="mini-text">(3,000)</span>
                          </div>                    
                          <div class="price">
                          <span class="current">$10,500.00</span>
                          <span class="normal mini-text">$1,500</span>
                        </div>
                        <div class="mini-text">
                          <p>nueva</p>
                          <p>subasta</p>
                        </div>
                        </div>

                  </div>
                </div>
                <div class="row products mini">
                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="">
                          <img src="../../assets/img/camara.webp" alt="">
                          </a>
                        </div>
                        <div class="hoverable">
                          <ul>
                            <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                            <li><a href=""><i class="ri-eye-line"></i></a></li>
                            <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                          </ul>
                        </div>
                        <div class="discount circle flexcenter"><span>10%</span></div>
                    </div>
                    <div class="content">
                      <h3 class="main-links"><a href="#">Camara fotografica Cannon</a></h3>
                    
                      <div class="raiting">
                        <div class="stars"></div>
                        <span class="mini-text">(500)</span>
                      </div>                    
                      <div class="price">
                      <span class="current">$8,500</span>
                      <span class="normal mini-text">$10,392.00</span>
                    </div>
                    <div class="mini-text">
                      <p>Subasta</p>
                      <p>terminada</p>
                    </div>
                    </div>
                  </div>

                  <div class="item">
                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="">
                          <img src="../../assets/img/auto2.jpg" alt="">
                          </a>
                        </div>
                        <div class="hoverable">
                          <ul>
                            <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                            <li><a href=""><i class="ri-eye-line"></i></a></li>
                            <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                          </ul>
                        </div>
                        <div class="discount circle flexcenter"><span>10%</span></div>
                    </div>
                    <div class="content">
                      <h3 class="main-links"><a href="#">Volkswagen</a></h3>
                    
                      <div class="raiting">
                        <div class="stars"></div>
                        <span class="mini-text">(2,500)</span>
                      </div>                    
                      <div class="price">
                      <span class="current">$378,61</span>
                      <span class="normal mini-text">$10,392.00</span>
                    </div>
                    <div class="mini-text">
                      <p>Subasta</p>
                      <p>Activa</p>
                    </div>
                    </div>
                  </div>
                

                <div class="item">
                  <div class="media">
                    <div class="thumbnail object-cover">
                      <a href="">
                        <img src="../../assets/img/moto.jpg" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                          <li><a href=""><i class="ri-eye-line"></i></a></li>
                          <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter"><span>20%</span></div>
                  </div>
                  <div class="content">
                    <h3 class="main-links"><a href="#">Harley Davidson</a></h3>
                  
                    <div class="raiting">
                      <div class="stars"></div>
                      <span class="mini-text">(1000)</span>
                    </div>                    
                    <div class="price">
                    <span class="current">$669,73</span>
                    <span class="normal mini-text">$700,00</span>
                  </div>
                  <div class="mini-text">
                    <p>Subasta</p>
                    <p>terminada</p>
                  </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="features">
        <div class="container">
          <div class="wrapper">
            <div class="column">
              <div class="sectop flexitem">
                <h2><span class="circle"></span><span>Subastas de prendas</span></h2>
                <div class="second-links"><a href="" class="view-all">Ver todo<i class="ri-arrow-right-line"></i></a></div>
              </div>
              <div class="products main flexwrap">
                <div class="item">
                  <div class="media">
                    <div class="thumbnail object-cover">
                      <a href="">
                        <img src="../../assets/img/v1.webp" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                          <li><a href=""><i class="ri-eye-line"></i></a></li>
                          <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter"><span>10%</span></div>
                  </div>
                  <div class="content">
                    <div class="raiting">
                      <div class="stars"></div>
                      <span class="mini-text">(2,500)</span>
                    </div>
                    <h3 class="main-links"><a href="#">Vestido Camila</a></h3>                    
                    <div class="price">
                    <span class="current">$2,500</span>
                    <span class="normal mini-text">$4,000</span>
                  </div>
                  </div>
                </div>

                <div class="item">
                  <div class="media">
                    <div class="thumbnail object-cover">
                      <a href="">
                        <img src="../../assets/img/v2.webp" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                          <li><a href=""><i class="ri-eye-line"></i></a></li>
                          <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter"><span>10%</span></div>
                  </div>
                  <div class="content">
                    <div class="raiting">
                      <div class="stars"></div>
                      <span class="mini-text">(2,500)</span>
                    </div>
                    <h3 class="main-links"><a href="#">Vestido Camila</a></h3>                    
                    <div class="price">
                    <span class="current">$3,000</span>
                    <span class="normal mini-text">$4,500</span>
                  </div>
                  </div>
                </div>

                <div class="item">
                  <div class="media">
                    <div class="thumbnail object-cover">
                      <a href="">
                        <img src="../../assets/img/v3.webp" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                          <li><a href=""><i class="ri-eye-line"></i></a></li>
                          <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter"><span>10%</span></div>
                  </div>
                  <div class="content">
                    <div class="raiting">
                      <div class="stars"></div>
                      <span class="mini-text">(2,500)</span>
                    </div>
                    <h3 class="main-links"><a href="#">Vestido Camila</a></h3>                    
                    <div class="price">
                    <span class="current">$3,000</span>
                    <span class="normal mini-text">$4,500</span>
                  </div>
                  </div>
                </div>

                <div class="item">
                  <div class="media">
                    <div class="thumbnail object-cover">
                      <a href="">
                        <img src="../../assets/img/v4.webp" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                          <li><a href=""><i class="ri-eye-line"></i></a></li>
                          <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <div class="discount circle flexcenter"><span>10%</span></div>
                  </div>
                  <div class="content">
                    <div class="raiting">
                      <div class="stars"></div>
                      <span class="mini-text">(1,500)</span>
                    </div>
                    <h3 class="main-links"><a href="#">Vestido ce??ido al cuerpo</a></h3>                    
                    <div class="price">
                    <span class="current">$790.00</span>
                    <span class="normal mini-text">$200</span>
                  </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="banners">
        <div class="containers">
          <div class="wrapper">
            <div class="column">
              <div class="banner flexwrap">
                <div class="row">
                  <div class="item">
                    <div class="image">
                      <img src="../../assets/img/banner1.jpg" alt="">
                    </div>
                    <div class="text-content flexcol">
                      <h4>Subastas Grandes</h4>
                      <h3><span>subastas especiales aqu??</span><br>ShoppingFan</h3>
                      <a href="" class="primary-button">Subastar ahora</a>
                    </div>
                    <a href="#" class="over link"></a>
                  </div>
                </div>

                <div class="row">
                  <div class="item get-gray">
                    <div class="image">
                      <img src="../../assets/img/banner2.jpg" alt="">
                    </div>
                    <div class="text-content flexcol">
                      <h4>Subastas Grandes</h4>
                      <h3><span>subastas especiales aqu??</span><br>ShoppingFan</h3>
                      <a href="" class="primary-button">Subastar ahora</a>
                    </div>
                    <a href="#" class="over link"></a>
                  </div>
                </div>
              </div>
            <div class="product-categories flexwrap">
            <div class="row">
              <div class="item">
                <div class="image">
                  <img src="../../assets/img/procat1.jpg" alt="">
              </div>
              <div class="content mini-links">
                <h4>Maquillaje</h4>
                <ul class="flexcol">
                  <li><a href="">Sombras</a></li>
                  <li><a href="">Labiales</a></li>
                  <li><a href="">Bases</a></li>
                  <li><a href="">Esmaltes</a></li>
                </ul>
            
            <div class="second-links">
              <a href="#" class="view-all">View all<i class="ri-arrow-right-line"></i>
              </a></div>
        </div>
      </div>
            </div>

      <div class="row">
        <div class="item">
          <div class="image">
            <img src="../../assets/img/procat2.jpg" alt="">
        </div>
        <div class="content mini-links">
          <h4>Electr??nico</h4>
          <ul class="flexcol">
            <li><a href="">Celulares</a></li>
            <li><a href="">Ordenadores</a></li>
            <li><a href="">Audifonos</a></li>
            <li><a href="">SmartWatch</a></li>
          </ul>
      
      <div class="second-links">
        <a href="#" class="view-all">Ver todo<i class="ri-arrow-right-line"></i>
        </a></div>
  </div>
</div>
      </div>

<div class="row">
  <div class="item">
    <div class="image">
      <img src="../../assets/img/procat3.jpg" alt="">
  </div>
  <div class="content mini-links">
    <h4>Joyeria</h4>
    <ul class="flexcol">
      <li><a href="">Esclavas</a></li>
      <li><a href="">Anillos</a></li>
      <li><a href="">Cadenas</a></li>
      <li><a href="">Dijes</a></li>
    </ul>
<div class="second-links">
  <a href="#" class="view-all">Ver todo<i class="ri-arrow-right-line"></i>
  </a></div>
</div>
</div>
</div>

    </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->

    <footer>
      <div class="newsletter">
        <div class="container">
          <div class="wrapper">
            <div class="box">
              <div class="content">
                <h3>??nete a ShoppingFan</h3>
                <p>Deja tu correo para recibir notificaciones de <strong>nuevas subastas</strong></p>
              </div>
              <form action="" class="search">
                <span class="icon-large"><i class="ri-mail-line"></i></span>
                <input type="mail" placeholder="E-mail" required>
                <button type="submit">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="widgets">
        <div class="container">
          <div class="wrapper">
            <div class="flexwrap">
              <div class="row">
                <div class="item mini-links">
                  <h4>Ayuda y Contacto</h4>
                  <ul class="flexcol">
                    <li><a href="">Tu cuenta</a></li>
                    <li><a href="">Tus subastas</a></li>
                    <li><a href="">Contacto</a></li>
                    <li><a href="">Envios</a></li>
                    <li><a href="">Help</a></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="item mini-links">
                  <h4>Subastas</h4>
                  <ul class="flexcol">
                    <li><a href="">Autos</a></li>
                    <li><a href="">Prendas</a></li>
                    <li><a href="">Joyer??a</a></li>
                    <li><a href="">Motos</a></li>
                    <li><a href="">Maquillaje</a></li>
                  </ul>
                </div>
              </div>
              
              <div class="row">
                <div class="item mini-links">
                  <h4>Pagos</h4>
                  <ul class="flexcol">
                    <li><a href="">Tarjeta de cr??dito</a></li>
                    <li><a href="">Oxxo</a></li>
                    <li><a href="">Paypal</a></li>
                    <li><a href="">Mercado pago</a></li>
                    <li><a href="">Otros</a></li>
                  </ul>
                </div>
              </div>

              <div class="row">
                <div class="item mini-links">
                  <h4>Cont??ctanos</h4>
                  <ul class="flexcol">
                    <li><a href="">6182319469</a></li>
                    <li><a href="">ShoppingFan@gmail.com</a></li>
                    <li><a href="">www.Shopping.com</a></li>
                    <li><a href="">123 stree now york city, united states of america 750</a></li>
                    <li><a href="">Otros</a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="footer-info">
        <div class="container">
          <div class="wrapper">
            <div class="flexcol">
              <div class="logo">
                <a href=""><span class="circle"></span>.ShoppingFan</a>
              </div>
              <div class="socials">
                <ul class="flexitem">
                  <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                  <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                  <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                  <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                  <li><a href="#"><i class="ri-youtube-line"></i></a></li>
                </ul>
              </div>
            </div>
            <p class="mini-text">Copyright &#169; 2022 ShoppingFan</p>
          </div>
        </div>
      </div>

    </footer>

      <div class="menu-bottom desktop-hide">
        <div class="container">
          <div class="wrapper">
            <nav>
              <ul class="flexitem">
                <li>
                  <a href="#">
                    <i class="ri-bar-chart-line"></i>
                    <span>Trending</span>
                  </a>
                </li>


                <li>
                  <a href="#">
                    <i class="ri-user-6-line"></i>
                    <span>Cuenta</span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="ri-heart-line"></i>
                    <span>Deseos</span>
                  </a>
                </li>

                <li>
                  <a href="#0" class="t-search">
                    <i class="ri-search-line"></i>
                    <span>Buscar</span>
                  </a>
                </li>

                <li>
                  <a href="#0">
                    <i class="ri-shopping-cart-line"></i>
                    <span>Compra</span>
                    <div class="fly-item">
                      <span class="item-number">0</span>
                    </div>
                  </a>
                </li>



              </ul>
            </nav>
          </div>
        </div>
      </div>

      <div class="search-bottom desktop-hide">
        <div class="container">
          <div class="wrapper">
            <form action="" class="search">
              <a href="#" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
              <span class="icon-large"><i class="ri-search-line"></i></span>
              <input type="search" placeholder="E-mail" required>
              <button type="submit">Buscar</button>
            </form>

          </div>
        </div>
      </div>


  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="../../js/script.js"></script>
</body>
</html>