<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Professional Portfolio Website">
        <meta name="author" content="TemplateMo">

        <title>Portfolio {{ $profile->name ?? 'Siti Ahsanu Nadiyya Rizal' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('front/css/templatemo-first-portfolio-style.css') }}" rel="stylesheet">
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>

        <nav class="navbar navbar-expand-lg py-2">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="#" class="navbar-brand mx-auto mx-lg-0 fw-semibold fs-5">Welcome</a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 m-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll fw-semibold fs-6" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll fw-semibold fs-6" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll fw-semibold fs-6" href="#section_3">Project</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll fw-semibold fs-6" href="#section_4">Contact</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <div class="hero-text">
                                <div class="hero-title-wrap d-flex align-items-center mb-4">
                                    <img src="{{ $profile && $profile->profile_photo ? asset('storage/' . $profile->profile_photo) : asset('front/images/photo_profile.jpeg') }}" 
                                         class="avatar-image avatar-image-large img-fluid" 
                                         alt="{{ $profile->name ?? 'Profile' }}">
                                    <h1 class="hero-title ms-3 mb-0">Welcome my friends</h1>
                                </div>

                                <h2 class="mb-4">{{ $profile->hero_title ?? 'Selamat datang di web portfolio Saya' }}</h2>
                                <p class="mb-4">
                                    <a class="custom-btn btn custom-link" href="#section_2">
                                        {{ $profile->hero_description ?? 'Pada web ini, Saya akan menjelaskan secara singkat tentang projek akhir' }}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
            </section>

            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{ $profile && $profile->about_image ? asset('storage/' . $profile->about_image) : asset('front/images/bg1.jpg') }}"
                                 class="about-image img-fluid"
                                 alt="Working Environment"
                                 style="aspect-ratio: 1/1; object-fit: cover; width: 100%; border-radius: 20px;">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">

                                <div class="section-title-wrap d-flex justify-content-start align-items-center mb-4">
                                    <img src="{{ $profile && $profile->profile_photo ? asset('storage/' . $profile->profile_photo) : asset('front/images/photo_profile.jpeg') }}" 
                                         class="avatar-image img-fluid me-4" 
                                         alt="{{ $profile->name ?? 'Avatar' }}">
                                    <h2 class="text-white mb-0">My Story</h2>
                                </div>

                                <h3 class="pt-2 mb-1">A little bit about Me</h3>

                                <p class="mb-1">
                                    {{ $profile->about_story ?? 'Hi! Nama Saya Siti Ahsanu Nadiyya Rizal, biasa dipanggil Nadiyya. Seorang pengembang web yang bersemangat banget!!' }}
                                </p>
                                
                                <p class="text-left text-muted small mb-1">(Kalo menu Pengalaman gak muncul, berarti harus di input dulu di bagian admin yang skill)</p>
                                <h5 class="mt-4 mb-3 text-primary">Pengalaman:</h5>

                                <div class="row text-white mb-3">
                                    <div class="col-6">
                                        <ul>
                                            @foreach($frontendSkills as $skill)
                                                <li>{{ $skill->nama }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="col-6">
                                        <ul>
                                            @foreach($backendSkills as $skill)
                                                <li>{{ $skill->nama }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="profile-thumb">
                                <div class="profile-title">
                                    <h4 class="mb-0">Information</h4>
                                </div>

                                <div class="profile-body">
                                    <p><span class="profile-small-title">Name</span> <span>{{ $profile->name ?? 'Siti Ahsanu Nadiyya Rizal' }}</span></p>
                                    <p><span class="profile-small-title">Phone</span> <span><a href="tel:{{ $profile->phone ?? '' }}">{{ $profile->phone ?? '0812-3456-7890' }}</a></span></p>
                                    <p><span class="profile-small-title">Github</span> <span><a href="{{ $profile->github ?? '#' }}" target="_blank">{{ $profile->github ?? 'github.com/AyyidanRizz' }}</a></span></p>
                                    <p><span class="profile-small-title">Email</span> <span><a href="mailto:{{ $profile->email ?? '' }}">{{ $profile->email ?? 'siti.ahsanu.nadiyya.rizal@student.esaunggul.ac.id' }}</a></span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="about-thumb">
                                <div class="row">
                                    <div class="col-lg-6 col-6 featured-border-bottom py-2">
                                        <strong class="featured-numbers">{{ $profile->experience_years ?? 0 }}</strong>
                                        <p class="featured-text">Years of Experiences</p>
                                    </div>
                                    <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                                        <strong class="featured-numbers">{{ $profile->happy_customers ?? 0 }}</strong>
                                        <p class="featured-text">Happy Customers</p>
                                    </div>
                                    <div class="col-lg-6 col-6 pt-4">
                                        <strong class="featured-numbers">{{ $profile->projects_finished ?? 0 }}</strong>
                                        <p class="featured-text">Project Finished</p>
                                    </div>
                                    <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                                        <strong class="featured-numbers">{{ $profile->digital_awards ?? 0 }}</strong>
                                        <p class="featured-text">Digital Awards</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="projects section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-md-8 col-12 ms-auto me-auto">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                                <img src="{{ asset('front/images/white-desk-work-study-aesthetics.jpg') }}" class="avatar-image img-fluid" alt="Project Header">
                                <h2 class="text-white ms-4 mb-0">Projects</h2>
                            </div>
    
                            <p class="text-center text-muted mb-1">
                                {{ $profile->project_description ?? 'Dibawah ini adalah project yang saya kerjakan untuk project akhir mata kuliah Pemrogrmaan Web' }}
                            </p>
    
                            <p class="text-center text-muted mb-3">(Kalo gak muncul, berarti harus di input dulu di bagian admin yang projects)</p>
                        </div>

                        <div class="clearfix"></div>

                        @foreach($projects as $project)
                        <div class="col-lg-12 col-md-6 col-12 mb-4">
                            <div class="projects-thumb p-4" style="min-height: 350px; border-radius:20px;">
                                <div class="projects-info">
                                    <p class="fw-bold fs-5 text-info">Project</p>

                                    <h3 class="projects-title mt-4 text-dark">
                                        {{ $project->judul }}
                                    </h3>

                                    <p class="fw-bold fs-5 text-dark">
                                        <strong class="text-info">Deskripsi:</strong><br>
                                        {{ $project->deskripsi }}
                                    </p>

                                    <p class="fw-bold fs-5 text-dark">
                                        <strong class="text-info">Analisis:</strong><br>
                                        {{ $project->analisis }}
                                    </p>
                                    
                                    <p class="fw-bold fs-5 text-dark">
                                        <strong class="text-info">Kebutuhan Sistem:</strong><br>
                                        {{ $project->kebutuhan_sistem }}
                                    </p>

                                    <p class="fw-bold fs-5 text-dark">
                                        <strong class="text-info">Tech Stack:</strong><br>
                                        {{ $project->tech_stack }}
                                    </p>

                                    <div class="text-left mt-5">
                                        <p class="fw-bold fs-5 text-dark">
                                            <strong class="text-info">Diagram ERD:</strong><br>
                                        </p>
                                        <div class="mt-3">
                                            @if($project->erd_path)
                                                <img src="{{ asset('storage/' . $project->erd_path) }}"
                                                     class="img-fluid rounded shadow"
                                                     alt="Diagram Project {{ $project->judul }}"
                                                     style="max-width: 900px; width:100%; border-radius:20px;">
                                            @else
                                                <img src="{{ asset('front/images/ERD_sementara.png') }}"
                                                     class="img-fluid rounded shadow"
                                                     alt="Diagram Sementara"
                                                     style="max-width: 900px; width:30%; border-radius:20px;">
                                            @endif
                                        </div>
                                        <strong class="text-dark d-block mt-2">
                                            {{ $project->erd_path ? 'Diagram ERD' : 'ERD Sementara' }}
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>

            <section class="contact section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-8 col-12">
                            <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                                <img src="{{ asset('front/images/aerial-view-man-using-computer-laptop-wooden-table.jpg') }}" class="avatar-image img-fluid" alt="Contact Us">
                                <h2 class="text-white ms-4 mb-0">Get In Touch</h2>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                            <div class="contact-info contact-info-border-start d-flex flex-column">
                                <strong class="site-footer-title d-block mb-3">Stay connected</strong>
                                <ul class="social-icon">
                                    <li class="social-icon-item"><a href="{{ $profile->github ?? '#' }}" target="_blank" class="social-icon-link bi-instagram"></a></li>
                                    <li class="social-icon-item"><a href="#" class="social-icon-link bi-youtube"></a></li>
                                </ul>

                                <strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>
                                <p class="mb-0">Belajar bersama-sama membuat website sendiri</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                            <div class="contact-info d-flex flex-column">
                                <strong class="site-footer-title d-block mb-3">Github</strong>
                                <p><a href="{{ $profile->github ?? '#' }}" target="_blank">My Github</a></p>

                                <strong class="site-footer-title d-block mb-3">Email</strong>
                                <p><a href="mailto:{{ $profile->email ?? '' }}">{{ $profile->email ? 'My Email' : 'Email Belum Diatur' }}</a></p>

                                <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>
                                <p class="mb-0"><a href="tel:{{ $profile->phone ?? '' }}">{{ $profile->phone ? 'My Phone' : 'Belum Diatur' }}</a></p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <form action="#" method="POST" class="custom-form contact-form" role="form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                            <label for="name">Name</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12"> 
                                        <div class="form-floating">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
                                            <label for="email">Email address</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12 mt-3">
                                        <label class="text-white mb-2">Select Services Needed:</label>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-check form-check-inline">
                                            <input name="services[]" type="checkbox" class="form-check-input" id="inlineCheckbox1" value="Website">
                                            <label class="form-check-label" for="inlineCheckbox1">
                                                <span class="form-check-label-text">Websites</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-check form-check-inline">
                                            <input name="services[]" type="checkbox" class="form-check-input" id="inlineCheckbox2" value="Branding">
                                            <label class="form-check-label" for="inlineCheckbox2">
                                                <span class="form-check-label-text">Branding</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-check form-check-inline">
                                            <input name="services[]" type="checkbox" class="form-check-input" id="inlineCheckbox3" value="Ecommerce">
                                            <label class="form-check-label" for="inlineCheckbox3">
                                                <span class="form-check-label-text">Ecommerce</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-check form-check-inline">
                                            <input name="services[]" type="checkbox" class="form-check-input" id="inlineCheckbox4" value="SEO">
                                            <label class="form-check-label" for="inlineCheckbox4">
                                                <span class="form-check-label-text">SEO</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12 mt-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project" required></textarea>
                                            <label for="message">Tell me about the project</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-12 ms-auto mt-3">
                                        <button type="submit" class="form-control btn btn-primary">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="copyright-text-wrap">
                            <p class="mb-0">
                                <span class="copyright-text">Copyright © 2026 <a href="#">{{ $profile->name ?? 'Portfolio' }}</a>. All rights reserved.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('front/js/jquery.min.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('front/js/click-scroll.js') }}"></script>
        <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('front/js/magnific-popup-options.js') }}"></script>
        <script src="{{ asset('front/js/custom.js') }}"></script>

    </body>
</html>