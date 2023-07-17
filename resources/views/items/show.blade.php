<x-layout>
    <div class="container-fluid p-1 shadow mb-3">
        <div class="row">
            <div class="col-12 p-2 mt-1">
                <h2 class="display-5 text-center">{{__('ui.announcementShow')}}: {{$item->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                <div class=" col-12 col-md-6 carousel-container mx-auto">
                    
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active d-flex justify-content-center" data-slide-number="0">
                                <img src="https://picsum.photos/700/500" class="d-block w-75" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="1">
                                <img src="https://source.unsplash.com/tXqVe7oO-go/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="2">
                                <img src="https://source.unsplash.com/qlYQb7B9vog/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="3">
                                <img src="https://source.unsplash.com/QfEfkWk1Uhk/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/QfEfkWk1Uhk/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="4">
                                <img src="https://source.unsplash.com/CSIcgaLiFO0/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/CSIcgaLiFO0/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="5">
                                <img src="https://source.unsplash.com/a_xa7RUKzdc/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/a_xa7RUKzdc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="6">
                                <img src="https://source.unsplash.com/uanoYn1AmPs/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/uanoYn1AmPs/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="7">
                                <img src="https://source.unsplash.com/_snqARKTgoc/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/_snqARKTgoc/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="8">
                                <img src="https://source.unsplash.com/M9F8VR0jEPM/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/M9F8VR0jEPM/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                            <div class="carousel-item" data-slide-number="9">
                                <img src="https://source.unsplash.com/Q1p7bh3SHj8/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Q1p7bh3SHj8/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Carousel Navigation -->
                    <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row mx-0">
                                    <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
                                        <img src="https://picsum.photos/400/300" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
                                        <img src="https://source.unsplash.com/tXqVe7oO-go/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
                                        <img src="https://source.unsplash.com/qlYQb7B9vog/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
                                        <img src="https://source.unsplash.com/QfEfkWk1Uhk/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
                                        <img src="https://source.unsplash.com/CSIcgaLiFO0/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
                                        <img src="https://source.unsplash.com/a_xa7RUKzdc/600x400/" class="img-fluid" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row mx-0">
                                    <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
                                        <img src="https://source.unsplash.com/uanoYn1AmPs/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
                                        <img src="https://source.unsplash.com/_snqARKTgoc/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
                                        <img src="https://source.unsplash.com/M9F8VR0jEPM/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
                                        <img src="https://source.unsplash.com/Q1p7bh3SHj8/600x400/" class="img-fluid" alt="...">
                                    </div>
                                    <div class="col-2 px-1 py-2"></div>
                                    <div class="col-2 px-1 py-2"></div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div> <!-- /container -->
                <div class="col-6 mx-auto">
                    <h3 class="card-title mb-3">{{$item->name}}</h3>
                    <p class="card-text my-4">{{__('ui.descriptionRev')}}: {{$item->description}}</p>
                    <p class="card-text my-5">{{__('ui.priceShow')}} : {{$item->price}} €</p>
                    <a href="{{route('categoryShow',['category'=>$item->category])}}" class="my-2 border-top pt-2 border-light card-link shadow btn btn-primary">{{__('ui.categoryShow')}} : {{$item->category->name}}</a>
                    <p class="card-footer">{{__('ui.publishedonRev')}} {{$item->created_at->format('d/m/Y')}} -  {{$item->user->name ??''}}</p>
                    
                </div>
            </div>
        </div>
    </x-layout>