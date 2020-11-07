<div class="container">
    <form wire:submit.prevent="addComment" class='flex justify-center' style="margin-top: 20px;">
        <h1 class="mb-30">Comments</h1>



        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class='form-group'>
            <div class="d-flex justify-content-start">
                <input type="text" class="form-control" wire:model.debounce.700ms='newComment' name="newComment">
                <button type='submit' class="btn btn-primary" wire:click="addComment">Add</button>
            </div>
        </div>
        <br>


        @foreach ($comments as $comment)
        <div class="card">
            <div class="card-header">
            <h4>{{ $comment->user->name }}   <small>  {{ $comment->created_at->diffForHumans() }}</small></h4>
            </div>
            <div class='card-body'>

                <div class="d-flex justify-content-between">
                    <p>
                        {{ $comment->body  }}
                    </p>

                    <a class="btn btn-danger text-white" wire:click="remove({{ $comment->id }})">
                        DELETE
                    </a>
                </div>


            </div>
        </div>
        @endforeach
            {{ $comments->links("pagination_links") }}
    </form>
</div>
