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