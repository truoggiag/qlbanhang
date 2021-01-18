@extends('frontend.frontend-layout')
@section('title', 'ban hang')
@section('content')

<!-- Product Style -->
<!-- Breadcrumbs -->
<div class="row">
    <div class="col-12">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bread-inner">
                            <ul class="bread-list">
                                <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                                <li class="active"><a href="blog-single.html">Shop Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumbs -->

        <!-- Shop Single -->
        <section class="shop single section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="product-gallery">
                                    <div class="flexslider-thumbnails">
                                        <ul class="slides">
                                            <li data-thumb="images/bx-slider1.jpg" rel="adjustX:10, adjustY:">
                                                <img class="hover-img" src="{{ asset('/uploads/images/products/' . $product->image) }}" alt="#">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product-des">
                                    <div class="short">
                                        <h4>{{ $product->name }}</h4>
                                        <div class="rating-main">
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                                <li class="dark"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <a href="#" class="total-review">(102) Review</a>
                                        </div>
                                        <p class="price"><span class="discount">$70.00</span><s>$80.00</s> </p>
                                        <p class="description">{!! $product->description !!}</p>
                                    </div>
                                    <div class="product-buy">
                                        <div class="d-flex">
                                            <div class="quantity">
                                                <h6>Quantity :</h6>
                                                <!-- Input Order -->
                                                <div class="input-group">
                                                    <div class="button minus">
                                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="ti-minus"></i>
                                                        </button>
                                                    </div>
                                                    <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
                                                    <div class="button plus">
                                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                            <i class="ti-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!--/ End Input Order -->
                                            </div>
                                            <div class="add-to-cart d-flex">
                                                <form action="{{ route('fr.cart.add_product') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                    <button type="submit" class="btn">Add to cart</button>
                                                </form>
                                                <a href="#" class="btn min"><i class="ti-heart"></i></a>
                                                <a href="#" class="btn min"><i class="fa fa-compress"></i></a>
                                            </div>
                                        </div>
                                        <p class="cat">Category :<a href="#">Clothing</a></p>
                                        <p class="availability">Availability : 180 Products In Stock</p>
                                    </div>
                                    <!--/ End Product Buy -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="product-info">
                                    <div class="nav-main">
                                        <!-- Tab Nav -->
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
                                        </ul>
                                        <!--/ End Tab Nav -->
                                    </div>
                                    <div class="tab-content" id="myTabContent">
                                        <!-- Description Tab -->
                                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                                            <div class="tab-single">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="single-des">
                                                            <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskto</p>
                                                        </div>
                                                        <div class="single-des">
                                                            <p>Suspendisse consequatur voluptates lorem nobis accumsan natus mattis. Optio pede, optio qui metus, delectus! Ultricies impedit, minus tempor fuga, quasi, pede felis commodo bibendum voluptas nisi? Voluptatem risus tempore tempora. Quaerat aspernatur? Error praesent laoreet, cras in fames hac ea, massa montes diamlorem nec quaerat, quos occaecati leo nam aliquet corporis, ab recusandae parturient, etiam fermentum, a quasi possimus commodi, mollis voluptate mauris mollis, quisque donec</p>
                                                        </div>
                                                        <div class="single-des">
                                                            <h4>Product Features:</h4>
                                                            <ul>
                                                                <li>long established fact.</li>
                                                                <li>has a more-or-less normal distribution. </li>
                                                                <li>lmany variations of passages of. </li>
                                                                <li>generators on the Interne.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ End Description Tab -->
                                        <!-- Reviews Tab -->
                                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                                            <div class="tab-single review-panel">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="ratting-main">
                                                            <div class="avg-ratting">
                                                                <h4>4.5 <span>(Overall)</span></h4>
                                                                <span>Based on 1 Comments</span>
                                                            </div>
                                                            <!-- Single Rating -->
                                                            <div class="single-rating">
                                                                <div class="rating-author">
                                                                    <img src="images/comments1.jpg" alt="#">
                                                                </div>
                                                                <div class="rating-des">
                                                                    <h6>Naimur Rahman</h6>
                                                                    <div class="ratings">
                                                                        <ul class="rating">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star-half-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                        <div class="rate-count">(<span>3.5</span>)</div>
                                                                    </div>
                                                                    <p>Duis tincidunt mauris ac aliquet congue. Donec vestibulum consequat cursus. Aliquam pellentesque nulla dolor, in imperdiet.</p>
                                                                </div>
                                                            </div>
                                                            <!--/ End Single Rating -->
                                                            <!-- Single Rating -->
                                                            <div class="single-rating">
                                                                <div class="rating-author">
                                                                    <img src="images/comments2.jpg" alt="#">
                                                                </div>
                                                                <div class="rating-des">
                                                                    <h6>Advin Geri</h6>
                                                                    <div class="ratings">
                                                                        <ul class="rating">
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                        </ul>
                                                                        <div class="rate-count">(<span>5.0</span>)</div>
                                                                    </div>
                                                                    <p>Duis tincidunt mauris ac aliquet congue. Donec vestibulum consequat cursus. Aliquam pellentesque nulla dolor, in imperdiet.</p>
                                                                </div>
                                                            </div>
                                                            <!--/ End Single Rating -->
                                                        </div>
                                                        <!-- Review -->
                                                        <div class="comment-review">
                                                            <div class="add-review">
                                                                <h5>Add A Review</h5>
                                                                <p>Your email address will not be published. Required fields are marked</p>
                                                            </div>
                                                            <h4>Your Rating</h4>
                                                            <div class="review-inner">
                                                                <div class="ratings">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/ End Review -->
                                                        <!-- Form -->
                                                        <form class="form" method="post" action="mail/mail.php">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12">
                                                                    <div class="form-group">
                                                                        <label>Your Name<span>*</span></label>
                                                                        <input type="text" name="name" required="required" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <div class="form-group">
                                                                        <label>Your Email<span>*</span></label>
                                                                        <input type="email" name="email" required="required" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-12">
                                                                    <div class="form-group">
                                                                        <label>Write a review<span>*</span></label>
                                                                        <textarea name="message" rows="6" placeholder="" ></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-12">
                                                                    <div class="form-group button5">
                                                                        <button type="submit" class="btn">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!--/ End Form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ End Reviews Tab -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Shop Single -->

        <!-- Start Most Popular -->
        <div class="product-area most-popular related-product section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel popular-slider">
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="images/products/p15.jpg" alt="#">
                                        <img class="hover-img" src="images/products/p16.jpg" alt="#">
                                        <span class="out-of-stock">Hot</span>
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                                    <div class="product-price">
                                        <span class="old">$60.00</span>
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="images/products/p1.jpg" alt="#">
                                        <img class="hover-img" src="images/products/p2.jpg" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                    <div class="product-price">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="images/products/p3.jpg" alt="#">
                                        <img class="hover-img" src="images/products/p4.jpg" alt="#">
                                        <span class="new">New</span>
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                    <div class="product-price">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                            <!-- Start Single Product -->
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="hover-img" src="{{ asset('/upload/products' . $product->image) }}" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                    <div class="product-price">
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Most Popular Area -->

    </div>
</div>
@endsection
