<x-layout>
  <style>
    html {
            scroll-padding: 3rem;
        }
  </style>
  <img src="../img/home-banner.avif" alt="About Banner" class="my-4 pb-2 rounded-lg">

  {{-- <section id="best_seller">
    <div class="rounded-lg px-4 py-8 flex flex-col items-center font-[Urbanist] my-5">
      <h2 class="text-slate-900 text-4xl font-bold mb-4 pb-4">Best Sellers</h2>

      <div class="w-full overflow-x-auto whitespace-nowrap">
          <div class="flex gap-6 w-max px-4">

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                  <img src="../img/Rojiura de Hirotta V1.jpg" alt="Rojiura De Hirotta V1" class="w-full h-64 object-cover rounded">
                  <h3 class="text-md font-semibold mt-2">Rojiura De Hirotta V1</h3>
                  <p class="text-gray-500 text-sm">Kabochamasuku</p>
                  <p class="text-lg font-bold text-black">Rp40.000</p>
                  <p class="text-sm text-gray-400 line-through">Rp60.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                  <img src="../img/Majo Tabi V3.png" alt="Majo Tabi Tabi V3" class="w-full h-64 object-cover rounded">
                  <h3 class="text-md font-semibold mt-2">Majo No Tabi Tabi V3</h3>
                  <p class="text-gray-500 text-sm">Jogi Shiraishi</p>
                  <p class="text-lg font-bold text-black">Rp35.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                  <img src="../img/Kage Jitsu V4.png" alt="Kage No Jitsuryokusha V4" class="w-full h-64 object-cover rounded">
                  <h3 class="text-md font-semibold mt-2">Kage No Jitsuryokusha V4</h3>
                  <p class="text-gray-500 text-sm">Daisuke Aizawa</p>
                  <p class="text-lg font-bold text-black">Rp40.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                  <img src="../img/Heroine Survival V2.jpg" alt="Heroine Survival V2" class="w-full h-64 object-cover rounded">
                  <h3 class="text-md font-semibold mt-2">Heroine Survival V2</h3>
                  <p class="text-gray-500 text-sm">Harunohi Biyori</p>
                  <p class="text-lg font-bold text-black">Rp55.000</p>
                  <p class="text-sm text-gray-400 line-through">Rp75.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                  <img src="../img/S Kyuu V4.jpg" alt="Naze S Kyuu V4" class="w-full h-64 object-cover rounded">
                  <h3 class="text-md font-semibold mt-2">Naze Ka S Kyuu V4</h3>
                  <p class="text-gray-500 text-sm">Konatsu Wakioka</p>
                  <p class="text-lg font-bold text-black">Rp40.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                <img src="../img/COTE Y2 V11.webp" alt="COTE Y2 V11" class="w-full h-64 object-cover rounded">
                <h3 class="text-md font-semibold mt-2">Classroom Elite Year 2 V11</h3>
                <p class="text-gray-500 text-sm">Kinugasa Shougo</p>
                <p class="text-lg font-bold text-black">Rp55.000</p>
                <p class="text-sm text-gray-400 line-through">Rp80.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                <img src="../img/Silent Witch V1.jpg" alt="Silent Witch V1" class="w-full h-64 object-cover rounded">
                <h3 class="text-md font-semibold mt-2">Silent Witch V1</h3>
                <p class="text-gray-500 text-sm">Matsuri Isora</p>
                <p class="text-lg font-bold text-black">Rp60.000</p>
                <p class="text-sm text-gray-400 line-through">Rp100.000</p>
              </div>

            </div>
        </div>
    </div>
  </section> --}}
  
  <section id="best_seller">
    <div class="rounded-lg px-4 py-8 flex flex-col items-center font-[Urbanist] my-5">
      <h2 class="text-slate-900 text-4xl font-bold mb-4 pb-4">Best Sellers</h2>

      <div class="w-full overflow-x-auto whitespace-nowrap cursor-grab active:cursor-grabbing select-none" id="scrollContainer">
          <div class="flex gap-6 w-max px-4">
              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                  <img src="../img/Rojiura de Hirotta V1.jpg" alt="Rojiura De Hirotta V1" class="w-full h-64 object-cover rounded">
                  <h3 class="text-md font-semibold mt-2">Rojiura De Hirotta V1</h3>
                  <p class="text-gray-500 text-sm">Kabochamasuku</p>
                  <p class="text-lg font-bold text-black">Rp40.000</p>
                  <p class="text-sm text-gray-400 line-through">Rp60.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                  <img src="../img/Majo Tabi V3.png" alt="Majo Tabi Tabi V3" class="w-full h-64 object-cover rounded">
                  <h3 class="text-md font-semibold mt-2">Majo No Tabi Tabi V3</h3>
                  <p class="text-gray-500 text-sm">Jogi Shiraishi</p>
                  <p class="text-lg font-bold text-black">Rp35.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                  <img src="../img/Kage Jitsu V4.png" alt="Kage No Jitsuryokusha V4" class="w-full h-64 object-cover rounded">
                  <h3 class="text-md font-semibold mt-2">Kage No Jitsuryokusha V4</h3>
                  <p class="text-gray-500 text-sm">Daisuke Aizawa</p>
                  <p class="text-lg font-bold text-black">Rp40.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                <img src="../img/Heroine Survival V2.jpg" alt="Heroine Survival V2" class="w-full h-64 object-cover rounded">
                <h3 class="text-md font-semibold mt-2">Heroine Survival V2</h3>
                <p class="text-gray-500 text-sm">Harunohi Biyori</p>
                <p class="text-lg font-bold text-black">Rp55.000</p>
                <p class="text-sm text-gray-400 line-through">Rp75.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
                <img src="../img/S Kyuu V4.jpg" alt="Naze S Kyuu V4" class="w-full h-64 object-cover rounded">
                <h3 class="text-md font-semibold mt-2">Naze Ka S Kyuu V4</h3>
                <p class="text-gray-500 text-sm">Konatsu Wakioka</p>
                <p class="text-lg font-bold text-black">Rp40.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
              <img src="../img/COTE Y2 V11.webp" alt="COTE Y2 V11" class="w-full h-64 object-cover rounded">
              <h3 class="text-md font-semibold mt-2">Classroom Elite Year 2 V11</h3>
              <p class="text-gray-500 text-sm">Kinugasa Shougo</p>
              <p class="text-lg font-bold text-black">Rp55.000</p>
              <p class="text-sm text-gray-400 line-through">Rp80.000</p>
              </div>

              <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
              <img src="../img/Silent Witch V1.jpg" alt="Silent Witch V1" class="w-full h-64 object-cover rounded">
              <h3 class="text-md font-semibold mt-2">Silent Witch V1</h3>
              <p class="text-gray-500 text-sm">Matsuri Isora</p>
              <p class="text-lg font-bold text-black">Rp60.000</p>
              <p class="text-sm text-gray-400 line-through">Rp100.000</p>
              </div>

        </div>
      </div>
    </div>
