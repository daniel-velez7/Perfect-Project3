<!-- ==================== Start Loading ==================== -->

<div id="preloader">
</div>

<!-- ==================== End Loading ==================== -->



<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->



<!-- ==================== Start cursor ==================== -->

<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- ==================== End cursor ==================== -->



<!-- ==================== Start Navbar ==================== -->

<nav class="navbar navbar-expand-lg bg-blc">
    <div class="container">

        <!-- Logo -->
        <a class="logo" href="<?php echo site_url('index.php/Home'); ?>">
            <img src="<?= base_url('assets/img/logo-light.png'); ?>" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url('about'); ?>" role="button" aria-haspopup="true" aria-expanded="false">QUI JE SUIS</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo site_url('index.php/Home/about'); ?>">PRODUCTIV’ELLES</a>
                        <a class="dropdown-item" href="<?php echo site_url('index.php/Home/about'); ?>">MOTIVATION</a>
                    </div>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('about'); ?>">QUI JE SUIS</a>
                    </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('index.php/Home/formation'); ?>">FORMATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('index.php/Home/academy'); ?>">FI ACADEMY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('index.php/Home/blog'); ?>">BLOG</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('index.php/Home/shop'); ?>">SHOP</a>
                </li>

                <?php if ($this->session->connected == false) {
                    echo ' <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="' . site_url('about') . '" role="button" aria-haspopup="true" aria-expanded="false">MEMBRE</a>
                    <div class="dropdown-menu"> 
                        <a class="dropdown-item" href="' . site_url('index.php/Subscribe/register') . '">INSCRIPTION</a>
                        <a class="dropdown-item" href="' . site_url('index.php/Login/authentification') . '">CONNECTION</a>
                    </div>
                </li> ';
                }

                ?> 

                <?php if ($this->session->connected == true) {
                    echo ' <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="' . site_url('about') . '" role="button" aria-haspopup="true" aria-expanded="false">MEMBRE</a>
                    <div class="dropdown-menu"> 
                        <a class="dropdown-item" href="' . site_url('index.php/Home/profil') . '">PROFIL</a>
                        <a class="dropdown-item" href="' . site_url('index.php/Login/logout') . '">DECONNECTION</a>
                    </div>
                </li> ';
                }

                ?>
            </ul>
            <div class="cart">
                <div class="cart-icon">
                    <span class="icon pe-7s-cart cursor-pointer"></span>
                    <div class="mad-count">2</div>
                </div>
                <div class="cart-side">
                    <span class="clos pe-7s-close cursor-pointer"></span>
                    <div class="titl">
                        <h6>Your Cart</h6>
                        <span>2 Items</span>
                    </div>
                    <div class="prods">
                        <div class="item">
                            <div class="img">
                                <img src="img/prod/001.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Perfect Pasta</h6>
                                <div class="price">1 x <span>$40</span></div>
                            </div>
                            <div class="del valign">
                                <span class="pe-7s-close cursor-pointer"></span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="img/prod/001.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Perfect Pasta</h6>
                                <div class="price">1 x <span>$40</span></div>
                            </div>
                            <div class="del valign">
                                <span class="pe-7s-close cursor-pointer"></span>
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h6>Subtotal :</h6>
                        <p>$ 80</p>
                    </div>
                    <a href="#0" class="btn-skew btn-color btn-bg">
                        <span>Checkout</span>
                        <i></i>
                    </a>
                </div>
            </div>
            <div class="search">
                <span class="icon pe-7s-search cursor-pointer"></span>
                <div class="search-form text-center">
                    <form>
                        <input type="text" name="search" placeholder="Search">
                    </form>
                    <span class="close pe-7s-close cursor-pointer"></span>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- ==================== End Navbar ==================== -->