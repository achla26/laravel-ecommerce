@php
     echo "<pre>";
     print_r($product);
     echo "</pre>";
     @endphp
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6  ec-product-content" data-animation="fadeIn">
    <div class="ec-product-inner">
        <div class="ec-pro-image-outer">
            <div class="ec-pro-image">
                <a href="product-left-sidebar.html" class="image">
                    <img class="main-image" src="{{asset('front_assets/images/product-image/8_1.jpg')}}" alt="Product">
                    <img class="hover-image" src="{{asset('front_assets/images/product-image/8_2.jpg')}}" alt="Product">
                </a>
                <span class="percentage">35%</span>
                <span class="flags">
                    <span class="new">New</span>
                </span>
                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="{{asset('front_assets/images/icons/quickview.svg')}}" class="svg_img pro_svg" alt=""></a>
                <div class="ec-pro-actions">
                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{asset('front_assets/images/icons/compare.svg')}}" class="svg_img pro_svg" alt=""></a>
                    <button title="Add To Cart" class="add-to-cart"><img src="{{asset('front_assets/images/icons/cart.svg')}}" class="svg_img pro_svg" alt=""> Add To Cart</button>
                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('front_assets/images/icons/wishlist.svg')}}" class="svg_img pro_svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="ec-pro-content">
            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Digital Smart Watches</a></h5>
            <div class="ec-pro-rating">
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star"></i>
            </div>
            <span class="ec-price">
                <span class="old-price">$100.00</span>
                <span class="new-price">$80.00</span>
            </span>
            <div class="ec-pro-option">
                <div class="ec-pro-color">
                    <span class="ec-pro-opt-label">Color</span>
                    <ul class="ec-opt-swatch ec-change-img">
                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="{{asset('front_assets/images/product-image/8_2.jpg')}}" data-src-hover="{{asset('front_assets/images/product-image/8_2.jpg')}}" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                        <li><a href="#" class="ec-opt-clr-img" data-src="{{asset('front_assets/images/product-image/8_3.jpg')}}" data-src-hover="{{asset('front_assets/images/product-image/8_3.jpg')}}" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                        <li><a href="#" class="ec-opt-clr-img" data-src="{{asset('front_assets/images/product-image/8_4.jpg')}}" data-src-hover="{{asset('front_assets/images/product-image/8_4.jpg')}}" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>