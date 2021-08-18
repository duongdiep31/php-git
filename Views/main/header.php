<!-- Start header -->

<?php
    foreach($info as $item):
?>
<header id="header" class="site-header header-style-1">


    <nav class="navigation navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="open-btn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/mvc/"><img src="<?= getStorageLink($item->logo)?>" alt></a>
            </div>

            <div class="header-left">
                <div class="side-info-bars">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <div class="side-info-content">
                    <button class="btn side-info-close-btn"><i class="ti-close"></i></button>
                    <div class="logo">
                        <img src="<?= getStorageLink($item->logo_content)?>" alt>
                    </div>
                    <div class="text">
                        <p><?= $item->content ?></p>
                        <ul class="info">
                            <li>Liên Hệ Chúng Tôi: <?= $item->sdt;  ?></li>
                            <li>Email: <?= $item->email; ?></li>
                        </ul>
                        <ul class="social-links">
                            <li><a href="https:facebook.com/skyzenky"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                            <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="search-area">
                    <form>
                        <button type="submit"><i class="fi flaticon-search"></i></button>
                        <input type="text" placeholder="Tìm Kiếm">
                    </form>
                </div>
            </div>




            <div id="navbar" class="navbar-collapse collapse navigation-holder">
                <button class="close-navbar"><i class="ti-close"></i></button>
                <ul class="nav navbar-nav">
                    <li class="menu-item-has-children current-menu-parent">
                        <a href="/mvc/">Trang Chủ</a>
                    </li>
                    <li><a href="#">About</a></li>
                    <li class="menu-item-has-children has-mega-menu">
                        <a href="/mvc/San-Pham">Cửa Hàng</a>
                      
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                       
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                      
                    </li>
                    <li><a href="/mvc/lien-he">Liên Hệ</a></li>
                    <li><a href="">RTL</a></li> 
                </ul>
            </div><!-- end of nav-collapse -->
            <div class="header-right">
                <div class="my-account-link">
                    <a href="/mvc/user"><i class="icon-user"></i></a>
                </div>
                <div class="wishlist-box">
                    <a href="#"><i class="icon-heart-shape-outline"></i></a>
                </div>
                <div class="mini-cart">
                
                    <a href="/mvc/cart">
                        <button class="cart-toggle-btn"> 
                            <i class="icon-large-paper-bag"></i> 
                            <span class="cart-count"><?php echo empty($_SESSION['cart']) ? 0  : count($_SESSION['cart']) ?></span>
                        </button>
                    </a>
                    
                </div>
            </div>
        </div><!-- end of container -->
    </nav>
</header>
<?php endforeach;  ?>
<!-- end of header -->