<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#email{{ $email->id }}">
    Description
    </button>
    
    
    <!-- Modal -->
    <div class="modal fade" id="email{{ $email->id }}" tabindex="-1" role="dialog"
        aria-labelledby="email{{ $email->id }}Label" aria-hidden="true">
        <div class="modal-dialog" style="max-height: 80vh" role="document">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title" id="email{{ $email->id }}Label">Description</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <p class="text-left ">{{ $email->message }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>