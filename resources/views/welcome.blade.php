<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="canonical" href="https://mauzodata.com/">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Mfumo wa kusimamia hesabu ya mauzo na kutoa ripoti mbalimbali za duka, pharmacy, supermarket, hardware n.k.">

  <meta name="twitter:site" content="@mauzodata">
  <meta name="twitter:creator" content="@alkadoHs">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Mfumo wa mauzo unaosimamia maduka na kufanya hesabu zote za kibiashara.">
  <meta name="twitter:description" content="Pata mfumo wa mauzo wa kidigitali kwa ajili ya kufanya hesabu zote za kibiashara bila kutumia madaftari, calculator au excel.">
  <meta name="twitter:image" content="{{ asset('software.png')}}">

  <meta property="og:url" content="https://mauzodata.com/">
  <meta property="og:locale" content="sw_TZ">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Mauzodata">
  <meta property="og:title" content="Mfumo wa mauzo unaosimamia maduka na kufanya hesabu zote za kibiashara.">
  <meta property="og:description" content="Pata mfumo wa mauzo wa kidigitali kwa ajili ya kufanya hesabu zote za kibiashara bila kutumia madaftari, calculator au excel.">
  <meta property="og:image" content="{{ asset('software.png')}}">

  <!-- Title -->
  <title>Mauzodata - Mfumo wa mauzo wa kidigitali</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <!-- Fonts -->

  <!-- Theme Check and Update -->
  <script>
    const html = document.querySelector('html');
    const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
    const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

    if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
    else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
    else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
    else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
  </script>

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-900 scroll-smooth">
  <!-- ========== HEADER ========== -->
  <header class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
    <nav class="relative max-w-[66rem] w-full bg-gray-800 rounded-[28px] py-3 ps-5 pe-2 md:flex md:items-center md:justify-between md:py-0 mx-2 lg:mx-auto" aria-label="Global">
      <div class="flex items-center justify-between">
        <!-- Logo -->
        <a class="flex items-center gap-2 rounded-md text-xl font-semibold focus:outline-none focus:opacity-80" href="{{ url('/') }}" aria-label="Preline">
          <img src="logo.gif" controls class="size-10 rounded-full overflow-clip" alt="logo"></img>
          <p class="font-bold text-amber-500">Mauzodata</p>
        </a>
        <!-- End Logo -->

        <div class="md:hidden">
          <button type="button" class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full bg-gray-800 text-white disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Collapse -->
      <div id="navbar-collapse" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 md:flex-row md:items-center md:justify-end md:gap-y-0 md:gap-x-7 md:mt-0 md:ps-7">
          <a class="text-sm text-white hover:text-gray-300 md:py-4 focus:outline-none focus:text-gray-300" href="{{ url('/')}}" aria-current="page">Mwanzo</a>
          <a class="text-sm text-white hover:text-gray-300 md:py-4 focus:outline-none focus:text-gray-300" href="#features">Vipengele</a>
          <a class="text-sm text-white hover:text-gray-300 md:py-4 focus:outline-none focus:text-gray-300" href="#approach">Nia yetu</a>
          <a class="text-sm text-white hover:text-gray-300 md:py-4 focus:outline-none focus:text-gray-300" href="#pricing">Gharama</a>
          <div>
            <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-cyan-500 font-medium text-sm text-gray-800 rounded-full focus:outline-none" href="{{ route('login')}}">
              Angalia demo
            </a>
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content">
    <!-- Hero -->
    <div class="bg-gray-900">
      <div class="max-w-5xl mx-auto px-4 xl:px-0 pt-24 lg:pt-32 pb-24">
        <h1 class="font-semibold text-white text-5xl md:text-6xl">
          <span class="text-cyan-500">Mauzodata:</span> Mfumo wa kusimamia maduka kielektroniki
        </h1>
        <div class="max-w-4xl">
          <p class="mt-5 text-gray-400 text-lg">
            Ni mfumo wa kidigitali unaomwezesha mfanya biashara pamoja na wafanya kazi wake, kufanya mauzo kwa njia ya kielekroniki bila kutumia madaftari,excel n.k
            Unafunga hesabu ya mauzo wenyewe ndani ya dakika 0, Unatengeneza ripoti zinazomsaidia kufanya maamuzi ya kibiashara yenye matokeo chanya.
          </p>
        </div>
      </div>
    </div>
    <!-- End Hero -->

    <!-- Clients -->
    <div class="relative overflow-hidden pt-4 bg-gray-900">
      <svg class="absolute -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745" height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127" class="stroke-gray-700/50" stroke="currentColor" />
        <path d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136" class="stroke-gray-700/50" stroke="currentColor" />
      </svg>

      <div class="relative z-10">
        <div class="max-w-5xl px-4 xl:px-0 mx-auto">
          <div class="mb-4">
            <h2 class="text-gray-400">Mfumo wa mauzo wa kidigitali ni nini na unawezaje kurahisisha biashara yako?</h2>
          </div>

          <div class="flex items-center gap-6">
            <div class="flex justify-center">
              <a class="group inline-flex items-center bg-white/10 hover:bg-white/10 border border-white/10 p-1 ps-4 rounded-full shadow-md focus:outline-none focus:bg-white/10" href="https://wa.me/message/6WLW47HXU5XOA1">
                <p class="me-2 text-white text-sm">
                  Whatsapp.
                </p>
                <span class="group-hover:bg-white/10 py-1.5 px-2.5 flex justify-center items-center gap-x-2 rounded-full bg-white/10 font-semibold text-white text-sm">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </span>
              </a>
            </div>

            <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 shadow-lg shadow-transparent hover:shadow-blue-700/50 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:shadow-blue-700/50 py-3 px-6" href="tel:0764940382">
              Wasiliana nasi
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Clients -->

    <!-- Case Stories -->
    <div class="bg-gray-900 bg-gradient-to-t from-black to-transparent" id="why-us">
      <div class="max-w-5xl px-4 xl:px-0 py-24 mx-auto">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
          <h2 class="text-white font-semibold text-2xl md:text-4xl md:leading-tight">Kwa nini utumie mfumo</h2>
          <p class="mt-1 text-gray-400">Kutafuta mtaji wa biashara siyo kazi rahisi, wanye mtaji wanajua hili!. Umetafuta mtaji,biashara imekua lakini kuisimamia biashara 
            unakua ni mtihani mwingine tena,Ona! Unakosa kulala usingizi mzuri, unakosa muda wa kukaa pamoja na familia,ndugu na marafiki, unakuwa bize! hupati mda wa kufurahia.
            Je, hilo ndilo kusudi la wewe kutafuta biashara? Hapana mambo hayatakiwi kuwa hivyo. Vipi ukiiachia kompyuta isimamie biashara yako yote, halafu ikuandalie ripoti zote
            za muhimu? Kwa angalau sababu 3 Mfumo wa mauzo utabadili maisha yako:-
          </p>
        </div>
        <!-- End Title -->

        <!-- Card Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 items-center border border-gray-700 divide-y lg:divide-y-0 lg:divide-x divide-gray-700 rounded-xl">
          <!-- Card -->
          <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-gray-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-cyan-500/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
            <div class="mb-5">
              <svg class="flex-shrink-0 w-8 h-8" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_11766_122079)">
                  <path d="M16 32C7.16 32 0 24.84 0 16C0 7.16 7.16 0 16 0C24.84 0 32 7.16 32 16C32 24.84 24.84 32 16 32Z" fill="#FFE01B" />
                  <path d="M11.72 19.28C11.74 19.3 11.74 19.34 11.72 19.38C11.64 19.52 11.48 19.6 11.32 19.58C11.02 19.54 10.8 19.3 10.82 19C10.82 18.8 10.86 18.62 10.92 18.42C11.02 18.18 10.92 17.92 10.72 17.78C10.6 17.7 10.44 17.68 10.3 17.7C10.16 17.72 10.04 17.82 9.96001 17.94C9.90001 18.04 9.86001 18.14 9.84001 18.24C9.84001 18.26 9.82001 18.28 9.82001 18.28C9.78001 18.4 9.70001 18.44 9.64001 18.44C9.62001 18.44 9.58001 18.42 9.56001 18.36C9.50001 18.02 9.62001 17.68 9.84001 17.42C10.04 17.2 10.32 17.1 10.62 17.14C10.92 17.18 11.2 17.38 11.32 17.66C11.46 18 11.42 18.38 11.24 18.7C11.22 18.72 11.22 18.76 11.2 18.78C11.14 18.9 11.12 19.06 11.2 19.18C11.26 19.26 11.34 19.3 11.44 19.3C11.48 19.3 11.52 19.3 11.56 19.28C11.64 19.24 11.7 19.24 11.72 19.28ZM24.94 19.6C24.92 20.22 24.78 20.82 24.56 21.4C23.44 24.1 20.76 25.6 17.56 25.5C14.58 25.42 12.04 23.84 10.94 21.26C10.24 21.24 9.56001 20.96 9.06001 20.5C8.52001 20.04 8.18001 19.4 8.10001 18.7C8.04001 18.22 8.10001 17.74 8.28001 17.28L7.66001 16.76C4.78001 14.36 13.72 4.4 16.56 6.9C16.58 6.92 17.54 7.86 17.54 7.86C17.54 7.86 18.06 7.64 18.08 7.64C20.58 6.6 22.62 7.1 22.62 8.76C22.62 9.62 22.08 10.62 21.2 11.54C21.56 11.9 21.8 12.34 21.92 12.82C22.02 13.16 22.06 13.5 22.08 13.86C22.1 14.22 22.12 15.04 22.12 15.04C22.14 15.04 22.4 15.12 22.48 15.14C23 15.26 23.46 15.48 23.86 15.82C24.08 16.02 24.2 16.3 24.26 16.58C24.32 16.96 24.22 17.34 24 17.64C24.06 17.78 24.1 17.9 24.16 18.04C24.24 18.28 24.28 18.48 24.3 18.5C24.52 18.54 24.94 18.86 24.94 19.6ZM12.34 18.12C12.14 16.86 11.3 16.42 10.72 16.38C10.58 16.38 10.44 16.38 10.28 16.42C9.26001 16.62 8.66001 17.5 8.78001 18.64C8.96001 19.7 9.82001 20.5 10.88 20.56C10.98 20.56 11.08 20.56 11.18 20.54C12.24 20.38 12.5 19.24 12.34 18.12ZM14.1 10.12C14.98 9.4 15.9 8.76 16.88 8.2C16.88 8.2 16.1 7.3 15.86 7.22C14.42 6.82 11.3 8.98 9.30001 11.84C8.50001 13 7.34001 15.04 7.90001 16.08C8.10001 16.32 8.32001 16.52 8.56001 16.72C8.92001 16.2 9.48001 15.84 10.12 15.72C10.9 13.54 12.28 11.6 14.1 10.12ZM17.22 20.1C17.3 20.44 17.56 20.72 17.9 20.8C18.08 20.86 18.24 20.92 18.44 20.94C20.72 21.34 22.86 20.02 23.34 19.7C23.38 19.68 23.4 19.7 23.38 19.74C23.36 19.76 23.34 19.78 23.34 19.8C22.76 20.56 21.18 21.44 19.12 21.44C18.22 21.44 17.32 21.12 17 20.64C16.48 19.88 16.98 18.78 17.82 18.9C17.82 18.9 18.12 18.94 18.2 18.94C19.52 19.06 20.86 18.86 22.08 18.32C23.24 17.78 23.68 17.18 23.62 16.7C23.6 16.56 23.52 16.42 23.42 16.3C23.1 16.04 22.72 15.86 22.32 15.78C22.14 15.72 22.02 15.7 21.88 15.66C21.64 15.58 21.52 15.52 21.5 15.06C21.48 14.86 21.46 14.18 21.44 13.88C21.42 13.38 21.36 12.7 20.94 12.42C20.84 12.34 20.7 12.3 20.58 12.3C20.5 12.3 20.44 12.3 20.36 12.32C20.14 12.36 19.96 12.48 19.8 12.64C19.4 13 18.88 13.18 18.34 13.14C18.04 13.12 17.74 13.08 17.38 13.06C17.32 13.06 17.24 13.06 17.18 13.04C16.22 13.06 15.44 13.78 15.32 14.74C15.12 16.16 16.14 16.88 16.44 17.32C16.48 17.38 16.52 17.44 16.52 17.52C16.52 17.6 16.48 17.68 16.42 17.72C15.6 18.64 15.3 19.92 15.62 21.12C15.66 21.26 15.7 21.4 15.76 21.54C16.5 23.28 18.82 24.1 21.08 23.36C21.38 23.26 21.66 23.14 21.94 23C22.44 22.76 22.88 22.42 23.26 22.02C23.84 21.44 24.22 20.68 24.36 19.86C24.42 19.4 24.32 19.24 24.2 19.16C24.1 19.1 24 19.08 23.88 19.1C23.82 18.74 23.72 18.4 23.58 18.08C22.94 18.56 22.2 18.94 21.42 19.16C20.48 19.42 19.52 19.52 18.54 19.48C17.92 19.42 17.5 19.24 17.34 19.76C18.28 20.08 19.28 20.18 20.28 20.06C20.3 20.06 20.34 20.08 20.34 20.1C20.34 20.12 20.32 20.14 20.3 20.16C20.22 20.14 19.06 20.68 17.22 20.1ZM13.84 11.88C14.6 11.34 15.48 10.96 16.38 10.76C17.42 10.52 18.48 10.52 19.52 10.76C19.56 10.76 19.58 10.7 19.54 10.68C19 10.4 18.42 10.24 17.8 10.22C17.78 10.22 17.76 10.2 17.76 10.18V10.16C17.86 10.04 17.96 9.92 18.08 9.84C18.1 9.82 18.1 9.8 18.08 9.8L18.06 9.78C17.32 9.86 16.62 10.1 15.98 10.52C15.96 10.52 15.94 10.52 15.94 10.52V10.5C15.98 10.32 16.06 10.14 16.16 9.96C16.16 9.94 16.16 9.92 16.14 9.92H16.12C15.22 10.42 14.42 11.08 13.76 11.86C13.74 11.88 13.74 11.9 13.76 11.9C13.8 11.9 13.82 11.9 13.84 11.88ZM19.84 16.7C19.96 16.78 20.14 16.76 20.24 16.64C20.3 16.52 20.22 16.38 20.06 16.3C19.94 16.22 19.76 16.24 19.66 16.36C19.6 16.46 19.68 16.62 19.84 16.7ZM20.34 14.88C20.38 15.08 20.46 15.28 20.58 15.44C20.7 15.42 20.84 15.42 20.96 15.44C21.04 15.22 21.04 14.98 20.98 14.76C20.88 14.34 20.76 14.1 20.52 14.14C20.26 14.18 20.24 14.48 20.34 14.88ZM20.88 15.84C20.72 15.8 20.54 15.88 20.48 16.06C20.44 16.22 20.52 16.4 20.7 16.46C20.88 16.52 21.04 16.42 21.1 16.24C21.1 16.22 21.12 16.18 21.12 16.16C21.12 16 21.02 15.86 20.88 15.84Z" fill="black" />
                  <path d="M16.66 15.8C16.62 15.8 16.6 15.78 16.6 15.76C16.58 15.68 16.7 15.58 16.8 15.48C17.14 15.22 17.6 15.18 17.98 15.34C18.16 15.42 18.32 15.54 18.42 15.7C18.46 15.76 18.46 15.82 18.44 15.84C18.4 15.88 18.3 15.84 18.12 15.76C17.92 15.66 17.68 15.6 17.46 15.62C17.2 15.66 16.92 15.72 16.66 15.8ZM18.38 16.16C18.22 16 18 15.92 17.8 15.96C17.64 15.98 17.5 16.04 17.38 16.14C17.32 16.18 17.28 16.24 17.28 16.32C17.28 16.34 17.28 16.36 17.3 16.36C17.32 16.36 17.32 16.38 17.34 16.38C17.4 16.38 17.46 16.36 17.5 16.34C17.74 16.26 17.98 16.22 18.22 16.26C18.34 16.28 18.38 16.28 18.42 16.24C18.4 16.2 18.4 16.18 18.38 16.16Z" fill="black" />
                </g>
                <defs>
                  <clipPath id="clip0_11766_122079">
                    <rect width="32" height="32" fill="white" />
                  </clipPath>
                </defs>
              </svg>

              <div class="mt-5">
                <p class="font-semibold text-5xl text-green-600">100%</p>
                <h3 class="mt-5 font-medium text-lg text-white">Usahihi wa kimahesabu</h3>
                <akiki class="mt-1 text-gray-400">Binadamu tunaweza kukosea lakini kompyuta ikipewa maelekezo haiwezi kukosea, itafanya kama ilivyoelekezwa kwa usahihi na kwa wakati.
                   Mfumo wa mauzodata umepewa maelekezo ya kiabiashara na ya kitaalamu, Jinsi unavyotakiwa kukusanya taarifa za mauzo na matumizi ya ofisi bila kukosea. Babala ya kuhangaika na madaftari na calculator na excel, sasa mfumo utafanya yote hayo badala yako.</p>
              </div>
            </div>
            <p class="mt-auto">
              <span class="font-medium text-sm text-cyan-500 pb-1 border-b-2 border-gray-700 group-hover:border-cyan-500 transition focus:outline-none group-focus:border-cyan-500">
                Soma zaidi
              </span>
            </p>
          </a>
          <!-- End Card -->

          <!-- Card -->
          <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-gray-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-cyan-500/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
            <div class="mb-5">
              <svg class="flex-shrink-0 w-8 h-8" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.462 6.28384C27.44 6.12384 27.2998 6.03529 27.184 6.02554C27.0684 6.01589 24.6215 5.83452 24.6215 5.83452C24.6215 5.83452 22.9221 4.1474 22.7355 3.96066C22.5489 3.77403 22.1844 3.8308 22.0429 3.87244C22.0221 3.87858 21.6716 3.98674 21.0919 4.16614C20.5243 2.53261 19.5224 1.03145 17.7599 1.03145C17.7112 1.03145 17.6611 1.03343 17.611 1.03628C17.1098 0.373373 16.4889 0.0853729 15.9525 0.0853729C11.8468 0.0853729 9.88524 5.21798 9.27023 7.82619C7.67483 8.32055 6.54146 8.672 6.39669 8.71748C5.50617 8.99682 5.47801 9.02488 5.36108 9.864C5.27308 10.4993 2.94299 28.5189 2.94299 28.5189L21.0995 31.9208L30.9373 29.7925C30.9373 29.7925 27.4837 6.44384 27.462 6.28384ZM20.0884 4.4765L18.5521 4.952C18.5526 4.84373 18.5532 4.73721 18.5532 4.62072C18.5532 3.60548 18.4123 2.78806 18.1862 2.14006C19.0943 2.25403 19.6992 3.28735 20.0884 4.4765ZM17.0596 2.34137C17.3121 2.97403 17.4763 3.88198 17.4763 5.10718C17.4763 5.16987 17.4757 5.22718 17.4752 5.28515C16.476 5.59463 15.3903 5.93063 14.3022 6.26773C14.9132 3.90981 16.0584 2.77096 17.0596 2.34137ZM15.8398 1.18663C16.017 1.18663 16.1955 1.2468 16.3663 1.36439C15.0505 1.98356 13.6401 3.54302 13.0445 6.65721L10.5364 7.43398C11.2341 5.05863 12.8907 1.18663 15.8398 1.18663Z" fill="#95BF46" />
                <path d="M27.184 6.02553C27.0684 6.01589 24.6215 5.83452 24.6215 5.83452C24.6215 5.83452 22.9221 4.1474 22.7356 3.96066C22.6658 3.89118 22.5716 3.85556 22.4732 3.84022L21.1004 31.9205L30.9373 29.7925C30.9373 29.7925 27.4837 6.44383 27.462 6.28383C27.44 6.12383 27.2999 6.03529 27.184 6.02553Z" fill="#5E8E3E" />
                <path d="M17.7599 11.4614L16.5469 15.0697C16.5469 15.0697 15.4841 14.5025 14.1813 14.5025C12.2714 14.5025 12.1753 15.701 12.1753 16.0031C12.1753 17.6511 16.4711 18.2825 16.4711 22.1427C16.4711 25.1797 14.5449 27.1353 11.9476 27.1353C8.83092 27.1353 7.23706 25.1956 7.23706 25.1956L8.07158 22.4384C8.07158 22.4384 9.70994 23.8449 11.0924 23.8449C11.9957 23.8449 12.3632 23.1337 12.3632 22.614C12.3632 20.4643 8.83881 20.3684 8.83881 16.8361C8.83881 13.863 10.9727 10.986 15.2802 10.986C16.94 10.986 17.7599 11.4614 17.7599 11.4614Z" fill="white" />
              </svg>

              <div class="mt-5">
                <p class="font-semibold text-5xl text-green-600">100%</p>
                <i class="mt-5 font-medium text-lg text-white">Utajua hali ya biashara yako.</i>
                <p class="mt-1 text-gray-400">Mara nyingi kama hutumii mfumo siyo rahisi kujua hali ya biashara yako kwa mfano,
                   kujua bidhaa zinazouzika sana ili zisikose stoku, kujua bidhaa zinazokaribia kuisha, zilizo isha kabisa, ambazo haziuzi sana(dead stock), faida ya kila siku, kila mwezi, mwaka. Mfumo wa mauzodata unakufanyia yote hayo ndani ya mda mfupi.</p>
              </div>
            </div>
            <p class="mt-auto">
              <span class="font-medium text-sm text-cyan-500 pb-1 border-b-2 border-gray-700 group-hover:border-cyan-500 transition focus:outline-none group-focus:border-cyan-500">
                Soma zaidi
              </span>
            </p>
          </a>
          <!-- End Card -->

          <!-- Card -->
          <a class="group relative z-10 p-4 md:p-6 h-full flex flex-col bg-gray-900 first:rounded-t-xl last:rounded-b-xl lg:first:rounded-l-xl lg:first:rounded-tr-none lg:last:rounded-r-xl lg:last:rounded-bl-none before:absolute before:inset-0 before:bg-gradient-to-b before:hover:from-transparent before:hover:via-transparent before:hover:to-cyan-500/10 before:via-80% before:-z-[1] before:last:rounded-b-xl lg:before:first:rounded-s-xl lg:before:last:rounded-e-xl lg:before:last:rounded-bl-none before:opacity-0 before:hover:opacity-100" href="#">
            <div class="mb-5">
              <svg class="flex-shrink-0 w-8 h-8" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.8875 15.3054C32.9242 16.2093 32.8209 17.1099 32.5811 17.9792C32.3447 18.8486 31.9716 19.6695 31.4787 20.4141C30.989 21.1593 30.3861 21.8167 29.6935 22.3607L29.6769 22.3745L23.019 27.563L19.7451 30.1433L17.7501 31.7089C17.6335 31.8024 17.5036 31.8716 17.3671 31.9201C17.2305 31.9686 17.084 31.9929 16.9374 31.9929C16.7942 31.9929 16.6477 31.9686 16.5111 31.9201C16.3745 31.8716 16.2447 31.8024 16.1281 31.7089L14.1331 30.1433L10.8591 27.563L4.24125 22.4057L4.20129 22.378L4.18796 22.3641C3.49187 21.8203 2.88904 21.1623 2.39611 20.4176C1.90319 19.6729 1.53016 18.8486 1.29036 17.9792C1.05056 17.1099 0.947313 16.2059 0.98395 15.3019C1.02392 14.3979 1.20044 13.5078 1.51018 12.6626L1.55348 12.5414L5.90654 0.747936C5.92875 0.69021 5.95539 0.634792 5.98648 0.581684C6.01534 0.528576 6.04976 0.478931 6.08972 0.43275C6.12747 0.38426 6.16855 0.339234 6.21295 0.297671C6.25736 0.258417 6.30399 0.221472 6.35284 0.186836C6.45609 0.121028 6.56267 0.0725381 6.67924 0.0448295C6.79248 0.0136573 6.91238 -0.000196993 7.02895 0.00673016C7.14885 0.0136573 7.26542 0.0379024 7.37533 0.0829289C7.48524 0.124492 7.59181 0.186836 7.68507 0.263035C7.72948 0.302289 7.77278 0.343852 7.81496 0.387724C7.85493 0.433905 7.89046 0.483549 7.92154 0.536658C7.95485 0.587457 7.98371 0.641719 8.00814 0.699446C8.03256 0.754863 8.05254 0.812589 8.06809 0.872625L11.0023 10.2139H22.8792L25.8134 0.872625C25.8289 0.812589 25.85 0.754863 25.8767 0.699446C25.9011 0.644029 25.93 0.589766 25.9633 0.536658C25.9944 0.485858 26.0299 0.437368 26.0699 0.391187C26.1098 0.345006 26.1531 0.302289 26.1997 0.263035C26.293 0.186836 26.3962 0.127955 26.5062 0.0829289C26.6194 0.0413659 26.736 0.0171209 26.8525 0.0101937C26.9724 0.00326659 27.089 0.0136573 27.2056 0.0448295C27.3188 0.0760017 27.4287 0.124492 27.5286 0.1903C27.5797 0.222627 27.6275 0.259571 27.6719 0.301134C27.7163 0.340388 27.7573 0.38426 27.7951 0.43275C27.8328 0.48124 27.8673 0.532039 27.8983 0.585148C27.9272 0.638256 27.9527 0.693673 27.9749 0.751399L32.3213 12.5483L32.3646 12.6696C32.6744 13.5112 32.8509 14.4014 32.8875 15.3054Z" fill="#E24329" />
                <path d="M32.8909 15.309C32.9275 16.2095 32.8243 17.1135 32.5845 17.9829C32.3447 18.8523 31.9717 19.6766 31.4787 20.4213C30.9858 21.1659 30.383 21.824 29.6902 22.3678L29.6736 22.3816L23.0157 27.5701C23.0157 27.5701 20.1881 25.3499 16.9374 22.7903L26.4795 15.2813C26.9092 14.9453 27.3588 14.6371 27.8218 14.3531C28.2847 14.0656 28.7643 13.8093 29.2539 13.5807C29.7468 13.3521 30.2498 13.1477 30.7593 12.978C31.2722 12.8049 31.7918 12.6628 32.3214 12.5485L32.3647 12.6698C32.6744 13.5149 32.8509 14.405 32.8909 15.309Z" fill="#FC6D26" />
                <path d="M16.9374 22.7903C20.1881 25.343 23.0191 27.5701 23.0191 27.5701L19.7451 30.1504L17.7501 31.716C17.6335 31.8095 17.5036 31.8788 17.3671 31.9273C17.2305 31.9758 17.084 32 16.9374 32C16.7942 32 16.6477 31.9758 16.5111 31.9273C16.3746 31.8788 16.2447 31.8095 16.1281 31.716L14.1331 30.1504L10.8591 27.5701C10.8591 27.5701 13.6868 25.343 16.9374 22.7903Z" fill="#FCA326" />
                <path d="M16.9374 22.7834C13.6834 25.343 10.8591 27.5632 10.8591 27.5632L4.24125 22.4059L4.20129 22.3782L4.18796 22.3643C3.49187 21.8205 2.88904 21.1625 2.39611 20.4178C1.90319 19.6731 1.53016 18.8488 1.29036 17.9794C1.05056 17.1101 0.947313 16.2061 0.98395 15.3021C1.02392 14.3981 1.20044 13.508 1.51018 12.6628L1.55348 12.5416C2.08304 12.6559 2.60261 12.7979 3.11552 12.9711C3.6251 13.1443 4.12801 13.3452 4.62094 13.5772C5.11053 13.8058 5.59014 14.0656 6.05309 14.3496C6.51604 14.6336 6.96233 14.9453 7.39531 15.2813L16.9374 22.7834Z" fill="#FC6D26" />
              </svg>

              <div class="mt-5">
                <p class="font-semibold text-5xl text-green-600">100%</p>
                <h3 class="mt-5 font-medium text-lg text-white">Maamuzi sahihi ya kibiashara</h3>
                <p class="mt-1 text-gray-400"> Hii ni changamoto kubwa kwa wafanyabiashara wengi, na kwa sababu hii biashara nyingi zimeporomoka. Unataka kupanua biashara labda kwa kuongeza
                  bidhaa mpya dukani, kufanya matumizi ya kibinafsi,kuongeza wafanya kazi, au kuongeza ofisi nyingine, Ili maamuzi yako yawe chanya ni lazima ujue faida ya kila bidhaa, na faida ya duka kwa ujumla kwa kipindi fulani cha wakati.
                  Kujua haya siyo rahisi, ndiyo maana mfumo upo kwa ajili ya kurahisha hilo.

                </p>
              </div>
            </div>
            <p class="mt-auto">
              <span class="font-medium text-sm text-cyan-500 pb-1 border-b-2 border-gray-700 group-hover:border-cyan-500 transition focus:outline-none group-focus:border-cyan-500">
                Soma zaidi
              </span>
            </p>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Card Grid -->

      </div>
    </div>
    <!-- End Case Stories -->

    <!-- Features -->
  <div class="bg-gray-900" id="features">
    <div class="max-w-5xl px-4 xl:px-0 py-10 lg:py-20 mx-auto">
    <div class="aspect-w-16 aspect-h-7">
      <img class="w-full object-cover rounded-xl" src="{{ asset('images/banner_2.png')}}" alt="Features Image">
    </div>

    <!-- Grid -->
    <div class="mt-5 lg:mt-16 grid lg:grid-cols-3 gap-8 lg:gap-12">
      <div class="lg:col-span-1">
        <h2 class="font-bold text-2xl md:text-3xl text-white">
          Mfumo una vipengele(features) vyote muhimu vinavyohitajika
        </h2>
        <p class="mt-2 md:mt-4 text-gray-400">
          Kwa zaidi ya miaka miwili, mfumo huu umekuwa ukiandaliwa na tumekuwa tuukipokea mapendekezo mbalimbali kutoka kwa wateja wetu wanaotumia mfumo huu. Hii ni baadhi ya vipengele muhimu:-
        </p>
      </div>
      <!-- End Col -->

      <div class="lg:col-span-2">
        <div class="grid sm:grid-cols-2 gap-8 md:gap-12">
          <!-- Icon Block -->
          <div class="flex gap-x-5">
            <svg class="shrink-0 mt-1 size-6 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="10" x="3" y="11" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" x2="8" y1="16" y2="16"/><line x1="16" x2="16" y1="16" y2="16"/></svg>
            <div class="grow">
              <h3 class="text-lg font-semibold text-cyan-500">
                Usajili wa duka zaidi ya moja - akaunti moja
              </h3>
              <p class="mt-1 text-gray-400">
                Ukisajili kampuni yako kwenye mfumo, unaweza kufungua matawi yote ya biashara yako sehemu moja. Na unaweza kuona kazi za kila tawi(duka).
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex gap-x-5">
            <svg class="shrink-0 mt-1 size-6 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"/></svg>
            <div class="grow">
              <h3 class="text-lg font-semibold text-cyan-500">
                Matumizi
              </h3>
              <p class="mt-1 text-gray-400">
                Wauzaji wanaweza kuingiza matumizi waliyofanya kwa siku kwenye mfumo na mfumo ukakusanya matumizi yao pamoja na mauzo yao kutambua mauzo yao kamili(net sales).
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex gap-x-5">
            <svg class="shrink-0 mt-1 size-6 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
            <div class="grow">
              <h3 class="text-lg font-semibold text-cyan-500">
                Hesabu ya stoku
              </h3>
              <p class="mt-1 text-gray-400">
                Mfumo unaonyesha hesabu ya stoku ya kila bidhaa kuonyesha ni ngapi zimeuzwa, ngapi zimebaki, ngapi zimeharibika, ngapi zimeisha. Vyote hivi unavipata bila kushika calculator wala kutumia excel,
                Mfumo unaandaa kwa usahihi wa hali ya juu.
              </p>
            </div>
          </div>
          <!-- End Icon Block -->

          <!-- Icon Block -->
          <div class="flex gap-x-5">
            <svg class="shrink-0 mt-1 size-6 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <div class="grow">
              <h3 class="text-lg font-semibold text-cyan-500">
                Mauzo ya mkopo
              </h3>
              <ri class="mt-1 text-gray-400">
                Wauzaji wanaweza kuuza kwa mkopo kwenye mfumo na wakaweka tarehe ambayo deni linatakiwa kulipwa, Kisha mfumo
                utatunza taarifa hiyo na kumkumbusha muuzaji ikiwa tarehe ya kulipa deni imepitiliza. Deni linaweza kulipwa kwenye mfumo na mfumo utatoa 
                ripoti ya madeni ambayo muuzaji amepokea.
              </r>
            </div>
          </div>
          <!-- End Icon Block -->

          <div class="flex gap-x-5">
            <svg class="shrink-0 mt-1 size-6 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <div class="grow">
              <h3 class="text-lg font-semibold text-cyan-500">
                Rekodi ya oda za wateja
              </h3>
              <ri class="mt-1 text-gray-400">
                <i>Je mteja akipiga simu umuwekee oda yake unaandika kwenye daftari?</i> Mfumo wa mauzodata umelenga kukomesha matumizi ya daftari kabsa.
                Utaweka oda zote za wateja wako kwenye mfumo na kisha mteja akija kuchukua oda yake unamuuzia kirahisi.
              </r>
            </div>
          </div>

          <div class="flex gap-x-5">
            <svg class="shrink-0 mt-1 size-6 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <div class="grow">
              <h3 class="text-lg font-semibold text-cyan-500">
                Ripoti za mapato na matumizi
              </h3>
              <ri class="mt-1 text-gray-400">
                Mfumo unatoa ripoti mbalimbali zitakazokusaidai kuelewa hali ya biashara yako vizuri na kufanya maamuzi sahihi ya kibiashara.
                Unapata ripoti za mauzo ya bidhaa, matumizi, faida, mauzo ya kila muuzaji, hasara, matumizi ya kila muuzaji, bidhaa zinazouzika sana, bidhaa ambazo haziuziki(dead stocks), bidhaa zilizoisha, zilizo haribika, Mauzo na matumizi ya kila tawi na nyingine nyingi.
              </r>
            </div>
          </div>

        </div>
      </div>
      <!-- End Col -->
    </div>
  </div>
  <!-- End Grid -->
