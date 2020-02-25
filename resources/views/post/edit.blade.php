{{-- <form action="{{route('posts.update',$posts->id)}}" method="POST">
    @method('patch')
        @csrf
        <div class="form-group">

            <input type="text" value="{{$posts ->title}}" name="title">
        </div>
        <div class="form-group">

            <input type="text" value="{{$posts ->body}}" name="body">
        </div>
        <button type="submit" class="btn btn-succes">Update</button>
    </form> --}}


    {{-- <div class="container">
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Edit
            </button>
          
            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Forming</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                  
                     <form action="{{route('posts.update',$posts->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
          
                            <input type="text" value="{{$posts ->title}}" name="title" class="form-control">
                        </div>
                        <div class="form-group">
          
                            <input type="text" pvalue="{{$posts ->body}}" name="body" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  
                </div>
              </div>
            </div>
            
          </div>
           --}}