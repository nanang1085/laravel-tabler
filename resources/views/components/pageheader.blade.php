<div class="page-header d-print-none">
   <div class="container-xl">
      <div class="row g-2 align-items-center">
         <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
               {{ $pretitle }}
            </div>
            <h2 class="page-title">
               {{ $pagetitle }}
            </h2>
         </div>

         {{ $slot }}

      </div>
   </div>
</div>
