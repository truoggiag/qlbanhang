<div class="single-product">
    <div class="product-img">

        <a href="{{ route('fr.product.show', ['slug' => $product->slug, 'id' => $product->id]) }}">
            <img class="default-img"
                 src="{{asset('uploads/images/products')}}/{{$product->image}}"
                 alt="#">
            <img class="hover-img"
                 src="{{asset('uploads/images/products')}}/{{$product->image}}"
                 alt="#">
        </a>

        <div class="button-head">
            <div class="product-action">
                <a data-toggle="modal"
                   data-target="#exampleModal"
                   title="Quick View"
                   href="#"><i
                        class=" ti-eye"></i><span>Quick Shop</span></a>
                <a title="Wishlist" href="#"><i
                        class=" ti-heart "></i><span>Add to Wishlist</span></a>
                <a title="Compare" href="#"><i
                        class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
            </div>
            <div class="product-action-2">
                <a title="Add to cart" href="#">Add
                    to cart</a>
            </div>
        </div>
    </div>
    <div class="product-content">
        <h3>
            <a href="product-details.html">{{$product->name}}</a>
        </h3>
        <div class="product-price">
            <span>{{number_format($product->price).''.'VNĐ'}}</span>
        </div>
    </div>
</div>
