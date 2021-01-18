@if(count($newBanner)>0)
    <section id="Gslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($newBanner as $key=>$banner)
                <li data-target="#Gslider"
                    data-slide-to="{{$key}} {{(($key==0)? 'active' : '')}}"
                    class=""></li>
            @endforeach

        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($newBanner as $key=>$banner)
                <div class="carousel-item  {{(($key==0)? 'active' : '')}}">
                    <img class="first-slide"
                         src="{{asset('uploads/images/banners')}}/{{$banner->photo}}"
                         alt="First slide">
                    <div
                        class="carousel-caption d-none d-md-block text-left">
                        <h1 class="wow fadeInDown">{{$banner->title}}</h1>
                        <p>{!! html_entity_decode($banner->description) !!}</p>
                        <a class="btn btn-lg ws-btn wow fadeInUpBig" href=""
                           role="button">Shop Now<i
                                class="far fa-arrow-alt-circle-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#Gslider" role="button"
           data-slide="prev">
                <span class="carousel-control-prev-icon"
                      aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#Gslider" role="button"
           data-slide="next">
                <span class="carousel-control-next-icon"
                      aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>
@endif
