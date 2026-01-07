@if (!$project)
    <div class="container py-5 text-center">
        <h3>Project not found.</h3>
    </div>
@else
    <!-- Page Title -->
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Portfolio Details</h1>
                        <p class="mb-0">
                            {{ $project['title'] ?? 'No Title' }} - {{ $project['language'] ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="current text-primary">Portfolio Details</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper init-swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="https://mcuqjnbaxkglvxulfmvz.supabase.co/storage/v1/object/public/image/{{ $project['image'] }}"
                                    alt="{{ $project['title'] }}">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $project['type'] ?? '-' }}</li>
                            <li><strong>Status</strong>: {{ $project['status'] ?? '-' }}</li>
                            <li><strong>Tech</strong>: {{ $project['language'] ?? '-' }}</li>
                            <li><strong>Project URL</strong>:
                                <a href="{{ $project['link'] }}" target="_blank">{{ $project['title'] }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                        <h2>{{ $project['title'] }}</h2>
                        <p>
                            {{ $project['description'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Portfolio Details Section -->
@endif