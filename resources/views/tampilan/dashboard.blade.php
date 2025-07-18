@include('layoutsbootstrap.header')

  <section id="billboard" class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="section-title text-center mt-4" data-aos="fade-up">New Collections</h1>
            <div class="col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
                <p>Every piece in this collection is thoughtfully designed to elevate your style. Discover a blend of modern design and quality materials that will become the new staples in your wardrobe.</p>
            </div>
        </div>
        
        <div class="row position-relative">
            <div class="swiper main-swiper py-4" data-aos="fade-up" data-aos-delay="600">
                <div class="swiper-wrapper d-flex border-animation-left">
                    
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                            <div class="image-holder"><a href="#"><img src="images/banner-image-6.jpg" alt="product" class="img-fluid"></a></div>
                            <div class="banner-content py-4"><h5 class="element-title text-uppercase"><a href="#" class="item-anchor">ESSENTIAL JACKETS</a></h5><p>A timeless layer of style. Discover our selected jackets, designed for comfort and a modern touch to any look.</p><div class="btn-left"><a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a></div></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                           <div class="image-holder"><a href="#"><img src="images/banner-image-1.jpg" alt="product" class="img-fluid"></a></div>
                           <div class="banner-content py-4"><h5 class="element-title text-uppercase"><a href="#" class="item-anchor">THE CROPPED SWEATER</a></h5><p>Where comfort meets style. This uniquely cut sweater is the perfect choice for a look that's relaxed yet polished and modern.</p><div class="btn-left"><a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a></div></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                            <div class="image-holder"><a href="#"><img src="images/banner-image-2.jpg" alt="product" class="img-fluid"></a></div>
                            <div class="banner-content py-4"><h5 class="element-title text-uppercase"><a href="#" class="item-anchor">MODERN PLAID BLAZER</a></h5><p>From the boardroom to the weekend. This modern plaid blazer is a versatile staple your wardrobe needs.</p><div class="btn-left"><a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a></div></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                            <div class="image-holder"><a href="#"><img src="images/banner-image-3.jpg" alt="product" class="img-fluid"></a></div>
                            <div class="banner-content py-4"><h5 class="element-title text-uppercase"><a href="#" class="item-anchor">THE ARTIST'S LINEN DRESS</a></h5><p>Express your free spirit. This relaxed-fit linen dress is designed to move with you, offering effortless comfort and style all day long.</p><div class="btn-left"><a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a></div></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                            <div class="image-holder"><a href="#"><img src="images/banner-image-4.jpg" alt="product" class="img-fluid"></a></div>
                            <div class="banner-content py-4"><h5 class="element-title text-uppercase"><a href="#" class="item-anchor">RELAXED FIT LEATHER JACKET</a></h5><p>Make a statement with this relaxed-fit leather jacket. It brings a classic, bold edge to complete your urban style.</p><div class="btn-left"><a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a></div></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-item image-zoom-effect">
                            <div class="image-holder"><a href="#"><img src="images/banner-image-5.jpg" alt="product" class="img-fluid"></a></div>
                            <div class="banner-content py-4"><h5 class="element-title text-uppercase"><a href="#" class="item-anchor">THE ELEGANT CAPE</a></h5><p>A finishing touch that radiates sophistication. Designed with a modern silhouette and minimalist details to elevate any outfit.</p><div class="btn-left"><a href="#" class="btn-link fs-6 text-uppercase item-anchor text-decoration-none">Discover Now</a></div></div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="swiper-button-prev swiper-nav-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </div>
            <div class="swiper-button-next swiper-nav-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </div>
        </div>
    </div>
