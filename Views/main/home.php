<!-- start of hero -->
<section class="hero-slider hero-style-1">
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php foreach($slider as $item): ?>
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="<?= getStorageLink($item->images) ?>">
                    <div class="container-1410">
                        <div data-swiper-parallax="400" class="slide-text">
                            <p><?= $item->text?></p>
                        </div>
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2><span><?=$item->title?>
                                </span>  </h2>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="/mvc/San-Pham" class="theme-btn-s4">Cửa Hàng</a>
                        </div>
                    </div>
                </div> <!-- end slide-inner -->
            </div> 

            
          <?php endforeach;?>  
            <!-- end swiper-slide -->
        </div>

        <!-- end swiper-wrapper -->

        <!-- Control -->
        <div class="control-slider swiper-control">
            <div></div>
            <div class="swiper-pagination"></div>
            <div>
                <div class="swiper-button-next">
                    <svg class="slider-nav slider-nav-progress" viewBox="0 0 46 46">
                        <g class="slider-nav-path-progress-color">
                            <path d="M0.5,23a22.5,22.5 0 1,0 45,0a22.5,22.5 0 1,0 -45,0" />
                        </g>
                    </svg>
                    <svg class="slider-nav slider-nav-transparent sw-ar-rt" viewBox="0 0 46 46">
                        <circle class="slider-nav-path" cx="23" cy="23" r="22.5" />
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg class="slider-nav slider-nav-transparent sw-ar-lf" viewBox="0 0 46 46">
                        <circle class="slider-nav-path" cx="23" cy="23" r="22.5" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- /Control -->
    </div>
</section>
<!-- end of hero slider -->


<!-- start featured-proeducts-section-s2 -->
<section class="featured-proeducts-section-s2 section-padding"> 
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="product-grids clearfix">
                <?php foreach( $cates as $item ):  ?>
                    <div class="grid">
                        <div class="img-holder">
                            <a href="/mvc/San-Pham-DM&id=<?= $item->id; ?>"><img loading=lazy src="<?= getStorageLink($item->image) ?>"
                                    alt></a>
                        </div>
                        <div class="details">
                            <h3><?= $item->namecate;?></h3>
                            <a href="/mvc/San-Pham-DM&id=<?= $item->id;?> " class="shop-btn">Cửa Hàng</a>
                        </div>
                    </div>
                    <?php endforeach;  ?>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end featured-proeducts-section-s2 -->


<!-- start trendy-product-section -->
<section class="trendy-product-section section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-s2">
                    <h2>Sản phẩm mới</h2>
                </div>
                <a href="#" class="more-products">Nhiều sản phẩm hơn
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="products-wrapper">
                    <ul class="products product-row-slider">
                        <?php foreach($products as $item):?>
                            <?php
                                $price = $item->price;
                                $dis = $item->discount;
                                $priceDis = ($price*$dis)/100;
                                $priceNew= $price-$priceDis;
                                $discount = $item->discount;
                            ?>
                        <li class="product">
                                <div class="product-holder">
                                <?php
                                    if (empty($discount)) {
                                        
                                    }else{
                                        echo "<div class='product-badge discount'>$discount%</div>";
                                    }
                                ?>
                                    <a href="/mvc/Chi-Tiet&id=<?= $item->id ?>"><img style="height: 300px;width:250px"  loading=lazy src="<?= getStorageLink($item->image) ?>" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#" title="Quick view!"><i class="fi flaticon-view"></i></a>
                                            </li>
                                            <li><a href="#" title="Add to Wishlist!"><i
                                                        class="fi icon-heart-shape-outline"></i></a></li>
                                            <li><a href="/mvc/AddCart&id=<?= $item->id; ?>" title="Add to cart!"><i
                                                        class="fi flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="/mvc/Chi-Tiet"><?= $item->name; ?></a></h4>
                                    <span class="woocommerce-Price-amount amount">
                                        <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi><?= number_format($priceNew) ; ?>VND</bdi>
                                        </span>
                                        </ins>
                                        <del>
                                        <?php
                                        if(empty($discount)){
                                            
                                        }else{
                                        echo  "<span class='woocommerce-Price-amount amount'>
                                                    <bdi> $price VND</bdi>
                                                </span>";
                                        }
                                    ?>
                                        </del>
                                    </span>
                                </div>
                                <style>
                                
                                </style>
                                <div class="quick-view-single-product">
                                    <div class="view-single-product-inner clearfix">
                                        <button class="btn quick-view-single-product-close-btn"><i
                                                class="pe-7s-close-circle"></i></button>
                                        <div class="img-holder">
                                            <img loading=lazy src="<?= getStorageLink($item->image) ?>" alt>
                                        </div>
                                        <div class="product-details">
                                            <h4><?= $item->name;  ?></h4>
                                            <div class="price">
                                            <span class="current"><?=number_format($priceNew) ; ?>VND</span>
                                            <span class="old"><?= number_format($price)  ?> VND </span>
                                            </div>
                                            <div class="rating">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                <span>(2 Customer review)</span>
                                            </div>
                                            <p><?= $item->description;  ?></p>

                                            <div class="product-option">
                                                <form class="form">
                                                    <div class="product-row">
                                                        <div>
                                                            <input id="product-count" class="product-count"
                                                                type="text" value="1" name="product-count">
                                                        </div>
                                                        <div>
                                                        <button type="submit"  >  <a href="/mvc/AddCart&id=<?= $item->id; ?>" style="color:white;">ADD CART</a></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="thb-product-meta-before">
                                                <div class="add-to-wishlist">
                                                    <a href="#" class="add_to_wishlist">
                                                        <i class="pe-7s-like"></i>
                                                        <span>Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span
                                                            class="sku">71236-1</span></span>
                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a
                                                            href="#">Tops</a>, <a href="#">Women</a></span>
                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a
                                                            href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end quick-view-single-product -->
                            </li>
                        <?php endforeach; ?> 
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end trendy-product-section -->


