<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    {{-- <a href="{{route('posts.create')}}"><button type="submit">Add</button></a> --}}

    <div class="container">
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Add Post
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
                  
                     <form action="{{route('posts.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
          
                            <input type="text" placeholder="title" name="title" class="form-control">
                        </div>
                        <div class="form-group">
          
                            <input type="text" placeholder="body" name="body" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                  
                </div>
              </div>
            </div>
            
          </div>
          

    <table class="table">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>body</th>
            <th>action</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
            <td>{{$post ->id}}</td>
            <td>{{$post ->title}}</td>
            <td>{{$post ->body}}</td>
            <td>

                {{-- <a href="{{route('posts.edit',$post->id)}}"><button type="submit"">Edit</button></a> --}}
                
                
                        {{-- <!-- Button to Open the Modal -->
                        <a href="{{route('posts.edit',$post->id)}}"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                          Edit
                        </button></a> --}}
                      
                       
                      
                        <div class="container">
                                <!-- Button to Open the Modal -->
                                <button href="{{route('posts.edit',$post->id)}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                                        Edit
                                </button>
                              
                                <!-- The Modal -->
                                <div class="modal" id="myModal1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                    
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h4 class="modal-title">Forming</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                
                                         <form action="{{route('posts.update',$post->id)}}" method="POST">
                                            @method('patch')
                                            @csrf
                                            <div class="form-group">
                              
                                                <input type="text" value="{{$post ->title}}" name="title" class="form-control">
                                            </div>
                                            <div class="form-group">
                              
                                                <input type="text" value="{{$post ->body}}" name="body" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </form>
                                      
                                    
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                    




                              <div class="container">
                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal${user_id}">
                                      Delete
                                    </button>
                                  
                                    <!-- The Modal -->
                                    <div class="modal" id="myModal${user_id}">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                          <!-- Modal Header -->
                                          <div class="modal-header">
                                            <h4 class="modal-title">Forming</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          </div>
                                          
                                          <!-- Modal body -->
                                          <div class="modal-body">
                                               <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" >Delete</button>
                                        </form>
                                          
                                           </div>
                                          
                                        
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>
                                  
                {{-- <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form> --}}


            </td>
            </tr>
        @endforeach 
    
    </table>
</body>
</html>