</div>
<!-- End Features -->

    <!-- Testimonials -->
    <div class="bg-gray-900" id="pricing">
      <div class="max-w-5xl px-4 xl:px-0 py-10 lg:py-20 mx-auto">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14" id="pricing">
          <h2 class="text-white font-semibold text-2xl md:text-4xl md:leading-tight">Gharama za mfumo</h2>
          <p class="mt-1 text-gray-400">Gharama siyo chochote ikiwa hujapa unachokihitajia, tunatanguliza ubora wa huduma yetu kwa wateja wetu. Ukiona thamani 
            ya huduma yetu na tukajua hali ya biashara yako. Tunazungumza kulingana na mahitaji yako, amini kwamba hatutashindwana ikiwa umependa huduma zetu.
          </p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:gap-10 lg:gap-16 md:items-center">
          <div>
            <!-- Blockquote -->
            <blockquote>
              <p class="font-medium text-xl text-white md:text-2xl md:leading-normal xl:text-3xl xl:leading-normal">
                Tunafanya kazi bega kwa bega na wateja wetu kutatua changamoto zao, simu yako ni ya muhimu kwetu. Tunatazamia kufanya kazi kwa ukaribu na wafanya biashara
                ambao wangependa kupunguza majumu yao kwenye biashara zao huku wakiongeza ufanisi wa biashara zao.
              </p>

              <!-- <footer class="mt-6">
                <div class="flex items-center">
                  <div class="md:hidden flex-shrink-0">
                    <img class="size-12 rounded-full" src="{{ asset('software.png')}}" alt="Mauzodata dashboard">
                  </div>
                  <div class="ms-4 md:ms-0">
                    <div class="text-base font-semibold text-white">Alkado</div>
                    <div class="text-xs text-gray-400">Director Payments & Risk | Airbnb</div>
                  </div>
                </div>
              </footer> -->
            </blockquote>
            <!-- End Blockquote -->
          </div>
          <!-- End Col -->

          <div class="hidden md:block mb-24 md:mb-0">
            <img class="rounded-xl" src="{{ asset('software.png')}}">
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->
      </div>
    </div>
    <!-- End Testimonials -->

    <!-- Stats -->
    <div class="bg-gray-900">
      <div class="max-w-5xl px-4 xl:px-0 py-10 mx-auto">
        <div class="border border-gray-800 rounded-xl">
          <div class="p-4 lg:p-8 bg-gradient-to-bl from-gray-800 via-gray-900 to-gray-950 rounded-xl">
            <div class="grid grid-cols-1 sm:grid-cols-3 items-center gap-y-20 gap-x-12">
              <!-- Stats -->
              <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-gray-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                <svg class="flex-shrink-0 size-6 sm:size-8 text-cyan-500 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m11 17 2 2a1 1 0 1 0 3-3" />
                  <path d="m14 14 2.5 2.5a1 1 0 1 0 3-3l-3.88-3.88a3 3 0 0 0-4.24 0l-.88.88a1 1 0 1 1-3-3l2.81-2.81a5.79 5.79 0 0 1 7.06-.87l.47.28a2 2 0 0 0 1.42.25L21 4" />
                  <path d="m21 3 1 11h-2" />
                  <path d="M3 3 2 14l6.5 6.5a1 1 0 1 0 3-3" />
                  <path d="M3 4h8" />
                </svg>
                <div class="mt-3 sm:mt-5">
                  <h3 class="text-lg sm:text-3xl font-semibold text-white">50+</h3>
                  <p class="mt-1 text-sm sm:text-base text-gray-400">Wanaotumia mfumo wetu</p>
                </div>
              </div>
              <!-- End Stats -->

              <!-- Stats -->
              <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-gray-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                <div class="flex justify-center items-center -space-x-5">
                  <img class="relative z-[2] flex-shrink-0 size-8 rounded-full border-[3px] border-gray-800" src="https://images.unsplash.com/photo-1601935111741-ae98b2b230b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                  <img class="relative z-[1] flex-shrink-0 size-8 rounded-full border-[3px] border-gray-800 -mt-7" src="https://images.unsplash.com/photo-1570654639102-bdd95efeca7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Image Description">
                  <img class="relative flex-shrink-0 size-8 rounded-full border-[3px] border-gray-800" src="https://images.unsplash.com/photo-1679412330254-90cb240038c5?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=2.5&amp;w=320&amp;h=320&amp;q=80" alt="Image Description">
                </div>
                <div class="mt-3 sm:mt-5">
                  <h3 class="text-lg sm:text-3xl font-semibold text-white">99%</h3>
                  <p class="mt-1 text-sm sm:text-base text-gray-400">Wafurahia kutumia mfumo wa mauzodata</p>
                </div>
              </div>
              <!-- End Stats -->

              <!-- Stats -->
              <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-gray-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                <svg class="flex-shrink-0 size-6 sm:size-8 text-cyan-500 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17" />
                  <path d="m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9" />
                  <path d="m2 16 6 6" />
                  <circle cx="16" cy="9" r="2.9" />
                  <circle cx="6" cy="5" r="3" />
                </svg>
                <div class="mt-3 sm:mt-5">
                  <h3 class="text-lg sm:text-3xl font-semibold text-white">100%</h3>
                  <p class="mt-1 text-sm sm:text-base text-gray-400">Wamepanua biashara yao kirahisi</p>
                </div>
              </div>
              <!-- End Stats -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Stats -->

    <!-- Approach -->
    <div class="bg-gray-900" id="approach">
      <!-- Approach -->
      <div class="max-w-5xl px-4 xl:px-0 py-10 lg:pt-20  mx-auto">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
          <h2 class="text-white font-semibold text-2xl md:text-4xl md:leading-tight">Lengo letu</h2>
          <p class="mt-1 text-gray-400">Kurahisisha uendeshaji wa maduka ya kati na makubwa na kufanya uendeshaji wa biashara yenye mafanikio uwezekane hata kwa mtu asiye na elimu ya kibiashara.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
          <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
            <img class="w-full object-cover rounded-xl" src="{{ asset('welcome/get_software.jpg')}}" alt="General manajor talking to sellers">
          </div>
          <!-- End Col -->

          <!-- Timeline -->
          <div>
            <!-- Heading -->
            <div class="mb-4">
              <h3 class="text-xs font-medium uppercase text-cyan-500">
                Kupata software hii
              </h3>
            </div>
            <!-- End Heading -->

            <!-- Item -->
            <div class="flex gap-x-5 ms-1">
              <!-- Icon -->
              <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-gray-800">
                <div class="relative z-10 size-8 flex justify-center items-center">
                  <span class="flex flex-shrink-0 justify-center items-center size-8 border border-gray-800 text-cyan-500 font-semibold text-xs uppercase rounded-full">
                    1
                  </span>
                </div>
              </div>
              <!-- End Icon -->

              <!-- Right Content -->
              <div class="grow pt-0.5 pb-8 sm:pb-12">
                <p class="text-sm lg:text-base text-gray-400">
                  <span class="text-white">Wasiliana nasi:</span>
                  Ili kupata maelezo kamili na majibu ya maswali yako, wasiliana nasi kupitia 0764940382.
                </p>
              </div>
              <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5 ms-1">
              <!-- Icon -->
              <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-gray-800">
                <div class="relative z-10 size-8 flex justify-center items-center">
                  <span class="flex flex-shrink-0 justify-center items-center size-8 border border-gray-800 text-cyan-500 font-semibold text-xs uppercase rounded-full">
                    2
                  </span>
                </div>
              </div>
              <!-- End Icon -->

              <!-- Right Content -->
              <div class="grow pt-0.5 pb-8 sm:pb-12">
                <p class="text-sm lg:text-base text-gray-400">
                  <span class="text-white">Tunasajili biashara yako kwenye mfumo:</span>
                  Baada ya kuwasiliana nasi, tutasajili duka au biashara yako kwenye mfumo ili uanze kuuza kidigitali.
                </p>
              </div>
              <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5 ms-1">
              <!-- Icon -->
              <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-gray-800">
                <div class="relative z-10 size-8 flex justify-center items-center">
                  <span class="flex flex-shrink-0 justify-center items-center size-8 border border-gray-800 text-cyan-500 font-semibold text-xs uppercase rounded-full">
                    3
                  </span>
                </div>
              </div>
              <!-- End Icon -->

              <!-- Right Content -->
              <div class="grow pt-0.5 pb-8 sm:pb-12">
                <p class="text-sm md:text-base text-gray-400">
                  <span class="text-white">Tutakufundisha jinsi ya kutumia:</span>
                  Kukufundisha ni bure na haichukui siku mbili kwa maana mfumo ni rahisi kuutumia.
                </p>
              </div>
              <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5 ms-1">
              <!-- Icon -->
              <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-gray-800">
                <div class="relative z-10 size-8 flex justify-center items-center">
                  <span class="flex flex-shrink-0 justify-center items-center size-8 border border-gray-800 text-cyan-500 font-semibold text-xs uppercase rounded-full">
                    4
                  </span>
                </div>
              </div>
              <!-- End Icon -->

              <!-- Right Content -->
              <div class="grow pt-0.5 pb-8 sm:pb-12">
                <p class="text-sm md:text-base text-gray-400">
                  <span class="text-white">Duka mkononi:</span>
                  Mpaka hapo sasa duka lako litakuwa, mkononi. Popote ulipo duniani utaweza kuona maendeleo ya duka lako na ni nini wafanya kazi wako wanafanya.
                </p>
              </div>
              <!-- End Right Content -->
            </div>
            <!-- End Item -->

            <a href="tel:+255764940382" class="group inline-flex items-center gap-x-2 py-2 px-3 bg-cyan-500 font-medium text-sm text-gray-800 rounded-full focus:outline-none" href="#">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                <path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition" d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                <path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition" d="M14.05 6A5 5 0 0 1 18 10"></path>
              </svg>
              Tupigie sasa!
            </a>
          </div>
          <!-- End Timeline -->
        </div>
        <!-- End Grid -->
      </div>
    </div>
    <!-- End Approach -->

    <!-- Contact -->
    <div class="bg-gray-900" id="contact">
      <div class="max-w-5xl px-4 xl:px-0 py-10 lg:py-20 mx-auto">
        <!-- Title -->
        <div class="max-w-3xl mb-10 lg:mb-14">
          <h2 class="text-white font-semibold text-2xl md:text-4xl md:leading-tight">Wasiiana nasi</h2>
          <p class="mt-1 text-gray-400">Popote ulipo - tutakufikia.</p>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 lg:gap-x-16">
          <div class="md:order-2 border-b border-gray-800 pb-10 mb-10 md:border-b-0 md:pb-0 md:mb-0">
              <a class="group inline-flex items-center gap-x-2 font-medium text-sm text-cyan-500 decoration-2 hover:underline focus:outline-none focus:underline" href="https://app.jotform.com/243172835668567">
                    Tutumie ujumbe mfupi kupitia hiki kiunganishi
                    <svg class="flex-shrink-0 size-4 transition group-hover:translate-x-0.5  group-focus:translate-x-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                      <path d="m12 5 7 7-7 7" />
                    </svg>
              </a>
          </div>
          <!-- End Col -->

          <div class="space-y-14">
            <!-- Item -->
            <div class="flex gap-x-5">
              <svg class="flex-shrink-0 size-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
              <div class="grow">
                <h4 class="text-white font-semibold">Anwani yetu:</h4>

                <address class="mt-1 text-gray-400 text-sm not-italic">
                  P.O Box 1024,<br>
                  Veta, Mbeya, Tanzania
                </address>
              </div>
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5">
              <svg class="flex-shrink-0 size-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z" />
                <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10" />
              </svg>
              <div class="grow">
                <h4 class="text-white font-semibold">Wasiliana nasi kwa barua pepe:</h4>

                <a class="mt-1 text-gray-400 text-sm" href="#mailto:example@site.co" target="_blank">
                  mauzodata@gmail.com
                </a>
              </div>
            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="flex gap-x-5">
              <svg class="flex-shrink-0 size-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="m3 11 18-5v12L3 14v-3z" />
                <path d="M11.6 16.8a3 3 0 1 1-5.8-1.6" />
              </svg>
              <div class="grow">
                <h4 class="text-white font-semibold">Mawasiliano kwa simu</h4>
                <p class="mt-1 text-gray-400">0764940382 / 0678940382.</p>
                <p class="mt-2">
                  <a class="group inline-flex items-center gap-x-2 font-medium text-sm text-cyan-500 decoration-2 hover:underline focus:outline-none focus:underline" href="tel:+255764940382">
                    Piga simu
                    <svg class="flex-shrink-0 size-4 transition group-hover:translate-x-0.5  group-focus:translate-x-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M5 12h14" />
                      <path d="m12 5 7 7-7 7" />
                    </svg>
                  </a>
                </p>
              </div>
            </div>
            <!-- End Item -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Grid -->
      </div>
    </div>
    <!-- End Contact -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="relative overflow-hidden bg-gray-900">
    <svg class="absolute -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745" height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127" class="stroke-gray-700/50" stroke="currentColor" />
      <path d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136" class="stroke-gray-700/50" stroke="currentColor" />
    </svg>

    <div class="relative z-10">
      <div class="w-full max-w-5xl px-4 xl:px-0 py-10 lg:pt-16 mx-auto">
        <div class="inline-flex items-center">
         <img class="w-16 h-16" src="{{ asset('logo.png') }}" alt="Mauzodata">

          <div class="border-s border-gray-700 ps-5 ms-5">
            <p class="text-sm text-gray-400">{{ date('Y') }} Mauzodata Co.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <div class="fixed bottom-2 sm:bottom-4 end-2 sm:end-4 ms-2 z-[70] bg-gray-900 border border-gray-800 rounded-lg dark:bg-gray-800">
    <!-- Button Group -->
    <div class="flex items-center gap-px">
      <p class="inline-flex gap-x-2 text-xs text-white py-1 px-2 relative before:absolute before:top-1/2 before:-start-0.5 before:z-10 before:w-px before:h-4 before:bg-white/20 before:-translate-y-1/2 first:before:hidden">
        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10" />
          <path d="M12 16v-4" />
          <path d="M12 8h.01" />
        </svg>
        Wasiliana nasi kupitia whatsapp
      </p>

      <!-- Templates Dropdown -->
      <div class="hs-dropdown relative inline-flex [--strategy:absolute] [--placement:bottom-right] before:absolute before:top-1/2 before:-start-px before:z-10 before:w-px before:h-4 before:bg-white/20 before:-translate-y-1/2 first:before:hidden">
        <button type="button" class="hs-dropdown-toggle py-2.5 sm:py-1.5 px-2 inline-flex justify-center items-center gap-x-2 text-xs rounded-e-lg border border-transparent bg-gray-900 text-white hover:bg-gray-950 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-900 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:bg-gray-700">
          0678940382
          <svg class="hs-dropdown-open:rotate-180 flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6" />
          </svg>
        </button>
      </div>
      <!-- End Templates Dropdown -->
    </div>
    <!-- End Button Group -->
  </div>

  <!-- JS Implementing Plugins -->

  <!-- JS INITIALIZATIONS -->
  <script type="text/javascript" src="https://form.jotform.com/jsform/243172598884573"></script>
  <script>
    (function () {
      function textareaAutoHeight(el, offsetTop = 0) {
        el.style.height = 'auto';
        el.style.height = `${el.scrollHeight + offsetTop}px`;
      }

      (function () {
        const textareas = [
          '#hs-tac-message'
        ];

        textareas.forEach((el) => {
          const textarea = document.querySelector(el);
          const overlay = textarea.closest('.hs-overlay');

          if (overlay) {
            const { element } = HSOverlay.getInstance(overlay, true);

            element.on('open', () => textareaAutoHeight(textarea, 3));
          } else textareaAutoHeight(textarea, 3);

          textarea.addEventListener('input', () => {
            textareaAutoHeight(textarea, 3);
          });
        });
      })();
    })()
  </script>
</body>
</html>