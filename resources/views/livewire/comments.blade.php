<div class="col-lg  border ">
    <div class="col-lg-12">
        <form class="form-inline justify-content-center mt-5" wire:submit.prevent="addComment">

            @error('newComment')
            <label class="alert-danger form-text">{{$message}}</label>
            @enderror
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control"
                       wire:model="newComment"
                       placeholder="Enter Your Mind Text">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Add Your Mind text</button>
            <br/>
            @if(session()->has('message'))
                <label class="alert-info">{{session('message')}}</label>
            @endif

        </form>
        <hr/>
        <br/>
        <div class="col-lg-6 justify-content-center">
            @foreach($comments as $comment)
                <div class="card-body border mt-2 form justify-content-center  ">

                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                         wire:click="remove({{$comment->id}})"
                         class="bi bi-x-square-fill float-right " style="cursor: pointer" fill="red"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                    </svg>

                    <label class="text-info text-dark font-weight-bolder">{{$comment->creator->name}}</label> |
                    <label class="text-primary">{{$comment->created_at->diffForHumans()}}</label>
                    <p>{{$comment->body}}</p>
                </div>
            @endforeach



        </div>

    </div>
    {{$comments->links()}}

</div>
