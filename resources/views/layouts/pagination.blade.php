<div class="card-footer d-flex align-items-center">
   @if ($paginator->lastPage() > 1)
      <p class="m-0 text-muted">Showing <span>{{ $paginator->firstItem() }}</span> to
         <span>{{ $paginator->lastItem() }}</span> of <span>{{ $paginator->total() }}</span>
         entries
      </p>
      <ul class="pagination m-0 ms-auto">
         <li class="page-item {{ $paginator->currentPage() == 1 ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->url(1) }}" tabindex="-1" aria-disabled="true">
               <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
               <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <polyline points="15 6 9 12 15 18"></polyline>
               </svg>
               prev
            </a>
         </li>

         @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="page-item {{ $paginator->currentPage() == $i ? ' active' : '' }}">
               <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
         @endfor

         <li class="page-item {{ $paginator->currentPage() == $paginator->lastPage() ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->url($paginator->currentPage() + 1) }}">
               next
               <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
               <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <polyline points="9 6 15 12 9 18"></polyline>
               </svg>
            </a>
         </li>
      </ul>
   @endif
</div>
