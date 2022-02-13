<?php get_header(); ?>

<main class="main">
   <div class="intro">
      <div class="container">
         <div class="row justify-content-between">
            <div class="col-7 col-lg-6 intro_text">
               <h1 class="intro_title">Find the perfect place to stay with your family</h1>
               <p class="intro_subtitle">
                  Buying a home is a life-changing experience, so shouldn’t your real estate agent be a life changer.
               </p>

               <div class="modal_button">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSearch">Search</button>
               </div>

               <!-- Modal -->
               <div class="modal fade" id="modalSearch" tabindex="-1" aria-labelledby="modalSearchLabel" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="modalSearchLabel">Form Search</h5>
                           <button class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                        </div>
                        <div class="modal-body">
                           <div class="form_buttons d-flex">
                              <button class="btn btn-primary mb-3 mx-auto py-2 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBuy" aria-expanded="false" aria-controls="collapseBuy">
                                 Buy
                              </button>

                              <button class="btn btn-warning mb-3 mx-auto py-2 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRent" aria-expanded="false" aria-controls="collapseRent">
                                 Rent
                              </button>

                              <button class="btn btn-success mb-3 mx-auto py-2 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSell" aria-expanded="false" aria-controls="collapseSell">
                                 Sell
                              </button>
                           </div>

                           <div class="collapse text-center" id="collapseBuy">
                              <form action="get">
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Location</label>
                                    <input type="text" name="city" class="string_input mb-3" id="cityInput" placeholder="Dhaka" />
                                 </div>
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Property type</label>
                                    <input type="text" name="type" class="string_input mb-3" id="typeInput" placeholder="Duplex" />
                                 </div>
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Price</label>
                                    <input type="text" name="price" class="string_input mb-3" id="priceInput" placeholder="$4000-$8000" />
                                 </div>
                              </form>
                           </div>

                           <div class="collapse text-center" id="collapseRent">
                              <form action="get">
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Location</label>
                                    <input type="text" name="city" class="string_input mb-3" id="cityInput" placeholder="Dhaka" />
                                 </div>
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Property type</label>
                                    <input type="text" name="type" class="string_input mb-3" id="typeInput" placeholder="Duplex" />
                                 </div>
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Price</label>
                                    <input type="text" name="price" class="string_input mb-3" id="priceInput" placeholder="$4000-$8000" />
                                 </div>
                              </form>
                           </div>

                           <div class="collapse text-center" id="collapseSell">
                              <form action="get">
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Location</label>
                                    <input type="text" name="city" class="string_input mb-3" id="cityInput" placeholder="Dhaka" />
                                 </div>
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Property type</label>
                                    <input type="text" name="type" class="string_input mb-3" id="typeInput" placeholder="Duplex" />
                                 </div>
                                 <div class="form_input">
                                    <label for="cityInput" class="col-12 col-form-label">Price</label>
                                    <input type="text" name="price" class="string_input mb-3" id="priceInput" placeholder="$4000-$8000" />
                                 </div>
                              </form>
                           </div>
                        </div>

                        <div class="modal-footer">
                           <button class="btn btn-primary">Search</button>
                           <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Modal  -->
            </div>

            <div class="col-5 col-lg-6 text-end intro_image">
               <img src="image/intro-image.jpg" alt="building" class="w-100" />
            </div>
         </div>
      </div>
   </div>

   <div class="partners">
      <div class="container">
         <div class="row justify-content-center partners_title">
            <div class="col text-center">
               <h2>Our Partners</h2>
            </div>
         </div>
         <div class="row gy-lg-0 gy-5 justify-content-between partners_logos">
            <div class="col-12 col-sm-6 col-lg-2 text-center partners_logo"><img src="image/patners-image/logo-1.png" alt="" /></div>
            <div class="col-12 col-sm-6 col-lg-2 text-center partners_logo"><img src="image/patners-image/logo-2.png" alt="" /></div>
            <div class="col-12 col-sm-6 col-lg-2 text-center partners_logo"><img src="image/patners-image/logo-3.png" alt="" /></div>
            <div class="col-12 col-sm-6 col-lg-2 text-center partners_logo"><img src="image/patners-image/logo-4.png" alt="" /></div>
            <div class="col-12 col-sm-6 col-lg-2 text-center partners_logo"><img src="image/patners-image/logo-5.png" alt="" /></div>
         </div>
      </div>
   </div>

   <div class="popular">
      <div class="container">
         <div class="row justify-content-between popular_header">
            <div class="col-9 col-lg-6">
               <h2 class="popular_title">Popular Properties</h2>
            </div>
            <div class="col-3 col-lg-6 text-end align-self-center">
               <a href="#" class="popular_link">View all</a>
            </div>
         </div>
         <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            <div class="col">
               <div class="card">
                  <img src="image/popular-image/card-1.jpg" class="card-img-top" alt="House" />
                  <div class="card-body p-4">
                     <h5 class="card-title">
                        <p class="card_title_text">Capital hill residence</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>
                     </h5>
                     <p class="card-text"><img src="image/svg/location-svg.svg" alt="Location" />East London</p>
                     <div class="card_logos">
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-1.svg" alt="" />
                           <p class="card_logo_namber">6</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-2.svg" alt="" />
                           <p class="card_logo_namber">2</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-3.svg" alt="" />
                           <p class="card_logo_namber">3</p>
                        </div>
                     </div>
                     <div class="card_bottom">
                        <p class="card_price">$5527.00</p>
                        <button type="button" class="btn btn-primary card_button">View Details</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card">
                  <img src="image/popular-image/card-2.jpg" class="card-img-top" alt="House" />
                  <div class="card-body p-4">
                     <h5 class="card-title">
                        <p class="card_title_text">Picket Fence Realty</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>
                     </h5>
                     <p class="card-text"><img src="image/svg/location-svg.svg" alt="Location" />East London</p>
                     <div class="card_logos">
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-1.svg" alt="" />
                           <p class="card_logo_namber">6</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-2.svg" alt="" />
                           <p class="card_logo_namber">2</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-3.svg" alt="" />
                           <p class="card_logo_namber">3</p>
                        </div>
                     </div>
                     <div class="card_bottom">
                        <p class="card_price">$6727.00</p>
                        <button type="button" class="btn btn-primary card_button">View Details</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card">
                  <img src="image/popular-image/card-3.jpg" class="card-img-top" alt="House" />
                  <div class="card-body p-4">
                     <h5 class="card-title">
                        <p class="card_title_text">Banyon Tree Realty</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>
                     </h5>
                     <p class="card-text"><img src="image/svg/location-svg.svg" alt="Location" />East London</p>
                     <div class="card_logos">
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-1.svg" alt="" />
                           <p class="card_logo_namber">6</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-2.svg" alt="" />
                           <p class="card_logo_namber">2</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-3.svg" alt="" />
                           <p class="card_logo_namber">3</p>
                        </div>
                     </div>
                     <div class="card_bottom">
                        <p class="card_price">$4327.00</p>
                        <button type="button" class="btn btn-primary card_button">View Details</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card">
                  <img src="image/popular-image/card-4.jpg" class="card-img-top" alt="House" />
                  <div class="card-body p-4">
                     <h5 class="card-title">
                        <p class="card_title_text">Corsair Real Estate</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>
                     </h5>
                     <p class="card-text"><img src="image/svg/location-svg.svg" alt="Location" />East London</p>
                     <div class="card_logos">
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-1.svg" alt="" />
                           <p class="card_logo_namber">6</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-2.svg" alt="" />
                           <p class="card_logo_namber">2</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-3.svg" alt="" />
                           <p class="card_logo_namber">3</p>
                        </div>
                     </div>
                     <div class="card_bottom">
                        <p class="card_price">$4427.00</p>
                        <button type="button" class="btn btn-primary card_button">View Details</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card">
                  <img src="image/popular-image/card-5.jpg" class="card-img-top" alt="House" />
                  <div class="card-body p-4">
                     <h5 class="card-title">
                        <p class="card_title_text">Strive Partners Realty</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>
                     </h5>
                     <p class="card-text"><img src="image/svg/location-svg.svg" alt="Location" />East London</p>
                     <div class="card_logos">
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-1.svg" alt="" />
                           <p class="card_logo_namber">6</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-2.svg" alt="" />
                           <p class="card_logo_namber">2</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-3.svg" alt="" />
                           <p class="card_logo_namber">3</p>
                        </div>
                     </div>
                     <div class="card_bottom">
                        <p class="card_price">$4527.00</p>
                        <button type="button" class="btn btn-primary card_button">View Details</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card">
                  <img src="image/popular-image/card-6.jpg" class="card-img-top" alt="House" />
                  <div class="card-body p-4">
                     <h5 class="card-title">
                        <p class="card_title_text">Strive Partners Realty</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>
                     </h5>
                     <p class="card-text"><img src="image/svg/location-svg.svg" alt="Location" />East London</p>
                     <div class="card_logos">
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-1.svg" alt="" />
                           <p class="card_logo_namber">6</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-2.svg" alt="" />
                           <p class="card_logo_namber">2</p>
                        </div>
                        <div class="card_logo_item">
                           <img src="image/svg/card-logos/logo-3.svg" alt="" />
                           <p class="card_logo_namber">3</p>
                        </div>
                     </div>
                     <div class="card_bottom">
                        <p class="card_price">$5527.00</p>
                        <button type="button" class="btn btn-primary card_button">View Details</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="featured">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-12 text-center">
               <h2 class="featured_title">Property Featured</h2>
            </div>
            <div class="col-9 text-center">
               <p class="featured_subtitle">
                  Real estate is a crowded field. But with the number of buyers purchasing homes through real estate agents and brokers
                  growing there’s plenty of
               </p>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4">
               <div class="featured_card mb-4">
                  <img src="image/svg/featured-logos/logo-1.svg" alt="" class="featured_card_logo" />
                  <h3 class="featured_card_title">100% Security</h3>
                  <p class="featured_card_subtitle">For many of us, buying a home is a dre and one not easily attainable.</p>
               </div>
               <div class="featured_card mb-4">
                  <img src="image/svg/featured-logos/logo-2.svg" alt="" class="featured_card_logo" />
                  <h3 class="featured_card_title">Free air conditioner</h3>
                  <p class="featured_card_subtitle">For many of us, buying a home is a dre and one not easily attainable.</p>
               </div>
               <div class="featured_card">
                  <img src="image/svg/featured-logos/logo-3.svg" alt="" class="featured_card_logo" />
                  <h3 class="featured_card_title">Flower garden</h3>
                  <p class="featured_card_subtitle">For many of us, buying a home is a dre and one not easily attainable.</p>
               </div>
            </div>

            <div class="col-xl-4 my-3 m-xl-0 align-self-end text-center">
               <img src="image/featured-image.jpg" alt="House" clas="w-100" />
            </div>

            <div class="col-xl-4">
               <div class="featured_card mb-4">
                  <img src="image/svg/featured-logos/logo-4.svg" alt="" class="featured_card_logo" />
                  <h3 class="featured_card_title">Parkers & movers</h3>
                  <p class="featured_card_subtitle">For many of us, buying a home is a dre and one not easily attainable.</p>
               </div>
               <div class="featured_card mb-4">
                  <img src="image/svg/featured-logos/logo-5.svg" alt="" class="featured_card_logo" />
                  <h3 class="featured_card_title">Rental furniture</h3>
                  <p class="featured_card_subtitle">For many of us, buying a home is a dre and one not easily attainable.</p>
               </div>
               <div class="featured_card">
                  <img src="image/svg/featured-logos/logo-6.svg" alt="" class="featured_card_logo" />
                  <h3 class="featured_card_title">Swimming pool</h3>
                  <p class="featured_card_subtitle">For many of us, buying a home is a dre and one not easily attainable.</p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="reviews">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-1 reviews_name">Reviews</div>
            <div class="col-12 text-center">
               <h2 class="reviews_title">Our valuable customer says</h2>
            </div>
         </div>

         <div class="row justify-content-between slider">
            <div class="col">
               <div class="slider_card">
                  <div class="slider_card_top">
                     <img src="image/slider-card/photo-1.jpg" alt="Photo" class="slider_card_photo" />
                     <div class="slider_card_author">
                        <p class="author_name">Justin Lee</p>
                        <p class="author_position">Products Designer at Ito</p>
                     </div>
                     <img src="image/slider-card/SVG.svg" alt="svg" class="slider_card_svg" />
                  </div>
                  <div class="slider_card_bottom">
                     <p>
                        A good real estate agent doesn’t disappear once the closing IN signed.Buying a bigger home doesn’t necessarily mean
                        spendi more money.Been there. Done that. Sold. Bought Bringing It All Together.
                     </p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="slider_card">
                  <div class="slider_card_top">
                     <img src="image/slider-card/photo-2.jpg" alt="Photo" class="slider_card_photo" />
                     <div class="slider_card_author">
                        <p class="author_name">Justin Lee</p>
                        <p class="author_position">Products Designer at Ito</p>
                     </div>
                     <img src="image/slider-card/SVG.svg" alt="svg" class="slider_card_svg" />
                  </div>
                  <div class="slider_card_bottom">
                     <p>
                        A good real estate agent doesn’t disappear once the closing IN signed.Buying a bigger home doesn’t necessarily mean
                        spendi more money.Been there. Done that. Sold. Bought Bringing It All Together.
                     </p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="slider_card">
                  <div class="slider_card_top">
                     <img src="image/slider-card/photo-2.jpg" alt="Photo" class="slider_card_photo" />
                     <div class="slider_card_author">
                        <p class="author_name">Justin Lee</p>
                        <p class="author_position">Products Designer at Ito</p>
                     </div>
                     <img src="image/slider-card/SVG.svg" alt="svg" class="slider_card_svg" />
                  </div>
                  <div class="slider_card_bottom">
                     <p>
                        A good real estate agent doesn’t disappear once the closing IN signed.Buying a bigger home doesn’t necessarily mean
                        spendi more money.Been there. Done that. Sold. Bought Bringing It All Together.
                     </p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="slider_card">
                  <div class="slider_card_top">
                     <img src="image/slider-card/photo-2.jpg" alt="Photo" class="slider_card_photo" />
                     <div class="slider_card_author">
                        <p class="author_name">Justin Lee</p>
                        <p class="author_position">Products Designer at Ito</p>
                     </div>
                     <img src="image/slider-card/SVG.svg" alt="svg" class="slider_card_svg" />
                  </div>
                  <div class="slider_card_bottom">
                     <p>
                        A good real estate agent doesn’t disappear once the closing IN signed.Buying a bigger home doesn’t necessarily mean
                        spendi more money.Been there. Done that. Sold. Bought Bringing It All Together.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="feedback">
      <div class="container">
         <div class="row p-5 feedback_bg">
            <div class="text-center">
               <div class="col mx-auto feedback_title">Get listed your home as a owner</div>
               <div class="col-8 mx-auto feedback_subtitle">
                  Here is a list of the greatest real estate company slogans of all-time. These catchy slogans are followed by the Greatest
                  Real Estate.
               </div>
               <form action="#" method="get" class="col-10 mx-auto feedback_form">
                  <input type="email" name="useremail" id="userEmail" placeholder="Enter email address" />
                  <button type="button" class="btn btn-primary subscribe">Subscribe</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</main>

<?php get_footer(); ?>