<!-- start category-section-area -->
<section class="category-section-area section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title-s3">
                    <h2>Azedw Categories</h2>
                    <p>Our campaigns, latest trends and new collections</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-xs-12">
                <div class="all-cat">
                    <ul class="clearfix">
                        <li><a href="shop-rtl.html"><i class="fi flaticon-jacket-1"></i> <span>Áo Khóac</span></a>
                        </li>
                        <li><a href="shop-rtl.html"><i class="fi flaticon-jacket-2"></i> <span>Áo</span></a></li>
                        <li><a href="shop-rtl.html"><i class="fi flaticon-pants"></i> <span>Quần</span></a></li>
                        <li><a href="shop-rtl.html"><i class="fi flaticon-dress"></i> <span>Tops</span></a></li>
                        <li><a href="shop-rtl.html"><i class="fi flaticon-polo-shirt"></i> <span>Áo phông
                                </span></a>
                        </li>
                        <li><a href="shop-rtl.html"><i class="fi flaticon-dress-1"></i> <span>Váy</span></a></li>
                        <li><a href="shop-rtl.html"><i class="fi flaticon-bride-dress"></i> <span>Bridals</span></a>
                        </li>
                        <li><a href="shop-rtl.html"><i class="fi flaticon-coat"></i> <span>Swetters</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container-1410 -->
</section>
<!-- end category-section-area -->


<!-- start cta-section -->
<section class="cta-section">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="content-area">
                    <span>Xu hướng
                    </span>
                    <h3>Thời trang mới
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nisi distinctio magni,
                        iure deserunt doloribus optio</p>
                    <a href="/mvc/San-Pham" class="theme-btn-s2">Cửa Hàng</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end best-seller-section -->


<!-- start instagram-section -->
<section class="instagram-section">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="instagram-inner">
                    <div class="instagram-text">
                                        <link rel="stylesheet" href="fb.com/skyzenky">
                                            <a href="https://www.facebook.com/skyzenky">
                                                <h3>Follow our instagram</h3>
                                            
                                        </link>
                        <p>@aviwp.studio</p>
                    </div>
                    <div class="instagram-grids clearfix">
                        <div class="grid">
                            <a href="#"><img loading=lazy src="<?= LIB ?>/images/instagram/1.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img loading=lazy src="<?= LIB ?>/images/instagram/3.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img loading=lazy src="<?= LIB ?>/images/instagram/4.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img loading=lazy src="<?= LIB ?>/images/instagram/2.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img loading=lazy src="<?= LIB ?>/images/instagram/5.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img loading=lazy src="<?= LIB ?>/images/instagram/6.jpg" alt></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end instagram-section -->