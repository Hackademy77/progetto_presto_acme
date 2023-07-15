<div class="container vh-100 w-75 my-5">
    <header class="container header-custom rounded d-flex flex-column justify-content-center">
        <section>
            <article class="row w-100 align-items-center justify-content-center">
                <section class="col-12 col-md-6 h-75 d-flex flex-column align-items-center">
                    <div class="d-flex justify-content-center align-items-center h-50" data-aos="fade-right" data-aos-duration="2000" data-aos-easing="ease-in-sine">
                        <h1>Benvenuti su</h1>
                    </div> 
                </section>
                <section class="col-12 col-md-6 h-100 d-flex justify-content-center">
                    <div class="d-flex justify-content-center align-items-center" data-aos="fade-left" data-aos-duration="2000" data-aos-easing="ease-in-sine">
                        <img class="img-fluid" width="50%" src="/storage/img/Presto-Logo.png" alt="">
                    </div>
                </section>
            </article>
        </section>
        <section class="d-flex justify-content-center align-items-center h-25">
            <article>
                <button class="button-82-pushable" role="button">
                    <span class="button-82-shadow"></span>
                    <span class="button-82-edge"></span>
                    <span class="button-82-front text">
                        <a class="link-custom" href="{{route('item.index')}}">Esplora</a>
                    </span>
                </button>
            </article>
        </section>
    </header>

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