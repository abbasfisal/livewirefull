<div class="col-lg  border ">
    <div class="col-lg-12">
        <div class="form-inline justify-content-center mt-5">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="inputPassword2" placeholder="Enter Your Mind Text">
            </div>
            <button type="submit" class="btn btn-primary mb-2" wire:click="addComment">Add Your Mind text</button>
        </div>
        <br/>
        <div class="col-lg-6 justify-content-center">
            @foreach($comments as $comment)
                <div class="card-body shadow form justify-content-center  ">
                    <label class="text-info text-dark font-weight-bolder">{{$comment['creator']}}</label> |
                    <label class="text-primary">{{$comment['created_at']}}</label>
                    <p>{{$comment['body']}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