</section>

  <section class="features py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="0">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#calendar"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Book An Appointment</h4>
            <p>Enjoy a more personalized shopping experience. Schedule a style consultation session with our expert team at the boutique.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="300">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#shopping-bag"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Pick up in store</h4>
            <p>Shop online conveniently and pick up your order at the nearest store with no shipping fees. Fast and practical.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="600">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#gift"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">Special packaging</h4>
            <p>Every order is a gift. We ship it in our premium packaging, designed to protect and beautify your purchase.</p>
          </div>
        </div>
        <div class="col-md-3 text-center" data-aos="fade-in" data-aos-delay="900">
          <div class="py-5">
            <svg width="38" height="38" viewBox="0 0 24 24">
              <use xlink:href="#arrow-cycle"></use>
            </svg>
            <h4 class="element-title text-capitalize my-3">free global returns</h4>
            <p>Shop with confidence. If you're not completely satisfied, you can return your order easily and for free, from anywhere in the world.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="categories overflow-hidden">
    <div class="container">
      <div class="open-up" data-aos="zoom-out">
        <div class="row">
          <div class="col-md-4">
            <div class="cat-item image-zoom-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="images/cat-item1.jpg" alt="categories" class="product-image img-fluid">
                </a>
              </div>
              <div class="category-content">
                <div class="product-button">
                  <a href="index.html" class="btn btn-common text-uppercase">Shop for men</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cat-item image-zoom-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="images/cat-item2.jpg" alt="categories" class="product-image img-fluid">
                </a>
              </div>
              <div class="category-content">
                <div class="product-button">
                  <a href="index.html" class="btn btn-common text-uppercase">Shop for women</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cat-item image-zoom-effect">
              <div class="image-holder">
                <a href="index.html">
                  <img src="images/cat-item3.jpg" alt="categories" class="product-image img-fluid">
                </a>
              </div>
              <div class="category-content">
                <div class="product-button">
                  <a href="index.html" class="btn btn-common text-uppercase">Shop accessories</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-4">
            <h4 class="text-uppercase m-0">Our New Arrivals</h4>
            <div class="d-flex align-items-center">
                <a href="#" class="btn-link me-4">View All Products</a>
                <div class="swiper-nav-buttons d-flex">
                    <div class="swiper-nav-button new-arrival-prev me-2">
                        <svg width="24" height="24"><use xlink:href="#arrow-left"></use></svg>
                    </div>
                    <div class="swiper-nav-button new-arrival-next">
                        <svg width="24" height="24"><use xlink:href="#arrow-right"></use></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper product-swiper product-swiper-new open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                @foreach ($newArrivals as $product)
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="#">
                                <img src="{{ asset($product->image) }}" alt="product-item" class="product-image img-fluid">
                            </a>
                            <a href="#" 
                               class="btn-icon btn-wishlist {{ $product->isWishlisted() ? 'active' : '' }}" 
                               data-product-id="{{ $product->id }}">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="#">{{ $product->name }}</a>
                                </h5>
                                <a href="#" class="text-decoration-none" data-after="Add to cart">
                                    <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

  <section class="collection bg-light position-relative py-5">
    <div class="container">
      <div class="row">
        <div class="title-xlarge text-uppercase txt-fx domino">Collection</div>
        <div class="collection-item d-flex flex-wrap my-5">
          <div class="col-md-6 column-container">
            <div class="image-holder">
              <img src="images/single-image-2.jpg" alt="collection" class="product-image img-fluid">
            </div>
          </div>
          <div class="col-md-6 column-container bg-white">
            <div class="collection-content p-4 m-0 m-md-4">
              <h3 class="element-title text-uppercase">Classic winter collection</h3>
              <p>Embrace the cooler season with timeless elegance. This collection features structured silhouettes and premium fabrics designed for both warmth and style. Discover essential pieces that will become a style investment for years to come.</p>
              <a href="#" class="btn btn-dark text-uppercase mt-3">Shop Collection</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="best-sellers" class="best-sellers product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-4">
            <h4 class="text-uppercase m-0">Best Sellers</h4>
            <div class="d-flex align-items-center">
                <a href="#" class="btn-link me-4">View All Products</a>
                <div class="swiper-nav-buttons d-flex">
                    <div class="swiper-nav-button best-seller-prev me-2">
                        <svg width="24" height="24"><use xlink:href="#arrow-left"></use></svg>
                    </div>
                    <div class="swiper-nav-button best-seller-next">
                        <svg width="24" height="24"><use xlink:href="#arrow-right"></use></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper product-swiper product-swiper-best open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                @foreach ($bestSellers as $product)
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="#">
                                <img src="{{ asset($product->image) }}" alt="product-item" class="product-image img-fluid">
                            </a>
                            <a href="#" 
                               class="btn-icon btn-wishlist {{ $product->isWishlisted() ? 'active' : '' }}" 
                               data-product-id="{{ $product->id }}">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="#">{{ $product->name }}</a>
                                </h5>
                                <a href="#" class="text-decoration-none" data-after="Add to cart">
                                    <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

  <section class="video py-5 overflow-hidden">
  <div class="container-fluid">
    <div class="row">
      <div class="video-content open-up" data-aos="zoom-out">
        <div class="video-player position-relative" style="max-width: 100%; aspect-ratio: 16 / 9;">
          <iframe width="100%" height="100%" 
            src="https://www.youtube.com/embed/lArRnoMhX9I"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="testimonials py-5 bg-light">
    <div class="section-header text-center mt-5">
      <h3 class="section-title">WHAT OUR CUSTOMERS SAY</h3>
    </div>
    <div class="swiper testimonial-swiper overflow-hidden my-5">
      <div class="swiper-wrapper d-flex">
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>"I am absolutely in love with the blazer I purchased. You can feel the quality in the fabric and the tailoring is impeccable. It's one of those timeless pieces I know I'll be wearing for years. A true wardrobe investment!"</p>
              <div class="review-title text-uppercase">— Olivia R., Jakarta</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“"I'm always a bit nervous ordering from a new online store, especially with sizing. But the size guide was spot-on and my dress fits perfectly! Shipping was surprisingly fast and the whole process was seamless. Will definitely be shopping here again."</p>
              <div class="review-title text-uppercase">— Hannah S., Surabaya</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>"My order arrived in the most beautiful packaging. It felt like opening a luxurious gift, even though I bought it for myself! The attention to detail is just wonderful and it really makes the whole experience feel special."</p>
              <div class="review-title text-uppercase">— Chloe T., Yogyakarta</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>"This has become my new favorite dress! It's so versatile – I can dress it down with sneakers for a casual day or dress it up with heels for dinner. It's incredibly comfortable and I get compliments every single time I wear it."</p>
              <div class="review-title text-uppercase">— Sofia L., Bandung</div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
  </section>

  <section id="you-may-like" class="you-may-like product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-4">
            <h4 class="text-uppercase m-0">You May Like</h4>
            <div class="d-flex align-items-center">
                <a href="#" class="btn-link me-4">View All Products</a>
                <div class="swiper-nav-buttons d-flex">
                    <div class="swiper-nav-button new-arrival-prev me-2">
                        <svg width="24" height="24"><use xlink:href="#arrow-left"></use></svg>
                    </div>
                    <div class="swiper-nav-button new-arrival-next">
                        <svg width="24" height="24"><use xlink:href="#arrow-right"></use></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper product-swiper product-swiper-new open-up" data-aos="zoom-out">
            <div class="swiper-wrapper d-flex">
                @foreach ($youMayLike as $product)
                <div class="swiper-slide">
                    <div class="product-item image-zoom-effect link-effect">
                        <div class="image-holder position-relative">
                            <a href="#">
                                <img src="{{ asset($product->image) }}" alt="product-item" class="product-image img-fluid">
                            </a>
                            <a href="#" 
                               class="btn-icon btn-wishlist {{ $product->isWishlisted() ? 'active' : '' }}" 
                               data-product-id="{{ $product->id }}">
                                <svg width="24" height="24" viewBox="0 0 24 24">
                                    <use xlink:href="#heart"></use>
                                </svg>
                            </a>
                            <div class="product-content">
                                <h5 class="element-title text-uppercase fs-5 mt-3">
                                    <a href="#">{{ $product->name }}</a>
                                </h5>
                                <a href="#" class="text-decoration-none" data-after="Add to cart">
                                    <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

  <section class="blog py-5">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Read Blog Posts</h4>
        <a href="index.html" class="btn-link">View All</a>
      </div>
      <div class="row">
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="index.html">
                <img src="images/post-image1.jpg" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="index.html">How to look outstanding in pastel</a>
              </h5>
              <p>Dignissim lacus,turpis ut suspendisse vel tellus.Turpis purus,gravida orci,fringilla...</p>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="index.html">
                <img src="images/post-image2.jpg" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="index.html">Top 10 fashion trend for summer</a>
              </h5>
              <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="post-item">
            <div class="post-image">
              <a href="index.html">
                <img src="images/post-image3.jpg" alt="image" class="post-grid-image img-fluid">
              </a>
            </div>
            <div class="post-content d-flex flex-wrap gap-2 my-3">
              <div class="post-meta text-uppercase fs-6 text-secondary">
                <span class="post-category">Fashion /</span>
                <span class="meta-day"> jul 11, 2022</span>
              </div>
              <h5 class="post-title text-uppercase">
                <a href="index.html">Crazy fashion with unique moment</a>
              </h5>
              <p>Turpis purus, gravida orci, fringilla dignissim lacus, turpis ut suspendisse vel tellus...</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="logo-bar py-5 my-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6 col-md-3 mb-4 text-center">
        <img src="images/logobaru5.png" alt="logo" class="logo-image img-fluid">
      </div>
      <div class="col-6 col-md-3 mb-4 text-center">
        <img src="images/logobaru2.png" alt="logo" class="logo-image img-fluid">
      </div>
      <div class="col-6 col-md-3 mb-4 text-center">
        <img src="images/logobaru3.png" alt="logo" class="logo-image img-fluid">
      </div>
      <div class="col-6 col-md-3 mb-4 text-center">
        <img src="images/logobaru4.png" alt="logo" class="logo-image img-fluid">
      </div>
    </div>
  </div>
