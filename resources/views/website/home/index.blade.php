@extends('website.master')

@section('title', 'Home page')

@section('body')
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-12 custom-padding-right">
                    <div class="slider-head">

                        <div class="hero-slider">

                            <div class="single-slider"
                                style="background-image: url({{ asset('/') }}website/assets/images/carousel-1.jpg)">
                                <div class="content">
                                    <h1 class="text-white">
                                     Welcome to our dairy farm
                                    </h1>
                                    <p class="text-white">Best Organic Dairy Products</p>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>


                            <div class="single-slider"
                                style="background-image: url({{ asset('/') }}website/assets/images/carousel-2.jpg);">
                                <div class="content">
                                    <h1 class="text-white">The Farm of Dairy products
                                    </h1>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slider"
                                style="background-image: url({{ asset('/') }}website/assets/img/15.jpg);">
                                <div class="content">
                                    <h1 class="text-white">The Farm of Dairy products
                                    </h1>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slider"
                                style="background-image: url({{ asset('/') }}website/assets/img/sheep.jpg);">
                                <div class="content">
                                    <h1 class="text-white">The Farm of Dairy products
                                    </h1>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img src="{{ asset($product->image) }}" alt="#" style="height: 300px;">
                            <form action="{{route('add-to-cart',['id'=>$product->id])}}" method="POST">
                                 @csrf
                                 <div class="button">
                                    <button type="submit" class="btn"><i class="lni lni-cart"></i> Add to Cart</button>
                                </div>
                            </form>
                        </div>
                        <div class="product-info">
                            <span class="category">{{$product->subCategory->name}}</span>
                            <h4 class="title">
                                <a href="{{route('category.detail',['id'=>$product->id])}}">{{$product->name}}</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>৳{{$product->selling_price}}</span>
                            </div>
                        </div>
                    </div>

                </div> 
                @endforeach
                
            </div>
        </div>
    </section>


    <section class="banner section">
        <div class="container">
            <div class="row">
            
            <div class="container-xxl py-5">
        <div class="container">
           
                
                    <div class="section-title">
                        <h2>Our services</h2>
                    </div>
            
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="{{asset('/')}}website/assets/img/service-1.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Best Animal Selection</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                       
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="{{asset('/')}}website/assets/img/service-2.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Breeding & Veterinary</h5>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                       
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="{{asset('/')}}website/assets/img/service-3.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Care & Milking</h5>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </section>


    


    <section class="home-product-list section">
        <div class="container">
            <div class="row">
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{asset('/')}}website/assets/img/gallery-5.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{asset('/')}}website/assets/img/gallery-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{asset('/')}}website/assets/img/gallery-1.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{asset('/')}}website/assets/img/gallery-1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{asset('/')}}website/assets/img/gallery-2.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{asset('/')}}website/assets/img/gallery-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{asset('/')}}website/assets/img/gallery-6.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{asset('/')}}website/assets/img/gallery-6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{asset('/')}}website/assets/img/gallery-7.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{asset('/')}}website/assets/img/gallery-7.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{asset('/')}}website/assets/img/gallery-3.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{asset('/')}}website/assets/img/gallery-3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{asset('/')}}website/assets/img/gallery-4.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{asset('/')}}website/assets/img/gallery-4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{asset('/')}}website/assets/img/gallery-8.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="{{asset('/')}}website/assets/img/gallery-8.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </section>


    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <h2 class="title">Popular Brands</h2>
                </div>
            </div>
            <div class="brands-logo-wrapper">
                <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                   @foreach ($brands as $brand)
                   <div class="brand-logo">
                    <img src="{{asset($brand->image)}}" alt="#">
                </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>


    <section class="blog-section section">
        <div class="container">
            <div class="row">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1>Team Members</h1>
                <h5 class="mb-5">Experienced Team Members</h5>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="{{asset('/')}}website/assets/img/team-1.png" alt="" >
                        <h5 class="text-center">Md Mahedy Hasan Naiem</h5>
                        <p class="text-primary text-center">Founder</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-secondary rounded-circle btn-square" href="https://www.facebook.com/63344333999h/"><i class="fab fa-facebook"></i></a>
                            <a class="btn btn-outline-secondary rounded-circle btn-square" href="https://twitter.com/63344333999h"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-secondary rounded-circle btn-square" href="https://www.instagram.com/mehedyhnm/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4 py-3" src="{{asset('/')}}website/assets/img/team20.png" alt="">
                        <h5 class="text-center">Abu Abdullah</h5>
                        <p class="text-primary text-center">Founder</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-outline-secondary rounded-circle btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary rounded-circle btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-secondary rounded-circle btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
            <h1 class="section-title">Testimonial</h1>
            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="{{asset('/')}}website/assets/img/sir9.jpg" style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Md. Rafiqul Islam</h5>
            <h6>Lecturer</h6>
            <p class="card-text">This is a very responsive website for ecommerce.</p>
            
            </div>
            </div>
            </div>

            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="{{asset('/')}}website/assets/img/sir2.jpg" alt="..." style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            </div>

            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="{{asset('/')}}website/assets/img/sir3.jpg"  alt="..." style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>   
            </div>
            </div>
            </div>
            
            <div class="col-3">
            <div class="card" style="width: 18rem;">
            <img src="{{asset('/')}}website/assets/img/sir4.png"  alt="..." style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>  
            </div>
            </div>
            </div>
            </div>
        </div>
    
    </section>
@endsection
