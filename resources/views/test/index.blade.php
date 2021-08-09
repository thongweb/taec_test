@extends('layout.base')

@section('body')
<div class="test-content">
    <div class="container bg-white">
        <div class="form-header p-3 font-weight-bold">
            <h4 class="text-center"><u>IELTS PLACEMENT TEST</u></h4>
            <div class="form-group d-flex col-12 pt-2">
                <dt class="col-md-1 col-4">Name: </dt>
                <dd class="col-md-3 col-8">{{ $student-> last_name }} {{ $student->first_name }}</dd>
            </div>
            <div class="form-group d-flex col-12">
                <dt class="col-md-1 col-4">Phone: </dt>
                <dd class="col-md-2 col-3 text-white text-white-ios">{{ $student-> phone }}</dd>
            </div>
            <div class="form-group d-flex col-12">
                <dt class="col-md-1 col-4 pr-md-0">Time left: </dt>
                <div class="col-md-2 col-4" id="countdown"><span id='minutes'></span></div>
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
    var showAlert = true;
    var startTime = document.getElementById('get-time').value;
    var countDownDate = new Date(startTime.replace(/-/g, '/'));
    countDownDate.setMinutes(countDownDate.getMinutes() + 45);
    countDownDate = new Date(countDownDate);
    // Update the count down every 1 second
    var x = setInterval(function() {
    // Get today's date and time
    var now = new Date();
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
        
    // Time calculations for days, hours, minutes and seconds
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s ";
    document.getElementById("exam_time").value = (45 - minutes) + "m " + (60 - seconds) + "s ";
    
    if (showAlert && minutes < 5) {
        alert('Time left 5 minutes')
        showAlert = false;
    }
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("test-form").submit()
    }
    }, 1000);

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