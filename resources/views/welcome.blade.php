<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Ecommerce</title>


    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">Laravel Ecommerce</div>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div> <!-- end top-nav -->
        </header> <!-- end header -->

        <div class="hero container">
            <div class="hero-copy">
                <h1>Laravel Ecommerce Example</h1>
                <p>A pratical example of using CSS Grid for a typical website layout.</p>
                <div class="hero-buttons">
                    <a href="#" class="button button-white">Button 1</a>
                    <a href="#" class="button button-white">Button 2</a>
                </div>
            </div> <!-- end hero-copy -->

            <div class="hero-image">
                <img src="img/macbook-pro-laravel.png" alt="">
            </div>
        </div> <!-- end hero -->

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Laravel Ecommerce</h1>

                <p class="section-description">It is a long established fact that a reader will be distracted by
                the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that
                it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                content here', making it look like readable English.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>

                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/macbook-pro.png" alt="product"></a>
                        <a href=""><div class="product-name">MacBook Pro</div></a>
                        <div class="product-price">$1999.99</div>
                    </div>
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="#" class="button">View More</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>

                <p class="section-description">It is a long established fact that a reader will be distracted by
                the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that
                it has a more-or-less normal distribution of letters,</p>

                <div class="blog-posts">
                    <div class="blog-post">
                        <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">The point of using Lorem Ipsum is that
                        it has a more-or-less normal distribution of letters</div>
                    </div>
                    <div class="blog-post">
                        <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">The point of using Lorem Ipsum is that
                        it has a more-or-less normal distribution of letters</div>
                    </div>
                    <div class="blog-post">
                        <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">The point of using Lorem Ipsum is that
                        it has a more-or-less normal distribution of letters</div>
                    </div>
                </div> <!-- end blog-posts -->
            </div> <!-- end container -->
        </div> <!-- end blog-section -->

        <footer>
            <div class="footer-content container">
                <div class="made-with">Made with <i class="fa fa-heart"></i> by Maximo Monteiro</div>
                <ul>
                    <li>Follow Me:</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- end footer-content -->
        </footer>

    </body>
</html>
