
@if ($paginator->hasPages())
    <div class="d-flex justify-content-between">
        @if ($paginator->onFirstPage())
            <button class="btn btn-secondary">Previous</button>
        @else
            <button wire:click='previousPage' class="btn btn-primary diseable">Previous</button>
        @endif


        <div class="d-flex">
        @foreach ($elements as $element)

            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="btn btn-light" wire:click="gotoPage({{ $page }})"> {{ $page }} </span>
                @else
                    <span class="btn btn-light" wire:click="gotoPage({{ $page }})"> {{ $page }} </span>
                @endif
            @endforeach

        @endforeach
        </div>


        @if ($paginator->hasMorePages())
            <button wire:click='nextPage' class="btn btn-primary">Next</button>
        @else
            <button class="btn btn-secondary">Next</button>
        @endif
    </div>
@endif
