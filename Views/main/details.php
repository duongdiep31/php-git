<!-- start page-title -->
<section class="page-title">
    <div class="page-title-container">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Chi Tiet</h2>
                        <ol class="breadcrumb">
                            <li><a href="/mvc/">Trang Chủ</a></li>
                            <li>Chi tiet Sản Phẩm</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </div>
</section>
<!-- end page-title -->


<!-- start shop-single-section -->
<section class="shop-single-section section-padding">
    <div class="container-1410">
        <div class="row">
            <div class="col col-md-6">
                <div class="shop-single-slider">
                    <div class="slider-for">
                        <div><img src="<?= getStorageLink($item->image) ?>" alt></div>
                        <div><img src="Publics/images/shop/shop-single/img-2.jpg" alt></div>
                    </div>
                    
                </div>
            </div>
            <?php
                                $price = $item->price;
                                $dis = $item->discount;
                                $priceDis = ($price*$dis)/100;
                                $priceNew= $price-$priceDis;
                                $discount = $item->discount;
                            ?>
            <div class="col col-md-6">
                <div class="product-details">
                    <h2><?= $item->name; ?>
                    </h2>
                    <div class="price">
                        <span class="current"><?= $priceNew; ?></span>
                        <span class="old"><?= $price?></span>
                    </div>
                    <div class="rating">
                        <i class="fi flaticon-star"></i>
                        <i class="fi flaticon-star"></i>
                        <i class="fi flaticon-star"></i>
                        <i class="fi flaticon-star"></i>
                        <i class="fi flaticon-star-social-favorite-middle-full"></i>
                        <span>(2 Đánh Gía)</span>
                    </div>
                    <p><?=  $item->description ?></p>

                    <div class="product-option">
                        <form class="form">
                            <div class="product-row">
                                <div>
                                    <input class="product-count" type="text" value="1" name="product-count">
                                </div>
                                <div>
                                    <button type="submit"><a style="color:white" href="/mvc/AddCart&id=<?= $item->id; ?>">ADD TO CART</a></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="thb-product-meta-before">
                        <div class="add-to-wishlist">
                            <a href="#" class="add_to_wishlist">
                                <i class="pe-7s-like"></i>
                                <span>Thêm Vào Yêu Thích</span>
                            </a>
                        </div>

                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                            <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a
                                    href="#">Women</a></span>
                            <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a
                                    href="#">Tshirt</a></span>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col col-xs-12">
                <div class="single-product-info">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#01" data-toggle="tab">Miêu Tả</a></li>
                        <li><a href="#02" data-toggle="tab">Review (03)</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="01">
                            <p> <?= $item ->description2  ?></p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="02">
                            <div class="row">
                                <div class="col col-xs-12">
                                    <div class="client-rv">
                                        <div class="client-pic">
                                            <img src="Publics/images/shop/shop-single/review/img-1.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <div class="name-rating-time">
                                                <div class="name-rating">
                                                    <div>
                                                        <h4>Mice</h4>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                    </div>
                                                </div>
                                                <div class="time">
                                                    <span>1 ngày trước</span>
                                                </div>
                                            </div>
                                            <div class="review-body">
                                                <p>Anh ấy vẫy vùng bất lực khi anh ấy nhìn Chuyện gì đã xảy ra với tôi.
                                                    Nó không phải là một tạp chí mơ mộng và được đặt trong một khung mạ
                                                    vàng đẹp mắt.
                                                    Nó cho thấy một người phụ nữ được trang bị mũ lông và boa lông đang
                                                    ngồi thẳng,
                                                    giơ một chiếc mõm bằng lông vũ nặng nề bao phủ toàn bộ cánh tay dưới
                                                    của cô ấy về phía người xem.
                                                    Gregor sau đó quay lại nhìn ra ngoài cửa sổ trong thời tiết buồn tẻ
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="client-rv">
                                        <div class="client-pic">
                                            <img src="Publics/images/shop/shop-single/review/img-2.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <div class="name-rating-time">
                                                <div class="name-rating">
                                                    <div>
                                                        <h4>Hone</h4>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                    </div>
                                                </div>
                                                <div class="time">
                                                    <span>1 day ago</span>
                                                </div>
                                            </div>
                                            <div class="review-body">
                                                <p>Waved about helplessly as he looked What's happened to me he thought.
                                                    It wasn't a dreamtrated magazine and housed in a nice, gilded frame.
                                                    It showed a lady fitted out with a fur hat and fur boa who sat
                                                    upright, raising a heavy fur muff that covered the whole of her
                                                    lower arm towards the viewer. Gregor then turned to look out the
                                                    window at the dull weather</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="client-rv">
                                        <div class="client-pic">
                                            <img src="Publics/images/shop/shop-single/review/img-3.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <div class="name-rating-time">
                                                <div class="name-rating">
                                                    <div>
                                                        <h4>Piloa</h4>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                        <i class="fi flaticon-star"></i>
                                                    </div>
                                                </div>
                                                <div class="time">
                                                    <span>2 days ago</span>
                                                </div>
                                            </div>
                                            <div class="review-body">
                                                <p>Waved about helplessly as he looked What's happened to me he thought.
                                                    It wasn't a dreamtrated magazine and housed in a nice, gilded frame.
                                                    It showed a lady fitted out with a fur hat and fur boa who sat
                                                    upright, raising a heavy fur muff that covered the whole of her
                                                    lower arm towards the viewer. Gregor then turned to look out the
                                                    window at the dull weather</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col col-xs-12 review-form-wrapper">
                                    <div class="review-form">
                                        <h4>Here you can review the item</h4>
                                        <form>
                                            <div>
                                                <input type="text" class="form-control" placeholder="Name *" required>
                                            </div>
                                            <div>
                                                <input type="email" class="form-control" placeholder="Email *" required>
                                            </div>
                                            <div>
                                                <textarea class="form-control" placeholder="Review *"></textarea>
                                            </div>
                                            <div class="rating-wrapper">
                                                <div class="rating">
                                                    <a href="#" class="star-1">
                                                        <i class="ti-star"></i>
                                                    </a>
                                                    <a href="#" class="star-1">
                                                        <i class="ti-star"></i>
                                                    </a>
                                                    <a href="#" class="star-1">
                                                        <i class="ti-star"></i>
                                                    </a>
                                                    <a href="#" class="star-1">
                                                        <i class="ti-star"></i>
                                                    </a>
                                                    <a href="#" class="star-1">
                                                        <i class="ti-star"></i>
                                                    </a>
                                                </div>
                                                <div class="submit">
                                                    <button type="submit" class="theme-btn">Post review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col col-xs-12">
                <div class="realted-porduct">
                    <h3>Sản phẩm liên quan</h3>
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
                                    if(empty($discount)){
                                        
                                    }else{
                                       echo "<div class='product-badge discount'>$discount%</div>";
                                    }
                                ?>
                                
                                <a href="/mvc/Chi-Tiet&id=<?= $item->id ?>"><img style="width:250px;height:330px;" loading=lazy src="<?= getStorageLink($item->image) ?>"
                                        alt></a>
                                <div class="shop-action-wrap">
                                    <ul class="shop-action">
                                        <li><a href="#" title="Xem Trước!"><i class="fi flaticon-view"></i></a>
                                        </li>
                                        <li><a href="#" title="Thêm vào danh sách yêu thích!"><i
                                                    class="fi icon-heart-shape-outline"></i></a></li>
                                        <li><a href="/mvc/AddCart&id=<?= $item->id; ?>&name=<?= $item->name ?>&image=<?= $item->image ?>&price=<?= $item->price ?>&quantity=1" title="Thêm Giỏ Hàng!"><i
                                                    class="fi flaticon-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <h4><a href="/mvc/Chi-Tiet"><?= $item->name; ?></a></h4>
                                <span class="woocommerce-Price-amount amount">
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi><?= $priceNew; ?>VND</bdi>
                                        </span>
                                    </ins>
                                    <del>
                                    <?php
                                        if(empty($discount)){
                                            
                                        }else{
                                        echo "<span class='woocommerce-Price-amount amount'>
                                                    <bdi>$price VND</bdi>
                                                </span>";
                                        }
                                    ?>
                                        
                                    </del>
                                </span>
                            </div>
                            <div class="quick-view-single-product">
                                <div class="view-single-product-inner clearfix">
                                    <button class="btn quick-view-single-product-close-btn"><i
                                            class="pe-7s-close-circle"></i></button>
                                    <div class="img-holder">
                                        <img loading=lazy src="<?= LIB ?>/images/shop/img-1.jpg" alt>
                                    </div>
                                    <div class="product-details">
                                        <h4><?= $item->name;  ?></h4>
                                        <div class="price">
                                            <span class="current"><?= $priceNew; ?>VND</span>
                                            <span class="old"><?= $price ?> VND </span>
                                        </div>
                                        <div class="rating">
                                            <i class="fi flaticon-star"></i>
                                            <i class="fi flaticon-star"></i>
                                            <i class="fi flaticon-star"></i>
                                            <i class="fi flaticon-star"></i>
                                            <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                            <span>(2 Đánh Giá)</span>
                                        </div>
                                        <p><?= $item->description;  ?></p>
                                        <div class="product-option">
                                            <form class="form">
                                                <div class="product-row">
                                                    <div>
                                                        <input id="product-count" class="product-count" type="text"
                                                            value="1" name="product-count">
                                                    </div>
                                                    <div>
                                                        <button type="submit">Thêm Giỏ Hàng</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="thb-product-meta-before">
                                            <div class="add-to-wishlist">
                                                <a href="#" class="add_to_wishlist">
                                                    <i class="pe-7s-like"></i>
                                                    <span>Thêm vào danh sách yêu thích</span>
                                                </a>
                                            </div>
                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                <span class="posted_in">Thể Loại: <a href="#">Quần Áo</a>, <a
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
    </div> <!-- end of container -->
</section>
<!-- end of shop-single-section -->


<!-- start instagram-section -->
<section class="instagram-section">
    <div class="container-1410">
        <div class="row">
            <div class="col col-xs-12">
                <div class="instagram-inner">
                    <div class="instagram-text">
                        <h3>Follow our instagram</h3>
                        <p>@aduongdieppp</p>
                    </div>
                    <div class="instagram-grids clearfix">
                        <div class="grid">
                            <a href="#"><img src="Publics/images/instagram/1.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="Publics/images/instagram/3.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="Publics/images/instagram/4.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="Publics/images/instagram/2.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="Publics/images/instagram/5.jpg" alt></a>
                        </div>
                        <div class="grid">
                            <a href="#"><img src="Publics/images/instagram/6.jpg" alt></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end instagram-section -->