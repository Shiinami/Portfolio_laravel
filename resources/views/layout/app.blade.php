<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home | Deva Syaiful</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/borgar.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img position-relative">
            <img src="assets/img/profile.jpeg" alt="" class="img-fluid rounded-circle">
            @if (Auth::check())
                <form action="{{ route('logout') }}" method="POST"
                    style="position: absolute; top: 10px; left: 10px; z-index: 10;">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"></button>
                </form>
            @else
                <a href="{{ url('/login') }}" id="login-btn" class="btn btn-primary btn-sm position-absolute"
                    style="top: 10px; left: 10px; z-index: 10;"></a>
            @endif
        </div>

        <a href="{{ route('home') }}" class="logo d-flex align-items-center justify-content-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="assets/img/borgar.png" alt="">
            <h1 class="sitename">Deva Muhamad S.A</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://x.com/MrBoyMan4" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.instagram.com/mr.boyman28/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://github.com/Shiinami" class="github"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/deva-muhamad-30a9a7340/" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
                <li><a href="#testimonials"><i class="bi bi-chat-left-text navicon"></i> My Friends</a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/hero.jpeg" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Deva Muhamad Syaiful Arifin</h2>
                <p>I'm <span class="typed"
                        data-typed-items="Graphic Designer, UI/UX Designer, Photographer"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>I don't know what to write here, but I'll try to make it sound good. So, i love to design something
                    like designing a UI or designing a logo. The example of that is the logo of this website.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="assets/img/profile2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>UI/UX Designer &amp; Graphic Designer.</h2>
                        <p class="fst-italic py-3">
                            I'am a college student from Institut Teknologi dan Kesehatan Rumah Sakit dr. Soepraoen. I'am
                            a UI/UX Designer and Graphic Designer. I love to design something that can be useful for
                            people. I <del>don't</del> have experience in creating UI/UX design, graphic design, and
                            video editing.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>05
                                            December 2004</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>In
                                            progress</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 8127 8084
                                            390</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Blitar,
                                            Indonesia</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>none</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>shinboyman28@gmail.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3">
                            “We're all like fireworks: we climb, we shine and always go our separate ways and become
                            further apart. But even if that time comes, let’s not disappear like a firework and continue
                            to shine… forever.”<br>
                            - Bleach
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Year</strong> <span>as a college student</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>+ Assignment</strong> <span>submitted</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="13" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>+ Story game</strong> <span>cleared</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>+ Friends</strong> <span>in life</span></p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <p>Some list of my skills, and this will continue to grow</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>HTML</span> <i class="val">40%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>CSS</span> <i class="val">35%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>JavaScript</span> <i class="val">10%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>Figma</span> <i class="val">35%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Canva</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Photoshop</span> <i class="val">15%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <p>I'am skilled at making design with Figma and Canva. I also have knowledge of HTML, CSS, and
                    JavaScript.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Sumary</h3>

                        <div class="resume-item pb-0">
                            <h4>Brandon Johnson</h4>
                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing
                                    and developing user-centered digital/print marketing material from initial concept
                                    to final, polished deliverable.</em></p>
                            <ul>
                                <li>Portland par 127,Orlando, FL</li>
                                <li>(123) 456-7891</li>
                                <li>alice.barkley@example.com</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Master of Fine Arts &amp; Graphic Design</h4>
                            <h5>2015 - 2016</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero
                                voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                            <h5>2010 - 2014</h5>
                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel
                                ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae
                                consequatur neque etlon sader mart dila</p>
                        </div><!-- Edn Resume Item -->

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Senior graphic design specialist</h4>
                            <h5>2019 - Present</h5>
                            <p><em>Experion, New York, NY </em></p>
                            <ul>
                                <li>Lead in the design, development, and implementation of the graphic, layout, and
                                    production communication materials</li>
                                <li>Delegate tasks to the 7 members of the design team and provide counsel on all
                                    aspects of the project. </li>
                                <li>Supervise the assessment of all graphic materials in order to ensure quality and
                                    accuracy of the design</li>
                                <li>Oversee the efficient use of production project budgets ranging from $2,000 -
                                    $25,000</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>Graphic design specialist</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                            <ul>
                                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations,
                                    and advertisements).</li>
                                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                <li>Created 4+ design presentations and proposals a month for clients and account
                                    managers</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio, Services, Friends, ProfileApi Section -->
        <section id="dynamic-content">
            <section id="portfolio" class="portfolio section light-background">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div><!-- End Section Title -->

                <!-- Notifikasi Sukses/Hapus -->
                @if (session('success'))
                    <div class="container">
                        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mt-3"
                            role="alert" style="font-size:1.1rem;">
                            <i class="bi bi-check-circle-fill me-2"></i>
                            <div>{{ session('success') }}</div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                @if (session('error'))
                    <div class="container">
                        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mt-3"
                            role="alert" style="font-size:1.1rem;">
                            <i class="bi bi-x-circle-fill me-2"></i>
                            <div>{{ session('error') }}</div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @auth
                    <div id="admin-controls" class="mb-4">
                        <button onclick="openModal('add')" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Add
                            Portfolio</button>
                    </div>
                @endauth

                <div class="container">

                    <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                        data-sort="original-order">

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
                                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid"
                                            alt="">
                                        <div class="portfolio-info d-flex flex-column justify-content-between">
                                            <div>
                                                <h4>{{ $item->title }}</h4>
                                                <p>{{ $item->description }}</p>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 mt-2">
                                                <a href="{{ asset('storage/' . $item->image) }}" title="App 1"
                                                    data-gallery="portfolio-gallery-app"
                                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                                @auth
                                                    <button type="button" class="btn btn-warning btn-sm" title="Edit"
                                                        onclick="editItem({{ $item->id }}, '{{ $item->title }}', '{{ $item->description }}', '{{ $item->image }}', '{{ $item->category }}')">
                                                        <i class="bi bi-pencil-square"></i> Edit
                                                    </button>
                                                    <form action="{{ route('item.destroy', ['item' => $item->id]) }}"
                                                        method="POST" class="d-inline delete-form"
                                                        id="delete-form-{{ $item->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            title="Delete"
                                                            onclick="showDeleteModal({{ $item->id }}, '{{ $item->title }}')">
                                                            <i class="bi bi-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                @endauth
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Portfolio Item -->
                            @endforeach




                        </div><!-- End Portfolio Container -->

                    </div>

                </div>

            </section><!-- /Portfolio Section -->

            @auth
                <div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-title"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title w-100" id="modal-title">Add/Edit</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    onclick="closeModal()"></button>
                            </div>
                            <form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="item-id">
                                    <div class="mb-3">
                                        <label for="item-title" class="form-label">Title</label>
                                        <input type="text" name="title" placeholder="Title" required
                                            id="item-title" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="item-description" class="form-label">Description</label>
                                        <input type="text" name="description" placeholder="Description" required
                                            id="item-description" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="item-image" class="form-label">Image</label>
                                        <input type="file" name="image" placeholder="Image" id="item-image"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="item-category" class="form-label">Category</label>
                                        <select name="category" id="item-category" class="form-select">
                                            <option value="app">App</option>
                                            <option value="product">Product</option>
                                            <option value="branding">Branding</option>
                                            <option value="books">Books</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        onclick="closeModal()">Cancel</button>
                                    <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i>
                                        Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endauth


            <!-- Modal Konfirmasi Delete -->
            @auth
                <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title w-100" id="deleteConfirmLabel"><i
                                        class="bi bi-exclamation-triangle-fill me-2"></i>Konfirmasi Hapus</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <p class="mb-2" id="deleteConfirmText">Apakah Anda yakin ingin menghapus item ini?</p>
                                <div class="text-danger"><small>Data yang dihapus tidak dapat dikembalikan.</small></div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-danger" id="deleteConfirmBtn"><i
                                        class="bi bi-trash"></i> Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth

            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Lorem
                                        Ipsum</a></h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident</p>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Dolor
                                        Sitema</a></h4>
                                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat tarad limino ata</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Sed ut
                                        perspiciatis</a></h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Magni
                                        Dolores</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Nemo
                                        Enim</a></h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Eiusmod
                                        Tempor</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam
                                    libero tempore, cum soluta nobis est eligendi</p>
                            </div>
                        </div><!-- End Service Item -->

                    </div>

                </div>

            </section>


            <!-- /Services Section -->
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
                                        <span>{{ $profile['bio'] ?? '-' }}</span>
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                    <a onclick="openProfileModal()" onmouseover="this.style.cursor='pointer'"><img
                                            src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                            alt=""></a>
                                    <a onclick="openProfileModal()" onmouseover="this.style.cursor='pointer'">
                                        <h3>{{ $profile['name'] ?? '-' }}</h3>
                                    </a>
                                    <a onclick="openProfileModal()" onmouseover="this.style.cursor='pointer'">
                                        <h4">{{ $profile['degree'] ?? '-' }}</h4>
                                    </a>
                                </div>
                            </div><!-- End testimonial item -->



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
                <div id="profileModal" class="modal-overlay">
                    <div class="modal-box">
                        <span class="modal-close" onclick="closeProfileModal()">&times;</span>

                        <div class="modal-header">
                            <img src="{{ $profile['pic'] ?? 'assets/img/profile.jpeg' }}" class="profile-img-modal"
                                alt="Foto Profil">
                            <div class="modal-title">
                                <h2>{{ $profile['name'] ?? '-' }}</h2>
                                <p class="bio-text">{{ $profile['bio'] ?? '-' }}</p>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="info-grid">
                                <p><strong>Birthday:</strong> {{ $profile['birth_date'] ?? '-' }}</p>
                                <p><strong>Age:</strong> {{ $profile['age'] ?? '-' }}</p>
                                <p><strong>Website:</strong> {{ $profile['website'] ?? '-' }}</p>
                                <p><strong>Phone:</strong> {{ $profile['phone'] ?? '-' }}</p>
                                <p><strong>Email:</strong> {{ $profile['email'] ?? '-' }}</p>
                                <p><strong>City:</strong> {{ $profile['address'] ?? '-' }}</p>
                                <p><strong>Degree:</strong> {{ $profile['degree'] ?? '-' }}</p>
                                <p><strong>Freelance:</strong> {{ $profile['freelance'] ?? '-' }}</p>
                            </div>

                            <h3>Portfolio Teman</h3>
                            <div class="portfolio-list">
                                @forelse ($friendPortfolios as $item)
                                    <div class="portfolio-card">
                                        <img src="{{ $item['image'] ?? '' }}" alt="Image">
                                        <div class="portfolio-info">
                                            <h4>{{ $item['title'] ?? '-' }}</h4>
                                            <p>{{ $item['description'] ?? '-' }}</p>
                                            <span class="badge">{{ $item['category'] ?? '-' }}</span>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-muted">Belum ada portofolio dari teman.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /Friends Section -->



            <!-- Contact Section -->
            <section id="contact" class="contact section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-5">

                            <div class="info-wrap">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h3>Address</h3>
                                        <p>A108 Adam Street, New York, NY 535022</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Call Us</h3>
                                        <p>+1 5589 55488 55</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                                    frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <form action="forms/contact.php" method="post" class="php-email-form"
                                data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <label for="name-field" class="pb-2">Your Name</label>
                                        <input type="text" name="name" id="name-field" class="form-control"
                                            required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email-field" class="pb-2">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="subject-field" class="pb-2">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject-field"
                                            required="">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="message-field" class="pb-2">Message</label>
                                        <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>

            </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights
                        Reserved</span></p>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        function openProfileModal() {
            document.getElementById('profileModal').style.display = 'block';
        }

        function closeProfileModal() {
            document.getElementById('profileModal').style.display = 'none';
        }

        window.onclick = function(e) {
            const modal = document.getElementById('profileModal');
            if (e.target === modal) modal.style.display = 'none';
        }
    </script>



    <script>
        function openModal(mode) {
            var modal = document.getElementById('modal-form');
            if (modal) {
                if (window.bootstrap && bootstrap.Modal) {
                    var bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                    bsModal.show();
                } else {
                    modal.style.display = 'block';
                }
                if (mode === 'add') {
                    document.getElementById('modal-title').innerText = 'Add Portfolio';
                    document.getElementById('item-id').value = '';
                    document.getElementById('item-title').value = '';
                    document.getElementById('item-description').value = '';
                    document.getElementById('item-image').value = '';
                    document.getElementById('item-category').selectedIndex = 0;
                }
            }
        }

        function editItem(id, title, description, image, category) {
            var modal = document.getElementById('modal-form');
            if (modal) {
                document.getElementById('modal-title').innerText = 'Edit Portfolio';
                document.getElementById('item-id').value = id;
                document.getElementById('item-title').value = title;
                document.getElementById('item-description').value = description;
                // File input tidak bisa di-set value karena alasan keamanan, jadi biarkan kosong
                document.getElementById('item-image').value = '';
                var select = document.getElementById('item-category');
                if (select) {
                    for (var i = 0; i < select.options.length; i++) {
                        if (select.options[i].value === category) {
                            select.selectedIndex = i;
                            break;
                        }
                    }
                }
                if (window.bootstrap && bootstrap.Modal) {
                    var bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                    bsModal.show();
                } else {
                    modal.style.display = 'block';
                }
            }
        }

        function closeModal() {
            var modal = document.getElementById('modal-form');
            if (modal) {
                if (window.bootstrap && bootstrap.Modal) {
                    var bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                    bsModal.hide();
                } else {
                    modal.style.display = 'none';
                }
            }
        }
        let deleteFormId = null;

        function showDeleteModal(itemId, itemTitle) {
            deleteFormId = 'delete-form-' + itemId;
            document.getElementById('deleteConfirmText').innerHTML = `Yakin ingin menghapus <b>"${itemTitle}"</b>?`;
            if (window.bootstrap && bootstrap.Modal) {
                var modal = document.getElementById('deleteConfirmModal');
                var bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                bsModal.show();
            } else {
                document.getElementById('deleteConfirmModal').style.display = 'block';
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            var btn = document.getElementById('deleteConfirmBtn');
            if (btn) {
                btn.onclick = function() {
                    if (deleteFormId) {
                        document.getElementById(deleteFormId).submit();
                    }
                }
            }
        });
    </script>
    <style>
        /* Tambahan style untuk tombol dan modal agar lebih selaras dan modern */
        #admin-controls button {
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .card-controls .btn {
            min-width: 80px;
        }

        .modal-content {
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            border-radius: 12px;
            border: none;
        }

        .modal-header,
        .modal-footer {
            border: none;
        }

        .modal-title {
            font-weight: 600;
            color: #333;
        }

        .portfolio .portfolio-content .portfolio-info {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 10px;
        }

        .portfolio .portfolio-content .portfolio-info .btn,
        .portfolio .portfolio-content .portfolio-info form {
            z-index: 10;
        }
    </style>

</body>

</html>