</section>

<section id="peoples_favorite">
  <div class="rounded-lg px-4 py-8 flex flex-col items-center font-[Urbanist] my-5">
    <h2 class="text-slate-900 text-4xl font-bold mb-4 pb-4">People's Favorites</h2>
    
    <div class="w-full">
      <div class="flex gap-4 justify-center flex-wrap px-4">

        <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
          <img src="../img/Hangyakusha V1.webp" alt="Hangyakusha V1" class="w-full h-64 object-cover rounded">
          <h3 class="text-md font-semibold mt-2">Hangyakusha Toshite V1</h3>
          <p class="text-gray-500 text-sm">Yuto Sagami</p>
          <p class="text-lg font-bold text-black">Rp40.000</p>
          
        </div>
    
        <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
          <img src="../img/Silent Witch V1.jpg" alt="Silent Witch V1" class="w-full h-64 object-cover rounded">
          <h3 class="text-md font-semibold mt-2">Silent Witch V1</h3>
          <p class="text-gray-500 text-sm">Matsuri Isora</p>
          <p class="text-lg font-bold text-black">Rp60.000</p>
          <p class="text-sm text-gray-400 line-through">Rp100.000</p>
        </div>
    
        <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
          <img src="../img/COTE Y2 V11.webp" alt="COTE Y2 V11" class="w-full h-64 object-cover rounded">
          <h3 class="text-md font-semibold mt-2">Classroom Elite Year 2 V11</h3>
          <p class="text-gray-500 text-sm">Kinugasa Shougo</p>
          <p class="text-lg font-bold text-black">Rp55.000</p>
          <p class="text-sm text-gray-400 line-through">Rp80.000</p>
        </div>
    
        <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
          <img src="../img/Silent Witch V4 After.jpg" alt="Silent Witch After V4" class="w-full h-64 object-cover rounded">
          <h3 class="text-md font-semibold mt-2">Silent Witch V4 After</h3>
          <p class="text-gray-500 text-sm">Matsuri Isora</p>
          <p class="text-lg font-bold text-black">Rp60.000</p>
          <p class="text-sm text-gray-400 line-through">Rp100.000</p>
        </div>
    
        <div class="bg-white p-4 rounded-lg shadow-md w-60 flex-shrink-0">
          <img src="../img/Danjou Yuujou V4.jpg" alt="Danjou Yuujou V4" class="w-full h-64 object-cover rounded">
          <h3 class="text-md font-semibold mt-2">Danjou Yuujou V4</h3>
          <p class="text-gray-500 text-sm">Nana Nanana</p>
          <p class="text-lg font-bold text-black">Rp40.000</p>
        </div>
        
      </div>
    </div>
  </div>
</section>

  <img src="../img/home2-banner.avif" alt="About Banner" class="my-4 pb-2 rounded-lg">
</x-layout>

<script>
  const slider = document.getElementById('scrollContainer');
  let isDragging = false;
  let startX, scrollLeft;

  slider.addEventListener('mousedown', (e) => {
      isDragging = true;
      slider.classList.add('active');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
      slider.style.scrollBehavior = "auto";
  });

  slider.addEventListener('mousemove', (e) => {
      if (!isDragging) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 1;
      slider.scrollLeft = scrollLeft - walk;
  });

  slider.addEventListener('mouseup', () => {
      isDragging = false;
      slider.classList.remove('active');
      slider.style.scrollBehavior = "smooth";
  });

  slider.addEventListener('mouseleave', () => {
      isDragging = false;
      slider.classList.remove('active');
      slider.style.scrollBehavior = "smooth";
  });

  slider.addEventListener('dragstart', (e) => {
      e.preventDefault();
  });

  slider.addEventListener('click', (e) => {
      if (isDragging) {
          e.preventDefault();
      }
  });
</script>