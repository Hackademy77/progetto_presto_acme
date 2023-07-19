<div class="section-category my-2">
    <div class="container-card-category" id="categorie-annunci">
        <h1 class="text-center">Categorie Annunci</h1>
        <section class="hero-section">
            <div class="card-grid">
              <a class="card" href="{{ route('categoryShow', ['category' => 1]) }}">
                <div class="card__background" style="background-image: url(/storage/img/motori.jpg)"></div>
                <div class="card__content">
                  <p class="card__category">Categoria</p>
                  <h3 class="card__heading">Motori</h3>
                </div>
              </a>
              <a class="card" href="{{ route('categoryShow', ['category' => 2]) }}">
                <div class="card__background" style="background-image: url(/storage/img/abbigliamento.jpg)"></div>
                <div class="card__content">
                  <p class="card__category">Categoria</p>
                  <h3 class="card__heading">Abbigliamento</h3>
                </div>
              </a>
              <a class="card" href="{{ route('categoryShow', ['category' => 3]) }}">
                <div class="card__background" style="background-image: url(/storage/img/arredamento.jpg)"></div>
                <div class="card__content">
                  <p class="card__category">Categoria</p>
                  <h3 class="card__heading">Arredamento</h3>
                </div>
              </li>
              <a class="card" href="{{ route('categoryShow', ['category' => 4]) }}">
                <div class="card__background" style="background-image: url(/storage/img/tecnologia.jpg)"></div>
                <div class="card__content">
                  <p class="card__category">Categoria</p>
                  <h3 class="card__heading">Tecnologia</h3>
                </div>
            </a>
            <a class="card" href="{{ route('categoryShow', ['category' => 5]) }}">
              <div class="card__background" style="background-image: url(/storage/img/musica.jpeg)"></div>
              <div class="card__content">
                <p class="card__category">Categoria</p>
                <h3 class="card__heading">Musica</h3>
              </div>
            </li>
            </a>
            <a class="card" href="{{ route('categoryShow', ['category' => 6]) }}">
            <div class="card__background" style="background-image: url(/storage/img/attrezzatura.jpg)"></div>
            <div class="card__content">
              <p class="card__category">Categoria</p>
              <h3 class="card__heading">Attrezzatura</h3>
            </div>
            </a>
            <a class="card" href="{{ route('categoryShow', ['category' => 7]) }}">
            <div class="card__background" style="background-image: url(/storage/img/sport.jpg)"></div>
            <div class="card__content">
              <p class="card__category">Categoria</p>
              <h3 class="card__heading">Sport</h3>
            </div>
            </a>
            <a class="card" href="{{ route('categoryShow', ['category' => 8]) }}">
            <div class="card__background" style="background-image: url(/storage/img/film.jpg)"></div>
            <div class="card__content">
              <p class="card__category">Categoria</p>
              <h3 class="card__heading">Film</h3>
            </div>
            </a>
            <div>
        </section>
    </div>
</div>