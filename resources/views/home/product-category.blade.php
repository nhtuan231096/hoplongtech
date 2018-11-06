@extends('layouts.home')
@section('content')
<div class="col-full">
  <div class="row">
     <nav class="woocommerce-breadcrumb">
        <a href="home-v1.html">Home</a>
        <span class="delimiter">
           <i class="tm tm-breadcrumbs-arrow-right"></i>
       </span>Danh mục sản phẩm
   </nav>
   <!-- .woocommerce-breadcrumb -->
   <div id="primary" class="content-area">
    <main id="main" class="site-main">
       <div class="shop-archive-header">
          <div class="jumbotron">
             <div class="jumbotron-img">
                <img width="416" height="283" alt="" src="{{url('public/home')}}/assets/images/products/jumbo.jpg" class="jumbo-image alignright">
            </div>
            <div class="jumbotron-caption">
                <h3 class="jumbo-title">{{$category->title}}</h3>
                <p class="jumbo-subtitle">{{$category->description}}
                   <br>Mô tả abc xyz ac nibh mi. Ut lobortis odio nulla, congue rhoncus risus facilisis eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                   <a href="#">abc<i class="tm tm-long-arrow-right"></i></a>
               </p>
           </div>

       </div>

   </div>
   <!-- .shop-archive-header -->
   <div class="shop-control-bar">
      <div class="handheld-sidebar-toggle">
         <button type="button" class="btn sidebar-toggler">
            <i class="fa fa-sliders"></i>
            <span>Filters</span>
        </button>
    </div>
    <!-- .handheld-sidebar-toggle -->
    <h1 class="woocommerce-products-header__title page-title">{{$category->title}}</h1>
    <ul role="tablist" class="shop-view-switcher nav nav-tabs">
     <li class="nav-item">
        <a href="#grid" title="Grid View" data-toggle="tab" class="nav-link active">
           <i class="tm tm-grid-small"></i>
       </a>
   </li>
   <li class="nav-item">
    <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
       <i class="tm tm-grid"></i>
   </a>
</li>
<li class="nav-item">
    <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link ">
       <i class="tm tm-listing-large"></i>
   </a>
</li>
<li class="nav-item">
    <a href="#list-view" title="List View" data-toggle="tab" class="nav-link ">
       <i class="tm tm-listing"></i>
   </a>
</li>
<li class="nav-item">
    <a href="#list-view-small" title="List View Small" data-toggle="tab" class="nav-link ">
       <i class="tm tm-listing-small"></i>
   </a>
</li>
</ul>
<!-- .shop-view-switcher -->
<form class="form-techmarket-wc-ppp" method="POST">
 <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
    <option value="20">Show 20</option>
    <option value="40">Show 40</option>
    <option value="-1">Show All</option>
</select>
<input type="hidden" value="5" name="shop_columns">
<input type="hidden" value="15" name="shop_per_page">
<input type="hidden" value="right-sidebar" name="shop_layout">
</form>
<!-- .form-techmarket-wc-ppp -->
<form method="get" class="woocommerce-ordering">
 <select class="orderby" name="orderby">
    <option value="popularity">Sort by popularity</option>
    <option value="rating">Sort by average rating</option>
    <option selected="selected" value="date">Sort by newness</option>
    <option value="price">Sort by price: low to high</option>
    <option value="price-desc">Sort by price: high to low</option>
</select>
<input type="hidden" value="5" name="shop_columns">
<input type="hidden" value="15" name="shop_per_page">
<input type="hidden" value="right-sidebar" name="shop_layout">
</form>
<!-- .woocommerce-ordering -->
<nav class="techmarket-advanced-pagination">
 <form class="form-adv-pagination" method="post">
    <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
</form> of 5<a href="#" class="next page-numbers">→</a>
</nav>
<!-- .techmarket-advanced-pagination -->
</div>
<!-- .shop-control-bar -->
<div class="tab-content">
  <div id="grid" class="tab-pane active" role="tabpanel">
     <div class="woocommerce columns-5">
        <div class="products">
           @foreach($category->product as $pro)
           <div class="product">
              <div class="yith-wcwl-add-to-wishlist">
                 <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
             </div>
             <!-- .yith-wcwl-add-to-wishlist -->
             <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view',['slug'=>$pro->slug])}}">
                 <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('public/home')}}/assets/images/products/2.jpg">
