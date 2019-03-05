
@if ($paginate->lastPage() > 1)
    <nav>
        <a class="{{ ($paginate->currentPage() == 1) ? 'disabled' : '' }}" href="{{ $paginate->url(1) }}">&lt;</a>
        @for ($i = 1; $i <= $paginate->lastPage(); $i++)
            <a class="{{ ($paginate->currentPage() == $i) ? 'current' : '' }}" href="{{ $paginate->url($i) }}">{{ $i }}</a>
        @endfor
        <a class="{{ ($paginate->currentPage() == $paginate->lastPage()) ? 'disabled' : '' }}" href="{{ $paginate->url($paginate->currentPage()+1) }}" >&gt;</a>
    </nav>
@endif