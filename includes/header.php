<?php require_once __DIR__ . '/../config.php'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title>Website Development &amp; SEO in Meerut | Rank Grow Digital</title>

  <meta name="description"
    content="Rank Grow Digital offers website development, SEO, WordPress, custom PHP, Google Ads and digital marketing services in Meerut, Uttar Pradesh.">

  <meta name="keywords"
    content="website development in Meerut, SEO services in Meerut, digital marketing company in Meerut, WordPress development, custom PHP development">

  <meta name="author" content="Rank Grow Digital">
  <meta name="publisher" content="Rank Grow Digital">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="googlebot" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="language" content="English">
  <meta name="content-language" content="en">
  <meta name="theme-color" content="#FF7A00">
  <meta name="color-scheme" content="light">

  <!-- Canonical: Preferred WWW URL -->
  <link rel="canonical" href="https://www.rankgrowdigital.in/">


  <link rel="apple-touch-icon" sizes="180x180" href="assets/logos/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/logos/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/logos/favicon-16x16.png">
  <link rel="manifest" href="assets/logos/site.webmanifest">

  <!-- Performance: Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Open Graph / Facebook / WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_IN">
  <meta property="og:site_name" content="Rank Grow Digital">
  <meta property="og:title" content="Website Development &amp; SEO in Meerut | Rank Grow Digital">
  <meta property="og:description"
    content="Rank Grow Digital offers website development, SEO, WordPress, custom PHP, Google Ads and digital marketing services in Meerut, Uttar Pradesh.">
  <meta property="og:url" content="https://www.rankgrowdigital.in/">
  <meta property="og:image" content="https://www.rankgrowdigital.in/assets/logos/logo.png">
  <meta property="og:image:alt" content="Rank Grow Digital logo">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Website Development & SEO in Meerut | Rank Grow Digital">
  <meta name="twitter:description"
    content="Website development, SEO and digital marketing services in Meerut by Rank Grow Digital.">
  <meta name="twitter:image" content="https://www.rankgrowdigital.in/assets/logos/logo.png">

  <!-- Organization Schema -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "@id": "https://www.rankgrowdigital.in/#organization",
      "name": "Rank Grow Digital",
      "url": "https://www.rankgrowdigital.in/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.rankgrowdigital.in/assets/logos/logo.png"
      },
      "description": "Rank Grow Digital provides website development, WordPress, custom PHP, SEO, Google Ads, social media marketing and CRM software services in Meerut, Uttar Pradesh.",
      "telephone": "+91-9627515058",
      "email": "rankgrowdigital081@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "C586, Ved Vyas Puri, Phase 1",
        "addressLocality": "Meerut",
        "addressRegion": "Uttar Pradesh",
        "postalCode": "250002",
        "addressCountry": "IN"
      },
      "areaServed": {
        "@type": "City",
        "name": "Meerut"
      }
    }
    </script>

  <!-- Website Schema -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "@id": "https://www.rankgrowdigital.in/#website",
      "url": "https://www.rankgrowdigital.in/",
      "name": "Rank Grow Digital",
      "publisher": {
        "@id": "https://www.rankgrowdigital.in/#organization"
      },
      "inLanguage": "en-IN"
    }
    </script>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Existing Website CSS -->
  <style>
    :root {
      --brand-orange: #FF7A00;
      --brand-orange-hover: #E06800;
      --brand-skyblue: #0284C7;
      --brand-skyblue-hover: #0369A1;
      --brand-light-bg: #F8FAFC;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: var(--brand-light-bg);
      color: #0F172A;
      overflow-x: hidden;
    }

    /* Animated Gradient Underline */
    .nav-item-link {
      position: relative;
      display: inline-flex;
      align-items: center;
      padding: 0.5rem 0;
      transition: color 0.3s ease;
    }

    .nav-item-link::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0%;
      height: 2.5px;
      border-radius: 9999px;
      background: linear-gradient(90deg, #FF7A00, #0284C7);
      transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .nav-item-link:hover::after {
      width: 100%;
    }

    .nav-item-link.active {
      color: #0F172A;
      font-weight: 700;
    }

    .nav-item-link.active::after {
      width: 100%;
    }

    /* Mega Dropdown Box Shadow */
    .mega-menu-shadow {
      box-shadow: 0 20px 45px -10px rgba(15, 23, 42, 0.12),
        0 0 0 1px rgba(226, 232, 240, 0.8);
    }

    /* Header Scrolled Style */
    .header-scrolled {
      background-color: rgba(255, 255, 255, 0.96) !important;
      backdrop-filter: blur(12px);
      box-shadow: 0 8px 30px rgba(15, 23, 42, 0.06);
      border-bottom: 2px solid transparent;
      border-image: linear-gradient(90deg,
          rgba(2, 132, 199, 0.1),
          #FF7A00,
          #0284C7,
          rgba(255, 122, 0, 0.1)) 1;
    }

    /* Custom Scrollbar for Drawer */
    .drawer-scroll::-webkit-scrollbar {
      width: 4px;
    }

    .drawer-scroll::-webkit-scrollbar-thumb {
      background: #cbd5e1;
      border-radius: 9999px;
    }
  </style>
</head>

<body class="selection:bg-amber-100 selection:text-[#FF7A00]">

  <!-- ================= HEADER SECTION ================= -->
  <header
    class="fixed top-0 left-0 right-0 z-50 bg-white backdrop-blur-md border-b border-slate-100 transition-all duration-300"
    id="siteHeader">
    <div class="max-w-[1800px] mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between sm:h-20 h-[68px]">

        <!-- Brand Logo -->
        <!-- ================= BRAND LOGO (SEO & Speed Optimized) ================= -->
        <a href="/" title="Rank Grow Digital - IT & Web Agency"
          class="flex items-center group shrink-0 focus:outline-none">
          <img src="assets/logos/logo.png" alt="Rank Grow Digital - Website Designing & Software Development Agency"
            title="Rank Grow Digital - IT & Digital Solutions" width="320" height="64" loading="eager"
            fetchpriority="high" decoding="async"
            class="h-11 sm:h-13 md:h-[60px] w-auto max-w-[240px] sm:max-w-[300px] md:max-w-none object-contain transition-transform duration-300 group-hover:scale-[1.02]">
        </a>
        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-8">
          <a href="/" class="nav-item-link active text-[14px] font-bold text-slate-700 hover:text-slate-900">HOME</a>
          <a href="#about" class="nav-item-link text-[14px] font-bold text-slate-700 hover:text-slate-900">ABOUT US</a>

          <!-- Services Dropdown (Directly Under Button) -->
          <div class="relative group" id="servicesDropdownContainer">
            <button
              class="nav-item-link flex items-center gap-1.5 text-[14px] font-bold text-slate-700 group-hover:text-[#FF7A00] focus:outline-none py-2 cursor-pointer">
              <span>SERVICES</span>
              <i data-lucide="chevron-down"
                class="w-4 h-4 text-slate-400 group-hover:text-[#FF7A00] group-hover:rotate-180 transition-transform duration-200"></i>
            </button>

            <!-- Dropdown Menu Centered -->
            <div
              class="absolute top-full left-1/2 -translate-x-1/2 w-[720px] bg-white rounded-2xl mega-menu-shadow p-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible translate-y-3 group-hover:translate-y-1 transition-all duration-300 pointer-events-none group-hover:pointer-events-auto">

              <div
                class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-white rotate-45 border-t border-l border-slate-100">
              </div>

              <div class="flex items-center justify-between pb-3 mb-4 border-b border-slate-100">
                <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Our Complete Digital
                  Ecosystem</span>
                <span class="text-xs font-bold text-[#FF7A00] flex items-center gap-1">
                  12+ Core Services <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
                </span>
              </div>


              <!-- 12 Services Grid -->
              <div class="grid grid-cols-2 gap-x-6 gap-y-3">

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-sky-50 text-[#0284C7] flex items-center justify-center shrink-0 group-hover/item:bg-[#0284C7] group-hover/item:text-white transition-colors">
                    <i data-lucide="layout" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#0284C7] transition-colors leading-tight">Business
                      Website Development</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">Corporate Portals</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-orange-50 text-[#FF7A00] flex items-center justify-center shrink-0 group-hover/item:bg-[#FF7A00] group-hover/item:text-white transition-colors">
                    <i data-lucide="shopping-bag" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#FF7A00] transition-colors leading-tight">Ecommerce
                      Website Development</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">Custom Cart &amp; Gateways</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-sky-50 text-[#0284C7] flex items-center justify-center shrink-0 group-hover/item:bg-[#0284C7] group-hover/item:text-white transition-colors">
                    <i data-lucide="layers" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#0284C7] transition-colors leading-tight">WordPress
                      Development</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">Custom Themes &amp; Fast CMS</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-orange-50 text-[#FF7A00] flex items-center justify-center shrink-0 group-hover/item:bg-[#FF7A00] group-hover/item:text-white transition-colors">
                    <i data-lucide="store" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#FF7A00] transition-colors leading-tight">Shopify
                      Development</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">Custom Store Architecture</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-sky-50 text-[#0284C7] flex items-center justify-center shrink-0 group-hover/item:bg-[#0284C7] group-hover/item:text-white transition-colors">
                    <i data-lucide="code" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#0284C7] transition-colors leading-tight">PHP
                      Development</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">Custom CRM &amp; Web Apps</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-orange-50 text-[#FF7A00] flex items-center justify-center shrink-0 group-hover/item:bg-[#FF7A00] group-hover/item:text-white transition-colors">
                    <i data-lucide="trending-up" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#FF7A00] transition-colors leading-tight">AI
                      SEO &amp; Google Ranking</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">1st Page Guaranteed Organic</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-sky-50 text-[#0284C7] flex items-center justify-center shrink-0 group-hover/item:bg-[#0284C7] group-hover/item:text-white transition-colors">
                    <i data-lucide="gauge" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#0284C7] transition-colors leading-tight">Speed
                      &amp; SEO Audit</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">90+ Google Core Web Vitals</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-orange-50 text-[#FF7A00] flex items-center justify-center shrink-0 group-hover/item:bg-[#FF7A00] group-hover/item:text-white transition-colors">
                    <i data-lucide="target" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#FF7A00] transition-colors leading-tight">PPC
                      &amp; Google Ads</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">High Conversion Campaigns</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-sky-50 text-[#0284C7] flex items-center justify-center shrink-0 group-hover/item:bg-[#0284C7] group-hover/item:text-white transition-colors">
                    <i data-lucide="share-2" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#0284C7] transition-colors leading-tight">Social
                      Media Marketing</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">Brand Leads &amp; Engagement</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-orange-50 text-[#FF7A00] flex items-center justify-center shrink-0 group-hover/item:bg-[#FF7A00] group-hover/item:text-white transition-colors">
                    <i data-lucide="palette" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#FF7A00] transition-colors leading-tight">Graphic
                      &amp; Brand Design</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">Logos &amp; Social Creatives</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-sky-50 text-[#0284C7] flex items-center justify-center shrink-0 group-hover/item:bg-[#0284C7] group-hover/item:text-white transition-colors">
                    <i data-lucide="database" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#0284C7] transition-colors leading-tight">CRM
                      &amp; Custom Software</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">ERP &amp; Automated Billing</p>
                  </div>
                </a>

                <a href="#services"
                  class="flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-50 border border-transparent hover:border-slate-100 transition-all group/item">
                  <div
                    class="w-8 h-8 rounded-lg bg-orange-50 text-[#FF7A00] flex items-center justify-center shrink-0 group-hover/item:bg-[#FF7A00] group-hover/item:text-white transition-colors">
                    <i data-lucide="shield-check" class="w-4 h-4"></i>
                  </div>
                  <div>
                    <span
                      class="text-xs font-bold text-slate-900 group-hover/item:text-[#FF7A00] transition-colors leading-tight">Hosting
                      &amp; Web Security</span>
                    <p class="text-[11px] text-slate-500 mt-0.5">Cloud Hosting &amp; SSL Setup</p>
                  </div>
                </a>

              </div>

            </div>
          </div>

          <a href="#process" class="nav-item-link text-[14px] font-bold text-slate-700 hover:text-slate-900">PROCESS</a>
          <a href="#portfolio"
            class="nav-item-link text-[14px] font-bold text-slate-700 hover:text-slate-900">PORTFOLIO</a>
          <a href="#faq" class="nav-item-link text-[14px] font-bold text-slate-700 hover:text-slate-900">FAQ</a>
        </nav>

        <!-- ================= ATTENTION-SEEKING DUAL-COLOR GRADIENT BUTTON ================= -->
        <div class="hidden lg:flex items-center">
          <a href="#contact" title="Contact Rank Grow Digital Now"
            class="relative group inline-flex items-center gap-3 px-6 py-2.5 rounded-full text-xs uppercase font-extrabold tracking-wider text-white transition-all duration-300 hover:scale-105 shadow-md shadow-orange-500/20 hover:shadow-lg hover:shadow-sky-500/30 overflow-hidden bg-gradient-to-r from-[#FF7A00] via-[#ea580c] to-[#0284C7]">

            <!-- Subtle Hover Shine Sweep -->
            <div
              class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/25 to-transparent pointer-events-none">
            </div>

            <!-- DUAL BLINKING DOTS (Orange + Sky Blue) -->
            <div
              class="flex items-center gap-1.5 shrink-0 bg-slate-950/40 px-2 py-1 rounded-full backdrop-blur-sm border border-white/10">
              <!-- Dot 1: Orange Pulsing -->
              <span class="relative flex h-2 w-2">
                <span
                  class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#FF7A00] opacity-80"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#FF7A00]"></span>
              </span>
              <!-- Dot 2: Sky Blue Pulsing -->
              <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-300 opacity-80"
                  style="animation-delay: 250ms;"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-[#0284C7]"></span>
              </span>
            </div>

            <!-- Button Label -->
            <span class="relative z-10 font-bold">Get Free Quote</span>
            <i data-lucide="arrow-right"
              class="w-3.5 h-3.5 group-hover:translate-x-1 transition-transform relative z-10"></i>
          </a>
        </div>

        <!-- Mobile Drawer Toggle Trigger -->
        <button id="mobileNavToggle" aria-label="Open mobile navigation"
          class="lg:hidden p-2.5 rounded-xl bg-slate-100 text-slate-800 hover:text-[#FF7A00] transition-colors focus:outline-none">
          <i data-lucide="menu" class="w-6 h-6"></i>
        </button>

      </div>
    </div>
  </header>

  <!-- ================= RIGHT-SIDE MOBILE OFF-CANVAS DRAWER ================= -->

  <!-- 1. Dark Backdrop Overlay -->
  <div id="drawerOverlay"
    class="fixed inset-0 bg-slate-950/60 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300">
  </div>

  <!-- 2. Right Sliding Drawer Panel -->
  <aside id="mobileDrawer"
    class="fixed top-0 right-0 bottom-0 w-[310px] sm:w-[350px] bg-white z-50 shadow-2xl translate-x-full transition-transform duration-300 ease-out flex flex-col justify-between">

    <!-- Drawer Header -->
    <div class="p-5 border-b border-slate-100 flex items-center justify-between">
      <a href="/" title="Rank Grow Digital - IT & Web Agency"
        class="flex items-center group shrink-0 focus:outline-none">
        <!-- <img src="assets/logos/logo.png" alt="Rank Grow Digital - Website Designing & Software Development Agency"
            title="Rank Grow Digital - IT & Digital Solutions" width="320" height="64" loading="eager"
            fetchpriority="high" decoding="async"
            class="h-11 sm:h-13 md:h-[60px] w-auto max-w-[240px] sm:max-w-[300px] md:max-w-none object-contain transition-transform duration-300 group-hover:scale-[1.02]"> -->
      </a>
      <!-- Close Button -->
      <button id="closeDrawerBtn" aria-label="Close menu"
        class="w-9 h-9 rounded-xl bg-slate-100 text-slate-600 hover:text-red-500 hover:bg-red-50 flex items-center justify-center transition-colors">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>

    <!-- Scrollable Links Body -->
    <div class="flex-1 overflow-y-auto drawer-scroll p-5 space-y-4">
      <nav class="space-y-1">
        <a href="/"
          class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-bold text-slate-900 hover:bg-slate-50 transition-colors">
          <span>Home</span>
          <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
        </a>
        <a href="#about"
          class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-bold text-slate-700 hover:bg-slate-50 hover:text-[#FF7A00] transition-colors">
          <span>About Us</span>
          <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
        </a>

        <!-- Mobile Services Accordion in Drawer -->
        <div class="pt-1">
          <button id="mobileServicesToggle"
            class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-bold text-slate-700 hover:bg-slate-50 hover:text-[#FF7A00] transition-colors">
            <span class="flex items-center gap-2">
              <span>Services</span>
              <span class="text-[10px] bg-orange-100 text-[#FF7A00] px-2 py-0.5 rounded-full font-bold">12+</span>
            </span>
            <i data-lucide="chevron-down" id="drawerServicesChevron"
              class="w-4 h-4 text-slate-400 transition-transform duration-200"></i>
          </button>

          <!-- Collapsible Submenu -->
          <div id="mobileServicesList" class="hidden pl-4 pr-1 py-2 space-y-1.5 border-l-2 border-slate-100 ml-4 mt-1">
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#0284C7] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span> Website Development
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#FF7A00] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#FF7A00]"></span> Ecommerce Web Solutions
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#0284C7] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span> WordPress Development
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#FF7A00] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#FF7A00]"></span> Shopify Store Design
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#0284C7] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span> PHP Development & MySQL
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#FF7A00] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#FF7A00]"></span> AI SEO & Google 1st Page
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#0284C7] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span> Speed & SEO Audit
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#FF7A00] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#FF7A00]"></span> PPC & Google Ads
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#0284C7] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span> Social Media Marketing
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#FF7A00] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#FF7A00]"></span> Graphic & Brand Design
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#0284C7] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span> CRM & Custom Software
            </a>
            <a href="#services"
              class="mobile-sublink flex items-center gap-2 py-1.5 text-xs text-slate-600 hover:text-[#FF7A00] font-medium">
              <span class="w-1.5 h-1.5 rounded-full bg-[#FF7A00]"></span> Hosting & Web Security
            </a>
          </div>
        </div>

        <a href="#process"
          class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-bold text-slate-700 hover:bg-slate-50 hover:text-[#FF7A00] transition-colors">
          <span>Process</span>
          <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
        </a>
        <a href="#portfolio"
          class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-bold text-slate-700 hover:bg-slate-50 hover:text-[#FF7A00] transition-colors">
          <span>Portfolio</span>
          <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
        </a>
        <a href="#faq"
          class="mobile-nav-link flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-bold text-slate-700 hover:bg-slate-50 hover:text-[#FF7A00] transition-colors">
          <span>FAQ</span>
          <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
        </a>
      </nav>
    </div>

    <!-- Drawer Footer Quick Contact -->
    <div class="p-5 border-t border-slate-100 bg-slate-50/70 space-y-3">
      <a href="#contact"
        class="mobile-nav-link w-full py-3.5 rounded-xl font-bold text-xs uppercase tracking-wider text-white text-center flex items-center justify-center gap-2 shadow-md bg-gradient-to-r from-[#FF7A00] to-[#0284C7]">
        <!-- Pulsing Indicator inside Mobile Drawer -->
        <span class="relative flex h-2 w-2">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-80"></span>
          <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
        </span>
        <span>Get Free Quote</span>
      </a>

      <div class="flex items-center justify-center gap-4 text-xs font-bold text-slate-500 pt-1">
        <a href="tel:9627515058" class="hover:text-[#FF7A00] flex items-center gap-1">
          <i data-lucide="phone" class="w-3.5 h-3.5"></i> Call Us
        </a>
        <span>•</span>
        <a href="mailto:rankgrowdigital081@gmail.com" class="hover:text-[#0284C7] flex items-center gap-1">
          <i data-lucide="mail" class="w-3.5 h-3.5"></i> Email
        </a>
      </div>
    </div>

  </aside>

  <!-- ================= JAVASCRIPT ================= -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      if (window.lucide) {
        lucide.createIcons();
      }

      const header = document.getElementById('siteHeader');
      const mobileNavToggle = document.getElementById('mobileNavToggle');
      const closeDrawerBtn = document.getElementById('closeDrawerBtn');
      const drawerOverlay = document.getElementById('drawerOverlay');
      const mobileDrawer = document.getElementById('mobileDrawer');
      const mobileServicesToggle = document.getElementById('mobileServicesToggle');
      const mobileServicesList = document.getElementById('mobileServicesList');
      const drawerServicesChevron = document.getElementById('drawerServicesChevron');

      // Scroll Detection for Sticky Border
      window.addEventListener('scroll', () => {
        if (window.scrollY > 30) {
          header.classList.add('header-scrolled');
        } else {
          header.classList.remove('header-scrolled');
        }
      });

      // Desktop Link Underline Active Switch
      const navLinks = document.querySelectorAll('.nav-item-link');
      navLinks.forEach(link => {
        link.addEventListener('click', function () {
          if (this.closest('#servicesDropdownContainer')) return;
          navLinks.forEach(l => l.classList.remove('active'));
          this.classList.add('active');
        });
      });

      // Open Drawer Function
      function openDrawer() {
        drawerOverlay.classList.remove('pointer-events-none');
        drawerOverlay.classList.add('opacity-100');
        mobileDrawer.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden';
      }

      // Close Drawer Function
      function closeDrawer() {
        drawerOverlay.classList.add('pointer-events-none');
        drawerOverlay.classList.remove('opacity-100');
        mobileDrawer.classList.add('translate-x-full');
        document.body.style.overflow = '';
      }

      mobileNavToggle.addEventListener('click', openDrawer);
      closeDrawerBtn.addEventListener('click', closeDrawer);
      drawerOverlay.addEventListener('click', closeDrawer);

      // Mobile Drawer Services Accordion
      mobileServicesToggle.addEventListener('click', () => {
        const isOpen = !mobileServicesList.classList.contains('hidden');
        if (isOpen) {
          mobileServicesList.classList.add('hidden');
          drawerServicesChevron.classList.remove('rotate-180');
        } else {
          mobileServicesList.classList.remove('hidden');
          drawerServicesChevron.classList.add('rotate-180');
        }
      });

      // Close drawer on any internal anchor click
      const mobileLinks = document.querySelectorAll('.mobile-nav-link, .mobile-sublink');
      mobileLinks.forEach(link => {
        link.addEventListener('click', closeDrawer);
      });
    });
  </script>