 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
     <meta name="author" content="Creative Tim">
     <title>Scholar Scroll</title>
     <!-- Favicon -->
     <link rel="icon" href="" type="image/png">
     <!-- Fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
     <!-- Icons -->
     <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
     <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
     <!-- Argon CSS -->
     <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.1.0') }}" type="text/css">
 </head>


 <body>
     {{-- SIDEBAR COMPONENT --}}
     <x-sidebar />

     <div class="main-content" id="panel">
         {{-- TOPNAV COMPONENT --}}
         <x-topnav />

         {{-- HEADER COMPONENT --}}
         <x-header />

         {{-- CONTENT --}}
         <div class="container-fluid mt--6">
             <div class="row">
                 <div class="col-xl-3 col-md-6">
                     {{ $slot }}
                 </div>
             </div>
         </div>
     </div>

     {{-- FOOTER --}}
     <x-footer />

     <!-- Argon Scripts -->
     <!-- Core -->
     <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
     <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('vendor/js-cookie/js.cookie.js') }}"></script>
     <script src="{{ asset('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
     <script src="{{ asset('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
     <!-- Argon JS -->
     <script src="{{ asset('js/argon.js?v=1.1.0') }}"></script>
 </body>

 </html>