<!--                                     <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                        </span> -->
                                        <h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2>
                                    </a>
                                    <!-- .woocommerce-LoopProduct-link -->
                                    <div class="hover-area">
                                    	<a class="button" href="{{route('view',['slug'=>$pro->slug])}}">Xem chi tiết</a>
                                    	<!--  <a class="add-to-compare-link" href="compare.html">Add to compare</a> -->
                                    </div>
                                    <!-- .hover-area -->
                                </div>
                                @endforeach
                            </div>
                            <!-- .products -->
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .tab-pane -->
                    <div id="grid-extended" class="tab-pane" role="tabpanel">
                    	<div class="woocommerce columns-5">
                    		<div class="products">
                    			@foreach($category->product as $pro)
                    			<div class="product first">
                    				<div class="yith-wcwl-add-to-wishlist">
                    					<a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                    				</div>
                    				<!-- .yith-wcwl-add-to-wishlist -->
                    				<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view',['slug'=>$pro->slug])}}">
                    					<img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('public/home')}}/assets/images/products/1.jpg">
<!--                                     <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                        </span> -->
                                        <h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2>
                                    </a>
                                    <!-- .woocommerce-LoopProduct-link -->
                                    <div class="techmarket-product-rating">
                                    	<div title="Rated 5.00 out of 5" class="star-rating">
                                    		<span style="width:100%">
                                    			<strong class="rating">5.00</strong> out of 5</span>
                                    		</div>
                                    		<span class="review-count">(10)</span>
                                    	</div>
                                    	<!-- .techmarket-product-rating -->
                                    	<span class="sku_wrapper">Mã sản phẩm:
                                    		<span class="sku">{{$pro->product_code}}</span>
                                    	</span>
                                <!-- <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li>Multimedia Speakers</li>
                                        <li>120 watts peak</li>
                                        <li>Front-facing subwoofer</li>
                                        <li>Refresh Rate: 120Hz (Effective)</li>
                                        <li>Backlight: LED</li>
                                        <li>Smart Functionality: Yes, webOS 3.0</li>
                                        <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                        <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                    </ul>
                                </div> -->
                                <!-- .woocommerce-product-details__short-description -->
                                <a class="button product_type_simple add_to_cart_button" href="{{route('view',['slug'=>$pro->slug])}}">Xem chi tiết</a>
                            </div>
                            @endforeach
                            <!-- <div class="product ">
                                <div class="yith-wcwl-add-to-wishlist">
                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                </div>

                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="single-product-fullwidth.html">
                                    <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('public/home')}}/assets/images/products/2.jpg">
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>800.00</span>
                                    </span>
                                    <h2 class="woocommerce-loop-product__title">4K Action Cam with Wi-Fi &amp; GPS</h2>
                                </a>

                                <div class="techmarket-product-rating">
                                    <div title="Rated 5.00 out of 5" class="star-rating">
                                        <span style="width:100%">
                                            <strong class="rating">5.00</strong> out of 5</span>
                                    </div>
                                    <span class="review-count">(1)</span>
                                </div>

                                <span class="sku_wrapper">SKU:
                                    <span class="sku">5487FB8/13</span>
                                </span>
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        <li>Multimedia Speakers</li>
                                        <li>120 watts peak</li>
                                        <li>Front-facing subwoofer</li>
                                        <li>Refresh Rate: 120Hz (Effective)</li>
                                        <li>Backlight: LED</li>
                                        <li>Smart Functionality: Yes, webOS 3.0</li>
                                        <li>Dimensions (W x H x D): TV without stand: 43.5″ x 25.4″ x 3.0″, TV with stand: 43.5″ x 27.6″ x 8.5″</li>
                                        <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                    </ul>
                                </div>
                                <a class="button product_type_simple add_to_cart_button" href="cart.html">Add to cart</a>
                                <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                            </div> -->
                        </div>
                        <!-- .products -->
                    </div>
                    <!-- .woocommerce -->
                </div>
                <!-- .tab-pane -->
                <div id="list-view-large" class="tab-pane" role="tabpanel">
                	<div class="woocommerce columns-1">
                		<div class="products">
                			@foreach($category->product as $pro)
                			<div class="product list-view-large first ">
                				<div class="media">
                					<img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('public/home')}}/assets/images/products/1.jpg">
                					<div class="media-body">
                						<div class="product-info">
                							<div class="yith-wcwl-add-to-wishlist">
                								<a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                							</div>
                							<!-- .yith-wcwl-add-to-wishlist -->
                							<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view',['slug'=>$pro->slug])}}">
                								<h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2>
                								<div class="techmarket-product-rating">
                									<div title="Rated 5.00 out of 5" class="star-rating">
                										<span style="width:100%">
                											<strong class="rating">5.00</strong> out of 5</span>
                										</div>
                										<span class="review-count">(1)</span>
                									</div>
                								</a>
                								<!-- .woocommerce-LoopProduct-link -->
                								<div class="brand">
                									<a href="#">
                										<img alt="galaxy" src="{{url('public/home')}}/assets/images/brands/5.png">
                									</a>
                								</div>
                								<!-- .brand -->
                								<div class="woocommerce-product-details__short-description">
                									<p>{{$pro->short_description}}</p>
                								</div>
                								<!-- .woocommerce-product-details__short-description -->
                								<span class="sku_wrapper">Mã sản phẩm:
                									<span class="sku">{{$pro->product_code}}</span>
                								</span>
                							</div>
                							<!-- .product-info -->
                							<div class="product-actions">
                								<div class="availability">
                									Availability:
                									<p class="stock in-stock">1000 in stock</p>
                								</div>
                								<!-- .price -->
                								<a class="button add_to_cart_button" href="{{route('view',['slug'=>$pro->slug])}}">Xem chi tiết</a>
                								<a href="" class="button add_to_cart_button">Báo giá sản phẩm</a>
                							</div>
                							<!-- .product-actions -->
                						</div>
                						<!-- .media-body -->
                					</div>
                					<!-- .media -->
                				</div>
                				@endforeach
                				<!-- .product -->
                				<!-- .product -->
                			</div>
                			<!-- .products -->
                		</div>
                		<!-- .woocommerce -->
                	</div>
                	<!-- .tab-pane -->
                	<div id="list-view" class="tab-pane" role="tabpanel">
                		<div class="woocommerce columns-1">
                			<div class="products">
                				@foreach($category->product as $pro)
                				<div class="product list-view ">
                					<div class="media">
                						<img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('public/home')}}/assets/images/products/2.jpg">
                						<div class="media-body">
                							<div class="product-info">
                								<div class="yith-wcwl-add-to-wishlist">
                									<a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                								</div>
                								<!-- .yith-wcwl-add-to-wishlist -->
                								<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view',['slug'=>$pro->slug])}}">
                									<h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2>
                									<div class="techmarket-product-rating">
                										<div title="Rated 5.00 out of 5" class="star-rating">
                											<span style="width:100%">
                												<strong class="rating">5.00</strong> out of 5</span>
                											</div>
                											<span class="review-count">(1)</span>
                										</div>
                									</a>
                									<!-- .woocommerce-LoopProduct-link -->
                									<div class="brand">
                										<a href="#">
                											<img alt="galaxy" src="{{url('public/home')}}/assets/images/brands/5.png">
                										</a>
                									</div>
                									<!-- .brand -->
                									<div class="woocommerce-product-details__short-description">
                										<p>{{$pro->short_description}}</p>
                									</div>
                									<!-- .woocommerce-product-details__short-description -->
                								</div>
                								<!-- .product-info -->
                								<div class="product-actions">
                									<div class="availability">
                										Availability:
                										<p class="stock in-stock">1000 in stock</p>
                									</div>
                                           <!--  <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>730.00</span>
                                                </span> -->
                                                <!-- .price -->
                                                <a class="button add_to_cart_button" href="{{route('view',['slug'=>$pro->slug])}}">Xem chi tiết</a>
                                                <!--                                             <a class="add-to-compare-link" href="compare.html">Add to compare</a> -->
                                            </div>
                                            <!-- .product-actions -->
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>
                                @endforeach
                                <!-- .product -->
                            </div>
                            <!-- .products -->
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .tab-pane -->
                    <div id="list-view-small" class="tab-pane" role="tabpanel">
                    	<div class="woocommerce columns-1">
                    		<div class="products">
                    			@foreach($category->product as $pro)
                    			<div class="product list-view-small ">
                    				<div class="media">
                    					<img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{url('public/home')}}/assets/images/products/1.jpg">
                    					<div class="media-body">
                    						<div class="product-info">
                    							<div class="yith-wcwl-add-to-wishlist">
                    								<a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                    							</div>
                    							<!-- .yith-wcwl-add-to-wishlist -->
                    							<a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('view',['slug'=>$pro->slug])}}">
                    								<h2 class="woocommerce-loop-product__title">{{$pro->title}}</h2>
                    								<div class="techmarket-product-rating">
                    									<div title="Rated 5.00 out of 5" class="star-rating">
                    										<span style="width:100%">
                    											<strong class="rating">5.00</strong> out of 5</span>
                    										</div>
                    										<span class="review-count">(1)</span>
                    									</div>
                    								</a>
                    								<!-- .woocommerce-LoopProduct-link -->
                    								<div class="woocommerce-product-details__short-description">
                    									<p>{{$pro->short_description}}</p>
                    								</div>
                    								<!-- .woocommerce-product-details__short-description -->
                    							</div>
                    							<!-- .product-info -->
                    							<div class="product-actions">
                    								<a class="button add_to_cart_button" href="{{route('view',['slug'=>$pro->slug])}}">Xem chi tiết</a>
                    								<!--                                             <a class="add-to-compare-link" href="compare.html">Add to compare</a> -->
                    							</div>
                    							<!-- .product-actions -->
                    						</div>
                    						<!-- .media-body -->
                    					</div>
                    					<!-- .media -->
                    				</div>
                    				@endforeach
                    				<!-- .product -->

                    			</div>
                    			<!-- .products -->
                    		</div>
                    		<!-- .woocommerce -->
                    	</div>
                    	<!-- .tab-pane -->
                    </div>
                    <!-- .tab-content -->
                    <div class="shop-control-bar-bottom">
                    	<form class="form-techmarket-wc-ppp" method="POST">
                    		<select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                    			<option value="20">Show 20</option>
                    			<option value="40">Show 40</option>
                    			<option value="-1">Show All</option>
                    		</select>
                    		<input type="hidden" value="5" name="shop_columns">
                    		<input type="hidden" value="15" name="shop_per_page">
                    		<input type="hidden" value="right-sidebar" name="shop_layout">
                    	</form>
                    	<!-- .form-techmarket-wc-ppp -->
                    	<p class="woocommerce-result-count">
                    		Showing 1–15 of 73 results
                    	</p>
                    	<!-- .woocommerce-result-count -->
                    	<nav class="woocommerce-pagination">
                    		<ul class="page-numbers">
                    			<li>
                    				<span class="page-numbers current">1</span>
                    			</li>
                    			<li><a href="#" class="page-numbers">2</a></li>
                    			<li><a href="#" class="page-numbers">3</a></li>
                    			<li><a href="#" class="page-numbers">4</a></li>
                    			<li><a href="#" class="page-numbers">5</a></li>
                    			<li><a href="#" class="next page-numbers">→</a></li>
                    		</ul>
                    		<!-- .page-numbers -->
                    	</nav>
                    	<!-- .woocommerce-pagination -->
                    </div>
                    <!-- .shop-control-bar-bottom -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
            <div id="secondary" class="widget-area shop-sidebar" role="complementary">
            	<div class="widget woocommerce widget_product_categories techmarket_widget_product_categories" id="techmarket_product_categories_widget-2">
            		
                </div>
                <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                   <span class="gamma widget-title">Filters</span>
                   <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">
                      <p>
                         <span class="gamma widget-title">Filter by price</span>
                     </p><div class="price_slider_amount">
                     <input id="amount" type="text" placeholder="Min price" data-min="6" value="33" name="min_price" style="display: none;">
                     <button class="button" type="submit">Filter</button>
                 </div>
                 <div id="slider-range" class="price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
             </div>
             <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-2">
               <span class="gamma widget-title">Brands</span>
               <ul>
                  <li class="wc-layered-nav-term ">
                     <a href="#">apple</a>
                     <span class="count">(2)</span>
                 </li>
                 <li class="wc-layered-nav-term "><a href="#">bosch</a>
                     <span class="count">(1)</span>
                 </li>
                 <li class="wc-layered-nav-term "><a href="#">cannon</a>
                     <span class="count">(1)</span>
                 </li>
                 <li class="wc-layered-nav-term "><a href="#">connect</a>
                     <span class="count">(1)</span>
                 </li>
                 <li class="wc-layered-nav-term "><a href="#">galaxy</a>
                     <span class="count">(3)</span>
                 </li>
                 <li class="wc-layered-nav-term " style="display: none;"><a href="#">gopro</a>
                     <span class="count">(1)</span>
                 </li>
                 <li class="wc-layered-nav-term " style="display: none;"><a href="#">kinova</a>
                     <span class="count">(1)</span>
                 </li>
                 <li class="wc-layered-nav-term " style="display: none;"><a href="#">samsung</a>
                     <span class="count">(1)</span>
                 </li>
             </ul><p class="maxlist-more"><a href="#">+ Show more</a></p>
         </div>
         <!-- .woocommerce widget_layered_nav -->
         <div class="widget woocommerce widget_layered_nav maxlist-more" id="woocommerce_layered_nav-3">
           <span class="gamma widget-title">Color</span>
           <ul>
              <li class="wc-layered-nav-term "><a href="#">Black</a>
                 <span class="count">(4)</span>
             </li>
             <li class="wc-layered-nav-term "><a href="#">Blue</a>
                 <span class="count">(4)</span>
             </li>
             <li class="wc-layered-nav-term "><a href="#">Green</a>
                 <span class="count">(5)</span>
             </li>
             <li class="wc-layered-nav-term "><a href="#">Orange</a>
                 <span class="count">(5)</span>
             </li>
             <li class="wc-layered-nav-term "><a href="#">Red</a>
                 <span class="count">(4)</span>
             </li>
             <li class="wc-layered-nav-term " style="display: none;"><a href="#">Yellow</a>
                 <span class="count">(5)</span>
             </li>
             <li class="wc-layered-nav-term " style="display: none;"><a href="#">Green</a>
                 <span class="count">(5)</span>
             </li>
             <li class="wc-layered-nav-term " style="display: none;"><a href="#">Orange</a>
                 <span class="count">(5)</span>
             </li>
             <li class="wc-layered-nav-term " style="display: none;"><a href="#">Red</a>
                 <span class="count">(4)</span>
             </li>
             <li class="wc-layered-nav-term " style="display: none;"><a href="#">Yellow</a>
                 <span class="count">(5)</span>
             </li>
         </ul><p class="maxlist-more"><a href="#">+ Show more</a></p>
     </div>
     <!-- .woocommerce widget_layered_nav -->
 </div>
 <div class="widget widget_techmarket_products_carousel_widget">
    <section id="single-sidebar-carousel" class="section-products-carousel">
       <header class="section-header">
          <h2 class="section-title">Latest Products</h2>
          <nav class="custom-slick-nav"><a href="#" class="slick-arrow slick-disabled" aria-disabled="true" style=""><i class="tm tm-arrow-left"></i></a><a href="#" class="slick-arrow" aria-disabled="false" style=""><i class="tm tm-arrow-right"></i></a></nav>
      </header>
      <!-- .section-header -->
      <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;<a href=\&quot;#\&quot;><i class=\&quot;tm tm-arrow-left\&quot;><\/i><\/a>&quot;,&quot;nextArrow&quot;:&quot;<a href=\&quot;#\&quot;><i class=\&quot;tm tm-arrow-right\&quot;><\/i><\/a>&quot;,&quot;appendArrows&quot;:&quot;#single-sidebar-carousel .custom-slick-nav&quot;}">
          <div class="container-fluid">
             <div class="woocommerce columns-1">
                <div class="products slick-initialized slick-slider"><div aria-live="polite" class="slick-list draggable"><div class="slick-track" role="listbox" style="opacity: 1; width: 526px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 263px;"><div><div class="landscape-product-widget product" style="width: 100%; display: inline-block;">
                   <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="0">
                      <div class="media">
                         <img class="wp-post-image" src="assets/images/products/sm-1.jpg" alt="">
                         <div class="media-body">
                            <span class="price">
                               <ins>
                                  <span class="amount"> 50.99</span>
                              </ins>
                              <del>
                                  <span class="amount">26.99</span>
                              </del>
                          </span>
                          <!-- .price -->
                          <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
                          <div class="techmarket-product-rating">
                           <div title="Rated 0 out of 5" class="star-rating">
                              <span style="width:0%">
                                 <strong class="rating">0</strong> out of 5</span>
                             </div>
                             <span class="review-count">(0)</span>
                         </div>
                         <!-- .techmarket-product-rating -->
                     </div>
                     <!-- .media-body -->
                 </div>
                 <!-- .media -->
             </a>
             <!-- .woocommerce-LoopProduct-link -->
         </div></div><div><div class="landscape-product-widget product" style="width: 100%; display: inline-block;">
         <a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="0">
          <div class="media">
             <img class="wp-post-image" src="assets/images/products/sm-2.jpg" alt="">
             <div class="media-body">
                <span class="price">
                   <ins>
                      <span class="amount"> 50.99</span>
                  </ins>
                  <del>
                      <span class="amount">26.99</span>
                  </del>
              </span>
              <!-- .price -->
              <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
              <div class="techmarket-product-rating">
               <div title="Rated 0 out of 5" class="star-rating">
                  <span style="width:0%">
                     <strong class="rating">0</strong> out of 5</span>
                 </div>
                 <span class="review-count">(0)</span>
             </div>
             <!-- .techmarket-product-rating -->
         </div>
         <!-- .media-body -->
     </div>
     <!-- .media -->
 </a>
 <!-- .woocommerce-LoopProduct-link -->
