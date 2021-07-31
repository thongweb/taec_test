@extends('layout.base')

@section('body')
<div class="test-content">
    <div class="container bg-white">
        <div class="form-header p-3 font-weight-bold">
            <h4 class="text-center"><u>IELTS PLACEMENT TEST</u></h4>
            <div class="form-group row">
                <dt class="col-sm-1">Name: </dt>
                <dd>{{ $student-> last_name }} {{ $student->first_name }}</dd>
            </div>
            <div class="form-group row">
                <dt class="col-sm-1">Phone: </dt>
                <dd>{{ $student-> phone }}</dd>
            </div>
            <div class="form-group row">
                <dt class="col-sm-1">Time left: </dt>
                <div id="countdown"><span id='minutes'></span></div>
            </div>
        </div>
        <input type="hidden" value="{{ $student->created_at }}" id="get-time">
        <form action="{{ url('/test/'.$student->remember_token) }}" id="test-form" method="POST">
            @csrf
            @include('test.listening')
            @include('test.reading')
            @include('test.writing')
            <input type="hidden" value="" name="exam_time" id="exam_time">
            <input class='btn btn-danger mt-2 text-white' id="btn-check-word" type="button" onclick="checkWords()" value="Check count words">
            <br>
            <input class='btn mt-4 btn-successs' type="submit" value='Hoàn thành'>
        </form>
    </div>
</div>

<script>
    // var startTime = document.getElementById('get-time').value;
    // var countDownDate = new Date(startTime);
    // countDownDate.setMinutes(countDownDate.getMinutes() + 45);
    // countDownDate = new Date(countDownDate);
    // // Update the count down every 1 second
    // var x = setInterval(function() {
    // // Get today's date and time
    // var now = new Date();
    // // Find the distance between now and the count down date
    // var distance = countDownDate - now;
        
    // // Time calculations for days, hours, minutes and seconds
    // var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    // var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // // Output the result in an element with id="demo"
    // document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s ";
    // document.getElementById("exam_time").value = (45 - minutes) + "m " + (60 - seconds) + "s ";
        
    // // If the count down is over, write some text 
    // if (distance < 0) {
    //     clearInterval(x);
    //     document.getElementById("test-form").submit()
    // }
    // }, 1000);
    function checkWords() {
        var contentWriting = document.getElementById('content-writing').value;
        var countString = contentWriting.match(/\w+/g).length;
        alert('You have ' + countString + ' words section writing.')
    }
        var myAudio = document.getElementById("myAudio");
        var pause = document.getElementById("pause");
        var isPlaying = false;

        function togglePlay() {
        isPlaying ? myAudio.pause() : myAudio.play();
        };

        myAudio.onplaying = function() {
        isPlaying = true;
        pause.setAttribute('disabled', true)
        };
</script>
@endsection