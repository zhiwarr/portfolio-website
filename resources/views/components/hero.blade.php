<section id="home-section" class="hero">
    <div class="home-slider  owl-carousel">
        @foreach ($heros as $hero)
        <div class="slider-item ">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                    data-scrollax-parent="true">
                    <div class="one-third js-fullheight circular order-md-last img"
                        style="background-image: url('{{ asset("".$hero->image_path) }}');">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex  align-items-center ftco-animate"
                        data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Hello!</span>
                            <h1 class="mb-4 mt-3">I'm <span>{{ $hero->title }}</span></h1>
                            <h2 class="mb-4">{{ $hero->subtitle }}</h2>
                            <p><a href="mailto:{{ $hero->cta_link }}" class="btn btn-primary py-3 px-4">{{
                                    $hero->cta_text
                                    }}</a> <a href="#projects" class="btn btn-white btn-outline-white py-3 px-4">My
                                    works</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>