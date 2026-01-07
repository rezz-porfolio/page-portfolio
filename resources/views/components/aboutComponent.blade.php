<section class="about section">
    <div class="container" data-aos="fade-up">
        <div class="row gx-0">
            <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h3>Who me?</h3>
                    <h2>Fachriza</h2>
                    @foreach ($texts as $text)
                        <p>{{ $text['about'] }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>