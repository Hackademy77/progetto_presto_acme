<div class="container vh-100 w-75 my-5">
    <div class="row border h-50 rounded">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-around align-items-center">
            <h1>Lorem Prestum</h1>

            {{-- <form class="d-flex" action="{{ route('item.search') }}" role="search" method="GET">
                <input class="form-control me-2" name="chiave" type="search" placeholder="Cerca Articolo..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cerca</button>
            </form> --}}
        </div>

        <div class="col-12 col-md-6 d-flex justify-content-center">
            <img src="https://picsum.photos/200/200" class="img-fluid rounded-circle p-4" alt="">
        </div>
    </div>

    <div class="container headerCustom">
        <div class="row my-4">
            <div class="col-12 col-md-6 d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3>Motori</h3>
                    <a href="{{ route('categoryShow', ['category' => 1]) }}"><i class="fa-solid fa-car fa-xl" style="color: #000000;"></i></a>
                </div>
    
                <div class="d-flex flex-column align-items-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3>Abbigliamento</h3>
                    <a href="{{ route('categoryShow', ['category' => 2]) }}"><i class="fa-sharp fa-solid fa-xl fa-shirt" style="color: #000000;"></i></a>
                </div>
            </div>
    
            <div class="col-12 col-md-6 d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3>Arredamento</h3>
                    <a href="{{ route('categoryShow', ['category' => 3]) }}"><i class="fa-solid fa-couch" style="color: #000000;"></i></a>
                </div>
    
                <div class="d-flex flex-column align-items-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3>Tecnologia</h3>
                    <a href="{{ route('categoryShow', ['category' => 4]) }}"><i class="fa-solid fa-xl fa-laptop" style="color: #000000;"></i></a>
                </div>
            </div>
        </div>
        
        <div class="row my-4">
            <div class="col-12 col-md-6 d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3>Musica</h3>
                    <a href="{{ route('categoryShow', ['category' => 5]) }}"><i class="fa-solid fa-xl fa-music" style="color: #000000;"></i></a>
                </div>
    
                <div class="d-flex flex-column align-items-center" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3>Attrezzatura</h3>
                    <a href="{{ route('categoryShow', ['category' => 6]) }}"><i class="fa-solid fa-xl fa-toolbox" style="color: #000000;"></i></a>
                </div>
            </div>
    
            <div class="col-12 col-md-6 d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3>Sport</h3>
                    <a href="{{ route('categoryShow', ['category' => 7]) }}"><i class="fa-solid fa-futbol fa-xl" style="color: #000000;"></i></a>
                </div>
    
                <div class="d-flex flex-column align-items-center" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h3>Film</h3>
                    <a href="{{ route('categoryShow', ['category' => 8]) }}"><i class="fa-solid fa-clapperboard fa-xl" style="color: #000000;"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>