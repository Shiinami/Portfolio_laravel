@extends('layout.app')

    @section('portfolio')
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->
      @auth
          <div id="admin-controls">
            <button onclick="openModal('add')">Add Portfolio</button>
          </div>
      @endauth

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($items as $item)


            <div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $item->category }}">
                <div class="portfolio-content h-100">
                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $item->title }}</h4>
                        <p>{{ $item->description }}</p>
                        <a href="{{ asset('storage/' . $item->image) }}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                </div>
                @auth
                    <div class="card-controls">
                        <button onclick="editItem({{ $item->id }}, '{{ $item->title }}', '{{ $item->description }}', '{{ $item->image }}', '{{ $item->category }}')">Edit</button>
                        <form action="{{ route('item.destroy', ['item' => $item->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                @endauth
            </div><!-- End Portfolio Item -->

            @endforeach




          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    @auth
        <div class="modal" id="modal-form">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h3 id="modal-title">Add/Edit</h3>
                <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="item-id">
                    <input type="text" name="title" placeholder="Title" required id="item-title">
                    <input type="text" name="description" placeholder="Description" required id="item-description">
                    <input type="file" name="image" placeholder="Image" required id="item-image">
                    <select name="category">
                        <option value="app">App</option>
                        <option value="product">Product</option>
                        <option value="branding">Branding</option>
                        <option value="books">Books</option>
                    </select>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    @endauth

    @endsection

    @section('services')
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>


    @endsection

    @section('friendsApi')
<section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>My Friends and their projects</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>{{ $profile['bio'] }}</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>{{ $profile['name'] }}</h3>
                <h4>{{ $profile['degree'] }}</h4>
              </div>
            </div><!-- End testimonial item -->



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
@endsection

@section('profileApi')
    <div class="container">
        <h1>Profile</h1>
        <div class="card mb-4">
            <div class="card-body">
                <p class="card-text">{{ $profile['bio'] ?? '-' }}</p>
                <h5 class="card-title">{{ $profile['name'] ?? '-' }}</h5>
                <p class="card-text"><strong>Birt Date:</strong> {{ $profile['birth_date'] ?? '-' }}</p>
                <p class="card-text"><strong>Age:</strong> {{ $profile['age'] ?? '-' }}</p>
                <p class="card-text"><strong>Website:</strong> {{ $profile['website'] ?? '-' }}</p>
                <p class="card-text"><strong>Degree:</strong> {{ $profile['degree'] ?? '-' }}</p>
                <p class="card-text"><strong>Phone:</strong> {{ $profile['phone'] ?? '-' }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $profile['email'] ?? '-' }}</p>
                <p class="card-text"><strong>Location:</strong> {{ $profile['address'] ?? '-' }}</p>
                <p class="card-text"><strong>Freelance:</strong> {{ $profile['freelance'] ?? '-' }}</p>
            </div>
        </div>

        <h2>Portfolio Teman</h2>
        <div class="row">
            @forelse($friendPortfolios as $portfolio)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        @if(isset($portfolio['image']))
                            <img src="{{ $portfolio['image'] }}" class="card-img-top" alt="Portfolio Image" style="object-fit:cover;max-height:200px;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $portfolio['title'] ?? '-' }}</h5>
                            <p class="card-text">{{ $portfolio['description'] ?? '-' }}</p>
                            <p class="card-text"><strong>Kategori:</strong> {{ $portfolio['category'] ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">Belum ada portfolio dari API teman.</p>
            @endforelse
        </div>
    </div>
@endsection
