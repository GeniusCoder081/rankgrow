<!-- ================= COMPANY WORKFLOW & VIDEO SECTION ================= -->
<section class="relative py-14 lg:py-20 bg-white border-y border-slate-200/90 overflow-hidden" id="companyShowcaseSection">
  
  <!-- Subtle ambient glow -->
  <div class="absolute top-1/2 left-0 -translate-y-1/2 w-80 h-80 bg-[#0284C7]/5 rounded-full blur-3xl pointer-events-none"></div>
  <div class="absolute top-1/2 right-0 -translate-y-1/2 w-80 h-80 bg-[#FF7A00]/5 rounded-full blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">

      <!-- LEFT COLUMN: Content & 4 Direct Process Steps -->
      <div class="lg:col-span-6 flex flex-col justify-center space-y-4">
        
        <div>
          <span class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-wider text-[#0284C7] bg-sky-50 border border-sky-200 px-3 py-1 rounded-full">
            <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7] animate-pulse"></span>
            Execution Workflow
          </span>

          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-snug mt-2.5">
            Engineering Growth With <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0284C7] via-slate-800 to-[#FF7A00]">Technical Precision</span>
          </h2>

          <p class="text-slate-600 text-sm sm:text-lg leading-relaxed mt-2">
            Hum architect karte hain zero-bloat PHP architecture aur targeted AI SEO solutions, jo Google top rankings ke sath actual commercial leads convert karta hai.
          </p>
        </div>

        <!-- 4 Process Points (Only Headings, Compact Height) -->
        <div class="space-y-2.5 pt-1">
          
          <!-- Step 1 -->
          <div class="flex items-center gap-3 p-2.5 rounded-xl bg-slate-50 border border-slate-200/90 hover:border-[#0284C7]/50 transition-colors group">
            <span class="w-7 h-7 rounded-lg bg-sky-100 text-[#0284C7] font-black text-xs flex items-center justify-center shrink-0 group-hover:bg-[#0284C7] group-hover:text-white transition-colors">
              01
            </span>
            <h3 class="text-xs sm:text-sm font-bold text-slate-800 group-hover:text-[#0284C7] transition-colors">
              Technical Audit & Keyword Mapping
            </h3>
          </div>

          <!-- Step 2 -->
          <div class="flex items-center gap-3 p-2.5 rounded-xl bg-slate-50 border border-slate-200/90 hover:border-[#FF7A00]/50 transition-colors group">
            <span class="w-7 h-7 rounded-lg bg-orange-100 text-[#FF7A00] font-black text-xs flex items-center justify-center shrink-0 group-hover:bg-[#FF7A00] group-hover:text-white transition-colors">
              02
            </span>
            <h3 class="text-xs sm:text-sm font-bold text-slate-800 group-hover:text-[#FF7A00] transition-colors">
              Custom Architecture & Zero Bloat Build
            </h3>
          </div>

          <!-- Step 3 -->
          <div class="flex items-center gap-3 p-2.5 rounded-xl bg-slate-50 border border-slate-200/90 hover:border-[#0284C7]/50 transition-colors group">
            <span class="w-7 h-7 rounded-lg bg-sky-100 text-[#0284C7] font-black text-xs flex items-center justify-center shrink-0 group-hover:bg-[#0284C7] group-hover:text-white transition-colors">
              03
            </span>
            <h3 class="text-xs sm:text-sm font-bold text-slate-800 group-hover:text-[#0284C7] transition-colors">
              AI SEO Execution & Google 1st Page Push
            </h3>
          </div>

          <!-- Step 4 -->
          <div class="flex items-center gap-3 p-2.5 rounded-xl bg-slate-50 border border-slate-200/90 hover:border-[#FF7A00]/50 transition-colors group">
            <span class="w-7 h-7 rounded-lg bg-orange-100 text-[#FF7A00] font-black text-xs flex items-center justify-center shrink-0 group-hover:bg-[#FF7A00] group-hover:text-white transition-colors">
              04
            </span>
            <h3 class="text-xs sm:text-sm font-bold text-slate-800 group-hover:text-[#FF7A00] transition-colors">
              Continuous SLA Monitoring & Scaling
            </h3>
          </div>

        </div>

      </div>

      <!-- RIGHT COLUMN: YouTube Video Frame -->
      <div class="lg:col-span-6">
        <div class="relative rounded-2xl overflow-hidden bg-slate-950 aspect-video shadow-xl border border-slate-200/90 group">
          
          <!-- YouTube Iframe Container -->
          <div id="companyYoutubePlayer" class="w-full h-full pointer-events-auto"></div>

          <!-- Floating Unmute Button -->
          <!-- <button id="videoSoundToggle" type="button" aria-label="Toggle Sound" class="absolute bottom-3 right-3 z-20 flex items-center gap-1.5 bg-[#0284C7] hover:bg-[#0369A1] text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-md transition-all cursor-pointer">
            <i data-lucide="volume-x" id="soundIcon" class="w-3.5 h-3.5"></i>
            <span id="soundText">Unmute</span>
          </button> -->

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= YOUTUBE AUTOPLAY ON SCROLL SCRIPT ================= -->
<script>
  let ytPlayerInstance = null;

  // 1. YouTube Iframe API load
  const ytScriptTag = document.createElement('script');
  ytScriptTag.src = "https://www.youtube.com/iframe_api";
  const firstScript = document.getElementsByTagName('script')[0];
  firstScript.parentNode.insertBefore(ytScriptTag, firstScript);

  // 2. Player Setup
  window.onYouTubeIframeAPIReady = function() {
    ytPlayerInstance = new YT.Player('companyYoutubePlayer', {
      videoId: 'ScMzIvxBSi4', // Yahan video ID replace kar sakte ho
      playerVars: {
        'autoplay': 0,
        'controls': 1,
        'rel': 0,
        'playsinline': 1,
        'modestbranding': 1,
        'enablejsapi': 1
      },
      events: {
        'onReady': (event) => {
          event.target.mute();
          observeVideoSection();
        }
      }
    });
  };

  // 3. Scroll par aate hi play & scroll se hat-te hi pause
  function observeVideoSection() {
    const sectionTarget = document.getElementById('companyShowcaseSection');
    if (!sectionTarget) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!ytPlayerInstance || typeof ytPlayerInstance.playVideo !== 'function') return;

        if (entry.isIntersecting) {
          ytPlayerInstance.playVideo();
        } else {
          ytPlayerInstance.pauseVideo();
        }
      });
    }, { threshold: 0.35 });

    observer.observe(sectionTarget);
  }

  // 4. Mute/Unmute Toggle
  document.addEventListener('DOMContentLoaded', () => {
    const soundBtn = document.getElementById('videoSoundToggle');
    const soundText = document.getElementById('soundText');
    const soundIcon = document.getElementById('soundIcon');

    if (soundBtn) {
      soundBtn.addEventListener('click', () => {
        if (!ytPlayerInstance) return;

        if (ytPlayerInstance.isMuted()) {
          ytPlayerInstance.unMute();
          ytPlayerInstance.setVolume(80);
          soundText.innerText = "Mute";
          if (soundIcon) soundIcon.setAttribute('data-lucide', 'volume-2');
        } else {
          ytPlayerInstance.mute();
          soundText.innerText = "Unmute";
          if (soundIcon) soundIcon.setAttribute('data-lucide', 'volume-x');
        }

        if (window.lucide) {
          lucide.createIcons();
        }
      });
    }

    if (window.lucide) {
      lucide.createIcons();
    }
  });
</script>