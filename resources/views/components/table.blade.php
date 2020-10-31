<table class="table-auto w-full text-center">

    <thead>
        <tr>
            <th>Project</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{$project->title}}</td>
            <td><a href="/project/{{$project->id}}">Edit</a></td>
            <td>Delete</td>
        </tr>
        @endforeach
    </tbody>
</table>
