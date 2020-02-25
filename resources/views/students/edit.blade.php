<form action="{{route('students.update' ,$students->id)}}" method="POST">
    @method('patch')
        @csrf
         <input type="text" value="{{$students->firstname}}" name="fname">
         <input type="text" value="{{$students->lastname}}" name="lname">
         <input type="numbers" value="{{$students->age}}" name="age">
         <button type="submit">Submit</button>
     </form>