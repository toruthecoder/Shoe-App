<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="images/shoe1.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <title>Shoe-App</title>
</head>

<body>


    <!-- NavBar Start  -->
    <nav class="navbar">
        <div id="logo">
            <h1>Shoe-App</h1>
        </div>

        <div class="auth">
            <div class="text0">
                <i class="fa-solid fa-cart-shopping" style="color: #fff;"></i> <span>0</span>
            </div>
            <div class="serach">
                <a href="search/search.html">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>
        </div>

        <div class="bar">
            <i class="fa-solid fa-bars"></i>
        </div>

    </nav>
    <!-- NavBar End  -->

    <!-- Menu Start -->
    <section>
        <div class="menu">
            <ul>
                <li>Men<i class="fa-solid fa-plus"></i></li>
                <ul class="show1">
                    <li>Men Shoe</li>
                    <li>Men Sneakers</li>
                    <li>Men Crocs</li>
                </ul>


                <li>Women<i class="fa-solid fa-plus"></i></li>
                <ul class="show2">
                    <li>Null</li>
                </ul>
                <li>Kidz<i class="fa-solid fa-plus"></i></li>
                <ul class="show3">
                    <li>Kidz Shoe</li>
                    <li>Kidz Sneakers</li>
                    <li>Kidz Sandal</li>
                </ul>

                <li>New Arrival</li>

                <li>Sale</li>
            </ul>
        </div>
    </section>


    <!-- Menu End -->

    <!-- Cart Start -->

    <div class="cart">
        <p>My cart</p>
        <i class="fa-solid fa-xmark"></i>
        <hr style="margin-top: 20px; border: px solid;">
        <div class="prod-items">
            <!-- Will control this part dynamically -->
        </div>
        <hr style="margin-top: 20px; border: px solid;">
        <button onclick = "location.href='show_cart/index2.html' ">CheckOut</button>
    </div>

    <!-- Cart End -->


    <!-- header Start -->
    <section>
        <div class="container">
            <div class="content">
                <img src="images/landing page 1/1.png" alt="Image of the shoe created by ai">
                <div class="text1">
                    <h1>Achieve Your <span class="span">Goals</span> <br> With Us.</h1>
                    <p>Embark on a journey with us to find your style <br>and become more fashionable.</p>
                    <div class="btn" href="goto">
                        <button onclick = "location.href='#Home'">Explore <i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header End -->

    <!-- Filter Start -->
    <section>
        <div class="container4" id="Home">
            <div class="dropdown">
                <div class="filter" id="Explore">
                    <button class="filter1">
                        Filter <i class="fa-light fa-plus"></i>
                    </button>
                    <span class="span1"></span>
                </div>
                <ul id="myDropDown">
                    <li class="item-name" data-target="Men-Shoe">Men-Shoe</li>
                    <li class="item-name" data-target="Men-Sneakers">Men-Sneakers</li>
                    <li class="item-name" data-target="Men-Crocs">Men-Crocs</li>
                    <li class="item-name" data-target="Kidz-Shoe">Kidz-Shoe</li>
                    <li class="item-name" data-target="Kidz-Sneakers">Kidz-Sneakers</li>
                    <li class="item-name" data-target="Men-Sandal">Kidz-Sandal</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Filter End -->

    <!-- This is where the content will be displayed -->

    <!-- Random section -->

    <section class="content-section content-0">
        <section class="sec">

            <div class="container1">

                <!-- First product -->
                <article class="card" style="--ispopular: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men Shoe
                    </div>

                    <div class="image">
                        <img src="images/1.avif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Retro Premium
                        </div>
                        <div class="price">
                            $110.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Ltd Ed
                        </div>
                        Croc
                    </div>

                    <div class="image">
                        <img src="images/7.jfif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Blue Croc 
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/12.jpg" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Sports Sneaker
                        </div>
                        <div class="price">
                            $99.99 40%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/2.avif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Sneaker Premium
                        </div>
                        <div class="price">
                            $129.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/5.avif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Sneaker White
                        </div>
                        <div class="price">
                            $99.99 50%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Exclusive
                        </div>
                        Croc
                    </div>

                    <div class="image">
                        <img src="images/8.jfif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive white crocs
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Croc
                    </div>

                    <div class="image">
                        <img src="images/6.jfif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Premium red croc
                        </div>
                        <div class="price">
                            $190.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/3.avif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            FootBall Sports Sneaker
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Exclusive
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/4.avif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Fashion color blender
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Kidz
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/9.webp" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Kidz Shoe Premium
                        </div>
                        <div class="price">
                            $99.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            kidz
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/10.jpg" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Kidz Shoe
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Kidz
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/11.webp" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive Kidz Shoe
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>
    </section>

    <!-- End -->

    <!-- Men shoe section -->

    <section class="content-section" id="Men-Shoe">
        <section class="sec">

            <div class="text2">
                <h1>Men-Shoe</h1>
            </div>

            <div class="container1">

                <!-- First product -->
                <article class="card" style="--ispopular: true">

                    <div class="author">
                        <div class="name">Bata</div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-1.png" alt="nike shoe">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Black Exclusive
                        </div>
                        <div class="price">
                            $110.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Ltd Ed.
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-2.png.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Men Black Shoe
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Men Shoe
                        </div>
                        <div class="price">
                            $99.99 50%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Premium Shoe
                        </div>
                        <div class="price">
                            $129.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Premium Black
                        </div>
                        <div class="price">
                            $99.99 30%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Excl
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-6.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Exclusive Shoe
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Limited White Shoe
                        </div>
                        <div class="price">
                            $190.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-8.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Football Shoe
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Excl.
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Exclusive Color Blender
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-10.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                           Service White Premium
                        </div>
                        <div class="price">
                            $99.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-11.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                           Bata Brown Classic
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Men-Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-12.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Limited Black
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>

    </section>

    <!-- Men Sneakers -->
    <section class="content-section" id="Men-Sneakers">
        <section class="sec">

            <div class="text2">
                <h1>Men-Sneakers</h1>
            </div>

            <div class="container1">

                <!-- First product -->
                <article class="card" style="--ispopular: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-1.png" alt="nike shoe">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Retro Premium
                        </div>
                        <div class="price">
                            $110.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Premium blue crocs
                        </div>
                        <div class="price">
                            $99.99 40%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Sports Shoe
                        </div>
                        <div class="price">
                            $159.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Premium red croc
                        </div>
                        <div class="price">
                            $190.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            FootBall Sports Shoe
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-6.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Fashion color blender
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Kidz Shoe Premium
                        </div>
                        <div class="price">
                            $99.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker8.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Kidz Shoe
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker 
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive Kidz Shoe
                        </div>
                        <div class="price">
                            $99.99 40%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-10.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Sneaker Premium
                        </div>
                        <div class="price">
                            $129.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-11.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Sneaker Premium
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Men-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-12.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive white crocs
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>

    </section>

    <!-- Men Crocs -->
    <section class="content-section" id="Men-Crocs">
        <section class="sec">

            <div class="text2">
                <h1>Men-Crocs</h1>
            </div>

            <div class="container1">

                <!-- First product -->
                <article class="card" style="--ispopular: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-1.png" alt="nike shoe">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Premium Croc
                        </div>
                        <div class="price">
                            $110.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Ltd Ed
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited blue croc
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Men Black Croc
                        </div>
                        <div class="price">
                            $159.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Men Purple Croc
                        </div>
                        <div class="price">
                            $99.99 30%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Men Color Blender
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Excl
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-6.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Fashion color blender
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Men Croc
                        </div>
                        <div class="price">
                            $99.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-8.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Red Croc
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Red N White Croc
                        </div>
                        <div class="price">
                            $99.99 40%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-10.jfif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Men Croc
                        </div>
                        <div class="price">
                            $129.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-11.jfif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Men Croc
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Excl
                        </div>
                        Men-Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-12.jfif" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive white crocs
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>

    </section>

    <!-- Kidz Shoe -->
    <section class="content-section" id="Kidz-Shoe">
        <section class="sec">

            <div class="text2">
                <h1>Kidz-Shoe</h1>
            </div>

            <div class="container1">

                <!-- First product -->
                <article class="card" style="--ispopular: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-1.png" alt="nike shoe">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Kidz Shoe
                        </div>
                        <div class="price">
                            $110.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Ltd Ed.
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Kidz Shoe
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Hiking Shoe
                        </div>
                        <div class="price">
                            $99.99 45%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata ColorFul Shoe
                        </div>
                        <div class="price">
                            $190.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Kidz Shoe
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Exclusive
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-6.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Fashion color blender
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Kidz Pink Shoe
                        </div>
                        <div class="price">
                            $88.99 10%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-8.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Kidz Shoe
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive Kidz Shoe
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-10.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Winter Shoe
                        </div>
                        <div class="price">
                            $129.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-11.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Jogging Shoe
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name">
                            Exclusive
                        </div>
                        Kidz-Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-12.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive BlackNWhite Shoe
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>

    </section>


    <!-- Kidz Sneakers -->
    <section class="content-section" id="Kidz-Sneakers">
        <section class="sec">

            <div class="text2">
                <h1>Kidz-Sneakers</h1>
            </div>

            <div class="container1">

                <!-- First product -->
                <article class="card" style="--ispopular: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-1.png" alt="nike shoe">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Kidz Sneaker
                        </div>
                        <div class="price">
                            $110.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Hike Sneaker
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Sports Sneaker
                        </div>
                        <div class="price">
                            $159.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Kidz Pink Sneaker
                        </div>
                        <div class="price">
                            <s>$190.99</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            FootBall Sports Sneaker
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-6.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive Kidz Sneaker
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata White Sneaker
                        </div>
                        <div class="price">
                            $99.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-8.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Normal Wear
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata White Sneaker
                        </div>
                        <div class="price">
                            <s>$150.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-10.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Sneaker Sneaker
                        </div>
                        <div class="price">
                            $129.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-11.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Sneaker Premium
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-12.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive Bata Kidz
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>

    </section>

    <!-- Kidz Crocs -->
    <section class="content-section" id="Kidz-Sandal">
        <section class="sec">

            <div class="text2">
                <h1>Kidz-Sandal</h1>
            </div>

            <div class="container1">    

                <!-- First product -->
                <article class="card" style="--ispopular: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-1.png" alt="nike shoe">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Kidz Sandal
                        </div>
                        <div class="price">
                            $110.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Kidz Snadal
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Pink Sandal
                        </div>
                        <div class="price">
                            $99.99  40%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Black Sandal
                        </div>
                        <div class="price">
                            $190.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Blue Sandal
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-6.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive Black Sandal 
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Brown Sandal
                        </div>
                        <div class="price">
                            $99.99  30%OFF
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-8.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Sandal Sandal
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Kidz Brown Sandal
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-10.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Purple Sandal
                        </div>
                        <div class="price">
                            $129.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-11.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Addias Black Sandal
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--ishot: true">

                    <div class="author">
                        <div class="name"></div>
                        Kidz-Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive Kidz Sandal
                        </div>
                        <div class="price">
                            $150.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>

    </section>

    <!-- New Arrival Start -->
    <section class="content-section" id="New-Arrival">
        <section class="sec">

            <div class="text2">
                <h1>New-Arrival</h1>
            </div>

            <div class="container1">

                <!-- First product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-11.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Sneaker Premium
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Ltd Ed
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Ed. blue Sandal
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Ltd Ed
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Premium blue crocs
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Black Sandal
                        </div>
                        <div class="price">
                            $190.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Blue Sandal
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Ltd Shoe
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-2.png.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Ed. Shoe
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Brown Sandal
                        </div>
                        <div class="price">
                            $99.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-8.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Kidz Sandal
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            FootBall Sports Shoe
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-10.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Purple Sandal
                        </div>
                        <div class="price">
                            $129.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            addias
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-11.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Addias Black Sandal
                        </div>
                        <div class="price">
                            $120.200
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--new: true">

                    <div class="author">
                        <div class="name">
                            Ltd Ed.
                        </div>
                        Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited blue crocs
                        </div>
                        <div class="price">
                            $189.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>

    </section>


    <!-- Sale Start -->
    <section class="content-section" id="Sale">`
        <section class="sec">

            <div class="text2">
                <h1>Sale</h1>
            </div>

            <div class="container1">

                <!-- First product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Black Shoe
                        </div>
                        <div class="price">
                            <s>$159.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Second product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/Shoe/Shoe-5.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Nike Shoe Premium
                        </div>
                        <div class="price">
                            <s>$120.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Third product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Ltd Ed
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-2.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Ed Kidz Sneaker
                        </div>
                        <div class="price">
                            <s>$189.99</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Seven product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/Sneaker/Sneaker-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Brown Shoe
                        </div>
                        <div class="price">
                            <s>$150.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eight product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Men
                        </div>
                        Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Purple croc
                        </div>
                        <div class="price">
                            <s>$190.99</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Nine product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Kidz
                        </div>
                        Croc
                    </div>

                    <div class="image">
                        <img src="images/Croc/Croc-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Kidz Red Croc
                        </div>
                        <div class="price">
                            <s>$150.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Ten product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Noremal Wear Shoe
                        </div>
                        <div class="price">
                            <s>$159.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Eleven product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Kidz
                        </div>
                        Shoe
                    </div>

                    <div class="image">
                        <img src="images/k-Shoe/K-Shoe-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Kidz Pink Shoe
                        </div>
                        <div class="price">
                            <s>$99.200</s>
                            $88.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- 12 product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Nike
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-4.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Limited Pink Sneaker
                        </div>
                        <div class="price">
                            <s>$190.99</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <section class="sec">
            <div class="container1">
                <!-- Fourth product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Kidz
                        </div>
                        Sneaker
                    </div>

                    <div class="image">
                        <img src="images/k-Sneaker/k-Sneaker-9.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Exclusive Kidz Sneaker
                        </div>
                        <div class="price">
                            <s>$150.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Five product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-3.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Pink Sandal 
                        </div>
                        <div class="price">
                            <s>$159.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->

                <!-- Sixth product -->
                <article class="card" style="--issale: true">

                    <div class="author">
                        <div class="name">
                            Bata
                        </div>
                        Sandal
                    </div>

                    <div class="image">
                        <img src="images/k-sandal/k-sandal-7.png" alt="">
                        <div class="pre-loader"></div>
                    </div>

                    <div class="info">
                        <div class="name1">
                            Bata Brown Sandal
                        </div>
                        <div class="price">
                            <s>$99.200</s>
                            $99.99
                        </div>
                    </div>

                    <div class="more">
                        <div class="but">
                            <button class="btn10">ADD TO CART</button>
                        </div>
                    </div>
                </article>
                <!-- End -->
            </div>
        </section>

        <button class="LoadMore">Load-More</button>

    </section>

    <!-- Sale End -->

    <!-- End  -->

    <!-- Newsletter start -->
    <section>

        <div class="newsletter">
            <div class="news">
                <h1>JOIN OUR NEWSLETTER</h1>
            </div>
            <div class="input">
                <form action="send.php" method="post">
                    <input type="email" placeholder="ENTER YOUR EMAIL ADDRESS" id="email" name="email" />
                    <button type="submit" name="send">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>

    </section>
    <!-- End -->


    <!-- Footer Start -->
    <footer>
        <div class="container2">
            <div class="foot1">
                <h3>
                    CATEGORIES
                </h3>
                <div class="foter1">
                    <ul>

                        <li><a href="#Explore">
                                <h5>
                                    Explore
                                </h5>
                            </a></li>

                        <li><a href="show_cart/index2.html">
                                <h5>
                                    SHOW CART
                                </h5>
                            </a></li>

                        <li><a href="footerSec/blog.html">
                                <h5>
                                    BLOGS
                                </h5>
                            </a></li>

                    </ul>
                </div>
            </div>

            <div class="foot1">
                <h3>
                    INFORMATION
                </h3>
                <div class="foter1">
                    <ul>

                        <li><a href="footerSec/journey.html">
                                <h5>
                                    OUR JOURNEY
                                </h5>
                            </a></li>

                        <li><a href="footerSec/privacy.html">
                                <h5>
                                    PRIVACY POLICY
                                </h5>
                            </a></li>

                        <li><a href="footerSec/contact.html">
                                <h5>
                                    CONTACT INFO
                                </h5>
                            </a></li>

                    </ul>
                </div>
            </div>

            <div class="foot1">
                <h3>
                    CUSTOMER CARE
                </h3>
                <div class="foter1">
                    <ul>

                        <li><a href="footerSec/Impact.html">
                                <h5>
                                    OUR IMPACT
                                </h5>
                            </a></li>

                        <li><a href="footerSec/offers.html">
                                <h5>
                                    OFFERS
                                </h5>
                            </a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container3">
            <div class="logo1">
                <h1>Shoe-App</h1>
            </div>
            <div class="brand">
                <ul>
                    <li><a href="#">Youtube</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Pintrest</a></li>
                </ul>
            </div>
            <div class="last">
                <i class="fa-regular fa-copyright"></i>
                <h5> 2024 , allrights reserverd.</h5>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="script.js"></script>

</body>

</html>