</section>


  <section class="newsletter bg-light" style="background: url(images/pattern-bg.png) no-repeat;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 py-5 my-5">
          <div class="subscribe-header text-center pb-3">
            <h3 class="section-title text-uppercase">Sign Up for our newsletter</h3>
          </div>
          <form id="form" class="d-flex flex-wrap gap-2">
            <input type="text" name="email" placeholder="Your Email Addresss" class="form-control form-control-lg">
            <button class="btn btn-dark btn-lg text-uppercase w-100">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="instagram position-relative">
    <div class="d-flex justify-content-center w-100 position-absolute bottom-0 z-1">
      <a href="https://www.instagram.com/templatesjungle/" class="btn btn-dark px-5">Follow us on Instagram</a>
    </div>
    <div class="row g-0">
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="images/insta-item1.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="images/insta-item2.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="images/insta-item3.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="images/insta-item4.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="images/insta-item5.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
      <div class="col-6 col-sm-4 col-md-2">
        <div class="insta-item">
          <a href="https://www.instagram.com/templatesjungle/" target="_blank">
            <img src="images/insta-item6.jpg" alt="instagram" class="insta-image img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>

  @include('layoutsbootstrap.footer')

{{-- JS Lokal (pastikan semua file ini ada di public/assets/js/) --}}
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- JS dari CDN --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

