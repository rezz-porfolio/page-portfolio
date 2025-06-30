{{-- Hero --}}
<section id="hero" class="hero section">
    <div class="container">
        <div class="row gy-4">
            @foreach ($texts as $text)
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">{{ $text['title'] }}</h1>
                    <p data-aos="fade-up" data-aos-delay="100">{{ $text['subtitle'] }}</p>
                </div>
            @endforeach
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{ asset('img/rezz.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>
{{-- End Hero --}}