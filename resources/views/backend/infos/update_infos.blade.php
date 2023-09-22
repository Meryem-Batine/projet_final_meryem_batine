<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upfdate{{$info->id}}">
    update
</button>

<!-- Modal -->
<div class="modal fade" id="upfdate{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="upfdate{{$info->id}}Label"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upfdate{{$info->id}}Label">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route("info.update",$info->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="text-start" for="ville"> ville : </label>
                        <input class="form-control" type="text" name="ville" id="ville" required value="{{old("ville",$info->ville)}}">
                    </div>
                    <div>
                        <label class="text-start" for="adrs"> adrs : </label>
                        <input class="form-control" type="text" name="adrs" id="adrs" required value="{{old("adrs",$info->adrs)}}">
                    </div>
                    <div>
                        <label class="text-start" for="phone"> phone : </label>
                        <input class="form-control" type="text" name="phone" id="phone" required value="{{old("phone",$info->phone)}}">
                    </div>
                    <div>
                        <label class="text-start" for="emploi"> emploi : </label>
                        <input class="form-control" type="text" name="emploi" id="emploi" required value="{{old("emploi",$info->emploi)}}">
                    </div>
                    <div>
                        <label class="text-start" for="email"> email : </label>
                        <input class="form-control" type="text" name="email" id="email" required value="{{old("email",$info->email)}}">
                    </div>
                    <div>
                        <label class="text-start" for="title"> title : </label>
                        <input class="form-control" type="title" name="title" id="title" required value="{{old("title",$info->title)}}">
                    </div>
                    
                    <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>