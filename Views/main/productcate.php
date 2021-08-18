       <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Sản Phẩm</h2>
                                <ol class="breadcrumb">
                                    <li><a href="/mvc/">Trag Chủ</a></li>
                                    <li>Cửa Hàng</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->


        <!-- start shop-section -->
        <section class="shop-section section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="shop-area clearfix">
                            <div class="woocommerce-content-wrap">
                                <div class="woocommerce-content-inner">
                                    <div class="woocommerce-toolbar-top">
                                        <p class="woocommerce-result-count">
                                            Hiển thị 1-12 trong số 70 kết quả</p>
                                        <div class="products-sizes">
                                            <a href="#" class="grid-4 active">
                                                <div class="grid-draw">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <div class="grid-draw">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <div class="grid-draw">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <a href="#" class="grid-3">
                                                <div class="grid-draw">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <div class="grid-draw">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <div class="grid-draw">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                            <a href="#" class="list-view">
                                                <div class="grid-draw-line">
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <div class="grid-draw-line">
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                                <div class="grid-draw-line">
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                        <form class="woocommerce-ordering" method="get">
                                            <select name="orderby" class="orderby">
                                                <option value="menu_order" selected='selected'>Phân Loại</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating">Sort by average rating</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                            <input type="hidden" name="post_type" value="product" />
                                        </form>
                                    </div>
                                    <ul class="products">
                                    <?php foreach($product_cate as $item):?>
                                        
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
                                                if (empty($discount == 0  )) {
                                                    
                                                }else{
                                                    echo "<div class='product-badge discount'>$discount%</div>";
                                                }
                                            
                                            ?>
                                                <div class="product-badge discount">-<?= $dis  ?>%</div>
                                                <a href="/mvc/Chi-Tiet&id=<?= $item->id ?>"><img style="height: 300px; width:250px;" loading = lazy src="<?= getStorageLink($item->image) ?>"
                                                        alt></a>
                                                <div class="shop-action-wrap">
                                                    <ul class="shop-action">
                                                        <li><a href="/mvc/Chi-Tiet&id=<?= $item->id ?>" title="Xem Trước!"><i
                                                                    class="fi flaticon-view"></i></a></li>
                                                        <li><a href="#" title="Thêm Vào Yêu Thích!"><i
                                                                    class="fi icon-heart-shape-outline"></i></a></li>
                                                        <li><a href="#" title="Thêm Giỏ Hàng!"><i
                                                                    class="fi flaticon-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h4><a href="/mvc/Chi-Tiet"><?= $item->name; ?>
                                                    </a></h4>
                                                <span class="woocommerce-Price-amount amount">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi><span
                                                                    class="woocommerce-Price-currencySymbol"><?= number_format($priceNew)   ?> </span>VND</bdi>
                                                        </span>
                                                    </ins>
                                                    <del>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi><span
                                                                    class="woocommerce-Price-currencySymbol"><?= number_format($price)    ?></span>VND</bdi>
                                                        </span>
                                                    </del>
                                                </span>
                                                <p class="product-description"> <?= $item->description;  ?> </p>
                                            </div>

                                            <div class="quick-view-single-product">
                                                <div class="view-single-product-inner clearfix">
                                                    <button class="btn quick-view-single-product-close-btn"><i
                                                            class="pe-7s-close-circle"></i></button>
                                                    <div class="img-holder">
                                                        <img src="Publics/images/shop/img-1.jpg" alt>
                                                    </div>
                                                    <div class="product-details">
                                                        <h4><?= $item->name;  ?>
                                                        </h4>
                                                        <div class="price">
                                                            <span class="current"><?= $priceNew ?></span>
                                                            <span class="old"><?= $price  ?></span>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                            <span>(2 Đánh Giá)</span>
                                                        </div>
                                                        <p><?= $item->description ?></p>
                                                        <div class="product-option">
                                                            <form class="form">
                                                                <div class="product-row">
                                                                    <div>
                                                                        <input id="product-count" class="product-count"
                                                                            type="text" value="1" name="product-count">
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
                                                                    <span>Thêm Vào Yêu Thích</span>
                                                                </a>
                                                            </div>
                                                            <div class="product_meta">
                                                                <span class="sku_wrapper">SKU: <span
                                                                        class="sku">71236-1</span></span>
                                                                <span class="posted_in">Categories: <a
                                                                        href="#">Clothing</a>, <a href="#">Tops</a>, <a
                                                                        href="#">Women</a></span>
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
                                <div class="pagination-wrapper">
                                    <ul class="pg-pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <i class="fi flaticon-back"></i>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <i class="fi flaticon-next"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="shop-sidebar">
                                <div class="widget widget_search">
                                    <div class="search-widget">
                                        <form class="searchform">
                                            <div>
                                                <input type="text" placeholder="Tìm Kiếm...">
                                                <button type="submit"><i class="ti-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="widget widget_price_filter">
                                    <h3>Lọc theo giá
                                    </h3>
                                    <div class="filter-price">
                                        <form>
                                            <div id="slider-range"></div>
                                            <p>Price : <input type="text" id="amount"></p>
                                            <button>Lọc</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="widget woocommerce widget_product_categories">
                                    <h3>Lọc theo danh mục</h3>
                                    <ul class="product-categories">
                                        <li class="cat-item cat-parent">
                                            <a href="#">Quần Áo</a>
                                            <ul class="children">
                                                <li class="cat-item cat-item-213">
                                                    <a href="#">Phụ kiện</a>
                                                </li>
                                                <li class="cat-item cat-item-212">
                                                    <a href="#">Hoodies</a>
                                                </li>
                                                <li class="cat-item cat-item-211">
                                                    <a href="#">Áo phông</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">Trang trí
                                            </a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">Âm Nhạc</a>
                                        </li>
                                        <li class="cat-item">
                                            <a href="#">Uncategorized</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                                    <h3>Lọc theo màu
</h3>
                                    <ul class="woocommerce-widget-layered-nav-list">
                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                            <a href="#">Xanh</a>
                                            <span class="count">(4)</span>
                                        </li>
                                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                                            <a href="#">Đỏ</a>
                                            <span class="count">(4)</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="widget woocommerce widget_product_tag_cloud">
                                    <h3>Lọc theo thẻ Sản phẩm
</h3>
                                    <div class="tagcloud">
                                        <a href="#" class="tag-cloud-link">Nữ</a>
                                        <a href="#" class="tag-cloud-link">Bộ Sưu Tập</a>
                                        <a href="#" class="tag-cloud-link">Jense</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end shop-section -->


        <!-- start instagram-section -->
        <section class="instagram-section">
            <div class="container-1410">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="instagram-inner">
                            <div class="instagram-text">
                                <h3>Follow our instagram</h3>
                                <p>@duongdieppp</p>
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