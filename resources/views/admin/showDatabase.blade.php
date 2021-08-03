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
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td class="text-center">{{ $student->desired_score }}</td>
                    <td>{{ $student->branch }}</td>
                    <td>{{ $student->remember_token }}</td>
                    <td>{{ $student->created_at }}</td>
                    <td><a href="{{url('/admin/view-score/'.$student->remember_token)}}" class="btn btn-success btn-sm">XEM</a></td>
                </tr>
                <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection