@extends('layouts.home')
@section('content')
<div class="main-wrap" id="J-main-wrap">
	<div class="home-banner banner-1440">
		<div class="banner-total slide-home J-slider-home">
			<div class="banner-box swiper-container J-slider-home-box">
				<a class="banner-left J-slide-left" href="javascript:;"><i class="ob-icon">&#xe009;</i></a>
				<a class="banner-right J-slide-right" href="javascript:;"><i class="ob-icon">&#xe008;</i></a>
				<div class="banner-list swiper-wrapper home-banner-list" id="banner-slider">
					@foreach($sliders as $slider)
					<a rel="nofollow" target="_blank" href="#" class="banner-wrap swiper-slide J-probe-banner-item" alt="" pic1024="https://image.made-in-china.com/152f0j10vtEQkTaRDTWZ/banner1024.jpg" pic1440="https://image.made-in-china.com/151f0j10vtEQkTaRDTWZ/banner1440.jpg" cz-position="top" cz-num="1"></a>
					@endforeach
				</div>
			</div>
			<div class="pagination J-pagination"></div>
		</div>
	</div>
	<script>
		;void function (window, document) {
			var winW = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth || 0;
			var bannerFirst = document.getElementById("banner-slider").children[0];
			var picType = winW > 1024 ? "pic1440" : "pic1024";
			bannerFirst.style.backgroundImage = "url('" + bannerFirst.getAttribute(picType) + "')";
		}.call(this, window, document);
	</script>
	<div class="container">
		<div class="home-guide J-home-guide">
			<div class="row">
				<div class="col cate-col">
					<div class="inr cate-in-pc J-cate-in-pc">
						<a href="prod/catlist/index.html">
							<h3 class="cate-title medium-size-bold">Hãng sản phẩm</h3>
						</a>
						<ul class="cate-items">
							@foreach($categorys as $category)
							<li class="item cate-item">
								<a class="cf item-link J-first-cate" data-index="3" href="Industrial-Equipment-Components-Catalog/Industrial-Equipment-Components.html">
									<span class="fl cate-name J-first-cate-name" data-index="3">{{$category->title}}</span>
									<i class="micon fr">&#xe008;</i>
								</a>
								<div data-index="3" class="J-item-more item-more J-im">
									<div class="item-more-ani-wrap J-imaw">
										<div class="row more-categories-items">
											<div class="items-line items-line3">
												<div class="items-line-wrap cf">
													@foreach($category->childs as $child)
													<div class="items-line-child">
														<div class="items-line-short ">
															<div class="items-line-child-title" title="Pumps">{{$child->title}}</div>
															@foreach($child->childs as $chil)
															<a class="item" href="Industrial-Equipment-Components-Catalog/Pump-Vacuum-Equipment.html" title="Pump & Vacuum Equipment">{{$chil->title}}</a>
															@endforeach
														</div>
													</div>
													@endforeach
														<!-- <div class="items-line-child">
															<div class="items-line-short ">
																<div class="items-line-child-title" title="Power & Generators">Power & Generators</div>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Power-Generating-Sets.html" title="Power & Generating Sets">Power & Generating Sets</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Diesel-Generator.html" title="Diesel Generator">Diesel Generator</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Gasoline-Generator.html" title="Gasoline Generator">Gasoline Generator</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Wind-Generator.html" title="Wind Generator">Wind Generator</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Gas-Generator.html" title="Gas Generator">Gas Generator</a>
															</div>
															<div class="items-line-short ">
																<div class="items-line-child-title" title="Fastener & Fittings">Fastener & Fittings</div>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Combination-Joint-Fittings.html" title="Combination & Joint Fittings">Combination & Joint Fittings</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Bolts.html" title="Bolts">Bolts</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Flange.html" title="Flange">Flange</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Screw.html" title="Screw">Screw</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Nut.html" title="Nut">Nut</a>
															</div>
														</div>
														<div class="items-line-child">
															<div class="items-line-short ">
																<div class="items-line-child-title" title="Purifier & Filter">Purifier & Filter</div>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Purifier-Filter-Water-Process.html" title="Filtration Equipment & Parts">Filtration Equipment & Parts</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Industrial-Water-Filter.html" title="Industrial Water Filter">Industrial Water Filter</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Reverse-Osmosis-System.html" title="Reverse Osmosis System">Reverse Osmosis System</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Air-Filter.html" title="Air Filter">Air Filter</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Oil-Filter.html" title="Oil Filter">Oil Filter</a>
															</div>
															<div class="items-line-short ">
																<div class="items-line-child-title" title="Other Equipments & Parts">Other Equipments & Parts</div>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Bearing.html" title="Bearing">Bearing</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Sealing-Gaskets.html" title="Sealing & Gaskets">Sealing & Gaskets</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Welding-Equipment.html" title="Welding Equipment">Welding Equipment</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Compressor.html" title="Compressor">Compressor</a>
																<a class="item" href="Industrial-Equipment-Components-Catalog/Cleaning-Machine.html" title="Cleaning Machine">Cleaning Machine</a>
															</div>
														</div> -->
													</div>
												</div>
												<a rel="nofollow" class="item more-link J-second-cate-more" data-index="3">More Categories</a>
											</div>
											<div class="row more-products-items">
												<div class="cate-swiper-content J-cate-swiper">
													<div class="swiper-wrapper">
														<ul class="items swiper-slide">
															<li class="col item">
																<div class="inr">
																	<a rel="nofollow" href="special/pump/index.html" title="Pump">
																		<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Pump" data-src="../pic.made-in-china.com/61f54j00rEtQwtYhtaiT/Pump.jpg"/>
																		<div class="link-hover color-black">Pump</div>
																	</a>
																</div>
															</li>
															<li class="col item">
																<div class="inr">
																	<a rel="nofollow" href="special/valve/index.html" title="Valve">
																		<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Valve" data-src="../pic.made-in-china.com/61f54j00yQtTOEUMVahK/Valve.jpg"/>
																		<div class="link-hover color-black">Valve</div>
																	</a>
																</div>
															</li>
															<li class="col item">
																<div class="inr">
																	<a rel="nofollow" href="special/general-mechanical-components/index.html" title="General Mechanical Components">
																		<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="General Mechanical Components" data-src="../pic.made-in-china.com/61f54j00QtQEsEfleaiT/General-Mechanical-Components.jpg"/>
																		<div class="link-hover color-black">General Mechanical Components</div>
																	</a>
																</div>
															</li>
															<li class="col item">
																<div class="inr">
																	<a rel="nofollow" href="special/crane/index.html" title="Crane">
																		<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Crane" data-src="../pic.made-in-china.com/61f54j00OTaEWtYlzQVf/Crane.jpg"/>
																		<div class="link-hover color-black">Crane</div>
																	</a>
																</div>
															</li>
														</ul>
														<ul class="items swiper-slide">
															<li class="col item">
																<div class="inr">
																	<a rel="nofollow" href="special/compressor/index.html" title="Compressor">
																		<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Compressor" data-src="../pic.made-in-china.com/61f54j00ptQaCtUcNEVT/Compressor.jpg"/>
																		<div class="link-hover color-black">Compressor</div>
																	</a>
																</div>
															</li>
															<li class="col item">
																<div class="inr">
																	<a rel="nofollow" href="special/fastener/index.html" title="Fastener">
																		<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Fastener" data-src="../pic.made-in-china.com/61f54j00ptQTaTYEQaWI/Fastener.jpg"/>
																		<div class="link-hover color-black">Fastener</div>
																	</a>
																</div>
															</li>
															<li class="col item">
																<div class="inr">
																	<a rel="nofollow" href="special/water-treatment/index.html" title="Water Treatment">
																		<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Water Treatment" data-src="../pic.made-in-china.com/61f54j00tQTaREUlpEWu/Water-Treatment.jpg"/>
																		<div class="link-hover color-black">Water Treatment</div>
																	</a>
																</div>
															</li>
															<li class="col item">
																<div class="inr">
																	<a rel="nofollow" href="special/washing-cleaning-equipment/index.html" title="Washing &amp; Cleaning Equipment">
																		<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Washing &amp; Cleaning Equipment" data-src="../pic.made-in-china.com/61f54j00CtaQrEGIWTlN/Washing-Cleaning-Equipment.jpg"/>
																		<div class="link-hover color-black">Washing &amp; Cleaning Equipment</div>
																	</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
												<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
												<div class="pagination J-pagination-3"></div>
											</div>
											<div class="more-hot-prod">
												Hot Products :
												<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Gearbox.html">Gearbox</a>
												,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Heat_Exchanger.html">Heat Exchanger</a>
												,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Conveyor.html">Conveyor</a>
												,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Shaft.html">Shaft</a>
												,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Water_Treatment.html">Water Treatment</a>
											</div>
										</div>
									</div>
								</li>
								@endforeach
								<li class="item cate-more">
									<!-- <a rel="nofollow" class="cf item-link" href="prod/catlist/index.html">
										<span class="fl cate-name">More Categories</span>
										<i class="micon fr">&#xe008;</i>
									</a> -->
									<div class="cate-more-inner J-cmi">
										<div class="cate-more-inner-ani-wrap J-cmiaw">
											<div class="item-more">
												<div class="more-cate-list">
													<ul class="list-items">
														<li class="item  hover " data-index="12">
															<a href="products/catlist/listsubcat/111/00/mic/Arts_Crafts.html" class="item-link J-first-cate-name J-first-cate" data-index="12">Arts & Crafts</a>
														</li>
														<li class="item " data-index="13">
															<a href="products/catlist/listsubcat/126/00/mic/Health_Medicine.html" class="item-link J-first-cate-name J-first-cate" data-index="13">Health & Medicine</a>
														</li>
														<li class="item " data-index="14">
															<a href="Packaging-Printing-Catalog/Packaging-Printing.html" class="item-link J-first-cate-name J-first-cate" data-index="14">Packaging & Printing</a>
														</li>
														<li class="item " data-index="15">
															<a href="Computer-Products-Catalog/Computer-Products.html" class="item-link J-first-cate-name J-first-cate" data-index="15">Computer Products</a>
														</li>
														<li class="item " data-index="16">
															<a href="products/catlist/listsubcat/114/00/mic/Chemicals.html" class="item-link J-first-cate-name J-first-cate" data-index="16">Chemicals</a>
														</li>
														<li class="item " data-index="17">
															<a href="Tools-Hardware-Catalog/Tools-Hardware.html" class="item-link J-first-cate-name J-first-cate" data-index="17">Tools & Hardware</a>
														</li>
														<li class="item " data-index="18">
															<a href="Bags-Cases-Boxes-Catalog/Bags-Cases-Boxes.html" class="item-link J-first-cate-name J-first-cate" data-index="18">Bags, Cases & Boxes</a>
														</li>
														<li class="item " data-index="19">
															<a href="Furniture-Furnishing-Catalog/Furniture-Furnishing.html" class="item-link J-first-cate-name J-first-cate" data-index="19">Furniture</a>
														</li>
														<li class="item " data-index="20">
															<a href="products/catlist/listsubcat/135/00/mic/Metallurgy_Mineral_Energy.html" class="item-link J-first-cate-name J-first-cate" data-index="20">Metallurgy, Mineral & Energy</a>
														</li>
														<li class="item " data-index="21">
															<a href="Security-Protection-Catalog/Security-Protection.html" class="item-link J-first-cate-name J-first-cate" data-index="21">Security & Protection</a>
														</li>
														<li class="item " data-index="22">
															<a href="products/catlist/listsubcat/138/00/mic/Textile.html" class="item-link J-first-cate-name J-first-cate" data-index="22">Textile</a>
														</li>
														<li class="item " data-index="23">
															<a href="Instruments-Meters-Catalog/Instruments-Meters.html" class="item-link J-first-cate-name J-first-cate" data-index="23">Instruments & Meters</a>
														</li>
														<li class="item " data-index="24">
															<a href="Office-Supplies-Catalog/Office-Supplies.html" class="item-link J-first-cate-name J-first-cate" data-index="24">Office Supplies</a>
														</li>
														<li class="item " data-index="25">
															<a href="products/catlist/listsubcat/105/00/mic/Agriculture_Food.html" class="item-link J-first-cate-name J-first-cate" data-index="25">Agriculture & Food</a>
														</li>
														<li class="item " data-index="26">
															<a href="products/catlist/listsubcat/141/00/mic/Toys.html" class="item-link J-first-cate-name J-first-cate" data-index="26">Toys</a>
														</li>
														<li class="item " data-index="27">
															<a href="products/catlist/listsubcat/147/00/mic/Service.html" class="item-link J-first-cate-name J-first-cate" data-index="27">Service</a>
														</li>
													</ul>
												</div>
											</div>
											<ul class="more-item-list J-more-item-list">
												<li class="more-cate J-item-more  hover " data-index="12">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Jewelry & Accessories">Jewelry & Accessories</div>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Fashion-Accessories.html" title="Fashion Accessories">Fashion Accessories</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Hair-Products.html" title="Hair Products">Hair Products</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Jewelry.html" title="Jewelry">Jewelry</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Sunglasses.html" title="Sunglasses">Sunglasses</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Lanyard.html" title="Lanyard">Lanyard</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Crafts by Material">Crafts by Material</div>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Metal-Crafts.html" title="Metal Crafts">Metal Crafts</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Crystal-Crafts.html" title="Crystal Crafts">Crystal Crafts</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Wooden-Crafts.html" title="Wooden Crafts">Wooden Crafts</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Glass-Crafts.html" title="Glass Crafts">Glass Crafts</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Resin-Craft.html" title="Resin Craft">Resin Craft</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Gifts & Decoration">Gifts & Decoration</div>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Christmas-Holiday.html" title="Festival & Party Supplies">Festival & Party Supplies</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Key-Chain.html" title="Key Chain">Key Chain</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Candle-Candle-Holders.html" title="Candle & Candle Holders">Candle & Candle Holders</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Badge.html" title="Badge">Badge</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Flag-Banner.html" title="Flag & Banner">Flag & Banner</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Oil-Painting.html" title="Oil Painting">Oil Painting</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Carving-Sculpture.html" title="Carving & Sculpture">Carving & Sculpture</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Photo-Frame-Picture-Frame.html" title="Photo Frame & Picture Frame">Photo Frame & Picture Frame</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Flower-Bonsai-Decorative-Plant.html" title="Flower, Bonsai & Decorative Plant">Flower, Bonsai & Decorative Plant</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Ribbon.html" title="Ribbon">Ribbon</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Artificial-Crafts.html" title="Artificial Crafts">Artificial Crafts</a>
																		<a class="sub-item item-name" href="Arts-Crafts-Catalog/Fridge-Magnets.html" title="Fridge Magnets">Fridge Magnets</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="12">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/promotional-gifts/index.html" title="Promotional Gifts">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Promotional Gifts" data-src="../pic.made-in-china.com/61f54j00EQaTnafrztis/Promotional-Gifts.jpg"/>
																					<div class="link-hover color-black">Promotional Gifts</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/halloween-supplies/index.html" title="Halloween Supplies">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Halloween Supplies" data-src="../pic.made-in-china.com/61f54j00BaEQKifdOTVs/Halloween-Supplies.jpg"/>
																					<div class="link-hover color-black">Halloween Supplies</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/metal-crafts/index.html" title="Metal Crafts">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Metal Crafts" data-src="../pic.made-in-china.com/61f54j00rQEtoETyBahj/Metal-Crafts.jpg"/>
																					<div class="link-hover color-black">Metal Crafts</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/artificial-flowers-trees/index.html" title="Artificial Flowers &amp; Trees">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Artificial Flowers &amp; Trees" data-src="../pic.made-in-china.com/61f54j00uETtsEfaNQWi/Artificial-Flowers-Trees.jpg"/>
																					<div class="link-hover color-black">Artificial Flowers &amp; Trees</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/jewelry/index.html" title="Jewelry">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Jewelry" data-src="../pic.made-in-china.com/61f54j00MQaTVtUyBElD/Jewelry.jpg"/>
																					<div class="link-hover color-black">Jewelry</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/valentine-s-gifts/index.html" title="Valentine's Gifts">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Valentine's Gifts" data-src="../pic.made-in-china.com/61f54j00iEaQgVYWUThp/Valentine-s-Gifts.jpg"/>
																					<div class="link-hover color-black">Valentine's Gifts</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/christmas-supplies/index.html" title="Christmas Supplies">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Christmas Supplies" data-src="../pic.made-in-china.com/61f54j00taETQTYCdQiy/Christmas-Supplies.jpg"/>
																					<div class="link-hover color-black">Christmas Supplies</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/human-hair/index.html" title="Human Hair">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Human Hair" data-src="../pic.made-in-china.com/61f54j00NaEtRQYroTim/Human-Hair.jpg"/>
																					<div class="link-hover color-black">Human Hair</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-12"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Wig.html">Wig</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Fashion_Jewelry.html">Fashion Jewelry</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Oil_Painting.html">Oil Painting</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Human_Hair.html">Human Hair</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Lapel_Pin.html">Lapel Pin</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="13">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Massagers">Massagers</div>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Foot-Massager.html" title="Foot Massager">Foot Massager</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Massage-Chair.html" title="Massage Chair">Massage Chair</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Massage-Table-Bed.html" title="Massage Table & Bed">Massage Table & Bed</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Massage-Cushion.html" title="Massage Cushion">Massage Cushion</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Massage-Belt.html" title="Massage Belt">Massage Belt</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Medical Equipments">Medical Equipments</div>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Beauty-Equipment.html" title="Beauty Equipment">Beauty Equipment</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Dental-Equipment-Supplies.html" title="Dental Equipment & Supplies">Dental Equipment & Supplies</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Diagnosis-Equipment.html" title="Medical Diagnosis Equipment">Medical Diagnosis Equipment</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Therapy-Equipment.html" title="Physical Therapy Equipment">Physical Therapy Equipment</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Disinfect-Equipment-Sterilizer.html" title="Disinfect Equipment & Sterilizer">Disinfect Equipment & Sterilizer</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Medical Supplies">Medical Supplies</div>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Disposable-Medical-Supplies.html" title="Disposable Medical Supplies">Disposable Medical Supplies</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Surgical-Supplies.html" title="Surgical Supplies">Surgical Supplies</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Bandage-Tape.html" title="Bandage">Bandage</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/First-Aid-Kit.html" title="First Aid Kit">First Aid Kit</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Plastic-Surgery-Implants.html" title="Plastic Surgery Implants">Plastic Surgery Implants</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Medical Implements">Medical Implements</div>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Surgical-Equipment.html" title="Surgical Equipment">Surgical Equipment</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Surgical-Instrument.html" title="Surgical Instrument">Surgical Instrument</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Dental-Handpiece.html" title="Dental Handpiece">Dental Handpiece</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Veterinary-Instruments.html" title="Veterinary Instruments">Veterinary Instruments</a>
																		<a class="sub-item item-name" href="Health-Medicine-Catalog/Universal-Medical-Implement.html" title="Universal Medical Implement">Universal Medical Implement</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="13">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/rehabilitation-therapy-supplies/index.html" title="Rehabilitation Therapy Supplies">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Rehabilitation Therapy Supplies" data-src="../pic.made-in-china.com/61f54j00FTQEyTftoaiV/Rehabilitation-Therapy-Supplies.jpg"/>
																					<div class="link-hover color-black">Rehabilitation Therapy Supplies</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/massage-supplies/index.html" title="Massage Supplies">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Massage Supplies" data-src="../pic.made-in-china.com/61f54j00QtETFTUJBail/Massage-Supplies.jpg"/>
																					<div class="link-hover color-black">Massage Supplies</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/surgical-equipment/index.html" title="Surgical Equipment">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Surgical Equipment" data-src="../pic.made-in-china.com/61f54j00iaTQstUnmEWo/Surgical-Equipment.jpg"/>
																					<div class="link-hover color-black">Surgical Equipment</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/first-aid-appliance/index.html" title="First-Aid Appliance">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="First-Aid Appliance" data-src="../pic.made-in-china.com/61f54j00BEatbQGMTTlO/First-Aid-Appliance.jpg"/>
																					<div class="link-hover color-black">First-Aid Appliance</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/beauty-equipment/index.html" title="Beauty Equipment">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Beauty Equipment" data-src="../pic.made-in-china.com/61f54j00uTatsaQcBEWO/Beauty-Equipment.jpg"/>
																					<div class="link-hover color-black">Beauty Equipment</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/medical-diagnosis-equipment/index.html" title="Medical Diagnosis Equipment">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Medical Diagnosis Equipment" data-src="../pic.made-in-china.com/61f54j00utaTcpYFFEVe/Medical-Diagnosis-Equipment.jpg"/>
																					<div class="link-hover color-black">Medical Diagnosis Equipment</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/medical-supplies/index.html" title="Medical Supplies">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Medical Supplies" data-src="../pic.made-in-china.com/61f54j00QTaQQEtRGElB/Medical-Supplies.jpg"/>
																					<div class="link-hover color-black">Medical Supplies</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/dental-equipment/index.html" title="Dental Equipment">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Dental Equipment" data-src="../pic.made-in-china.com/61f54j00atTEIPUkDaiZ/Dental-Equipment.jpg"/>
																					<div class="link-hover color-black">Dental Equipment</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-13"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Dental_Chair.html">Dental Chair</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Diode_Laser.html">Diode Laser</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Ultrasound_Scanner.html">Ultrasound Scanner</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Disposable_Syringe.html">Disposable Syringe</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/First_Aid_Kit.html">First Aid Kit</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="14">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Printing Machinery & Materials">Printing Machinery & Materials</div>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Printing-Machinery.html" title="Printing Machinery">Printing Machinery</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Printing-Materials.html" title="Printing Materials">Printing Materials</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Digital-Printing-Machine.html" title="Digital Printing Machine">Digital Printing Machine</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Screen-Printer.html" title="Screen Printer">Screen Printer</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Printing-Inks.html" title="Printing Inks">Printing Inks</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Packing & Packaging Machinery">Packing & Packaging Machinery</div>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Packing-Machinery.html" title="Packing Machinery">Packing Machinery</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Filling-Machine.html" title="Filling Machine">Filling Machine</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Bag-Making-Machine.html" title="Bag Making Machine">Bag Making Machine</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Sealing-Machine.html" title="Sealing Machine">Sealing Machine</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Coding-Machine.html" title="Coding Machine">Coding Machine</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Package & Conveyance">Package & Conveyance</div>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Packaging-Bags.html" title="Packaging Bags">Packaging Bags</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Packaging-Bottles.html" title="Packaging Bottles">Packaging Bottles</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Packaging-Boxes.html" title="Packaging Boxes">Packaging Boxes</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Lids-Bottle-Caps-Closers.html" title="Lids, Bottle Caps & Closers">Lids, Bottle Caps & Closers</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Packaging-Tubes.html" title="Packaging Tubes">Packaging Tubes</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Pre & Post-Press Equipments">Pre & Post-Press Equipments</div>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Post-Press-Equipment.html" title="Post-Press Equipment">Post-Press Equipment</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Laminating-Machine.html" title="Laminating Machine">Laminating Machine</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Die-Cutting-Machine.html" title="Die Cutting Machine">Die Cutting Machine</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Paper-Cutter.html" title="Paper Cutter">Paper Cutter</a>
																		<a class="sub-item item-name" href="Packaging-Printing-Catalog/Pre-Press-Equipment.html" title="Pre-Press Equipment">Pre-Press Equipment</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="14">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/printing-machine/index.html" title="Printing Machine">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Printing Machine" data-src="../pic.made-in-china.com/61f54j00EETQBtahetir/Printing-Machine.jpg"/>
																					<div class="link-hover color-black">Printing Machine</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/packaging-material/index.html" title="Packaging Material">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Packaging Material" data-src="../pic.made-in-china.com/61f54j00tQETHQUgdaVw/Packaging-Material.jpg"/>
																					<div class="link-hover color-black">Packaging Material</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/filling-machine/index.html" title="Filling Machine">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Filling Machine" data-src="../pic.made-in-china.com/61f54j00uQEakTYCzthW/Filling-Machine.jpg"/>
																					<div class="link-hover color-black">Filling Machine</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/packing-machinery/index.html" title="Packing Machinery">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Packing Machinery" data-src="../pic.made-in-china.com/61f54j00rtTQGafyKEWU/Packing-Machinery.jpg"/>
																					<div class="link-hover color-black">Packing Machinery</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/gift-packaging/index.html" title="Gift Packaging">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Gift Packaging" data-src="../pic.made-in-china.com/61f54j00ETatfYURGQWH/Gift-Packaging.jpg"/>
																					<div class="link-hover color-black">Gift Packaging</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-14"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Vacuum_Packing_Machine.html">Vacuum Packing Machine</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Labeling_Machine.html">Labeling Machine</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Eco_Solvent_Printer.html">Eco Solvent Printer</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Liquid_Filling_Machine.html">Liquid Filling Machine</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Slitting_Machine.html">Slitting Machine</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="15">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Computers">Computers</div>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Tablet-PC.html" title="Tablet PC">Tablet PC</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Notebook-Laptop-Computer-and-Parts.html" title="Laptop">Laptop</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Computer.html" title="Computer">Computer</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Industrial-Computer-Accessories.html" title="Industrial Computer & Accessories">Industrial Computer & Accessories</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Palm-Computer-Pocket-PC-PDA.html" title="Palm Computer, Pocket PC & PDA">Palm Computer, Pocket PC & PDA</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Network Hardware & Parts">Network Hardware & Parts</div>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Computer-Cable.html" title="Computer Cable">Computer Cable</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Router-Switch.html" title="Router">Router</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Network-Switch.html" title="Network Switch">Network Switch</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Modem.html" title="Modem">Modem</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Network-Card.html" title="Network Card">Network Card</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Computer Componets">Computer Componets</div>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/USB-Flash-Disk.html" title="USB Flash Disk">USB Flash Disk</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Speaker-Sound-Box.html" title="Speaker & Sound Box">Speaker & Sound Box</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Mouse.html" title="Mouse">Mouse</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Keyboard.html" title="Keyboard">Keyboard</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Memory-Card-Card-Reader.html" title="Memory Card">Memory Card</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/USB-Products.html" title="USB Products">USB Products</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Cooling-Fan-Heatsinks.html" title="Cooling Fan & Heatsinks">Cooling Fan & Heatsinks</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Hard-Disk.html" title="Hard Disk">Hard Disk</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Computer-Case.html" title="Computer Case">Computer Case</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Power-Supply.html" title="Power Supply">Power Supply</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Drive.html" title="Drive">Drive</a>
																		<a class="sub-item item-name" href="Computer-Products-Catalog/Graphic-Card.html" title="Graphic Card">Graphic Card</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="15">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/computer/index.html" title="Computer">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Computer" data-src="../pic.made-in-china.com/61f54j00BtQEHaUzoTVA/Computer.jpg"/>
																					<div class="link-hover color-black">Computer</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/computer-parts/index.html" title="Computer Parts">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Computer Parts" data-src="../pic.made-in-china.com/61f54j00QtTaPQRgPEiD/Computer-Parts.jpg"/>
																					<div class="link-hover color-black">Computer Parts</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/usb-products/index.html" title="USB Products">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="USB Products" data-src="../pic.made-in-china.com/61f54j00utETDaUqeQWG/USB-Products.jpg"/>
																					<div class="link-hover color-black">USB Products</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-15"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Power_Bank.html">Power Bank</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Bluetooth_Speaker.html">Bluetooth Speaker</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Adapter.html">Adapter</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Tablet.html">Tablet</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Earphone.html">Earphone</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="16">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Rubber & Plastic">Rubber & Plastic</div>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Plastic-Sheet-Board-Panel.html" title="Plastic Sheet, Board & Panel">Plastic Sheet, Board & Panel</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Rubber-Tube-Pipe-Hose.html" title="Rubber Tube, Pipe & Hose">Rubber Tube, Pipe & Hose</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Plastic-Materials.html" title="Plastic Materials">Plastic Materials</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Rubber-Sheet-Mat.html" title="Rubber Sheet & Mat">Rubber Sheet & Mat</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Plastic-Film.html" title="Plastic Film">Plastic Film</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Rubber-Seal.html" title="Rubber Seal">Rubber Seal</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Rubber-Materials.html" title="Rubber Materials">Rubber Materials</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Polymer-Resin.html" title="Polymer & Resin">Polymer & Resin</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Rubber-Belt.html" title="Rubber Belt">Rubber Belt</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Plastic-Pipe-Tube.html" title="Plastic Pipe & Tube">Plastic Pipe & Tube</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Plastic-Rod.html" title="Plastic Rod">Plastic Rod</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Plastic-Strap-Tape.html" title="Plastic Strap & Tape">Plastic Strap & Tape</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Paint & Pigment">Paint & Pigment</div>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Paint-Coating.html" title="Paint & Coating">Paint & Coating</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Pigment-Dye.html" title="Pigment & Dye">Pigment & Dye</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Inorganic-Pigment.html" title="Inorganic Pigment">Inorganic Pigment</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Car-Paint.html" title="Car Paint">Car Paint</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Direct-Dye.html" title="Direct Dye">Direct Dye</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Inorganic Chemicals">Inorganic Chemicals</div>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Adhesive.html" title="Adhesive">Adhesive</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/FRP-GRP.html" title="FRP/GRP">FRP/GRP</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Phosphate.html" title="Phosphate">Phosphate</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Sulfide.html" title="Sulfide">Sulfide</a>
																		<a class="sub-item item-name" href="Chemicals-Catalog/Fiberglass-Yarn.html" title="Fiberglass Yarn">Fiberglass Yarn</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="16">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/paint-coating/index.html" title="Paint &amp; Coating">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Paint &amp; Coating" data-src="../pic.made-in-china.com/61f54j00QQtEKEarNThb/Paint-Coating.jpg"/>
																					<div class="link-hover color-black">Paint &amp; Coating</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/chemical-auxiliary/index.html" title="Chemical Auxiliary">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Chemical Auxiliary" data-src="../pic.made-in-china.com/61f54j00pTEtvQURcaVY/Chemical-Auxiliary.jpg"/>
																					<div class="link-hover color-black">Chemical Auxiliary</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/pigment-dye/index.html" title="Pigment &amp; Dye">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Pigment &amp; Dye" data-src="../pic.made-in-china.com/61f54j00ETEtktaUKQlK/Pigment-Dye.jpg"/>
																					<div class="link-hover color-black">Pigment &amp; Dye</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/rubber-plastic-products/index.html" title="Rubber &amp; Plastic Products">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Rubber &amp; Plastic Products" data-src="../pic.made-in-china.com/61f54j00NQaTRfUyDtiE/Rubber-Plastic-Products.jpg"/>
																					<div class="link-hover color-black">Rubber &amp; Plastic Products</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-16"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Titanium_Dioxide.html">Titanium Dioxide</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/PVC_Sheet.html">PVC Sheet</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Rubber_Mat.html">Rubber Mat</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/EVA_Foam.html">EVA Foam</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Silicone_Sealant.html">Silicone Sealant</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="17">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Hand Tools">Hand Tools</div>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Knife.html" title="Knife">Knife</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Hand-Tool-Set.html" title="Hand Tool Set">Hand Tool Set</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Pliers.html" title="Pliers">Pliers</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Hammer.html" title="Hammer">Hammer</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Electric-Wrench.html" title="Electric Wrench">Electric Wrench</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Power Tools">Power Tools</div>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Electric-Saw.html" title="Electric Saw">Electric Saw</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Electric-Drill.html" title="Electric Drill">Electric Drill</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Power-Tool-Accessories.html" title="Power Tool Accessories">Power Tool Accessories</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Rotary-Hammer.html" title="Rotary Hammer">Rotary Hammer</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Electric-Screwdriver.html" title="Electric Screwdriver">Electric Screwdriver</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Hardware">Hardware</div>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Hardware-Accessories.html" title="Hardware Accessories">Hardware Accessories</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Machine-Hardware.html" title="Machine Hardware">Machine Hardware</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Home-Hardware.html" title="Home Hardware">Home Hardware</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Building-Hardware.html" title="Building Hardware">Building Hardware</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Brackets.html" title="Brackets">Brackets</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Diamond Tools">Diamond Tools</div>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Diamond-Saw-Blade.html" title="Diamond Saw Blade">Diamond Saw Blade</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Diamond-Grinding-Wheel.html" title="Diamond Grinding Wheel">Diamond Grinding Wheel</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Diamond-Wire-Saw.html" title="Diamond Wire Saw">Diamond Wire Saw</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Diamond-Drilling-Tools.html" title="Diamond Drilling Tools">Diamond Drilling Tools</a>
																		<a class="sub-item item-name" href="Tools-Hardware-Catalog/Diamond-Cutter.html" title="Diamond Cutter">Diamond Cutter</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="17">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/hardware-tool/index.html" title="Hardware Tool">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Hardware Tool" data-src="../pic.made-in-china.com/61f54j00VTtaQtGCzEWZ/Hardware-Tool.jpg"/>
																					<div class="link-hover color-black">Hardware Tool</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/power-tools/index.html" title="Power Tools">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Power Tools" data-src="../pic.made-in-china.com/61f54j00tEtaFaQyUTWG/Power-Tools.jpg"/>
																					<div class="link-hover color-black">Power Tools</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/rigging/index.html" title="Rigging">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Rigging" data-src="../pic.made-in-china.com/61f54j00ZTatpwYyuEhR/Rigging.jpg"/>
																					<div class="link-hover color-black">Rigging</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-17"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Saw_Blade.html">Saw Blade</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Scaffold.html">Scaffold</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Rigging.html">Rigging</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Cutting_Tool.html">Cutting Tool</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Caster_Wheel.html">Caster Wheel</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="18">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Fashion Bags">Fashion Bags</div>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Handbags.html" title="Handbags">Handbags</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Tote-Bag.html" title="Tote Bag">Tote Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Wallet-Purses.html" title="Wallet & Purses">Wallet & Purses</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Non-woven-Shopping-Bag.html" title="Non-woven Shopping Bag">Non-woven Shopping Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Bucket-Bag.html" title="Bucket Bag">Bucket Bag</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Sports & Casual Bags">Sports & Casual Bags</div>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Backpack.html" title="Backpack">Backpack</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Non-Woven-Bag.html" title="Non Woven Bag">Non Woven Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Travel-Bag.html" title="Travel Bag">Travel Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Waist-Bag.html" title="Waist Bag">Waist Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Other-Handbags.html" title="Leisure Bag">Leisure Bag</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Specialized Bags & Cases">Specialized Bags & Cases</div>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Gift-Box-Bag.html" title="Gift Box & Bag">Gift Box & Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Paper-Gift-Box-Bag.html" title="Paper Gift Box">Paper Gift Box</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Mobile-Phone-Case.html" title="Mobile Phone Case">Mobile Phone Case</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Cosmetic-Bag-Case.html" title="Cosmetic Bag & Case">Cosmetic Bag & Case</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Cooler-Bag.html" title="Cooler Bag">Cooler Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Promotional-Bags.html" title="Promotional Bags">Promotional Bags</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Computer-Bag.html" title="Computer Bag">Computer Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Trolley-Luggage.html" title="Trolley & Luggage">Trolley & Luggage</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/School-Bags.html" title="School Bags">School Bags</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Tool-Bag.html" title="Tool Bag">Tool Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Garment-Bag.html" title="Garment Bag">Garment Bag</a>
																		<a class="sub-item item-name" href="Bags-Cases-Boxes-Catalog/Instrument-Bag-Case.html" title="Instrument Bag & Case">Instrument Bag & Case</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="18">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/gift-packaging/index.html" title="Gift Packaging">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Gift Packaging" data-src="../pic.made-in-china.com/61f54j00ETaQfEUtwEVI/Gift-Packaging.jpg"/>
																					<div class="link-hover color-black">Gift Packaging</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="http://custom.made-in-china.com/bag.html" title="Custom Bags">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Custom Bags" data-src="../pic.made-in-china.com/61f54j00OQTanGTcjtiY/Custom-Bags.jpg"/>
																					<div class="link-hover color-black">Custom Bags</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/bag/index.html" title="Bag">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Bag" data-src="../pic.made-in-china.com/61f54j00uEatKTTstQhE/Bag.jpg"/>
																					<div class="link-hover color-black">Bag</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-18"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Canvas_Bag.html">Canvas Bag</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Cotton_Bag.html">Cotton Bag</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/PVC_Bag.html">PVC Bag</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Packaging_Box.html">Packaging Box</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Paper_Bag.html">Paper Bag</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="19">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Furniture by Use">Furniture by Use</div>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Office-Furniture.html" title="Office Furniture">Office Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Living-Room-Furniture.html" title="Living Room Furniture">Living Room Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Outdoor-Furniture.html" title="Outdoor Furniture">Outdoor Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Dining-Room-Furniture.html" title="Dining Room Furniture">Dining Room Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Bedroom-Furniture.html" title="Bedroom Furniture">Bedroom Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Store-Supermarket-Furniture.html" title="Store & Supermarket Furniture">Store & Supermarket Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Bathroom-Furniture.html" title="Bathroom Furniture">Bathroom Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Kitchen-Furniture.html" title="Kitchen Furniture">Kitchen Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Hospital-Furniture.html" title="Hospital Furniture">Hospital Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Restaurant-Furniture.html" title="Restaurant Furniture">Restaurant Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Public-Furniture.html" title="Public Furniture">Public Furniture</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Salon-Furniture.html" title="Salon Furniture">Salon Furniture</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Chairs & Tables">Chairs & Tables</div>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Dining-Chair.html" title="Dining Chairs">Dining Chairs</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Office-Chair.html" title="Office Chair">Office Chair</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Dining-Table.html" title="Dining Table">Dining Table</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Office-Desk.html" title="Office Desk">Office Desk</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Auditorium-Chairs.html" title="Auditorium Chairs">Auditorium Chairs</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Cabinets & Beds">Cabinets & Beds</div>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Bathroom-Cabinet.html" title="Bathroom Cabinets">Bathroom Cabinets</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Kitchen-Cabinets.html" title="Kitchen Cabinets">Kitchen Cabinets</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Hospital-Bed.html" title="Hospital Bed">Hospital Bed</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Bed.html" title="Bedroom Bed">Bedroom Bed</a>
																		<a class="sub-item item-name" href="Furniture-Furnishing-Catalog/Filing-Cabinet.html" title="Filing Cabinets">Filing Cabinets</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="19">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/hotel-furniture/index.html" title="Hotel Furniture">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Hotel Furniture" data-src="../pic.made-in-china.com/61f54j00iTtEFQGdFaVu/Hotel-Furniture.jpg"/>
																					<div class="link-hover color-black">Hotel Furniture</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/salon-furniture/index.html" title="Salon Furniture">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Salon Furniture" data-src="../pic.made-in-china.com/61f54j00ftaTViUrDEhZ/Salon-Furniture.jpg"/>
																					<div class="link-hover color-black">Salon Furniture</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/office-furniture/index.html" title="Office Furniture">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Office Furniture" data-src="../pic.made-in-china.com/61f54j00FQETsTtyFalU/Office-Furniture.jpg"/>
																					<div class="link-hover color-black">Office Furniture</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/outdoor-furniture/index.html" title="Outdoor Furniture">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Outdoor Furniture" data-src="../pic.made-in-china.com/61f54j00rTQtVaYnUElu/Outdoor-Furniture.jpg"/>
																					<div class="link-hover color-black">Outdoor Furniture</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/kitchen-furniture/index.html" title="Kitchen Furniture">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Kitchen Furniture" data-src="../pic.made-in-china.com/61f54j00QaTtlYRWdEhb/Kitchen-Furniture.jpg"/>
																					<div class="link-hover color-black">Kitchen Furniture</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/anji-chairs/index.html" title="Anji Chairs">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Anji Chairs" data-src="../pic.made-in-china.com/61f54j00VTQEdtagttlG/Anji-Chairs.jpg"/>
																					<div class="link-hover color-black">Anji Chairs</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/home-furniture/index.html" title="Home Furniture">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Home Furniture" data-src="../pic.made-in-china.com/61f54j00MTQEbaGcztVf/Home-Furniture.jpg"/>
																					<div class="link-hover color-black">Home Furniture</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-19"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Hotel_Furniture.html">Hotel Furniture</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Kitchen_Cabinet.html">Kitchen Cabinet</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Wardrobe.html">Wardrobe</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Dining_Chair.html">Dining Chair</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Garden_Furniture.html">Garden Furniture</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="20">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Solar & Renewable Energy">Solar & Renewable Energy</div>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Solar-Cells-Panels.html" title="Solar Cells & Panels">Solar Cells & Panels</a>
																		<a class="sub-item item-name" href="Consumer-Electronics-Catalog/Solar-Water-Heater.html" title="Solar Water Heater">Solar Water Heater</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Solar-Energy-System.html" title="Solar Energy System">Solar Energy System</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Solar-Wind-Inverter.html" title="Solar & Wind Inverter">Solar & Wind Inverter</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Solar-Collector.html" title="Solar Collector">Solar Collector</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Nonmetallic Products">Nonmetallic Products</div>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Magnetic-Material.html" title="Magnetic Material">Magnetic Material</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Graphite-Products.html" title="Graphite & Products">Graphite & Products</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Nonmetallic-Minerals.html" title="Nonmetallic Minerals">Nonmetallic Minerals</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Rare-Earth-Products.html" title="Rare Earth & Products">Rare Earth & Products</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Petroleum-Products.html" title="Petroleum & Products">Petroleum & Products</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Metal & Products">Metal & Products</div>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Steel-Products.html" title="Steel & Products">Steel & Products</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Steel-Pipe-Tube.html" title="Steel Pipe & Tube">Steel Pipe & Tube</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Steel-Coil-Strip.html" title="Steel Coil & Strip">Steel Coil & Strip</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Steel-Sheet-Plate.html" title="Steel Sheet & Plate">Steel Sheet & Plate</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Non-ferrous-Metal-Products.html" title="Non-ferrous Metal & Products">Non-ferrous Metal & Products</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Stainless-Steel.html" title="Stainless Steel">Stainless Steel</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Aluminum.html" title="Aluminum">Aluminum</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Alloy.html" title="Alloy">Alloy</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Titanium.html" title="Titanium">Titanium</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Tungsten.html" title="Tungsten">Tungsten</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Copper.html" title="Copper">Copper</a>
																		<a class="sub-item item-name" href="Metallurgy-Mineral-Energy-Catalog/Iron-Products.html" title="Iron & Products">Iron & Products</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="20">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/magnetic-material/index.html" title="Magnetic Material">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Magnetic Material" data-src="../pic.made-in-china.com/61f54j00hQEaFQtnoTWG/Magnetic-Material.jpg"/>
																					<div class="link-hover color-black">Magnetic Material</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/aluminum-products/index.html" title="Aluminum Products">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Aluminum Products" data-src="../pic.made-in-china.com/61f54j00taQEQRTWitVo/Aluminum-Products.jpg"/>
																					<div class="link-hover color-black">Aluminum Products</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/solar-products/index.html" title="Solar Products">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Solar Products" data-src="../pic.made-in-china.com/61f54j00vaTQTGECtthH/Solar-Products.jpg"/>
																					<div class="link-hover color-black">Solar Products</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/steel-products/index.html" title="Steel Products">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Steel Products" data-src="../pic.made-in-china.com/61f54j00OTEtgQYqWaWl/Steel-Products.jpg"/>
																					<div class="link-hover color-black">Steel Products</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-20"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Tungsten_Carbide.html">Tungsten Carbide</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Solar_Panel.html">Solar Panel</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Permanent_Magnet.html">Permanent Magnet</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Steel_Coil.html">Steel Coil</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Stainless_Steel_Pipe.html">Stainless Steel Pipe</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="21">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Surveillance & Access Control">Surveillance & Access Control</div>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Security-Camera.html" title="CCTV Camera">CCTV Camera</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Access-Control-System.html" title="Access Control System">Access Control System</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/DVR.html" title="DVR">DVR</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Video-Door-Phone.html" title="Video Door Phone">Video Door Phone</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Time-Attendance.html" title="Time & Attendance">Time & Attendance</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Roadway Safety">Roadway Safety</div>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Traffic-Barrier.html" title="Traffic Barrier">Traffic Barrier</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Reflective-Material.html" title="Reflective Material">Reflective Material</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Probe-Sensor.html" title="Probe, Sensor">Probe, Sensor</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Traffic-Light.html" title="Traffic Light">Traffic Light</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Road-Stud.html" title="Road Stud">Road Stud</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Alarm & Fire Fighting">Alarm & Fire Fighting</div>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Alarm-Security-Systems.html" title="Alarm & Security Systems">Alarm & Security Systems</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Alarm-Security-System-Accessories.html" title="Alarm & Security System Accessories">Alarm & Security System Accessories</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Fire-Hose-Pipe-Fittings.html" title="Fire Hose">Fire Hose</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Fire-Alarm-Smoke-Detector.html" title="Fire Alarm & Smoke Detector">Fire Alarm & Smoke Detector</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Fire-Sprinkler.html" title="Fire Sprinkler">Fire Sprinkler</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Workplace Safety Supplies">Workplace Safety Supplies</div>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/EAS-Accessories.html" title="EAS & Accessories">EAS & Accessories</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Protective-Face-Mask.html" title="Protective Face Mask">Protective Face Mask</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Lifesaving.html" title="Lifesaving">Lifesaving</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Anti-Static.html" title="Anti-Static">Anti-Static</a>
																		<a class="sub-item item-name" href="Security-Protection-Catalog/Security-Guard.html" title="Security Guard">Security Guard</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="21">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/roadway-safety/index.html" title="Roadway Safety">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Roadway Safety" data-src="../pic.made-in-china.com/61f54j00FQTaSERmTtif/Roadway-Safety.jpg"/>
																					<div class="link-hover color-black">Roadway Safety</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/entrance-inspection/index.html" title="Entrance Inspection">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Entrance Inspection" data-src="../pic.made-in-china.com/61f54j00vaQEBtYqBThl/Entrance-Inspection.jpg"/>
																					<div class="link-hover color-black">Entrance Inspection</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/fire-fighting-equipment/index.html" title="Fire Fighting Equipment">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Fire Fighting Equipment" data-src="../pic.made-in-china.com/61f54j00QaTtlaYqdEic/Fire-Fighting-Equipment.jpg"/>
																					<div class="link-hover color-black">Fire Fighting Equipment</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/labour-supplies/index.html" title="Labour Supplies">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Labour Supplies" data-src="../pic.made-in-china.com/61f54j00GtTEinRUtQlY/Labour-Supplies.jpg"/>
																					<div class="link-hover color-black">Labour Supplies</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/security-camera/index.html" title="Security Camera">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Security Camera" data-src="../pic.made-in-china.com/61f54j00MaTQaQEFttir/Security-Camera.jpg"/>
																					<div class="link-hover color-black">Security Camera</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-21"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/IP_Camera.html">IP Camera</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Fire_Hose.html">Fire Hose</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Bulletproof_Vest.html">Bulletproof Vest</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Reflective_Tape.html">Reflective Tape</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Smoke_Detector.html">Smoke Detector</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="22">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Fabric & Fiber">Fabric & Fiber</div>
																		<a class="sub-item item-name" href="Textile-Catalog/Polyester-Fabric.html" title="Polyester Fabric">Polyester Fabric</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Synthetic-Leather.html" title="Synthetic Leather">Synthetic Leather</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Non-Woven-Fabric.html" title="Non Woven Fabric">Non Woven Fabric</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Synthetic-Fiber-Fabric.html" title="Synthetic Fibers">Synthetic Fibers</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Industrial-Textile.html" title="Industrial Textile">Industrial Textile</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Knitting-Crocheting-Fabric.html" title="Knitting & Crocheting Fabric">Knitting & Crocheting Fabric</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Functional-Textile.html" title="Functional Textile">Functional Textile</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Nylon-Fabric.html" title="Nylon Fabric">Nylon Fabric</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Man-made-Fiber-Fabric.html" title="Man-made Fiber">Man-made Fiber</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Silk.html" title="Silk">Silk</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Embroidery-Drawnwork.html" title="Embroidery & Drawnwork">Embroidery & Drawnwork</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Linen-Flax-Fabric.html" title="Linen & Flax Fabric">Linen & Flax Fabric</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Home Textile">Home Textile</div>
																		<a class="sub-item item-name" href="Textile-Catalog/Towel-Handkerchief.html" title="Towel & Handkerchief">Towel & Handkerchief</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Carpet.html" title="Carpet, Rug & Mat">Carpet, Rug & Mat</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Curtain.html" title="Curtain">Curtain</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Table-Cloth.html" title="Table Cloth">Table Cloth</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Decorative-Cloth.html" title="Decorative Cloth">Decorative Cloth</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Textile Accessories">Textile Accessories</div>
																		<a class="sub-item item-name" href="Textile-Catalog/Lace-Purfle.html" title="Lace & Purfle">Lace & Purfle</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Yarn.html" title="Yarn">Yarn</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Sack-Bag-for-Packing.html" title="Sack & Bag for Packing">Sack & Bag for Packing</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Twine-Rope-Netting.html" title="Twine, Rope & Netting">Twine, Rope & Netting</a>
																		<a class="sub-item item-name" href="Textile-Catalog/Sewing-Thread-Tape.html" title="Sewing Thread & Tape">Sewing Thread & Tape</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="22">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/fabric/index.html" title="Fabric">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Fabric" data-src="../pic.made-in-china.com/61f54j00CaQtQYTdoEhq/Fabric.jpg"/>
																					<div class="link-hover color-black">Fabric</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="http://custom.made-in-china.com/carpet-mat.html" title="Custom Carpet &amp; Mat">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Custom Carpet &amp; Mat" data-src="../pic.made-in-china.com/61f54j00FtTQNnECqahf/Custom-Carpet-Mat.jpg"/>
																					<div class="link-hover color-black">Custom Carpet &amp; Mat</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-22"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Fabric.html">Fabric</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/PU_Leather.html">PU Leather</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Tarpaulin.html">Tarpaulin</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/PP_Woven_Bag.html">PP Woven Bag</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Lace_Fabric.html">Lace Fabric</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="23">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Test & Analysis Instruments">Test & Analysis Instruments</div>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Test-Instrument.html" title="Test Instrument">Test Instrument</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Test-Machine.html" title="Test Machine">Test Machine</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Analysis-Instrument.html" title="Analysis Instrument">Analysis Instrument</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Detector.html" title="Detector">Detector</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Gas-Analyzer.html" title="Gas Analyzer">Gas Analyzer</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Optical & Lab Instruments">Optical & Lab Instruments</div>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Lab-Supplies.html" title="Laboratory Instruments">Laboratory Instruments</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Optical-Lens.html" title="Optical Lens">Optical Lens</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Microscope.html" title="Microscope">Microscope</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Lab-Utensil-and-Disposable.html" title="Lab Utensil and Disposable">Lab Utensil and Disposable</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Telescope-Binoculars.html" title="Telescope & Binoculars">Telescope & Binoculars</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Measuring Instruments">Measuring Instruments</div>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Weighing-Measuring-Apparatus.html" title="Weighing & Measuring Apparatus">Weighing & Measuring Apparatus</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Meter-for-Liquid-Gas.html" title="Meter for Liquid & Gas">Meter for Liquid & Gas</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Meter-for-Electricity.html" title="Meter for Electricity">Meter for Electricity</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Electronic-Scale.html" title="Electronic Scale">Electronic Scale</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Measuring-Device.html" title="Measuring Device">Measuring Device</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Pressure-Gauge.html" title="Pressure Gauge">Pressure Gauge</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Energy-Meter-Power-Meter.html" title="Energy Meter & Power Meter">Energy Meter & Power Meter</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Thermometer-Hygrometer.html" title="Thermometer & Hygrometer">Thermometer & Hygrometer</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Physical-Measuring-Meter.html" title="Physical Measuring Meter">Physical Measuring Meter</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Geographic-Surveying-Instrument.html" title="Geographic Surveying Instrument">Geographic Surveying Instrument</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Water-Meter.html" title="Water Meter">Water Meter</a>
																		<a class="sub-item item-name" href="Instruments-Meters-Catalog/Multimeter.html" title="Multimeter">Multimeter</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="23">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/scale/index.html" title="Scale">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Scale" data-src="../pic.made-in-china.com/61f54j00QTtEeyazUaVG/Scale.jpg"/>
																					<div class="link-hover color-black">Scale</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/lab-analysis-instrument/index.html" title="Lab &amp; Analysis Instrument">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Lab &amp; Analysis Instrument" data-src="../pic.made-in-china.com/61f54j00NTEQcaRomtWv/Lab-Analysis-Instrument.jpg"/>
																					<div class="link-hover color-black">Lab &amp; Analysis Instrument</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/test-instruments/index.html" title="Test Instruments">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Test Instruments" data-src="../pic.made-in-china.com/61f54j00ZQtaoCfEDTWE/Test-Instruments.jpg"/>
																					<div class="link-hover color-black">Test Instruments</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/liquid-gas-meter/index.html" title="Liquid &amp; Gas Meter">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Liquid &amp; Gas Meter" data-src="../pic.made-in-china.com/61f54j00VtaEHQRFWTli/Liquid-Gas-Meter.jpg"/>
																					<div class="link-hover color-black">Liquid &amp; Gas Meter</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-23"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Flow_Meter.html">Flow Meter</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Tensile_Testing_Machine.html">Tensile Testing Machine</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Surveying_Instrument.html">Surveying Instrument</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Stereo_Microscope.html">Stereo Microscope</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Digital_Thermometer.html">Digital Thermometer</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="24">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Stationery">Stationery</div>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Pen-Pencil-Brush.html" title="Pen, Pencil & Brush">Pen, Pencil & Brush</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Notebook.html" title="Notebook">Notebook</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/File-Folder.html" title="File Folder">File Folder</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Drawing-Paint.html" title="Drawing & Paint">Drawing & Paint</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Pencil-Bags-Cases.html" title="Pencil Bags & Cases">Pencil Bags & Cases</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Office Consumables">Office Consumables</div>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Toner-Cartridge.html" title="Toner Cartridge">Toner Cartridge</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Adhesive-Tape-Glue.html" title="Adhesive Tape">Adhesive Tape</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Office-Paper.html" title="Office Paper">Office Paper</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Ink-Cartridge.html" title="Ink Cartridge">Ink Cartridge</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Memo.html" title="Memo & Note Pad">Memo & Note Pad</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Office Equipments">Office Equipments</div>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Demonstrational-Teaching-Utensil.html" title="Demonstrational & Teaching Utensil">Demonstrational & Teaching Utensil</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Projectors.html" title="Projectors">Projectors</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/3D-Printer.html" title="Desktop 3D Printer">Desktop 3D Printer</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Printer.html" title="Thermal Printer">Thermal Printer</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Scanner.html" title="Scanner">Scanner</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Projection-Screen.html" title="Projection Screen">Projection Screen</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Whiteboard.html" title="Whiteboard">Whiteboard</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Calculator.html" title="Calculator">Calculator</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Binding-Machine.html" title="Binding Machine">Binding Machine</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Conferencing-System.html" title="Conferencing System">Conferencing System</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Paper-Shredder.html" title="Paper Shredder">Paper Shredder</a>
																		<a class="sub-item item-name" href="Office-Supplies-Catalog/Copier.html" title="Copier">Copier</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="24">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/office-supplies/index.html" title="Office Supplies">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Office Supplies" data-src="../pic.made-in-china.com/61f54j00hEaQeZtMjTla/Office-Supplies.jpg"/>
																					<div class="link-hover color-black">Office Supplies</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/printing-supplies/index.html" title="Printing Supplies">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Printing Supplies" data-src="../pic.made-in-china.com/61f54j00ntaEQETBzQli/Printing-Supplies.jpg"/>
																					<div class="link-hover color-black">Printing Supplies</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-24"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Inkjet_Printer.html">Inkjet Printer</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Masking_Tape.html">Masking Tape</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Thermal_Paper.html">Thermal Paper</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/3d_Printer.html">3D Printer</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Adhesive_Tape.html">Adhesive Tape</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="25">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Vegetables & Fruits">Vegetables & Fruits</div>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Garlic.html" title="Garlic">Garlic</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Tea-Tea-Leaf.html" title="Tea & Tea Leaf">Tea & Tea Leaf</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Fruit-Melon.html" title="Fruit & Melon">Fruit & Melon</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Nut-Seed.html" title="Nut & Seed">Nut & Seed</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Ginger.html" title="Ginger">Ginger</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Bean-Preparation.html" title="Bean & Preparation">Bean & Preparation</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Edible-Fungus-Algae.html" title="Edible Fungus & Algae">Edible Fungus & Algae</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Dried-Fruit.html" title="Dried Fruit">Dried Fruit</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Chilli-Pepper.html" title="Chilli & Pepper">Chilli & Pepper</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Onion.html" title="Onion">Onion</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Carrot-Radish.html" title="Carrot & Radish">Carrot & Radish</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Potato.html" title="Potato">Potato</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Food & Beverage">Food & Beverage</div>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Canned-Food.html" title="Canned Food">Canned Food</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Frozen-Food.html" title="Frozen Food">Frozen Food</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Sugar-Confection.html" title="Sugar & Confection">Sugar & Confection</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Beverage.html" title="Beverage">Beverage</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Alcohol.html" title="Alcohol">Alcohol</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Additives & Extracts">Additives & Extracts</div>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Food-Additive.html" title="Food Additive">Food Additive</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Herbal-Extract.html" title="Herbal Extract">Herbal Extract</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Agriculture-Manure.html" title="Agriculture Manure">Agriculture Manure</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Feed-Additives.html" title="Feed Additives">Feed Additives</a>
																		<a class="sub-item item-name" href="Agriculture-Food-Catalog/Fruit-Extract.html" title="Fruit Extract">Fruit Extract</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="25">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/farm-facilities/index.html" title="Farm Facilities">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Farm Facilities" data-src="../pic.made-in-china.com/61f54j00waTQbPGLIElN/Farm-Facilities.jpg"/>
																					<div class="link-hover color-black">Farm Facilities</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/food-additive/index.html" title="Food &amp; Additive">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Food &amp; Additive" data-src="../pic.made-in-china.com/61f54j00FEtTYQUnTalO/Food-Additive.jpg"/>
																					<div class="link-hover color-black">Food &amp; Additive</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-25"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Plant_Extract.html">Plant Extract</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Fertilizer.html">Fertilizer</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Tomato_Paste.html">Tomato Paste</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Bubble_Gum.html">Bubble Gum</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Chicken_Cage.html">Chicken Cage</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="26">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Inflatable">Inflatable</div>
																		<a class="sub-item item-name" href="Toys-Catalog/Inflatable-Toys.html" title="Inflatable Toys">Inflatable Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Inflatable-Bouncer.html" title="Inflatable Bouncer">Inflatable Bouncer</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Inflatable-Slide.html" title="Inflatable Slide">Inflatable Slide</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Inflatable-Castle.html" title="Inflatable Castle">Inflatable Castle</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Inflatable-Cartoon.html" title="Inflatable Cartoon">Inflatable Cartoon</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Toys for Sports & Recreation">Toys for Sports & Recreation</div>
																		<a class="sub-item item-name" href="Toys-Catalog/Kids-Bike.html" title="Kids Bike">Kids Bike</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Vehicle-Toys.html" title="Vehicle Toys">Vehicle Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Novelty-Toys.html" title="Novelty Toys">Novelty Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Sports-Fitness.html" title="Sports & Fitness">Sports & Fitness</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Sword-Gun-Toys.html" title="Sword & Gun Toys">Sword & Gun Toys</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Toys of Material">Toys of Material</div>
																		<a class="sub-item item-name" href="Toys-Catalog/Plush-Stuffed-Toy.html" title="Plush & Stuffed Toy">Plush & Stuffed Toy</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Plastic-Toys.html" title="Plastic Toys">Plastic Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Remote-Control-Toys.html" title="Remote Control Toys">Remote Control Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Wooden-Toys.html" title="Wooden Toys">Wooden Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Electrical-Toys.html" title="Electrical Toys">Electrical Toys</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Toys of Special Use">Toys of Special Use</div>
																		<a class="sub-item item-name" href="Toys-Catalog/Intellectual-Educational-Toys.html" title="Intellectual & Educational Toys">Intellectual & Educational Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Pet-Toys.html" title="Pet Toys">Pet Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Baby-Toys.html" title="Baby Toys">Baby Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Model-Miniature-Toys.html" title="Model & Miniature Toys">Model & Miniature Toys</a>
																		<a class="sub-item item-name" href="Toys-Catalog/Doll-Puppet.html" title="Doll & Puppet">Doll & Puppet</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="26">More Categories</a>
														</div>
														<div class="row sub-prod-items">
															<div class="cate-swiper-content J-cate-swiper">
																<div class="swiper-wrapper">
																	<ul class="items swiper-slide">
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/children-s-gifts/index.html" title="Children's Gifts">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Children's Gifts" data-src="../pic.made-in-china.com/61f54j00vtEQeTUgjaVn/Children-s-Gifts.jpg"/>
																					<div class="link-hover color-black">Children's Gifts</div>
																				</a>
																			</div>
																		</li>
																		<li class="col sub-item">
																			<div class="inr">
																				<a rel="nofollow" href="special/toys/index.html" title="Toys">
																					<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Toys" data-src="../pic.made-in-china.com/61f54j00yQtatTEWNTiz/Toys.jpg"/>
																					<div class="link-hover color-black">Toys</div>
																				</a>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
															<a class="img-left J-cate-slide-left" href="javascript:;"><i class="ob-icon icon-left"></i></a>
															<a class="img-right J-cate-slide-right" href="javascript:;"><i class="ob-icon icon-right"></i></a>
															<div class="pagination J-pagination-26"></div>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Inflatable.html">Inflatable</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Children_Bicycle.html">Children Bicycle</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/RC_Car.html">RC Car</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/RC_Helicopter.html">RC Helicopter</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Teddy_Bear.html">Teddy Bear</a>
														</div>
													</div>
												</li>
												<li class="more-cate J-item-more " data-index="27">
													<div class="more-cate-wrap">
														<div class="row sub-cate-items items-line items-line2">
															<div class="items-line-wrap cf">
																<div class="items-line-child">
																	<div class=" items-line-long ">
																		<div class="items-line-child-title" title="Shipment & Storage">Shipment & Storage</div>
																		<a class="sub-item item-name" href="Service-Catalog/Shipment-Storage.html" title="Shipment & Storage">Shipment & Storage</a>
																		<a class="sub-item item-name" href="Service-Catalog/Sea-Freight.html" title="Sea Freight">Sea Freight</a>
																		<a class="sub-item item-name" href="Service-Catalog/Air-Freight.html" title="Air Freight">Air Freight</a>
																		<a class="sub-item item-name" href="Service-Catalog/Express-Delivery.html" title="Express Delivery">Express Delivery</a>
																		<a class="sub-item item-name" href="Service-Catalog/Freight-Agents.html" title="Freight Agents">Freight Agents</a>
																		<a class="sub-item item-name" href="Service-Catalog/Customs-Clearance-Services.html" title="Customs Clearance Services">Customs Clearance Services</a>
																		<a class="sub-item item-name" href="Service-Catalog/Railway-Freight.html" title="Railway Freight">Railway Freight</a>
																		<a class="sub-item item-name" href="Service-Catalog/Warehouse-Services.html" title="Warehouse Services">Warehouse Services</a>
																		<a class="sub-item item-name" href="Service-Catalog/Road-Freight.html" title="Road Freight">Road Freight</a>
																		<a class="sub-item item-name" href="Service-Catalog/Combined-Transport.html" title="Combined Transport">Combined Transport</a>
																	</div>
																</div>
																<div class="items-line-child">
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Commercial Service">Commercial Service</div>
																		<a class="sub-item item-name" href="Service-Catalog/Certification-Inspection.html" title="Certification & Inspection">Certification & Inspection</a>
																		<a class="sub-item item-name" href="Service-Catalog/Advertising.html" title="Advertising">Advertising</a>
																		<a class="sub-item item-name" href="Service-Catalog/Real-Estate-Property.html" title="Real Estate & Property">Real Estate & Property</a>
																		<a class="sub-item item-name" href="Service-Catalog/Consultation.html" title="Consultation">Consultation</a>
																		<a class="sub-item item-name" href="Service-Catalog/Company-Registration.html" title="Company Registration">Company Registration</a>
																	</div>
																	<div class="items-line-short ">
																		<div class="items-line-child-title" title="Other Services">Other Services</div>
																		<a class="sub-item item-name" href="Service-Catalog/Exhibition.html" title="Exhibition">Exhibition</a>
																		<a class="sub-item item-name" href="Service-Catalog/Sales-Agency.html" title="Sales & Agency">Sales & Agency</a>
																		<a class="sub-item item-name" href="Service-Catalog/Education-Training.html" title="Education & Training">Education & Training</a>
																		<a class="sub-item item-name" href="Service-Catalog/Employment-Labor.html" title="Employment & Labor">Employment & Labor</a>
																		<a class="sub-item item-name" href="Service-Catalog/Restaurant.html" title="Restaurant">Restaurant</a>
																	</div>
																</div>
															</div>
															<a rel="nofollow" class="sub-item sub-item-more J-second-cate-more" data-index="27">More Categories</a>
														</div>
														<div class="more-hot-prod">
															Hot Products :
															<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Shipping.html">Shipping</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Logistics.html">Logistics</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Air_Logistic.html">Air Logistic</a>
															,&nbsp;	<a class="hot-prod-word link-hover" href="products-search/hot-china-products/Sea_Shipment.html">Sea Shipment</a>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</div></div>
						<div class="col">
							<div class="inr pyr">
								<div class="cf pyr-header">
									<h2 class="medium-size-bold fl">Post Your Request</h2>
									<a rel="nofollow" href="http://sourcing.made-in-china.com/suppliers.html" target="_blank"
									class="fr more-link link-hover">I'm a Supplier</a>
								</div>
								<ul class="pyr-items">
									<li><i class="micon">&#xe05a;</i>One Request, Multiple Quotes</li>
									<li><i class="micon">&#xe05a;</i>Verified Supplier-Matching</li>
									<li><i class="micon">&#xe05a;</i>Sample Available</li>
								</ul>
								<h3 class="pyr-hr-header small-size-bold">Hot Requests You May Be Interested in:</h3>
								<div class="cf pyr-hr-content">
									<a rel="nofollow" href="http://sourcing.made-in-china.com/buyer-requests/Manufacturing-Processing-Machinery.html" ads-data="t:72,sc:nOmtxmJTGEnQ,hrty:1" target="_blank">
										<div class="pyr-img-wrap fl"><img src='../www.micstatic.com/sh/img/en/rfq/Manufacturing-Processing-Machinery9909.jpg?_v=1534324276134' alt="Manufacturing & Processing Machinery"/>
										</div>
										<ul class="fl">
											<li class="pyr-prod-name">
												<h3 class="small-size-bold link-hover prod-name"
												title="Manufacturing & Processing Machinery">Manufacturing & Processing Machinery</h3>
											</li>
											<li class="pyr-prod-desc">19,000+ Sourcing Requests</li>
											<li class="pyr-prod-desc">100,000+ Quotations</li>
										</ul>
									</a>
								</div>
								<div class="cf pyr-hr-content">
									<a rel="nofollow" href="http://sourcing.made-in-china.com/buyer-requests/Apparel-Accessories.html" ads-data="t:72,sc:QtxGEEnJrmQQ,hrty:1" target="_blank">
										<ul class="fl">
											<li class="pyr-prod-name">
												<h3 class="small-size-bold link-hover prod-name"
												title="Apparel & Accessories">Apparel & Accessories</h3>
											</li>
											<li class="pyr-prod-desc">17,000+ Sourcing Requests</li>
											<li class="pyr-prod-desc">91,000+ Quotations</li>
										</ul>
									</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="inr you-may-like">
								<div class="cf yml-header">
									<h2 class="medium-size-bold">Sản phẩm mới</h2>
								</div>
								<ul class="yml-content">
					
									<li class="cf item">
										<a rel="nofollow" href="#" ads-data="t:73,sw:gift watches,hrty:1" target="_blank">
											<div class="yml-img-wrap fl">
												<img class="item-img" src='../image.made-in-china.com/3f2j00iGTfKIUnHkoF/Business-Waterproof-Steel-Simulation-Machinery-Men-s-Gift-Woven-Watch.jpg' alt="Gift Watches"/>
											</div>
											<span class="item-name link-hover" title="Gift Watches">Bảng giá Schneider 2018</span>
											<span class="item-num" title="">Chi tiết</span>
										</a>
									</li>
							
								</ul>
							</div></div>
						</div>
					</div>
					<div class="select-trending J-select-trending">
						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title text-center">Sản phẩm bán chạy</h3>
							</div>
							<div class="panel-body">
								<section class="center-slide slider">
									@foreach($best_seller as $product)
									<div>
										<img src="https://thietbiaz.com.vn/wp-content/uploads/2018/08/Bien-tan-Schneider-ATV320.jpg">
										<p class="text-center">{{$product->title}}</p>
									</div>
									@endforeach
								</section>
							</div>
						</div>
					</div>
					<div class="select-trending J-select-trending">
						<div class="panel panel-info">
							<div class="panel-heading">
							<h3 class="panel-title text-center">Khuyến mại</h3>
							</div>
							<div class="panel-body">
								<section class="center-slide slider">
									@foreach($promotion as $product)
									<div>
										<img src="https://image-us.24h.com.vn/upload/3-2018/images/2018-07-05/Sieu-khuyen-mai-mua-Wordcup-voi-may-Fd-bien-tan-VGPGEN-may-phat-dien-mua-word-cup--2--1530774177-312-width550height413.jpg">
										<p class="text-center">{{$product->title}}</p>
									</div>
									@endforeach
								</section>
							</div>
						</div>
					</div>
					<div class="os-ts">
						<div class="title-block J-title-block">
							<h2>
								Sourcing Solutions & Tailored Services
							</h2>
						</div>
						<div class="ssts J-ssts">
							<div class="row">
								<div class="col">
									<div class="inr">
										<div class="pic">
											<div class="hvalign">
												<div class="hvalign-cnt">
													<a rel="nofollow" title="Source from Industry Hubs"
													href="industry-channels/index.html" target="_blank">
													<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/home/ssts-1.jpg?_v=1534324276134' alt="Source from Industry Hubs" class="st1">
													<div class="img-wp ss1">
														<img data-original='//www.micstatic.com/sh/img/en/home/sst-1-1.svg?_v=1534324276134' src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Source from Industry Hubs" class="an1"/>
														<img data-original='//www.micstatic.com/sh/img/en/home/sst-1-2.svg?_v=1534324276134' src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Source from Industry Hubs" class="an2"/>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="txt">
										<a rel="nofollow" href="industry-channels/index.html" target="_blank">
											<h3 class="title" title="Source from Industry Hubs">Source from Industry Hubs</h3>
										</a>
										<div class="label">
											<div class="label-item" title="Manufacturing Base">
												<i class="micon">&#xe05a;</i> Manufacturing Base
											</div>
											<div class="label-item" title="Industry Competitiveness">
												<i class="micon">&#xe05a;</i> Industry Competitiveness
											</div>
											<div class="label-item" title="Original Products">
												<i class="micon">&#xe05a;</i> Original Products
											</div>
										</div>
									</div>
									<div class="list">
										<div class="item">
											<a rel="nofollow" href="industry-channels/index.html#Apparel-Textile"
											target="_blank">
											<div class="s-pic">
												<div class="hvalign">
													<div class="hvalign-cnt">
														<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/industry/Apparel-Textile.jpg?_v=1534324276134' alt="Apparel &amp; Textile">
													</div>
												</div>
											</div>
											<span class="s-txt" title="Apparel & Textile">Apparel & Textile</span>
										</a>
									</div>
									<div class="item">
										<a rel="nofollow" href="industry-channels/index.html#Gifts-Sports"
										target="_blank">
										<div class="s-pic">
											<div class="hvalign">
												<div class="hvalign-cnt">
													<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/industry/Gifts-Sports.jpg?_v=1534324276134' alt="Gifts &amp; Sports">
												</div>
											</div>
										</div>
										<span class="s-txt" title="Gifts & Sports">Gifts & Sports</span>
									</a>
								</div>
								<div class="item">
									<a rel="nofollow" href="industry-channels/index.html#Lights-Construction"
									target="_blank">
									<div class="s-pic">
										<div class="hvalign">
											<div class="hvalign-cnt">
												<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/industry/Lights-Construction.jpg?_v=1534324276134' alt="Lights &amp; Construction">
											</div>
										</div>
									</div>
									<span class="s-txt" title="Lights & Construction">Lights & Construction</span>
								</a>
							</div>
							<div class="item">
								<a rel="nofollow" href="industry-channels/index.html#Transportation"
								target="_blank">
								<div class="s-pic">
									<div class="hvalign">
										<div class="hvalign-cnt">
											<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/industry/Transportation.jpg?_v=1534324276134' alt="Transportation">
										</div>
									</div>
								</div>
								<span class="s-txt" title="Transportation">Transportation</span>
							</a>
						</div>
					</div>
					<div class="act">
						<a rel="nofollow" href="industry-channels/index.html" target="_blank" class="link">Start Sourcing <i class="micon">&#xe008;</i></a>
					</div>
				</div>	</div>
				<div class="col">
					<div class="inr">
						<div class="pic">
							<div class="hvalign">
								<div class="hvalign-cnt">
									<a rel="nofollow" title="MEI Awards-Winning Products" href="http://mei.made-in-china.com/"
									target="_blank">
									<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/home/ssts-2.jpg?_v=1534324276134' alt="MEI Awards-Winning Products" class="st2">
									<div class="img-wp ss2">
										<img data-original='//www.micstatic.com/sh/img/en/home/sst-2-1.svg?_v=1534324276134' src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="MEI Awards-Winning Products" class="an1"/>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="txt">
						<a rel="nofollow" href="http://mei.made-in-china.com/" target="_blank">
							<h3 class="title" title="MEI Award-Winning Products">MEI Awards-Winning Products</h3>
						</a>
						<div class="label">
							<div class="label-item" title="Manufacturing Excellence">
								<i class="micon">&#xe05a;</i> Manufacturing Excellence
							</div>
							<div class="label-item" title="Innovative Design">
								<i class="micon">&#xe05a;</i> Innovative Design
							</div>
							<div class="label-item" title="Award by Industry Experts">
								<i class="micon">&#xe05a;</i> Awarded by Industry Experts
							</div>
						</div>
					</div>
					<div class="list">
						<div class="item">
							<a rel="nofollow" href="http://mei.made-in-china.com/Sensor-QeqTEnmJcUnx.html" target="_blank">
								<div class="s-pic">
									<div class="hvalign">
										<div class="hvalign-cnt">
											<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='https://image.made-in-china.com/74f64j00QtbRIuBKOfcy/Switch-Contact-s-Clamping-Force-Sensor.jpg' alt="Sensor">
										</div>
									</div>
								</div>
								<span class="s-txt" title="Sensor">Sensor</span>
							</a>
						</div>
						<div class="item">
							<a rel="nofollow" href="http://mei.made-in-china.com/Stairs-Stair-Parts-EhkaQJJxKonm.html" target="_blank">
								<div class="s-pic">
									<div class="hvalign">
										<div class="hvalign-cnt">
											<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='https://image.made-in-china.com/74f64j00hnMtgSKJQjcb/Plastic-Coating-Manhole-Steps.jpg' alt="Stairs &amp; Stair Parts">
										</div>
									</div>
								</div>
								<span class="s-txt" title="Stairs & Stair Parts">Stairs & Stair Parts</span>
							</a>
						</div>
						<div class="item">
							<a rel="nofollow" href="http://mei.made-in-china.com/Air-Conditioner-Purifier-Humidifier-QitAEmJTSxmn.html" target="_blank">
								<div class="s-pic">
									<div class="hvalign">
										<div class="hvalign-cnt">
											<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='https://image.made-in-china.com/74f64j00oaNRmhwcLTbK/Air-Purifier-for-Indoor-Air-Purification-Oxygen-Plus-and-Esp-Pure-System.jpg' alt="Air Conditioner, Purifier &amp; Humidifier">
										</div>
									</div>
								</div>
								<span class="s-txt" title="Air Conditioner, Purifier & Humidifier">Air Conditioner, Purifier & Humidifier</span>
							</a>
						</div>
						<div class="item">
							<a rel="nofollow" href="http://mei.made-in-china.com/Mobile-Phone-Case-meqrQnJUKfxE.html" target="_blank">
								<div class="s-pic">
									<div class="hvalign">
										<div class="hvalign-cnt">
											<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='https://image.made-in-china.com/74f64j00ZAmTsoLywEqB/Hybrid-Kickstand-Mobile-Phone-Cases-for-iPhone-6-Case.jpg' alt="Mobile Phone Case">
										</div>
									</div>
								</div>
								<span class="s-txt" title="Mobile Phone Case">Mobile Phone Case</span>
							</a>
						</div>
					</div>
					<div class="act">
						<a rel="nofollow" href="http://mei.made-in-china.com/" target="_blank" class="link">Discover MEI Products <i class="micon">&#xe008;</i></a>
					</div>
				</div>	</div>
				<div class="col">
					<div class="inr">
						<div class="pic">
							<div class="hvalign">
								<div class="hvalign-cnt">
									<a rel="nofollow" title="Distribute Competitive Products" target="_blank" href="http://distributor.made-in-china.com/">
										<img src="../www.micstatic.com/sh/img/space9909.png?_v=1534324276134" data-original="//www.micstatic.com/sh/img/en/home/ssts-3.jpg?_v=1534324276134" alt="Distribute Competitive Products" class="st3">
										<div class="img-wp ss3">
											<img data-original="//www.micstatic.com/sh/img/en/home/sst-3-1.svg?_v=1534324276134" src="../www.micstatic.com/sh/img/space9909.png?_v=1534324276134" alt="Distribute Competitive Products" class="an1"/>
											<img data-original="//www.micstatic.com/sh/img/en/home/sst-3-2.svg?_v=1534324276134" src="../www.micstatic.com/sh/img/space9909.png?_v=1534324276134" alt="Distribute Competitive Products" class="an2"/>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="txt">
							<a rel="nofollow" target="_blank" href="http://distributor.made-in-china.com/">
								<h3 class="title" title="Distribute Competitive Products">Distribute Competitive Products</h3>
							</a>
							<div class="label">
								<div class="label-item" title="Verified Factory Partners">
									<i class="micon">&#xe05a;</i> Verified Factory Partners
								</div>
								<div class="label-item" title="Stable Supplies">
									<i class="micon">&#xe05a;</i> Stable Supplies
								</div>
								<div class="label-item" title="Considerable Profits">
									<i class="micon">&#xe05a;</i> Considerable Profits
								</div>
							</div>
						</div>
						<div class="list">
							<div class="item">
								<a rel="nofollow" target="_blank" ads-data="a:75,sw:Lights & Lighting" href="http://distributor.made-in-china.com/special/light-lighting-distributor-agent/">
									<div class="s-pic">
										<div class="hvalign">
											<div class="hvalign-cnt">
												<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/distribute/light-lighting.jpg?_v=1534324276134' alt="Lights &amp; Lighting">
											</div>
										</div>
									</div>
									<span class="s-txt" title="Lights &amp; Lighting">Lights &amp; Lighting</span>
								</a>
							</div>
							<div class="item">
								<a rel="nofollow" target="_blank" ads-data="a:75,sw:Machinery, Industrial Equipment & Components" href="http://distributor.made-in-china.com/special/machinery-industrial-equipment-components-distributor-agent/">
									<div class="s-pic">
										<div class="hvalign">
											<div class="hvalign-cnt">
												<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/distribute/machinery-industrial-equipment-components.jpg?_v=1534324276134' alt="Machinery, Industrial Equipment &amp; Components">
											</div>
										</div>
									</div>
									<span class="s-txt" title="Machinery, Industrial Equipment &amp; Components">Machinery, Industrial Equipment &amp; Components</span>
								</a>
							</div>
							<div class="item">
								<a rel="nofollow" target="_blank" ads-data="a:75,sw:Electrical Equipment & Components" href="http://distributor.made-in-china.com/special/electrical-equipment-component-distributor-agent/">
									<div class="s-pic">
										<div class="hvalign">
											<div class="hvalign-cnt">
												<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/distribute/electrical-equipment-component.jpg?_v=1534324276134' alt="Electrical Equipment &amp; Components">
											</div>
										</div>
									</div>
									<span class="s-txt" title="Electrical Equipment &amp; Components">Electrical Equipment &amp; Components</span>
								</a>
							</div>
							<div class="item">
								<a rel="nofollow" target="_blank" ads-data="a:75,sw:Construction Material & Tools" href="http://distributor.made-in-china.com/special/construction-material-tool-distributor-agent/">
									<div class="s-pic">
										<div class="hvalign">
											<div class="hvalign-cnt">
												<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/distribute/construction-material-tool.jpg?_v=1534324276134' alt="Construction Material &amp; Tools">
											</div>
										</div>
									</div>
									<span class="s-txt" title="Construction Material &amp; Tools">Construction Material &amp; Tools</span>
								</a>
							</div>
						</div>
						<div class="act">
							<a rel="nofollow" target="_blank" href="http://distributor.made-in-china.com/" class="link">Find Distributorship <i class="micon">&#xe008;</i></a>
						</div>
					</div>	</div>
					<div class="col">
						<div class="inr">
							<div class="pic">
								<div class="hvalign">
									<div class="hvalign-cnt">
										<a rel="nofollow" title="Customize Your Products" target="_blank" href="http://custom.made-in-china.com/">
											<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/sh/img/en/home/ssts-4.jpg?_v=1534324276134' alt="Customize Your Products" class="st4">
											<div class="img-wp ss4">
												<img data-original='//www.micstatic.com/sh/img/en/home/sst-4-1.svg?_v=1534324276134' src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Customize Your Products" class="an1"/>
												<img data-original='//www.micstatic.com/sh/img/en/home/sst-4-2.svg?_v=1534324276134' src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Customize Your Products" class="an2"/>
												<img data-original='//www.micstatic.com/sh/img/en/home/sst-4-3.svg?_v=1534324276134' src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' alt="Customize Your Products" class="an3"/>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="txt">
								<a rel="nofollow" target="_blank" href="http://custom.made-in-china.com/">
									<h3 class="title" title="Customize Your Products">Customize Your Products</h3>
								</a>
								<div class="label">
									<div class="label-item" title="Customizable Logo/Size/Color">
										<i class="micon">&#xe05a;</i> Customizable Logo/Size/Color
									</div>
									<div class="label-item" title="Make Your Own Design">
										<i class="micon">&#xe05a;</i> Make Your Own Design
									</div>
									<div class="label-item" title="Sample Available">
										<i class="micon">&#xe05a;</i> Sample Available
									</div>
								</div>
							</div>
							<div class="list">
								<div class="item">
									<a rel="nofollow" target="_blank" ads-data="a:76,sw:Mug" href="http://custom.made-in-china.com/mug.html">
										<div class="s-pic">
											<div class="hvalign">
												<div class="hvalign-cnt">
													<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/en/img/custom-channels/categories/mug.jpg' alt="Mug">
												</div>
											</div>
										</div>
										<span class="s-txt" title="Mug">Mug</span>
									</a>
								</div>
								<div class="item">
									<a rel="nofollow" target="_blank" ads-data="a:76,sw:USB Flash Drive" href="http://custom.made-in-china.com/usb-flash-drive.html">
										<div class="s-pic">
											<div class="hvalign">
												<div class="hvalign-cnt">
													<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/en/img/custom-channels/categories/usb-flash-drive.jpg' alt="USB Flash Drive">
												</div>
											</div>
										</div>
										<span class="s-txt" title="USB Flash Drive">USB Flash Drive</span>
									</a>
								</div>
								<div class="item">
									<a rel="nofollow" target="_blank" ads-data="a:76,sw:Power Bank" href="http://custom.made-in-china.com/power-bank.html">
										<div class="s-pic">
											<div class="hvalign">
												<div class="hvalign-cnt">
													<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/en/img/custom-channels/categories/power-bank.jpg' alt="Power Bank">
												</div>
											</div>
										</div>
										<span class="s-txt" title="Power Bank">Power Bank</span>
									</a>
								</div>
								<div class="item">
									<a rel="nofollow" target="_blank" ads-data="a:76,sw:One Size Sports Cap" href="http://custom.made-in-china.com/one-size-sports-cap.html">
										<div class="s-pic">
											<div class="hvalign">
												<div class="hvalign-cnt">
													<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134' data-original='//www.micstatic.com/en/img/custom-channels/categories/one-size-sports-cap.jpg' alt="One Size Sports Cap">
												</div>
											</div>
										</div>
										<span class="s-txt" title="One Size Sports Cap">One Size Sports Cap</span>
									</a>
								</div>
							</div>
							<div class="act">
								<a rel="nofollow" target="_blank" href="http://custom.made-in-china.com/" class="link">Find Custom Products<i class="micon">&#xe008;</i></a>
							</div>
						</div>	</div>
					</div>
				</div>
			</div>
			<div class="J-expo-trade expo-trade">
				<div class="expo">
					<div class="row ">
						<div class="col">
							<div class="inr expo-inr">
								<div class="cf expo-header">
									<h2 class="fl medium-size-bold expo-header-title">
										<a class="expo-header-link" target="_blank" href="http://expo.made-in-china.com/show">
											Sự kiện $ Hoạt động
										</a>
									</h2>
									<span class="header-mark fl">Source from TOP EXPO Online and Offline</span>
									<a rel="nofollow" class="fr more-link" target="_blank" href="http://expo.made-in-china.com/show">More</a>
								</div>
								<ul class="row expo-items">
								@foreach($news as $new)
								<li class="col item">
										<div class="inr">
											<div class="expo-img-content">
												<div class="expo-img-wrap">
													<a rel="nofollow" target="_blank" title="IBS 2018"
													href="http://expo.made-in-china.com/ibs/products">
													<div class="img-ba"></div>
													<img class="expo-img" src="https://hoplongtech.com/gt/wp-content/uploads/2017/04/IMG_0468.jpg"
													data-original='../image.made-in-china.com/153f0j10raQtfaTKiEht/banner1514736000000.jpg'
													alt="IBS 2018"/>
													<ul class="expo-desc">
														<li>
															<i class="micon">&#xe012;</i>400+
															Suppliers
														</li>
													</ul>
												</a>
											</div>
										</div>
										<ul class="expo-content">
											<li class="expo-name">
												<a rel="nofollow" class="link-hover" target="_blank"
												href="http://expo.made-in-china.com/ibs/products">
												<span class="small-size-bold link-hover">{{$new->title}}</span>
											</a>
										</li>
										<li class="expo-desc"
										title="Construction & Decoration">{!!$new->description!!}</li>
										<li class="expo-mark">
											<i class="micon">&#xe021;</i><span>Jan 1 - 18, 2018</span>
											<i class="micon">&#xe024;</i><span>Orange County Convention Center,Orlando</span>
										</li>
									</ul>
								</div>
							</li>
							@endforeach
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="trade-show">
	<div class="row">
		<div class="col">
			<div class="inr">
				<div class="cf trade-header">
					<a rel="nofollow" target="_blank" href="http://tradeshow.made-in-china.com/fairs/">
						<h2 class="fl medium-size-bold trade-header-title text-center">Đối tác phân phối chính thức</h2>
					</a>
					<!-- <a rel="nofollow" class="fr more-link" target="_blank"
					href="http://tradeshow.made-in-china.com/fairs/">More</a> -->
				</div>
				<div class="partners">
					<section class="center-slide slider">
						@foreach($partners as $partner)
						<div class="image-partners">
							<img src="{{url('uploads/partner')}}/{{$partner->cover_image}}">
						</div>
						@endforeach
					</section>
				</div>
