@extends('layout.base')

@section('body')
<div class="test-content">
    <div class="container bg-white position-relative">
        <div class="form-header p-1 p-md-3 font-weight-bold">
            <h4 class="text-center m-0"><u>IELTS PLACEMENT TEST</u></h4>
            <div class="col-12 p-0 d-flex flex-lg-row flex-column">
                <div class="d-flex col-md-6 col-12 pt-2 px-0">
                    <dt class="col-md-2 p-0 col-2 col-lg-1">Name:  </dt>
                    <dd class="col-md-8 col-10">{{ $student-> last_name }} {{ $student->first_name }}</dd>
                </div>
                <div class="d-flex col-md-6 col-12 px-0">
                    <dt class="col-md-3 col-4 pt-2 p-0 col-lg-3">Time left: </dt>
                    <div class="col-md-8 col-8" id="countdown"><span id='minutes'></span></div>
                </div>
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
            <input class='btn my-4 btn-successs' type="submit" value='Hoàn thành'>
        </form>
    </div>
</div>

<script>
    // var showAlert = true;
    // var startTime = document.getElementById('get-time').value;
    // var countDownDate = new Date(startTime.replace(/-/g, '/'));
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
    
    // if (showAlert && minutes < 5) {
    //     alert('Time left 5 minutes')
    //     showAlert = false;
    // }
    // // If the count down is over, write some text 
    // if (distance < 0) {
    //     clearInterval(x);
    //     document.getElementById("test-form").submit()
    // }
    // }, 1000);

    // enter note submit
    document.querySelectorAll("input[type='input']").forEach((e) => {
        e.addEventListener('keydown', function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
            }
        })
    })
    
    // check word
    function checkWords() {
        var contentWriting = document.getElementById('content-writing').value;
        var countString = contentWriting.match(/\w+/g).length;
        alert('You have ' + countString + ' words section writing.')
    }

    // audio 1
    var myAudio = document.getElementById("myAudio-1");
    myAudio.onplaying = function() {
    document.getElementById('audio-1').style.pointerEvents = 'none';
    };

    // audio 2
    var myAudio = document.getElementById("myAudio-2");
    myAudio.onplaying = function() {
    document.getElementById('audio-2').style.pointerEvents = 'none';
    };

    // audio 3
    var myAudio = document.getElementById("myAudio-3");
    myAudio.onplaying = function() {
    document.getElementById('audio-3').style.pointerEvents = 'none';
    };

    // audio 4
    var myAudio = document.getElementById("myAudio-4");
    myAudio.onplaying = function() {
    document.getElementById('audio-4').style.pointerEvents = 'none';
    };
</script>
@endsection