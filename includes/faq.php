<!-- ================= FAQ SECTION (Grid Overlay & Modern Dual Layout) ================= -->
<section id="faq" class="py-24 bg-slate-100/70 relative overflow-hidden border-y border-slate-200/80">
  
  <!-- Subtle Technical Dotted Grid Overlay -->
  <div class="absolute inset-0 bg-[radial-gradient(#94a3b8_1px,transparent_1px)] [background-size:24px_24px] opacity-35 pointer-events-none"></div>

  <!-- Ambient Glow Badges -->
  <div class="absolute top-1/4 left-5 w-96 h-96 bg-[#0284C7]/10 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-10 right-5 w-96 h-96 bg-[#FF7A00]/10 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-start">

      <!-- LEFT COLUMN: Sticky Info Card with Professional Desk Visual -->
      <div class="lg:col-span-5 lg:sticky lg:top-28 space-y-6">
        
        <!-- Live Dot Animated Section Badge -->
        <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#0284C7] bg-sky-100/90 border border-sky-300/60 px-3.5 py-1.5 rounded-full shadow-sm">
          <span class="relative flex h-2.5 w-2.5">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#0284C7] opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-[#0284C7]"></span>
          </span>
          Helpdesk & Consultation
        </span>

        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-[1.15]">
          Frequently Asked <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0284C7] to-[#FF7A00]">Questions</span>
        </h2>

        <p class="text-slate-600 text-sm sm:text-[14px] leading-relaxed">
          Clear, upfront answers covering our custom web engineering workflows, Google SEO turnarounds, server security, and SLA response guarantees.
        </p>

        <!-- Professional Desk Visual with Glassmorphism Overlays -->
        <div class="relative pt-2">
          <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-white bg-slate-900 group">
            <img 
              src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=80" 
              alt="Rank Grow Digital Client Engineer Working on Computer" 
              class="w-full h-72 sm:h-80 object-cover group-hover:scale-105 transition-transform duration-700 ease-out" 
              loading="lazy">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
          </div>

          <!-- Bottom Floating Lead SLA Card -->
          <div class="absolute -bottom-6 left-4 right-4 sm:left-6 sm:right-6 bg-white/95 backdrop-blur-md p-4 rounded-2xl shadow-xl border border-slate-200/90 flex items-center gap-3.5">
            <div class="w-11 h-11 rounded-xl bg-orange-50 text-[#FF7A00] border border-orange-100 flex items-center justify-center shrink-0 shadow-sm">
              <i data-lucide="message-square" class="w-5 h-5"></i>
            </div>
            <div>
              <p class="text-xs font-bold text-slate-900">Have a custom technical scope?</p>
              <p class="text-[11px] text-slate-500 mt-0.5">Talk directly with our lead developers (+91 9627515058) without ticket delays.</p>
            </div>
          </div>
        </div>

      </div>

      <!-- RIGHT COLUMN: 10 Accordion Items (7 Visible + 3 Hidden) -->
      <div class="lg:col-span-7 space-y-3 pt-6 lg:pt-10" id="faqAccordion">

        <!-- FAQ 1 (Visible) -->
        <div class="faq-item group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">What is the delivery timeline for a custom business website?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Standard commercial platforms and corporate portfolios are typically designed, tested, and published within <strong>5 to 7 business days</strong>. Custom PHP web applications, custom CRM portals, or database-heavy platforms require <strong>10 to 15 days</strong> depending on scope.
            </div>
          </div>
        </div>

        <!-- FAQ 2 (Visible) -->
        <div class="faq-item group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">Do your websites comply with Google's Core Web Vitals and mobile-first standards?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes, 100%. We avoid bloated page-builders and build using lightweight semantic markup and modular architecture to reliably score <strong>90+ on Google PageSpeed</strong> with sub-2-second loading times on mobile devices.
            </div>
          </div>
        </div>

        <!-- FAQ 3 (Visible) -->
        <div class="faq-item group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">How quickly can we expect measurable rankings from your Google SEO campaigns?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              High-intent local keywords usually show tangible ranking upward movement within <strong>30 to 60 days</strong>. More competitive statewide and national search terms typically gain first-page authority within 60 to 90 days with technical on-page structuring and AI overview optimizations.
            </div>
          </div>
        </div>

        <!-- FAQ 4 (Visible) -->
        <div class="faq-item group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">Do I get complete intellectual property and source code ownership?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes, absolutely. Once final milestones are cleared, we transfer 100% of the repository, source files, and database schemas directly to you. You are never locked into proprietary subscription traps.
            </div>
          </div>
        </div>

        <!-- FAQ 5 (Visible) -->
        <div class="faq-item group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">Do you handle cloud server deployment, domain DNS, and SSL configurations?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes. Our developers take care of end-to-end setup including DNS pointing, staging server environments, production VPS hosting configurations, Let's Encrypt SSL certificates, and Google Search Console property indexing.
            </div>
          </div>
        </div>

        <!-- FAQ 6 (Visible) -->
        <div class="faq-item group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">Can you build custom PHP admin control panels without third-party plugins?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes, custom dashboards are our core engineering specialty. We build clean, lightweight administrative interfaces with role-based access control, allowing your team to easily manage leads, inventory, and dynamic page content.
            </div>
          </div>
        </div>
        

       

        <!-- ================= HIDDEN FAQS (3 Items revealed via View More) ================= -->

        <!-- FAQ 8 (Hidden) -->
        <div class="faq-item extra-faq hidden group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">What does your payment milestone roadmap look like?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              We operate on transparent milestone gates: an initial project deposit, an intermediate milestone payment upon demo/staging server sign-off, and the final payment upon live production deployment and source code transfer.
            </div>
          </div>
        </div>

        <!-- FAQ 9 (Hidden) -->
        <div class="faq-item extra-faq hidden group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">Can you redesign our existing outdated website without losing existing Google rankings?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              Yes. We conduct a thorough pre-migration crawl to map all canonical URLs, set up permanent 301 server redirects, preserve link equity, and update structured schema to protect your historical SEO value.
            </div>
          </div>
        </div>

        <!-- FAQ 10 (Hidden) -->
        <div class="faq-item extra-faq hidden group bg-white/90 backdrop-blur-sm rounded-2xl border border-slate-200/90 shadow-sm hover:border-[#0284C7]/50 transition-all duration-300 overflow-hidden">
          <button type="button" class="faq-toggle w-full flex justify-between items-center text-left p-4 sm:p-5 font-bold text-[13px] sm:text-[14px] text-slate-900 focus:outline-none">
            <span class="pr-4">How do you protect forms and databases against cyber threats?</span>
            <span class="faq-icon-wrapper w-8 h-8 rounded-full bg-slate-100 text-slate-500 flex items-center justify-center shrink-0 transition-all duration-300 group-hover:bg-sky-50 group-hover:text-[#0284C7]">
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
            </span>
          </button>
          <div class="faq-collapse max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
            <div class="px-4 pb-4 sm:px-5 sm:pb-5 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
              All database communications use PDO prepared statements to block SQL injection. In addition, we deploy cryptographic CSRF tokens on every form submission, rate-limiting headers, and web application firewall policies.
            </div>
          </div>
        </div>

        <!-- View More Button Trigger -->
        <div class="pt-2">
          <button 
            type="button" 
            id="viewMoreFaqBtn"
            class="inline-flex items-center gap-2 text-xs font-bold text-[#FF7A00] hover:text-[#0284C7] bg-white border border-slate-300/80 hover:border-sky-300 px-5 py-3 rounded-xl shadow-sm transition-all duration-200 hover:scale-105">
            <span id="viewMoreFaqText">View More Questions (3 more)</span>
            <i data-lucide="chevron-down" id="viewMoreFaqIcon" class="w-4 h-4 transition-transform duration-300"></i>
          </button>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Smooth Height Accordion & Toggle Script -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const faqContainer = document.getElementById('faqAccordion');
    if (!faqContainer) return;

    const faqItems = faqContainer.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
      const toggleBtn = item.querySelector('.faq-toggle');
      const collapseContent = item.querySelector('.faq-collapse');
      const icon = item.querySelector('.faq-icon-wrapper i');
      const iconWrapper = item.querySelector('.faq-icon-wrapper');

      toggleBtn.addEventListener('click', () => {
        const isOpen = collapseContent.style.maxHeight && collapseContent.style.maxHeight !== '0px';

        // Close other opened FAQs for single-active accordion behaviour
        faqItems.forEach(otherItem => {
          const otherCollapse = otherItem.querySelector('.faq-collapse');
          const otherIcon = otherItem.querySelector('.faq-icon-wrapper i');
          const otherIconWrap = otherItem.querySelector('.faq-icon-wrapper');

          if (otherCollapse) otherCollapse.style.maxHeight = '0px';
          if (otherIcon) otherIcon.classList.remove('rotate-180');
          if (otherIconWrap) otherIconWrap.classList.remove('bg-[#0284C7]', 'text-white');
          otherItem.classList.remove('border-[#0284C7]', 'shadow-md');
        });

        // Toggle clicked element
        if (!isOpen) {
          collapseContent.style.maxHeight = collapseContent.scrollHeight + 'px';
          icon.classList.add('rotate-180');
          iconWrapper.classList.add('bg-[#0284C7]', 'text-white');
          item.classList.add('border-[#0284C7]', 'shadow-md');
        } else {
          collapseContent.style.maxHeight = '0px';
          icon.classList.remove('rotate-180');
          iconWrapper.classList.remove('bg-[#0284C7]', 'text-white');
          item.classList.remove('border-[#0284C7]', 'shadow-md');
        }
      });
    });

    // View More Button Functionality
    const viewMoreBtn = document.getElementById('viewMoreFaqBtn');
    const extraFaqs = faqContainer.querySelectorAll('.extra-faq');
    const viewMoreText = document.getElementById('viewMoreFaqText');
    const viewMoreIcon = document.getElementById('viewMoreFaqIcon');

    if (viewMoreBtn) {
      let isExpanded = false;
      viewMoreBtn.addEventListener('click', () => {
        isExpanded = !isExpanded;
        extraFaqs.forEach(faq => {
          if (isExpanded) {
            faq.classList.remove('hidden');
          } else {
            faq.classList.add('hidden');
            const collapse = faq.querySelector('.faq-collapse');
            if (collapse) collapse.style.maxHeight = '0px';
          }
        });

        viewMoreText.innerText = isExpanded ? 'Show Fewer Questions' : 'View More Questions (3 more)';
        if (isExpanded) {
          viewMoreIcon.classList.add('rotate-180');
        } else {
          viewMoreIcon.classList.remove('rotate-180');
        }
      });
    }

    if (window.lucide) {
      lucide.createIcons();
    }
  });
</script>