{{-- SCRIPT UTAMA ANDA --}}
<script>
document.addEventListener("DOMContentLoaded", function() {

    // ==========================================================
    // BAGIAN 1: LOGIKA UNTUK TOMBOL WISHLIST (DENGAN PERBAIKAN)
    // ==========================================================
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const wishlistCounter = document.getElementById('wishlist-counter');

    document.querySelectorAll('.btn-wishlist').forEach(button => {
        button.addEventListener('click', function(event) {
            // Mencegah link berpindah halaman
            event.preventDefault();
            // MENCEGAH EFEK ZOOM SAAT KLIK HATI
            event.stopPropagation(); 

            @guest
                window.location.href = "{{ route('login') }}";
                return;
            @endguest

            let productId = this.dataset.productId;
            let url = "{{ route('wishlist.add') }}";

            fetch(url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
                body: JSON.stringify({ product_id: productId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'added') {
                    this.classList.add('active');
                } else {
                    this.classList.remove('active');
                }
                if (wishlistCounter) {
                    wishlistCounter.textContent = `(${data.count})`;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });


    // ==========================================================
    // BAGIAN 2: INISIALISASI UNTUK SEMUA SLIDER
    // ==========================================================
    if (typeof Swiper !== 'undefined') {

        // Inisialisasi slider "New Arrivals"
        const newArrivalSwiper = new Swiper(".product-swiper-new", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: false,
            navigation: {
                nextEl: ".new-arrival-next",
                prevEl: ".new-arrival-prev",
            },
            pagination: {
                el: ".swiper-pagination-new",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            }
        });

        const mainSwiper = new Swiper(".main-swiper", {
    slidesPerView: 1, // Tampilan awal untuk mobile
    spaceBetween: 20,
    loop: false, // Set 'true' jika ingin loop tak terbatas
    
    // Tentukan elemen navigasi
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // Tentukan elemen pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    
    // Atur tampilan untuk layar yang lebih besar (breakpoints)
    breakpoints: {
        // ketika lebar layar >= 768px
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // ketika lebar layar >= 992px
        992: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});


        // Inisialisasi slider "Best Sellers"
        const bestSellerSwiper = new Swiper(".product-swiper-best", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: false,
            navigation: {
                nextEl: ".best-seller-next",
                prevEl: ".best-seller-prev",
            },
            pagination: {
                el: ".swiper-pagination-best",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            }
        });
    }

});
</script>
</body>

</html>