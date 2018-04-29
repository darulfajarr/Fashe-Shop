
@if ($paginator->hasPages())
<div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
  <ul class="pagination">
        
<li class="pagination-item--wide first"> <a class="pagination-link--wide first" href="{{ $paginator->previousPageUrl() }}">Sebelumnya</a> </li>      

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination-item first-number"> <a class="pagination-link">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                         <li class="pagination-item is-active">{{ $page }}</li>
                    @else
                        <li class="pagination-item"> <a class="pagination-link" href="{{ $url }}">{{ $page }}</a></lii>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
    <li class="pagination-item--wide last"> <a class="pagination-link--wide last" href="{{ $paginator->nextPageUrl() }}">Selanjutnya</a> </li>
        @else
            <li class="pagination-item--wide last"> <a class="pagination-link--wide last" >Selanjutnya</a> </li>
        @endif
    </ul>
@endif
  </li>
  </ul>
  </div>

  
  