@extends('layout.base')

@section('body')
<h3 class="text-center my-3">EXAM RESULTS</h3>
<div>
    <div class="container bg-white">
    <table class="table mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Full name</th>
                <th>Email</th>
                <th>Phone</th>
                <th class="text-center">Desired score</th>
                <th>Branch</th>
                <th>Exam date</th>
                <th>Exam time</th>
                <th>Token</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($result as $rs)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $rs->student->first_name }}</td>
                    <td>{{ $rs->student->email }}</td>
                    <td>{{ $rs->student->phone }}</td>
                    <td class="text-center">{{ $rs->student->desired_score }}</td>
                    <td>{{ $rs->student->branch }}</td>
                    <td>{{ $rs->date_of_exam }}</td>
                    <td>{{ $rs->exam_time }}</td>
                    <td>{{ $rs->student->remember_token }}</td>
                    <td><a href="{{url('/admin/view-score/'.$rs->student->remember_token)}}" class="btn btn-success btn-sm">XEM</a></td>
                </tr>
                <?php $i++ ?>
            @endforeach
            
        </tbody>
    </table>
    </div>
</div>
@endsection