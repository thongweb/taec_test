@extends('layout.base')

@section('body')
<h3 class="text-center my-3">DATABASE TABLE STUDENTS</h3>
<div>
    <div class="container bg-white">
    <table class="table mt-5">
        <thead>
            <tr>
                <th>Id</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Desired score</th>
                <th>Branch</th>
                <th>Token</th>
                <th>Exam date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->desired_score }}</td>
                    <td>{{ $student->branch }}</td>
                    <td>{{ $student->remember_token }}</td>
                    <td>{{ $student->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection