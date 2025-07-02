<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Portofolio | Nabila Camelia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/itsk.png" rel="icon">
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
            <img src="assets/img/amelhima.png" alt="" class="img-fluid rounded-circle">
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

            <h1 class="sitename">Nabila Camelia</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://www.instagram.com/nabilbilamel?igsh=MXN0cmtpOWNwanV1cw==" class="instagram"><i
                    class="bi bi-instagram"></i></a>
            <a href="https://github.com/nabilacamelia" class="github"><i class="bi bi-github"></i></a>
            <a href="https://www.linkedin.com/in/nabila-camelia-a83925331?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                class="linkedin"><i class="bi bi-linkedin"></i></a>
            </i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#skills"><i class="bi bi-person navicon"></i> Skill</a></li>
                <li><a href="#Experience"><i class="bi bi-file-earmark-text navicon"></i> Experience</a></li>
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

            <img src="assets/img/amelbali.jpg" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
              <h2>Nabila Camelia</h2>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>Sebagai bentuk perkenalan lebih lanjut, berikut adalah informasi singkat mengenai diri saya:.</p>
            </div><!-- End Section Title -->
            

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                @auth

                    <div class="biodata-controls" style="margin-bottom: 20px;">
                        @if (!$biodata)
                            <button class="open-profile-btn" onclick="openBiodataModal('add')">Tambah Biodata</button>
                        @else
                            <button class="open-profile-btn" onclick="openBiodataModal('edit')">Edit Biodata</button>

                            <form method="POST" action="{{ route('biodata.destroy', $biodata->id) }}"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="open-profile-btn" style="background-color: #b02a37;">
                                    Hapus Biodata
                                </button>
                            </form>
                        @endif
                    </div>
                @endauth

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ $biodata && $biodata->pic ? asset('storage/' . $biodata->pic) : asset('assets/img/profile.jpeg') }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>NABILA CAMELIA</h2>
                        <p class="py-3">
                            {{ $biodata->bio ?? '' }}</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{ $biodata->birth_date ?? '' }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>{{ $biodata->website ?? '' }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                        <span>{{ $biodata->phone ?? '' }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{ $biodata->address ?? '' }}</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{ $biodata->age ?? '' }}</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>{{ $biodata->degree ?? '' }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ $biodata->email ?? '' }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>{{ $biodata->freelance ?? '' }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="signature mt-4">
                                <div class="signature-image">
                                    <img src="{{ asset('assets/img/ttd amel.jpg') }}" alt="Signature"
                                        class="img-fluid">
                                </div>
                                <div class="signature-info">
                                    <h4>{{ $biodata->name ?? '' }}</h4>
                                    <p>Student, Indonesia</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        @auth

            <div id="biodataModal" class="modal-overlay">
                <div class="modal-box">
                    <span class="modal-close" onclick="closeBiodataModal()">&times;</span>

                    <h2 id="modalBiodataTitle">Tambah/Edit Biodata</h2>

                    <form id="biodata-form" method="POST"
                        action="{{ $biodata ? route('biodata.update', $biodata->id) : route('biodata.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @if ($biodata)
                            @method('PATCH') {{-- Gunakan PATCH agar konsisten --}}
                        @endif

                        <div class="modal-body">
                            <label>Foto:</label>
                            <input type="file" name="pic" class="form-input"><br><br>

                            <label>Nama:</label>
                            <input type="text" name="name" value="{{ old('name', $biodata->name ?? '') }}"
                                class="form-input">

                            <label>Bio:</label>
                            <textarea name="bio" rows="3" class="form-input">{{ old('bio', $biodata->bio ?? '') }}</textarea>

                            <label>Birth Date:</label>
                            <input type="date" name="birth_date"
                                value="{{ old('birth_date', $biodata->birth_date ?? '') }}" class="form-input">

                            <label>Age:</label>
                            <input type="number" name="age" value="{{ old('age', $biodata->age ?? '') }}"
                                class="form-input">

                            <label>Website:</label>
                            <input type="text" name="website" value="{{ old('website', $biodata->website ?? '') }}"
                                class="form-input">

                            <label>Degree:</label>
                            <input type="text" name="degree" value="{{ old('degree', $biodata->degree ?? '') }}"
                                class="form-input">

                            <label>Phone:</label>
                            <input type="text" name="phone" value="{{ old('phone', $biodata->phone ?? '') }}"
                                class="form-input">

                            <label>Email:</label>
                            <input type="email" name="email" value="{{ old('email', $biodata->email ?? '') }}"
                                class="form-input">

                            <label>Address:</label>
                            <input type="text" name="address" value="{{ old('address', $biodata->address ?? '') }}"
                                class="form-input">

                            <label>Freelance:</label>
                            <input type="text" name="freelance"
                                value="{{ old('freelance', $biodata->freelance ?? '') }}" class="form-input">

                            <br><button type="submit" class="open-profile-btn" style="width: 100%; margin-top: 15px;">💾
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        @endauth

        <!-- Stats Section -->


        </div>

        </div>

        </section><!-- /Stats Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <p>Saya percaya bahwa belajar adalah proses tanpa akhir. Inilah skill yang telah saya pelajari dan terus
                    saya asah untuk tumbuh sebagai talenta digital yang siap bersaing.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>HTML</span> <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>CSS</span> <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="progress">
                            <span class="skill"><span>Wordpress</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><span>Figma</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
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
                            <span class="skill"><span>Photoshop</span> <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div><!-- End Skills Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="Experience" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Experience</h2>
                <p>Melalui halaman ini, Saya akan membagikan berbagai pengalaman saya.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">English Club</h3>

                        <div class="resume-item pb-0">
                            <li>Telling Story</li>
                            <li>Hafalan Verb1, verb2, verb3 100 kata</li>
                            <li>Dan lain sebagainya</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <h3 class="resume-title">Delegasi Pertukaran Pemuda Asia Chapter Bali</h3>
                        <div class="resume-item pb-0">
                            <li>Mangrove Ecotourism and Research Project</li>
                            <li>Creative Economy and Market Research</li>
                            <li>Sea Turtle Conservation and Releases Project</li>
                            <li>outh Congress and Awards 2022</li>
                            <li>Rumah Kompos Innovative Organic Agriculture Project</li>
                            <li>Uluwatu Temple Excursion</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <h3 class="resume-title">Mengikuti Pelatihan IT SUPPORT GOOGLE COURSERA</h3>
                        <div class="resume-item pb-0">
                            <li>Dasar Dasar Dukungan Teknis</li>
                            <li>Seluk Beluk Jaringan Komputer</li>
                            <li>Sistem Operasi</li>
                            <li>Administrasi Sistem dan Layanan Infrastruktur TI</li>
                            <li>Keamanan IT</li>
                            </ul>
                        </div><!-- Edn Resume Item -->
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Student Employee LPPM ITSK Soepraoen</h3>
                        <div class="resume-item">
                            <ul>
                                <li>Pengurusan Hak Cipta Karya Ilmiah dan Produk Institusi</li>
                                <li>Dukungan Akreditasi Program Studi</li>
                                <li>Pendukung Penelitian dan Pengabdian Dosen</li>
                                <li>Teknis Pelaksanaan Kegiatan, Membantu menyiapkan acara seminar, pelatihan,
                                    sosialisasi, atau workshop LPPM, Mengelola registrasi peserta, konsumsi, absensi,
                                    dan sertifikat, Membantu publikasi kegiatan (poster, website, dsb).</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="resume-title">Guru Les Privat, Mandiri / Freelance</h3>
                            <div class="resume-item">
                                <ul>
                                    <li>Memberikan bimbingan belajar kepada siswa tingkat SD</li>
                                    <li>Menyesuaikan metode pengajaran dengan gaya belajar masing-masing siswa untuk
                                        meningkatkan pemahaman dan hasil belajar</li>
                                    <li>Meningkatkan kemampuan komunikasi, manajemen waktu, dan kesabaran dalam
                                        menghadapi berbagai karakter siswa</li>
                                    <li>Menjadi role model dalam kedisiplinan dan semangat belajar.</li>
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
                    <p>Selama perjalanan saya sebagai mahasiswa Informatika, saya telah mengerjakan berbagai proyek dari
                        tugas kuliah hingga freelance. Portofolio ini berisi hasil nyata dari pembelajaran dan
                        pengembangan diri saya di bidang teknologi.</p>
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
                            <li data-filter=".filter-certificate">Certificate</li>
                            <li data-filter=".filter-books">Books</li>
                        </ul><!-- End Portfolio Filters -->

                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach ($items as $item)
                                <div
                                    class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $item->category }}">
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
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#portfolioModal-{{ $item->id }}"
                                                    title="More Details" class="details-link">
                                                    <i class="bi bi-link-45deg"></i>
                                                </a>
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
                <!-- Modal Tambah/Edit Portfolio -->
                <div class="modal fade" id="modal-form" tabindex="-1" aria-labelledby="modal-title"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title w-100" id="modal-title">Add/Edit Portfolio</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    onclick="closeModal()"></button>
                            </div>
                            <form id="portfolio-form" action="{{ route('item.store') }}" method="POST"
                                enctype="multipart/form-data">
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
                                        <input type="file" name="image" id="item-image" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="item-category" class="form-label">Category</label>
                                        <select name="category" id="item-category" class="form-select">
                                            <option value="app">App</option>
                                            <option value="product">Product</option>
                                            <option value="certificate">Certificate</option>
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

                <!-- Galeri Portofolio -->
                <!-- <div class="container mt-5">
                    <h3 class="mb-4">Portofolio Anda</h3>
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-md-3 mb-4">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="img-fluid rounded shadow-sm" style="cursor: pointer;"
                                    onclick="showItemDetail(`{{ asset('storage/' . $item->image) }}`, `{{ $item->title }}`, `{{ $item->description }}`, `{{ $item->category }}`)">
                            </div>
                        @endforeach
                    </div>
                </div> -->

                <!-- Modal Deskripsi Detail -->
                <div class="modal fade" id="modal-desc" tabindex="-1" aria-labelledby="modal-desc-label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Detail Portofolio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <img id="desc-image" src="" class="img-fluid rounded mb-3"
                                    style="max-height: 300px;" alt="Gambar">
                                <h4 id="desc-title"></h4>
                                <p id="desc-description" class="text-muted"></p>
                                <span class="badge bg-primary" id="desc-category"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Script Modal Interaksi -->
                <script>
                    function showItemDetail(imageUrl, title, description, category) {
                        document.getElementById('desc-image').src = imageUrl;
                        document.getElementById('desc-title').innerText = title;
                        document.getElementById('desc-description').innerText = description;
                        document.getElementById('desc-category').innerText = category;

                        const modal = new bootstrap.Modal(document.getElementById('modal-desc'));
                        modal.show();
                    }

                    function closeModal() {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('modal-form'));
                        if (modal) modal.hide();
                    }
                </script>
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
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Desain
                                        Grafis & UI/UX</a></h4>
                                <p class="description">Mendesain tampilan website, aplikasi, dan konten visual
                                    menggunakan Canva atau Figma agar menarik, intuitif, dan sesuai tren UI/UX masa
                                    kini.</p>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Jaringan
                                        Komputer</a></h4>
                                <p class="description">Desain dan simulasi jaringan komputer menggunakan Cisco Packet
                                    Tracer. Termasuk konfigurasi routing, server, dan keamanan jaringan dasar. Cocok
                                    untuk simulasi perusahaan, kampus, atau rumah sakit.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Data Entry &
                                        Pengolahan Data</a></h4>
                                <p class="description">Mengolah dan membersihkan data menggunakan Excel, Google Sheets,
                                    atau tools sederhana lainnya. Cocok untuk admin data, penelitian, atau UMKM.</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html"
                                        class="stretched-link">WordPress</a></h4>
                                <p class="description">Mengoperasikan Wordpress LPPM Itsk Dr Soepraoen</p>
                            </div>
                        </div><!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                            <div>
                                <h4 class="title"><a href="service-details.html" class="stretched-link">Editing Foto
                                        & Desain Konten Sosial Media</a></h4>
                                <p class="description">Membuat dan mengedit konten visual seperti poster, feed
                                    Instagram, banner promosi, dan kebutuhan branding lainnya, menggunakan Canva,
                                    Photoshop, atau Figma.</p>
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
                    <p>Terima kasih telah mengunjungi portofolio saya. Jika Anda memiliki pertanyaan, segera hubungi
                        saya.</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-5">

                            <div class="info-wrap">
                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                                    <div>
                                        <h3>Address</h3>
                                        <p>Malang, Jawa Timur, Indonesia</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-telephone flex-shrink-0"></i>
                                    <div>
                                        <h3>Call Us</h3>
                                        <p>085815368296</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-envelope flex-shrink-0"></i>
                                    <div>
                                        <h3>Email</h3>
                                        <p>nabilacamelia50@gmail.com</p>
                                    </div>
                                </div><!-- End Info Item -->

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

    @foreach ($items as $item)
        <div class="modal fade" id="portfolioModal-{{ $item->id }}" tabindex="-1"
            aria-labelledby="portfolioModalLabel-{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="portfolioModalLabel-{{ $item->id }}">
                            {{ $item->title ?? '' }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section id="portfolio-details" class="portfolio-details section">
                            <div class="container">
                                <div class="row gy-4">
                                    <div class="col-lg-8">
                                        <div class="portfolio-details-slider swiper">
                                            <div class="swiper-wrapper align-items-center">
                                                <div class="swiper-slide">
                                                    <img src="{{ asset('storage/' . $item->image) }}"
                                                        alt="{{ $item->title }}" class="img-fluid"
                                                        style="max-height: 400px; object-fit: contain;">
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="portfolio-info">
                                            <h3>Project information</h3>
                                            <ul>
                                                <li><strong>Category</strong>: {{ $item->category }}</li>
                                            </ul>
                                        </div>
                                        <div class="portfolio-description">
                                            <h2>{{ $item->title }}</h2>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.swiper', {
                loop: true,
                speed: 600,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true,
                }
            });
        });
    </script>

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
            var form = document.getElementById('portfolio-form');
            if (modal && form) {
                if (window.bootstrap && bootstrap.Modal) {
                    var bsModal = bootstrap.Modal.getOrCreateInstance(modal);
                    bsModal.show();
                } else {
                    modal.style.display = 'block';
                }
                if (mode === 'add') {
                    document.getElementById('modal-title').innerText = 'Add Portfolio';
                    form.action = "{{ route('item.store') }}";
                    form.method = "POST";
                    document.getElementById('item-id').value = '';
                    document.getElementById('item-title').value = '';
                    document.getElementById('item-description').value = '';
                    document.getElementById('item-image').value = '';
                    document.getElementById('item-category').selectedIndex = 0;
                    // Remove _method if exists
                    let methodInput = document.querySelector('#portfolio-form input[name="_method"]');
                    if (methodInput) methodInput.remove();
                }
            }
        }

        function editItem(id, title, description, image, category) {
            var modal = document.getElementById('modal-form');
            var form = document.getElementById('portfolio-form');
            if (modal && form) {
                document.getElementById('modal-title').innerText = 'Edit Portfolio';
                form.action = "/portfolio/" + id;
                form.method = "POST";
                document.getElementById('item-id').value = id;
                document.getElementById('item-title').value = title;
                document.getElementById('item-description').value = description;
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
                // Tambahkan input _method PATCH untuk update
                let methodInput = document.querySelector('#portfolio-form input[name="_method"]');
                if (!methodInput) {
                    methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    form.appendChild(methodInput);
                }
                methodInput.value = 'PATCH';

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

    <script>
        function openBiodataModal(mode) {
            document.getElementById('biodataModal').style.display = 'block';
            document.getElementById('modalBiodataTitle').innerText = mode === 'edit' ? 'Edit Biodata' : 'Tambah Biodata';
        }

        function closeBiodataModal() {
            document.getElementById('biodataModal').style.display = 'none';
        }

        window.onclick = function(e) {
            const modal = document.getElementById('biodataModal');
            if (e.target === modal) modal.style.display = 'none';
        }
    </script>

</body>

</html>
