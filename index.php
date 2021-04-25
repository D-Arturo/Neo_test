<?php
include "lib/config.php";

include "templates/header.php";
?>
<header class="header">
    <div class="header__logo">
        <img src="./resources/logo.png" alt="Neoshop" title="Neoshop" />
    </div><!-- .header__logo -->
    <div class="header__shop shop">
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-shopping-cart"></i></i></span>
            <span class="shop__text">Carrito</span>
        </a><!-- .shop__button -->
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-user"></i></span>
            <span class="shop__text">Mi perfil</span>
        </a><!-- .shop__button -->
        <a href="#" class="shop__button">
            <span class="shop__icon"><i class="fas fa-box-open"></i></i></span>
            <span class="shop__text">Mis pedidos</span>
        </a><!-- .shop__button -->
    </div><!-- .header__shop -->
</header>
<main class="wrapper">
    <section class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="resources/slider/slide1.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">TITULO PARA LA PRIMERA SLIDE</h2>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="resources/slider/slide2.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">TITULO PARA LA SEGUNDA SLIDE</h2>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="resources/slider/slide3.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">TITULO PARA LA TERCERA SLIDE</h2>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
            <div class="slider__section">
                <img src="resources/slider/slide4.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">TITULO PARA LA CUARTA SLIDE</h2>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>
            <div class="slider__button slider__button--right" id="btn-right">&#62</div>
            <div class="slider__button slider__button--left" id="btn-left">&#60</div>
        </div>
        
        <!-- TODO: Desarrollar el marcado para el slider -->
    </section><!-- .slider -->
    <section class="products">
        <div class="container">
            <h2 class="products-title">PRODUCTOS</h2>
            <article class="container-products">
                <div class="product">
                    <img src="resources/products/vans1.png" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">OLD SKOOL 36 DX</h3>
                        <span class="product__price">85,00 €</span>
                    </div>
                    <span class="button">Comprar</span>
                </div>
                <div class="product">
                    <img src="resources/products/vans2.png" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">COMFYCUSH OLD SKOOL</h3>
                        <span class="product__price">75,00 €</span>
                    </div>
                    <span class="button">Comprar</span>
                </div>
                <div class="product">
                    <img src="resources/products/vans3.png" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">OLD SKOOL DE ANTE Y LONA</h3>
                        <span class="product__price">60,00 €</span>
                    </div>
                    <span class="button">Comprar</span>
                </div>
                <div class="product">
                    <img src="resources/products/vans4.png" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">OLD SKOOL DE ANTE SUAVE</h3>
                        <span class="product__price">65,00 €</span>
                    </div>
                    <span class="button">Comprar</span>
                </div>
                <div class="product--double">
                    <img src="resources/cta/cta1.jpg" alt="" class="product__img--double">
                </div>
                <div class="product">
                    <img src="resources/products/vans5.png" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">OLD SKOOL PRO</h3>
                        <span class="product__price">95,00 €</span>
                    </div>
                    <span class="button">Comprar</span>
                </div>
                <div class="product">
                    <img src="resources/products/vans6.png" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">OLD SKOOL PRO</h3>
                        <span class="product__price">95,00 €</span>
                    </div>
                    <span class="button">Comprar</span>
                </div>
                <div class="product">
                    <img src="resources/products/vans7.png" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">ERA PRIMARY CHECK</h3>
                        <span class="product__price">95,00 €</span>
                    </div>
                    <span class="button">Comprar</span>
                </div>
                <div class="product--double">
                    <img src="resources/cta/cta2.jpg" alt="" class="product__img--double">
                </div>
                <div class="product">
                    <img src="resources/products/vans8.png" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__title">STYLE 36</h3>
                        <span class="product__price">80,00 €</span>
                    </div>
                    <span class="button">Comprar</span>
                </div>
            </article>
        </div>
        <!-- TODO: Desarrollar el marcado para los productos -->
    </section><!-- .products -->
    <div class="load">
        <!-- TODO: BONUS. Desarrollar la funcionalidad para que el botón cargue más productos -->
        <span class="load__button button">Cargar más productos</span>
    </div><!-- .load -->
</main><!-- .wrapper -->
<footer class="footer">
    <p><img src="./resources/logo.png" alt="Neoshop" title="Neoshop" /></p>
    <p>Prueba técnica para candidatos</p>
</footer>
<?php
include "templates/footer.php";
