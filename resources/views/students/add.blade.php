<form action="{{route('students.store')}}" method="POST">
   @csrf
    <input type="text" placeholder="firstname" name="fname">
    <input type="text" placeholder="lastname" name="lname">
    <input type="numbers" placeholder="age" name="age">
    <button type="submit">Submit</button>
</form>