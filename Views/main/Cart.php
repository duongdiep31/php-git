        
        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-container">
                <div class="page-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col col-xs-12">
                                <h2>Cart</h2>
                                <ol class="breadcrumb">
                                    <li><a href="/mvc/">Trang Chủ</a></li>
                                    <li>Cửa Hàng</li>
                                </ol>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end page-title -->


        <!-- start cart-section -->
        <section class="cart-section woocommerce-cart section-padding">
            <div class="container-1410">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="woocommerce">
                            <form action="https://wp-ts.com/" method="post">
                                <table class="shop_table shop_table_responsive cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Sản Phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số Luọng</th>
                                            <th class="product-subtotal">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(isset($_SESSION['cart'])){
                                                foreach($_SESSION['cart'] as $key => $item): // chuyen mang thanh key
                                                $getId = ProductModel::find($item['id']); // get sp theo id
                                                $slProduct=$item['sl']; // chuyen session $item['sl] => bien $slProduct
                                                $totalPricePro = ($getId->price) * $slProduct; // bien gia nhan so luong
                                                $totalPriceAll =+ $totalPricePro; // tong tien cua tat ca
                                            
                                            ?>
                                                <tr class="cart_item">
                                                    <td class="product-remove">
                                                        <a href="/mvc/unsetCart&id=<?= $item['id'] ?>" class="remove" title="Remove this item" data-product_id="8"
                                                            data-product_sku="my name is">&times;</a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="#">
                                                            <img width="57" height="70" src="<?= getStorageLink($getId->image) ?>"
                                                                class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                alt="#" />
                                                        </a>
                                                    </td>
                                                    <td class="product-name" data-title="Product">
                                                        <a href="mvc/details"><?= $getId->name ?></a>
                                                    </td>

                                                    <td class="product-price" data-title="Price">
                                                        <span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span><?= number_format($getId->price) ?> VND</span>
                                                    </td>
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity">
                                                            <input disabled value="<?= $slProduct ?>"/>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"><?= number_format($totalPricePro) ?> VNĐ</span></span>
                                                    </td>
                                                </tr>
                                            <?php
                                                endforeach;
                                            }
                                        
                                        ?>
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">
                                <div class="cart_totals calculated_shipping">
                                    <h2>Hóa Đơn</h2>
                                    <table class="shop_table shop_table_responsive">
                                        <tr class="cart-subtotal">
                                            <th>Tổng Thu</th>
                                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount">
                                                    <span
                                                        class="woocommerce-Price-currencySymbol"></span><?= number_format($totalPriceAll) ?> VNĐ</span>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Vận Chuyển</th>
                                            <td>Miễn phí vận chuyển</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Tổng</th>
                                            <td data-title="Total"><strong><span
                                                        class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol"></span><?= number_format($totalPriceAll) ?> VNĐ</span></strong>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="wc-proceed-to-checkout">
                                        <a href="checkout.html" class="checkout-button button alt wc-forward">Thanh Toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end cart-section -->


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