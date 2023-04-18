<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta16
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <title>Laravel - Tabler Admin Template</title>
   <!-- CSS files -->
   <link href="{{ asset('dist/css/tabler.min.css?1668287865') }}" rel="stylesheet" />
   <link href="{{ asset('dist/css/tabler-flags.min.css?1668287865') }}" rel="stylesheet" />
   <link href="{{ asset('dist/css/tabler-payments.min.css?1668287865') }}" rel="stylesheet" />
   <link href="{{ asset('dist/css/tabler-vendors.min.css?1668287865') }}" rel="stylesheet" />
   <link href="{{ asset('dist/css/demo.min.css?1668287865') }}" rel="stylesheet" />

   <style>
      @import url('https://rsms.me/inter/inter.css');

      :root {
         --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
   </style>
</head>

<body>
   <script src="{{ asset('dist/js/demo-theme.min.js?1668287865') }}"></script>
   <div class="page">
      <!-- Sidemenu -->
      <x-sidemenu />
      <!-- Navbar -->
      <x-navbar />

      <div class="page-wrapper">

         {{ $slot }}

         <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
               <div class="row text-center align-items-center flex-row-reverse">
                  <div class="col-lg-auto ms-lg-auto">
                     <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item"><a href="./docs/" class="link-secondary">Documentation</a></li>
                        <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                        <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                              class="link-secondary" rel="noopener">Source code</a></li>
                        <li class="list-inline-item">
                           <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary"
                              rel="noopener">
                              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline"
                                 width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                 stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                 <path
                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                              </svg>
                              Sponsor
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                     <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">
                           Copyright &copy; 2022
                           <a href="." class="link-secondary">Tabler</a>.
                           All rights reserved.
                        </li>
                        <li class="list-inline-item">
                           <a href="./changelog.html" class="link-secondary" rel="noopener">
                              v1.0.0-beta16
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </footer>
      </div>
   </div>
   <!-- Libs JS -->
   <!-- Tabler Core -->
   <script src="{{ asset('dist/js/tabler.min.js?1668287865') }}" defer></script>
   <script src="{{ asset('/dist/js/demo.min.js?1668287865') }}" defer></script>
</body>

</html>
