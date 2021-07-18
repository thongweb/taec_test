@extends('layout.base')

@section('body')
<div class="container">
<h3>I. LISTENING</h3>
Section 1
Questions 1 - 5
Listen to the conversation and complete the message pads.
A.
HERE’S WHO CALLED YOU
Message for: James ____1____ called. Phone number: ____2____
☑ Please call.
☐ He/She will call you.	B.
HERE’S WHO CALLED YOU
Message for: Mary ___3___ called.
Phone number: ____4____
5
☐ Please call.
☐ He/She will call you.
Section 2
    <div class="reading-radio">
        <div class="reading-left">
            <legend class="Polaris-ChoiceList__Title">6. The color is ______.</legend>
                <label class="label-radius">A. Red
                    <input type="radio" name="question-6">
                    <span class="checkmark"></span>
                </label>
            <label class="label-radius">B. Silver
            <input type="radio" name="question-6">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">C. Red with silver straps
            <input type="radio" name="question-6">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">D. Silver with red straps
            <input type="radio" name="question-6">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="reading-right">
            <legend class="Polaris-ChoiceList__Title">7. They are pair of _____.</legend>
                <label class="label-radius">A. Tennis shoes
                    <input type="radio" name="question-7">
                    <span class="checkmark"></span>
                </label>
            <label class="label-radius">B. High heels
            <input type="radio" name="question-7">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">C. Sneakers
            <input type="radio" name="question-7">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">D.	Loafers
            <input type="radio" name="question-7">
            <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="reading-radio">
        <div class="reading-left">
            <legend class="Polaris-ChoiceList__Title">8. The price is _____.</legend>
                <label class="label-radius">A. More than $250
                    <input type="radio" name="question-8">
                    <span class="checkmark"></span>
                </label>
            <label class="label-radius">B.	Almost $200
            <input type="radio" name="question-8">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">C.	Over $200
            <input type="radio" name="question-8">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">D.	Exactly $200
            <input type="radio" name="question-8">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="reading-right">
            <legend class="Polaris-ChoiceList__Title">9. They are _____.</legend>
                <label class="label-radius">A.	Very comfortable
                    <input type="radio" name="question-9">
                    <span class="checkmark"></span>
                </label>
            <label class="label-radius">B.	Extremely comfortable
            <input type="radio" name="question-9">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">C. Somewhat comfortable
            <input type="radio" name="question-9">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">D.	Not comfortable
            <input type="radio" name="question-9">
            <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>

@endsection