</div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 263px;"><div><div class="landscape-product-widget product" style="width: 100%; display: inline-block;">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="-1">
  <div class="media">
     <img class="wp-post-image" src="assets/images/products/sm-3.jpg" alt="">
     <div class="media-body">
        <span class="price">
           <ins>
              <span class="amount"> 50.99</span>
          </ins>
          <del>
              <span class="amount">26.99</span>
          </del>
      </span>
      <!-- .price -->
      <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
      <div class="techmarket-product-rating">
       <div title="Rated 0 out of 5" class="star-rating">
          <span style="width:0%">
             <strong class="rating">0</strong> out of 5</span>
         </div>
         <span class="review-count">(0)</span>
     </div>
     <!-- .techmarket-product-rating -->
 </div>
 <!-- .media-body -->
</div>
<!-- .media -->
</a>
<!-- .woocommerce-LoopProduct-link -->
</div></div><div><div class="landscape-product-widget product" style="width: 100%; display: inline-block;">
<a class="woocommerce-LoopProduct-link" href="single-product-fullwidth.html" tabindex="-1">
  <div class="media">
     <img class="wp-post-image" src="assets/images/products/sm-4.jpg" alt="">
     <div class="media-body">
        <span class="price">
           <ins>
              <span class="amount"> 50.99</span>
          </ins>
          <del>
              <span class="amount">26.99</span>
          </del>
      </span>
      <!-- .price -->
      <h2 class="woocommerce-loop-product__title">S100 Wireless Bluetooth Speaker – Neon Green</h2>
      <div class="techmarket-product-rating">
       <div title="Rated 0 out of 5" class="star-rating">
          <span style="width:0%">
             <strong class="rating">0</strong> out of 5</span>
         </div>
         <span class="review-count">(0)</span>
     </div>
     <!-- .techmarket-product-rating -->
 </div>
 <!-- .media-body -->
</div>
<!-- .media -->
</a>
<!-- .woocommerce-LoopProduct-link -->
</div>
</div>
</div></div></div></div>
<!-- .products -->
</div>
<!-- .woocommerce -->
</div>
<!-- .container-fluid -->
</div>
<!-- .products-carousel -->
</section>
<!-- .section-products-carousel -->
</div>
<!-- .widget_techmarket_products_carousel_widget -->
</div>

<!-- .brands-carousel -->
</div>
<!-- .row -->
</div>
<!-- .col-full -->
<!-- #secondary -->

@stop()
