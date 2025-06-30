<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check my all project</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="https://mcuqjnbaxkglvxulfmvz.supabase.co/storage/v1/object/public/image/{{ $project['image'] }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $project['title'] }}</h4>
                                <p>{{ $project['language']}}</p>
                                <a href="{{ route('portfolio.details', ['id' => $project['project_id']]) }}" title="More Details" class="details-link">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

</section><!-- /Portfolio Section -->
