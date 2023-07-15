<div class="container position-relative">
    <header class="container header-custom rounded d-flex flex-column py-3 justify-content-center">
        <section>
            <article class="row w-100 align-items-center justify-content-center">
                <section class="col-12 col-md-6 h-75 d-flex flex-column align-items-center">
                    <div class="d-flex justify-content-center align-items-center h-50" data-aos="fade-right" data-aos-duration="2000" data-aos-easing="ease-in-sine">
                        <h1>Benvenuti su</h1>
                    </div> 
                </section>
                <section class="col-12 col-md-6 h-100 d-flex justify-content-center">
                    <div class="d-flex justify-content-center align-items-center" data-aos="fade-left" data-aos-duration="2000" data-aos-easing="ease-in-sine">
                        <img class="img-fluid" width="50%" src="./img/Presto-Logo.png" alt="">
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
    <div class="container">
        <div class="row text-center">
            <h2>Articoli più recenti</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center justify-content-evenly rounded categories-custom position-absolute categ-1">
                    <a href="{{ route('categoryShow', ['category' => 1]) }}"><i class="fa-solid fa-car fa-xl" style="color: #000000;"></i></a>
                    <h3>Motori</h3>
                </div>
    
                <div class="d-flex flex-column align-items-center justify-content-evenly rounded categories-custom categ-2">
                    <a href="{{ route('categoryShow', ['category' => 2]) }}"><i class="fa-sharp fa-solid fa-xl fa-shirt" style="color: #000000;"></i></a>
                    <h3>Abbigliamento</h3>
                </div>
            </div>
    
            <div class="col-12 col-md-6 d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center justify-content-evenly rounded categories-custom categ-3">
                    <a href="{{ route('categoryShow', ['category' => 3]) }}"><i class="fa-solid fa-couch" style="color: #000000;"></i></a>
                    <h3>Arredamento</h3>
                </div>
    
                <div class="d-flex flex-column align-items-center justify-content-evenly rounded categories-custom categ-4">
                    <a href="{{ route('categoryShow', ['category' => 4]) }}"><i class="fa-solid fa-xl fa-laptop" style="color: #000000;"></i></a>
                    <h3>Tecnologia</h3>
                </div>
            </div>
        </div>
        
        <div class="row my-4">
            <div class="col-12 col-md-6 d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center justify-content-evenly rounded categories-custom categ-5">
                    <h3>Musica</h3>
                    <a href="{{ route('categoryShow', ['category' => 5]) }}"><i class="fa-solid fa-xl fa-music" style="color: #000000;"></i></a>
                </div>
    
                <div class="d-flex flex-column align-items-center justify-content-evenly rounded categories-custom categ-6">
                    <h3>Attrezzatura</h3>
                    <a href="{{ route('categoryShow', ['category' => 6]) }}"><i class="fa-solid fa-xl fa-toolbox" style="color: #000000;"></i></a>
                </div>
            </div>
    
            <div class="col-12 col-md-6 d-flex justify-content-around">
                <div class="d-flex flex-column align-items-center justify-content-evenly rounded categories-custom categ-7">
                    <h3>Sport</h3>
                    <a href="{{ route('categoryShow', ['category' => 7]) }}"><i class="fa-solid fa-futbol fa-xl" style="color: #000000;"></i></a>
                </div>
    
                <div class="d-flex flex-column align-items-center justify-content-evenly rounded categories-custom categ-8">
                    <h3>Film</h3>
                    <a href="{{ route('categoryShow', ['category' => 8]) }}"><i class="fa-solid fa-clapperboard fa-xl" style="color: #000000;"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>