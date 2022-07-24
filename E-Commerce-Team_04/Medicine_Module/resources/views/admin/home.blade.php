@extends('admin/layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('{{asset('images/hero_bg.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">MidKit</strong> Flat 25% OFF </h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                  </div>
                </div>
                
                <!-- <p><a href="#" class="btn btn-primary px-5 py-3">Shop Now</a></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-blocks-cover overlay" style="background-image: url('{{ asset('images/hero_bg_2.jpg')}}');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">Special Offer* <strong class="text-primary">Everyday</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                  </div>
                </div>
                <!-- <p><a href="#" class="btn btn-primary px-5 py-3">Shop Now</a></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3><a href="#">Free Delivery</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a href="#">New Medicine Everyday</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-test-tubes"></span>
              <h3><a href="#">Medicines Guaranteed</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>HealthCare <strong class="text-primary">Products</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

              <div class="{{asset('text-center item mb-4 item-v2')}}">
                <span class="onsale">Sale</span>
                <a href="#"> <img src="{{asset('/images/product_01.jfif')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="#">Paracetamol Tablets IP Parvis 650</a></h3>
                <p class="price">₹350.00</p>
              </div>

              <div class="text-center item mb-4 item-v2">
                <a href="#"> <img src="{{asset('images/product_02.jfif')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="#">Benadryl Plastic Cough Syrup : 150ml</a></h3>
                <p class="price">₹125.00</p>
              </div>

              <div class="text-center item mb-4 item-v2">
                <span class="onsale">Sale</span>
                <a href="#"> <img src="{{asset('images/product_03.jfif')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="#">Dettol Anticeptic Liquid, 100ml</a></h3>
                <p class="price">₹60.00</p>
              </div>

              <div class="text-center item mb-4 item-v2">
                <a href="#"> <img src="{{asset('images/product_04.jfif')}}" alt="Image"></a>
                <h3 class="text-dark"><a href="#">Vicks Inhaler Keychain</a></h3>
                <p class="price">₹56.30</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('{{asset('images/hero_bg_2.jpg')}}');">
      <div class="container">
        <div class="row justify-content-center text-center">
         <div class="col-lg-7">
           <h3 class="text-white">CASHBACK OFFER* UPTO ₹300</h3>
           <h5><p class="text-white">Limited time cashback offer on payment of ₹600 or more using Paytm wallet</p></h5>
         </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        <div class="row justify-content-between">
          <div class="col-lg-12">
            <div class="title-section">
              <h2>Happy <strong class="text-primary">Customers</strong></h2>
            </div>
            <div class="block-3 products-wrap">
            <div class="owl-single no-direction owl-carousel">
        
              <div class="testimony">
                <blockquote>
                  <img src="{{asset('images/me.png')}}" alt="Image" class="img-fluid">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                </blockquote>

                <p class="author">&mdash; Kelly Holmes</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="{{asset('images/customer_01.jfif')}}" alt="Image" class="img-fluid">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p class="author">&mdash; Rebecca Morando</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="{{asset('images/customer_02.jfif')}}" alt="Image" class="img-fluid">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p class="author">&mdash; Lucas Gallone</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="{{asset('images/customer_03.jfif')}}" alt="Image" class="img-fluid">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p class="author">&mdash; Andrew Neel</p>
              </div>
        
            </div>
          </div>
          </div>
          
        </div>
      </div>
</div>

</body>

</html>
@endsection