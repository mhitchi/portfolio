<?php
/**
 * Header Navigation template
 * 
 * @package Marmalil
 */
?>
<!--https://codepen.io/piyushpd139/pen/gOYvZPG-->
<nav class="navbar navbar-expand-custom navbar-mainbg">
                <!-- trade for dynamic logo <a class="navbar-brand navbar-logo" href="#">Navbar</a> -->
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } else {
                    echo '<a class="navbar-brand navbar-logo" href="#"><img src="../../../wp-content/uploads/2023/05/portfolio_icon.png" alt="Explore Manning Hitchings portfolio"/></a>';
                }
                ?>
                <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Design</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Development</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>