</div>
</div>
</div>
</div>
</div>
<div class="dn-miss J-dn-miss">
	<div class="row">	<div class="col">
		<div class="inr">
			<div class="trade-header miss-header J-miss-header">
				<h2 class="dn-miss-header">Don't Miss</h2>
			</div>
			<div class="miss-content J-miss-content">
				<ul class="row items trade-in-pc">
					<li class="col item">
						<div class="inr">
							<div class="img-wrap">
								<a rel="nofollow" ads-data="t:12,a:1,p:2,aid:NmQJjJnEoxlM,si:1,ty:2" class="J-probe-banner-item" title="Construction Pipe" alt="Construction Pipe" target="_blank" href="special/construction-pipe/index.html" cz-position="bottom" cz-num="1">
									<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134'
									data-original='../pic.made-in-china.com/154f0j10nTQayEEEBtVC/Construction-Pipe.jpg'
									alt="Construction Pipe"/>
								</a>
								<div class="dont-miss-ad"
								style="background: url(../www.micstatic.com/sh/img/ad9909.png?_v=1534324276134)"></div>
							</div>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<div class="img-wrap">
								<a rel="nofollow" ads-data="t:12,a:2,p:2,aid:EJmQymnFjxDS,si:1,ty:2" class="J-probe-banner-item" title="Rehabilitation Therapy Supplies" alt="Rehabilitation Therapy Supplies" target="_blank" href="special/rehabilitation-therapy-supplies/index.html" cz-position="bottom" cz-num="2">
									<img src='../www.micstatic.com/sh/img/space9909.png?_v=1534324276134'
									data-original='https://pic.made-in-china.com/154f0j10TaTQytEmFthZ/Rehabilitation-Therapy-Supplies.jpg'
									alt="Rehabilitation Therapy Supplies"/>
								</a>
								<div class="dont-miss-ad"
								style="background: url(../www.micstatic.com/sh/img/ad9909.png?_v=1534324276134)"></div>
							</div>
						</div>
					</li>
				</ul>
				<div class="banner-total slide-miss trade-in-pad J-slider-miss">
					<div class="banner-box swiper-container J-slider-miss-box">
						<div class="banner-list swiper-wrapper">
							<a rel="nofollow" ads-data="t:12,a:1,p:2,aid:NmQJjJnEoxlM,si:1,ty:2" target="_blank"
							href="special/construction-pipe/index.html" class="banner-wrap swiper-slide J-probe-banner-item"
							title="Construction Pipe" alt="Construction Pipe"
							style="background-image: url('../pic.made-in-china.com/81f45j10nTQayEEEBtVC/Construction-Pipe.jpg')" cz-position="bottom" cz-num="1">
						</a>
						<a rel="nofollow" ads-data="t:12,a:2,p:2,aid:EJmQymnFjxDS,si:1,ty:2" target="_blank"
						href="special/rehabilitation-therapy-supplies/index.html" class="banner-wrap swiper-slide J-probe-banner-item"
						title="Rehabilitation Therapy Supplies" alt="Rehabilitation Therapy Supplies"
						style="background-image: url('../pic.made-in-china.com/81f45j10TaTQytEmFthZ/Rehabilitation-Therapy-Supplies.jpg')" cz-position="bottom" cz-num="2">
					</a>
				</div>
			</div>
			<div class="dont-miss-ad" style="background: url(../www.micstatic.com/sh/img/ad9909.png?_v=1534324276134)"></div>
			<div class="pagination J-miss-pagination"></div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<div class="hot-items J-hot-items">
	<div class="row">
		<div class="col">
			<div class="inr J-hot-items un-expand">
				<div class="cf hot-items-header">
					<h3 class="fl hot-header">Hot Items</h3>
				</div>
				<ul id="J-hot-items" class="row items">
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:1,p:2,aid:NEmQfRnxcJin,si:1,ty:2" target="_blank" href="quick-products/Furniture.html" title="Furniture">Furniture</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:2,p:2,aid:QmExEnJrMQln,si:1,ty:2" target="_blank" href="quick-products/Apparel-Clothing.html" title="Apparel &amp; Clothing">Apparel &amp; Clothing</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:3,p:2,aid:mEQnmAJhQxlE,si:1,ty:2" target="_blank" href="quick-products/Auto-Parts-Accessories.html" title="Auto Parts &amp; Accessories">Auto Parts &amp; Accessories</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:4,p:2,aid:QJmxEYncGQDE,si:1,ty:2" target="_blank" href="quick-products/Bags-Cases-Luggages.html" title="Bags, Cases &amp; Luggages">Bags, Cases &amp; Luggages</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:5,p:2,aid:EQJnmuxPQEHx,si:1,ty:2" target="_blank" href="quick-products/Computer-Products.html" title="Computer Products">Computer Products</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:6,p:2,aid:xEnxJDQCemHE,si:1,ty:2" target="_blank" href="quick-products/Consumer-Electronics.html" title="Consumer Electronics">Consumer Electronics</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:7,p:2,aid:QExnJcQvemlE,si:1,ty:2" target="_blank" href="quick-products/Electrical-Equipments.html" title="Electrical Equipment">Electrical Equipment</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:8,p:2,aid:QQxJxbnMeEIm,si:1,ty:2" target="_blank" href="quick-products/Electronic-Components.html" title="Electronic Components">Electronic Components</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:9,p:2,aid:JQmJnvxZxEiE,si:1,ty:2" target="_blank" href="quick-products/Gifts-Crafts-Collectibles.html" title="Gifts, Crafts &amp; Collectibles">Gifts, Crafts &amp; Collectibles</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:10,p:2,aid:nEJxnCQdtmDm,si:1,ty:2" target="_blank" href="quick-products/Motorcycles-Scooters.html" title="Motorcycles &amp; Scooters">Motorcycles &amp; Scooters</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:11,p:2,aid:EJxEmFQPenim,si:1,ty:2" target="_blank" href="quick-products/Sealing-Packaging-Storage-Shelving.html" title="Sealing, Packaging, Storage &amp; Shelving">Sealing, Packaging, Storage &amp; Shelving</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:12,p:2,aid:jEJQfnxYcmim,si:1,ty:2" target="_blank" href="quick-products/Lighting.html" title="Lighting">Lighting</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:13,p:2,aid:sQmJAGnZzElx,si:1,ty:2" target="_blank" href="quick-products/Textiles.html" title="Textiles">Textiles</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:14,p:2,aid:sEnJtzmTKQlx,si:1,ty:2" target="_blank" href="quick-products/Machinery-Equipments.html" title="Machinery &amp; Equipments">Machinery &amp; Equipments</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:15,p:2,aid:jxnQfDJMzmlQ,si:1,ty:2" target="_blank" href="quick-products/Minerals-Metals-Materials.html" title="Minerals, Metals &amp; Materials">Minerals, Metals &amp; Materials</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:16,p:2,aid:NmQJfVnyoxlE,si:1,ty:2" target="_blank" href="quick-products/Tools-Hardware.html" title="Tools &amp; Hardware">Tools &amp; Hardware</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:17,p:2,aid:NQmJaqnCBEIx,si:1,ty:2" target="_blank" href="quick-products/Vehicles-Transportation.html" title="Vehicles &amp; Transportation">Vehicles &amp; Transportation</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="t:10,a:18,p:2,aid:sEQxfSEhWnix,si:1,ty:2" target="_blank" href="quick-products/Building-Materials-Supplies.html" title="Building Materials &amp; Supplies">Building Materials &amp; Supplies</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="" target="_blank" href="http://construction.made-in-china.com/" title="Construction Industry">Construction Industry</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="" target="_blank" href="http://lighting.made-in-china.com/" title="Lighting Industry">Lighting Industry</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="" target="_blank" href="http://tools.made-in-china.com/" title="Hardware &amp; Tools Industry">Hardware &amp; Tools Industry</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="" target="_blank" href="http://industrialmachinery.made-in-china.com/" title="Industrial Machinery Industry">Industrial Machinery Industry</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="" target="_blank" href="http://furniture.made-in-china.com/" title="Furniture Industry">Furniture Industry</a>
						</div>
					</li>
					<li class="col item">
						<div class="inr">
							<a class="item-mark link-hover" ads-data="" target="_blank" href="http://machineparts.made-in-china.com/" title="Machine Parts Industry">Machine Parts Industry</a>
						</div>
					</li>
				</ul>
				<a href="javascript:void(0);" class="hot-items-more smaller-size more-link J-hot-items-more">More</a>
				<a href="javascript:void(0);" class="hot-items-less smaller-size more-link J-hot-items-less">Less</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
@stop()