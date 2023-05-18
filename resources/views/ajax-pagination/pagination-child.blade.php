<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Class</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->Name }}</td>
        <td>{{ $student->roll }}</td>
        <td>{{ $student->class }}</td>
    </tr>
    @endforeach 
</table>
{{ $students->links() }}