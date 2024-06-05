@extends('layouts.app')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>title</th>
                <th>description</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>project_url</th>
                <th>techonologies_used</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->start_date }}</td>
                <td>{{ $project->end_date }}</td>
                <td>{{ $project->project_url }}</td>
                <td>{{ $project->technologies_used }}</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection