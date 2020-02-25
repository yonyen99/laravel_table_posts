<a href="{{route('students.create')}}"><button>Add</button></a>
<table>
    <tr>
        <th>id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>age</th>
        <th>actions</th>
    </tr>
    @foreach ($students as $student)
        <tr>
        <td>{{$student ->id}}</td>
        <td>{{$student ->firstname}}</td>
        <td>{{$student ->lastname}}</td>
        <td>{{$student ->age}}</td>
        <td>
        <a href="{{route('students.edit',$student->id)}}"><button type="submit">Edit</button></a>
        <form action="{{route('students.destroy',$student->id)}}" method="POST">
        @method('delete')
        @csrf
        <button type="submit">delete</button>
        </form>
        </td>
        </tr>
    @endforeach
</table>