
			
		<!--- start-content---->
		<div class="content details-page">
			<!---start-product-details--->
			<div class="product-details">
				<div class="wrap">
					<ul class="product-head">
						<li><a href="#">Home</a> <span>::</span></li>
						<li class="active-page"><a href="#">Product Page</a></li>
						<div class="clear"> </div>
					</ul>
				<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 300,
								thumb_image_height: 400,
								source_image_width: 900,
								source_image_height: 1000,
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->
				<div class="details-left">
					<div class="details-left-slider">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/product-slide/image1_thumb.jpg" />
									<img class="etalage_source_image" src="images/product-slide/image1_large.jpg" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/image2_thumb.jpg" />
								<img class="etalage_source_image" src="images/product-slide/image2_large.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/image3_thumb.jpg" />
								<img class="etalage_source_image" src="images/product-slide/image3_large.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/image4_thumb.jpg" />
								<img class="etalage_source_image" src="images/product-slide/image4_large.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/image5_thumb.jpg" />
								<img class="etalage_source_image" src="images/product-slide/image5_large.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/image6_thumb.jpg" />
								<img class="etalage_source_image" src="images/product-slide/image6_large.jpg" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/product-slide/image7_thumb.jpg" />
								<img class="etalage_source_image" src="images/product-slide/image7_large.jpg" />
							</li>
						</ul>
					</div>
					<div class="details-left-info">
						<div class="details-right-head">
						<h1>Product Name Goes Here</h1>
						<ul class="pro-rate">
							<li><a class="product-rate" href="#"> <label> </label></a> <span> </span></li>
							<li><a href="#">0 Review(s) Add Review</a></li>
						</ul>
						<p class="product-detail-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						<a class="learn-more" href="#"><h3>MORE DETAILS</h3></a>
						<div class="product-more-details">
							<ul class="price-avl">
								<li class="price"><span>$153.39</span><label>$145.72</label></li>
								<li class="stock"><i>In stock</i></li>
								<div class="clear"> </div>
							</ul>
							<ul class="product-colors">
								<h3>available Colors ::</h3>
								<li><a class="color1" href="#"><span> </span></a></li>
								<li><a class="color2" href="#"><span> </span></a></li>
								<li><a class="color3" href="#"><span> </span></a></li>
								<li><a class="color4" href="#"><span> </span></a></li>
								<li><a class="color5" href="#"><span> </span></a></li>
								<li><a class="color6" href="#"><span> </span></a></li>
								<li><a class="color7" href="#"><span> </span></a></li>
								<li><a class="color8" href="#"><span> </span></a></li>
								<div class="clear"> </div>
							</ul>
							<ul class="prosuct-qty">
								<span>Quantity:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</ul>
							<input type="button" value="add to cart" />
							<ul class="product-share">
								<h3>All so Share On</h3>
								<ul>
									<li><a class="share-face" href="#"><span> </span> </a></li>
									<li><a class="share-twitter" href="#"><span> </span> </a></li>
									<li><a class="share-google" href="#"><span> </span> </a></li>
									<li><a class="share-rss" href="#"><span> </span> </a></li>
									<div class="clear"> </div>
								</ul>
							</ul>
						</div>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="details-right">
					<a href="#">SEE MORE</a>
				</div>
				<div class="clear"> </div>
			</div>
			<!----product-rewies---->
			<div class="product-reviwes">
				<div class="wrap">
				<!--vertical Tabs-script-->
				<!---responsive-tabs---->
					<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							 $('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true,   // 100% fit in a container
									closed: 'accordion', // Start closed if in accordion view
									activate: function(event) { // Callback function if tab is switched
									var $tab = $(this);
									var $info = $('#tabInfo');
									var $name = $('span', $info);
										$name.text($tab.text());
										$info.show();
									}
								});
													
							 $('#verticalTab').easyResponsiveTabs({
									type: 'vertical',
									width: 'auto',
									fit: true
								 });
						 });
					</script>
				<!---//responsive-tabs---->
				<!--//vertical Tabs-script-->
				<!--vertical Tabs-->
        		<div id="verticalTab">
		            <ul class="resp-tabs-list">
		                <li>Description</li>
		                <li>Product tags</li>
		                <li>Product reviews</li>
		            </ul>
		            <div class="resp-tabs-container vertical-tabs">
		                <div>
		                	<h3> Details</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
		               		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor</p>
		                </div>
		                <div>
		                	<h3>Product Tags</h3>
		                	<h4>Add Your Tags:</h4>
		                	<form>
		                		<input type="text"> <input type="submit" value="ADD TAGS"/>
		                		<span>Use spaces to separate tags. Use single quotes (') for phrases.</span>
		                	</form>
		                </div>
		                <div>
		                	<h3>Customer Reviews</h3>
		                	<p>There are no customer reviews yet.</p>
		                </div>
		            </div>
       		</div>
       		<div class="clear"> </div>
       		<!--- start-similar-products--->
       		<div class="similar-products">
       			<div class="similar-products-left">
       				<h3>SIMILAR PRODUCTS</h3>
       				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       			</div>
       			<div class="similar-products-right">
       				<!-- start content_slider -->
       				<!--- start-rate---->
							<script src="js/jstarbox.js"></script>
							<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
							<script type="text/javascript">
								jQuery(function() {
									jQuery('.starbox').each(function() {
										var starbox = jQuery(this);
										starbox.starbox({
											average: starbox.attr('data-start-value'),
											changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
											ghosting: starbox.hasClass('ghosting'),
											autoUpdateAverage: starbox.hasClass('autoupdate'),
											buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
											stars: starbox.attr('data-star-count') || 5
										}).bind('starbox-value-changed', function(event, value) {
											if(starbox.hasClass('random')) {
												var val = Math.random();
												starbox.next().text(' '+val);
												return val;
											} 
										})
									});
								});
							</script>
							<!---//End-rate---->
					       <div id="owl-demo" class="owl-carousel">
				                <div class="item" onclick="location.href='details.html';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/product1.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Details</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#163; 200</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <div class="item" onclick="location.href='details.html';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/product2.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Details</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#163; 320</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <div class="item" onclick="location.href='details.html';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/product3.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Details</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#163; 380</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <div class="item" onclick="location.href='details.html';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/product4.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Details</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#163; 300</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
				                <div class="item" onclick="location.href='details.html';">
				                	<div class="product-grid fade sproduct-grid">
										<div class="product-pic">
											<a href="#"><img src="images/product5.jpg" title="product-name" /></a>
											<p>
											<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
											<span>Men's Firm-Ground Football Boot</span>
											</p>
										</div>
										<div class="product-info">
											<div class="product-info-cust">
												<a href="#">Details</a>
											</div>
											<div class="product-info-price">
												<a href="#">&#163; 270</a>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="more-product-info">
											<span> </span>
										</div>
									</div>
				                </div>
			              </div>
				<!----//End-img-cursual---->
       			</div>
       			<div class="clear"> </div>
       		</div>
       		<!--- //End-similar-products--->
			</div>
			</div>
			<div class="clear"> </div>
			<!--//vertical Tabs-->
			<!----//product-rewies---->
			<!---//End-product-details--->
			</div>
		</div>
		