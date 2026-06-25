<?php
// Ezyfusion Group - Integrated Multi-Business Corporate Website Data Container
$company_name = "Ezyfusion Group (EFG) Sdn. Bhd.";
$current_year = date('Y');

// Property Portfolio & Machinery Fleet Data Model
$stats = [
    'total_property' => '180+ Rooms', 
    'co2_lasers'     => '12 Units',    
    'diode_lasers'   => '18 Units',    
    'saas'           => '2'       
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?> | Corporate Website</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #111625; /* Premium Dark Slate Blue */
            --secondary-color: #b8924b; /* Deep Antique Gold */
            --accent-color: #9c7533; /* Darker Bronze Accent for deep states */
            --dark-color: #0b0e17;
            --light-color: #fcfbf7; /* Warm White Surface Background */
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--primary-color);
            background-color: #ffffff;
            overflow-x: hidden;
            perspective: 1000px;
        }

        /* Justify Text Utility for Corporate Profile */
        .text-justify {
            text-align: justify;
        }

        /* Override Bootstrap Primary Color to Match Corporate Form Background */
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        /* Modern Animated Link Hover Effects for Navigation */
        .navbar-nav .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: var(--secondary-color);
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform: translateX(-50%);
        }
        .navbar-nav .nav-link:hover::after {
            width: 80%;
        }
        
        /* Hero Cover Module Configuration */
        .bg-gradient-hero {
            position: relative;
            background-image: url('bg.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 160px 0;
            overflow: hidden;
            border-bottom: 4px solid var(--secondary-color);
        }
        
        .bg-gradient-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(11, 14, 23, 0.94) 0%, rgba(27, 34, 54, 0.88) 100%);
            z-index: 1;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        @keyframes softPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.04); }
            100% { transform: scale(1); }
        }
        .hero-pulse-logo {
            max-width: 280px;
            height: auto;
            opacity: 1 !important;
            animation: softPulse 4s ease-in-out infinite;
        }
        
        .section-padding {
            padding: 95px 0;
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 40px;
            font-weight: 700;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .section-title::after {
            content: '';
            position: absolute;
            display: block;
            width: 60px;
            height: 3px;
            background: var(--secondary-color);
            bottom: 0;
            left: 0;
        }
        .section-title.center::after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        /* Premium Core Sectors Grid Structure */
        .sector-sketch-row {
            margin-bottom: 24px;
        }
        .sector-sketch-card {
            background: #ffffff;
            border: 1px solid rgba(17, 22, 37, 0.1);
            border-radius: 6px;
            padding: 24px 24px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(11, 14, 23, 0.12);
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .sector-sketch-card:hover {
            border-color: var(--secondary-color);
            box-shadow: 0 12px 30px rgba(184, 146, 75, 0.25);
            transform: translateY(-3px);
        }
        .sector-sketch-card .pillar-icon {
            font-size: 1.6rem;
            color: var(--secondary-color);
            margin-bottom: 12px;
            width: 45px;
            height: 45px;
            background: rgba(184, 146, 75, 0.08);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .sector-sketch-card h4 {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.15rem;
            margin-bottom: 8px;
        }
        .sector-sketch-card p {
            font-size: 0.9rem;
            color: #444a57;
            line-height: 1.5;
            margin-bottom: 0;
        }
        
        .sector-sketch-image-frame {
            border: 1px solid rgba(17, 22, 37, 0.1);
            border-radius: 6px;
            overflow: hidden;
            height: 100%;
            min-height: 240px;
            background-color: #f7f9fa;
            box-shadow: 0 8px 24px rgba(11, 14, 23, 0.12);
            position: relative;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .sector-sketch-image-frame:hover .sector-sketch-img {
            transform: scale(1.03);
        }
        
        /* Balanced middle layout for image splits */
        .sector-sketch-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            position: absolute;
            top: 0;
            left: 0;
            transition: transform 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        
        /* Unified Corporate Brand Ecosystem Styling */
        .product-box {
            border: 1px solid rgba(184, 146, 75, 0.2);
            background-color: white;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-top: 4px solid var(--secondary-color) !important;
        }
        .product-box:hover {
            border-color: var(--secondary-color);
            box-shadow: 0 20px 35px rgba(184, 146, 75, 0.15);
            transform: translateY(-10px);
        }
        .brand-icon-wrapper {
            color: var(--secondary-color);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        /* Interactive Counter Boxes with Safe Dynamic Padding */
        .stat-box {
            background: white;
            padding: 24px 16px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            text-align: center;
            border-top: 4px solid var(--secondary-color);
            transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
            cursor: pointer;
            position: relative;
            height: 145px; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        
        /* Inner Flex Wrapper Container */
        .stat-display-wrapper {
            position: relative;
            width: 100%;
            height: 55px; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Structural Vector Icon Properties */
        .stat-icon {
            font-size: 2.8rem; 
            color: var(--secondary-color) !important;
            transition: all 0.3s ease;
            position: absolute;
            opacity: 1;
            transform: scale(1);
        }

        /* Custom Graphic Machine Image Icon Assets Styling */
        .stat-img-icon {
            height: 48px; 
            width: auto;
            object-fit: contain;
            transition: all 0.3s ease;
            position: absolute;
            opacity: 1;
            transform: scale(1);
        }

        /* Specialized Override Class to elevate vertical icon weight balance */
        .stat-img-icon.icon-large {
            height: 58px; 
        }

        /* Numerical Text Layout Layer */
        .stat-number {
            font-size: 1.65rem; 
            font-weight: 700;
            line-height: 1.2;
            color: var(--secondary-color) !important;
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
            position: absolute;
            opacity: 0;
            transform: scale(0.7);
            width: 100%;
            text-align: center;
            white-space: normal; 
        }
        
        /* Bottom Informational Segment Labels */
        .stat-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: #6c757d;
            margin-top: 12px;
            transition: color 0.3s ease;
            width: 100%;
        }

        /* Dynamic Micro-Interactivity States */
        .stat-box:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(184, 146, 75, 0.22);
            border-top-color: var(--accent-color);
        }
        
        .stat-box:hover .stat-icon,
        .stat-box:hover .stat-img-icon {
            opacity: 0;
            transform: scale(0.5);
        }

        .stat-box:hover .stat-number {
            opacity: 1;
            transform: scale(1);
        }

        .stat-box:hover .stat-label {
            color: var(--primary-color);
        }
        
        .text-gold {
            color: var(--secondary-color) !important;
        }
        
        /* Global Harmonized Button Styling */
        .btn-gold {
            background-color: var(--secondary-color);
            color: #ffffff !important;
            border: 2px solid var(--secondary-color);
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .btn-gold:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(156, 117, 51, 0.3);
        }
        .btn-outline-gold {
            border: 2px solid var(--secondary-color);
            color: var(--secondary-color);
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .btn-outline-gold:hover {
            background-color: var(--secondary-color);
            color: #ffffff !important;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(184, 146, 75, 0.3);
        }
        
        /* Plain Inline Branding Attributes */
        .brand-badge-gold {
            color: #555c6d;
            font-weight: 600;
            padding: 10px 0;
            font-size: 0.95rem;
            display: inline-block;
            width: 100%;
            text-align: center;
            border: none;
            background: none;
        }
        
        /* Clean Single-Row Footer Properties */
        .footer {
            background-color: var(--dark-color);
            color: #a0a5b5;
            padding: 30px 0;
            border-top: 2px solid rgba(184, 146, 75, 0.2);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase d-flex align-items-center" href="#" style="color: var(--primary-color);">
                <img src="logo.png" alt="Ezyfusion Group Logo" style="height: 38px; width: auto;" class="me-2">
                Ezyfusion Group
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold">
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sectors">Business Sectors</a></li>
                    <li class="nav-item"><a class="nav-link" href="#brands">Brands</a></li>
                    <li class="nav-item"><a class="nav-link justify-content-center btn btn-gold px-4 ms-lg-3 mt-2 mt-lg-0" href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-gradient-hero d-flex align-items-center">
        <div class="container hero-content text-center text-lg-start">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="zoom-out-right" data-aos-duration="1200" data-aos-easing="ease-out-back">
                    <h1 class="display-4 fw-bold mb-3 text-white">Building Real Solutions Across <span class="text-gold">Everyday Needs</span></h1>
                    <p class="lead mb-4 text-white-50">
                        <strong>Ezyfusion Group (EFG)</strong> is a growing multi-business company focused on what matters — comfortable living, creative production, and practical technology that solves real problems.
                    </p>
                    <div class="d-grid d-sm-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="#sectors" class="btn btn-gold btn-lg px-4">Our Business Sectors</a>
                        <a href="#brands" class="btn btn-outline-gold btn-lg px-4">Explore Brands</a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center" data-aos="zoom-in-left" data-aos-duration="1400" data-aos-easing="ease-out-back">
                    <img src="logo.png" alt="Ezyfusion Group Core Logo" class="hero-pulse-logo">
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="section-padding" style="background-color: var(--light-color);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-quad">
                    <h2 class="section-title">Corporate Profile</h2>
                    
                    <p class="lead text-muted text-justify">
                        Incorporate in March 2025, Ezyfusion Group Sdn. Bhd. is a growing company that operates through a few connected business areas, focusing on practical and sustainable solutions.
                    </p>

                    <p class="text-justify">
                        We are involved in property management, manufacturing, and technology solutions. Each of these areas is designed to support and improve our overall operations as a group.
                    </p>

                    <p class="text-justify">
                        In property management, we manage rental rooms, houses, and homestay units, with a focus on providing well-maintained and comfortable living spaces.
                    </p>

                    <p class="text-justify">
                        In manufacturing, we produce custom-made items such as laser-cut and engraved products for both personal and business use.
                    </p>

                    <p class="text-justify">
                        We also build internal systems to help improve our daily operations and efficiency, with plans to gradually move towards SaaS-based solutions and digital growth in the future.
                    </p>

                    <p class="text-justify">
                        Overall, Ezyfusion Group aims to build a reliable and well-connected business ecosystem that focuses on real, practical solutions.
                    </p>

                    <p class="fw-bold text-primary mt-4"><i class="fa-solid fa-map-location-dot me-2 text-gold"></i> Core Operational Hubs: Melaka & Selangor</p>
                </div>
                
                <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0" data-aos="flip-up" data-aos-duration="1200">
                    <div class="card border-0 bg-white p-4 rounded-4 shadow-sm" style="border: 1px solid rgba(184, 146, 75, 0.2) !important;">
                        <h4 class="fw-bold mb-4 text-center text-primary">Our Operations</h4>
                        <div class="row g-3">
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                                <div class="stat-box">
                                    <div class="stat-display-wrapper">
                                        <i class="fa-solid fa-building-user stat-icon"></i>
                                        <div class="stat-number"><?php echo $stats['total_property']; ?></div>
                                    </div>
                                    <div class="stat-label">EzyHome Portfolio</div>
                                </div>
                            </div>
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                                <div class="stat-box">
                                    <div class="stat-display-wrapper">
                                        <img src="cut1.png" alt="CO2 Laser Cutter Icon" class="stat-img-icon">
                                        <div class="stat-number"><?php echo $stats['co2_lasers']; ?></div>
                                    </div>
                                    <div class="stat-label">CO₂ Laser Cutters</div>
                                </div>
                            </div>
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800">
                                <div class="stat-box">
                                    <div class="stat-display-wrapper">
                                        <img src="engrave1.png" alt="Diode Engraver Icon" class="stat-img-icon icon-large">
                                        <div class="stat-number"><?php echo $stats['diode_lasers']; ?></div>
                                    </div>
                                    <div class="stat-label">Diode Laser Engravers</div>
                                </div>
                            </div>
                            <div class="col-6" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800">
                                <div class="stat-box">
                                    <div class="stat-display-wrapper">
                                        <i class="fa-solid fa-cloud-arrow-up stat-icon"></i>
                                        <div class="stat-number"><?php echo $stats['saas']; ?></div>
                                    </div>
                                    <div class="stat-label">SaaS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sectors" class="section-padding">
        <div class="container">
            <div class="text-center max-width-700 mx-auto" data-aos="fade-up" data-aos-duration="800">
                <h2 class="section-title center">Our Core Sectors</h2>
                <p class="text-muted mb-5">We operate across multiple areas including property, manufacturing, and technology solutions.</p>
            </div>

            <div class="row g-3 align-items-stretch sector-sketch-row">
                <div class="col-lg-4" data-aos="fade-right" data-aos-duration="900">
                    <div class="sector-sketch-card">
                        <div class="pillar-icon"><i class="fa-solid fa-city"></i></div>
                        <h4>Property Management</h4>
                        <p>We manage a growing rental ecosystem under EzyHome, covering over 180 rooms, 8 houses, and 7 homestay units. Our focus is to provide clean, well-maintained, and comfortable spaces for tenants.</p>
                        <div class="pt-2 mt-2 border-top small text-muted" style="font-size: 0.8rem;">
                            <div class="mb-1"><i class="fa-solid fa-check text-gold me-2"></i>Structured Tenancy Setup</div>
                            <div><i class="fa-solid fa-check text-gold me-2"></i>EzyHome Management</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left" data-aos-duration="900">
                    <div class="sector-sketch-image-frame">
                        <img src="ezyhome.jpg" alt="Property Management" class="sector-sketch-img" onerror="this.src='image_71de24.jpg'">
                    </div>
                </div>
            </div>

            <div class="row g-3 align-items-stretch sector-sketch-row flex-lg-row-reverse">
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="900">
                    <div class="sector-sketch-card">
                        <div class="pillar-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h4>Supply Chain</h4>
                        <p>We support our operations through internal coordination of supply, logistics, and materials, ensuring smooth movement across all business activities.</p>
                        <div class="pt-2 mt-2 border-top small text-muted" style="font-size: 0.8rem;">
                            <div class="mb-1"><i class="fa-solid fa-check text-gold me-2"></i>High-Velocity Distribution</div>
                            <div><i class="fa-solid fa-check text-gold me-2"></i>Logistical Operational Ease</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-right" data-aos-duration="900">
                    <div class="sector-sketch-image-frame">
                        <img src="supply_showcase.jpg" alt="Supply Chain" class="sector-sketch-img" onerror="this.src='https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=1200&auto=format&fit=crop'">
                    </div>
                </div>
            </div>

            <div class="row g-3 align-items-stretch sector-sketch-row">
                <div class="col-lg-4" data-aos="fade-right" data-aos-duration="900">
                    <div class="sector-sketch-card">
                        <div class="pillar-icon"><i class="fa-solid fa-scissors"></i></div>
                        <h4>Creative Manufacturing</h4>
                        <p>Through our brand <strong>Craftoria</strong>, we produce custom laser-cut and engraved products. We deploy high-capacity CO₂ and Diode fleet machinery to handle both retail and high-volume corporate requests.</p>
                        <div class="pt-2 mt-2 border-top small text-muted" style="font-size: 0.8rem;">
                            <div class="mb-1"><i class="fa-solid fa-check text-gold me-2"></i>High-Precision Custom Laser</div>
                            <div><i class="fa-solid fa-check text-gold me-2"></i>Corporate &amp; Retail Fulfilment</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left" data-aos-duration="900">
                    <div class="sector-sketch-image-frame">
                        <img src="manufacturing.jpeg" alt="Creative Manufacturing Workshop" class="sector-sketch-img" onerror="this.src='https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1200&auto=format&fit=crop'">
                    </div>
                </div>
            </div>

            <div class="row g-3 align-items-stretch sector-sketch-row flex-lg-row-reverse">
                <div class="col-lg-4" data-aos="fade-left" data-aos-duration="900">
                    <div class="sector-sketch-card">
                        <div class="pillar-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <h4>Systems &amp; Innovation</h4>
                        <p>We build specialized internal cloud systems to manage properties, billing records, and production operations. These platforms power our digital transformation into active scalable software models.</p>
                        <div class="pt-2 mt-2 border-top small text-muted" style="font-size: 0.8rem;">
                            <div class="mb-1"><i class="fa-solid fa-check text-gold me-2"></i>Automated Invoicing Flow</div>
                            <div><i class="fa-solid fa-check text-gold me-2"></i>PropTech SaaS Infrastructure</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-right" data-aos-duration="900">
                    <div class="sector-sketch-image-frame">
                        <img src="SaaS.jpg" alt="Systems &amp; Innovation" class="sector-sketch-img" style="object-fit: cover; object-position: center;" onerror="this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop'">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="brands" class="section-padding" style="background-color: var(--light-color);">
        <div class="container">
            <h2 class="section-title center text-center" data-aos="fade-up" data-aos-duration="800">Our Brands</h2>
            <p class="text-muted text-center mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">The brands that power our business.</p>
            
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4" data-aos="zoom-inner-in" data-aos-delay="100" data-aos-duration="1100" data-aos-easing="ease-out-back">
                    <div class="product-box p-4 rounded-3 text-center d-flex flex-column h-100">
                        <div class="brand-icon-wrapper"><i class="fa-solid fa-house-chimney-window"></i></div>
                        <h5 class="fw-bold">EzyHome</h5>
                        <p class="small text-muted mb-4 flex-grow-1">
                            EzyHome manages our rental ecosystem, including rooms, houses, and homestays. We focus on making renting simple, organized, and comfortable for tenants.
                        </p>
                        <div class="brand-badge-gold text-uppercase tracking-wider" style="letter-spacing: 0.5px;"><i class="fa-solid fa-shield-halved me-1 text-gold"></i> Managed Real Estate</div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="zoom-in-up" data-aos-delay="300" data-aos-duration="1100" data-aos-easing="ease-out-back">
                    <div class="product-box p-4 rounded-3 text-center d-flex flex-column h-100">
                        <div class="brand-icon-wrapper"><i class="fa-solid fa-sliders"></i></div>
                        <h5 class="fw-bold">TenancyPilot</h5>
                        <p class="small text-muted mb-4 flex-grow-1">
                            An internal system we use to manage rental operations — including payments, tenant records, and maintenance requests — all in one place.
                        </p>
                        <a href="https://tenancypilot.com/login" target="_blank" class="btn btn-gold w-100 py-2"><i class="fa-solid fa-right-to-bracket me-1"></i> Manage Your Rental</a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4" data-aos="zoom-inner-in" data-aos-delay="500" data-aos-duration="1100" data-aos-easing="ease-out-back">
                    <div class="product-box p-4 rounded-3 text-center d-flex flex-column h-100">
                        <div class="brand-icon-wrapper"><i class="fa-solid fa-scissors"></i></div>
                        <h5 class="fw-bold">Craftoria</h5>
                        <p class="small text-muted mb-4 flex-grow-1">
                            Craftoria is our creative brand offering custom laser-cut and engraved products, available online through our Shopee store.
                        </p>
                        <a href="https://shopee.com.my/craftoria.my" target="_blank" class="btn btn-gold w-100 py-2"><i class="fa-solid fa-bag-shopping me-1"></i> Visit Shopee Store</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section-padding" style="background-color: var(--primary-color); border-top: 3px solid var(--secondary-color);">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 text-center text-lg-start">
                    <h2 class="fw-bold text-white mb-3">Get In Touch</h2>
                    <p class="text-white-50">
                        Have a question, business proposal, or collaboration idea?<br>We're here to help.
                    </p>
                </div>
                <div class="col-lg-6" data-aos="rotate-in" data-aos-delay="200" data-aos-duration="1200" style="overflow:visible;">
                    <div class="card p-4 text-dark text-start shadow-lg border-0 rounded-3">
                        <h4 class="fw-bold text-primary mb-3">Corporate & Public Inquiry Desk</h4>
                        
                        <div id="form-alert-container"></div>

                        <form id="ezyfusion-contact-form">
                            <input type="hidden" name="access_key" value="9ff82200-b729-47c0-ada6-182f24c84c97">
                            <input type="hidden" name="subject" value="New Inquiry from Ezyfusion Website">
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

                            <div class="mb-3">
                                <label class="form-label small fw-bold">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="your@email.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Area of Interest</label>
                                <select name="interest" class="form-select" required>
                                    <option value="Property Management">Property Management</option>
                                    <option value="Creative Manufacturing">Creative Manufacturing</option>
                                    <option value="Systems & Innovation">Systems &amp; Innovation</option>
                                    <option value="Supply Chain & Ventures">Supply Chain &amp; Ventures</option>
                                    <option value="Jobs & Internship">Jobs &amp; Internship</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label small fw-bold">Message</label>
                                <textarea name="message" class="form-control" rows="3" placeholder="Tell us how we can help..." required></textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="consent" class="form-check-input" id="consentCheck" required>
                                <label class="form-check-label small text-muted" for="consentCheck">I agree to be contacted regarding my inquiry.</label>
                            </div>
                            <button type="submit" id="submit-btn" class="btn btn-gold w-100 fw-bold py-2 shadow">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container text-center">
            <span class="small">&copy; <?php echo $current_year; ?> <span class="text-gold"><?php echo $company_name; ?></span>. All Rights Reserved.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inject Custom Premium Complex Keyframes Extensions
        const style = document.createElement('style');
        style.innerHTML = `
            [data-aos="zoom-inner-in"] {
                transform: scale(0.4) translateY(-100px) rotate(-10deg);
                opacity: 0;
                transition-property: transform, opacity;
            }
            [data-aos="zoom-inner-in"].aos-animate {
                transform: scale(1) translateY(0) rotate(0deg);
                opacity: 1;
            }
            [data-aos="rotate-in"] {
                transform: rotateX(45deg) rotateY(30deg) translateY(60px) scale(0.8);
                opacity: 0;
                transition-property: transform, opacity;
            }
            [data-aos="rotate-in"].aos-animate {
                transform: rotateX(0) rotateY(0) translateY(0) scale(1);
                opacity: 1;
            }
        `;
        document.head.appendChild(style);

        // Initialize Animate On Scroll (AOS Library Engine)
        AOS.init({
            duration: 1000,
            once: false
        });

        // --- WEB3FORMS AJAX JAVASCRIPT ENGINE ---
        const form = document.getElementById('ezyfusion-contact-form');
        const alertContainer = document.getElementById('form-alert-container');
        const submitBtn = document.getElementById('submit-btn');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i>Sending...';
            alertContainer.innerHTML = '';

            const formData = new FormData(form);
            const object = Object.fromEntries(formData);
            const json = JSON.stringify(object);

            fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            })
            .then(async (response) => {
                let res = await response.json();
                if (response.status == 200) {
                    alertContainer.innerHTML = `
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <i class="fa-solid fa-circle-check me-2"></i> <strong>Thank you!</strong> Your submission has been successfully routed to Ezyfusion Group Central Administration.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `;
                    form.reset();
                } else {
                    alertContainer.innerHTML = `
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            <i class="fa-solid fa-circle-exclamation me-2"></i> ${res.message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `;
                }
            })
            .catch(error => {
                alertContainer.innerHTML = `
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <i class="fa-solid fa-wifi me-2"></i> Something went wrong. Please check your network connection and try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `;
            })
            .then(() => {
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Send Message';
            });
        });
    </script>
</body>
</html>
