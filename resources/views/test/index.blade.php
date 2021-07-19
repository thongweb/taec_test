@extends('layout.base')

@section('body')
<div class="container">
<h3><b>I. LISTENING</b></h3>
<h5><b>Section 1</b></h5>
<h6><b>Question 1 - 5</b></h6>
<b>Listen to the conversation and complete the message pads.</b>
<!-- section 1 -->
<div class='section-1'>
<table>
    <thead>
        <th>A.</th>
        <th>B.</th>
    </thead>
    <tbody>
        <tr>
            <td><b>HERE’S WHO CALLED YOU</b></td>
            <td><b>HERE’S WHO CALLED YOU</b></td>
        </tr>
        <tr>
            <td><span><b>Message for:</b> James </span></td>
            <td><span><b>Message for:</b> Mary  </span></td>
        </tr>
        <tr>
            <td><span><input type="input" class="form__field" placeholder="1" name="listen-1"/> called. Phone  </span></td>
            <td><span><input type="input" class="form__field" placeholder="3" name="listen-3"/> called. </span>  </span></td>
        </tr>
        <tr>
            <td><span>number: <input type="input" class="form__field" placeholder="2" name="listen-2"/> </span></td>
            <td><span>Phone number: <input type="input" class="form__field" placeholder="4" name="listen-4"/> </span></td>
        </tr>
    </tbody>
</table>
</div>
<!-- section 2 -->
<h5><b>Section 2</b></h5>
    <div class="reading-radio">
        <div class="reading-left">
            <legend class="Polaris-ChoiceList__Title">6. The color is ______.</legend>
                <label class="label-radius">A. Red
                    <input type="radio" name="listen-6">
                    <span class="checkmark"></span>
                </label>
            <label class="label-radius">B. Silver
            <input type="radio" name="listen-6">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">C. Red with silver straps
            <input type="radio" name="listen-6">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">D. Silver with red straps
            <input type="radio" name="listen-6">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="reading-right">
            <legend class="Polaris-ChoiceList__Title">7. They are pair of _____.</legend>
                <label class="label-radius">A. Tennis shoes
                    <input type="radio" name="listen-7">
                    <span class="checkmark"></span>
                </label>
            <label class="label-radius">B. High heels
            <input type="radio" name="listen-7">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">C. Sneakers
            <input type="radio" name="listen-7">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">D.	Loafers
            <input type="radio" name="listen-7">
            <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="reading-radio">
        <div class="reading-left">
            <legend class="Polaris-ChoiceList__Title">8. The price is _____.</legend>
                <label class="label-radius">A. More than $250
                    <input type="radio" name="listen-8">
                    <span class="checkmark"></span>
                </label>
            <label class="label-radius">B.	Almost $200
            <input type="radio" name="listen-8">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">C.	Over $200
            <input type="radio" name="listen-8">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">D.	Exactly $200
            <input type="radio" name="listen-8">
            <span class="checkmark"></span>
            </label>
        </div>
        <div class="reading-right">
            <legend class="Polaris-ChoiceList__Title">9. They are _____.</legend>
                <label class="label-radius">A.	Very comfortable
                    <input type="radio" name="listen-9">
                    <span class="checkmark"></span>
                </label>
            <label class="label-radius">B.	Extremely comfortable
            <input type="radio" name="listen-9">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">C. Somewhat comfortable
            <input type="radio" name="listen-9">
            <span class="checkmark"></span>
            </label>
            <label class="label-radius">D.	Not comfortable
            <input type="radio" name="listen-9">
            <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <!-- section 3 -->
    <div class='question-3'>
    <h5><b>Section 3</b></h5>
    <h6><b>Questions 10 - 14</b></h6>
    <p>People are talking about health problems. What is each person’s problem?</p>
        <table>
            <tbody>
                <tr>
                    <td><b>10.</b> &nbsp;&nbsp;	Julia &nbsp;&nbsp;&nbsp;&nbsp;  <input type="input" class="form__field" name="listen-10"/></td>
                    <td><b>a.</b>	sore throat</td>
                </tr>
                <tr>
                    <td><b>11.</b>&nbsp;&nbsp;	Henry &nbsp;&nbsp;&nbsp;&nbsp;  <input type="input" class="form__field" name="listen-11"/></td>
                    <td><b>b.</b> stomachache</td>
                </tr>
                <tr>
                    <td><b>12.</b>&nbsp;&nbsp; Regina &nbsp;&nbsp;&nbsp;&nbsp;  <input type="input" class="form__field" name="listen-12"/></td>
                    <td><b>c.</b>	cold</td>
                </tr>
                <tr>
                    <td><b>13.</b>&nbsp;&nbsp; Dale &nbsp;&nbsp;&nbsp;&nbsp;  <input type="input" class="form__field" name="listen-13"/></td>
                    <td><b>d.</b> toothache</td>
                </tr>
                <tr>
                    <td><b>14.</b>&nbsp;&nbsp; Victoria &nbsp;&nbsp;  <input type="input" class="form__field" name="listen-14"/></td>
                    <td><b>e.</b> backache</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class='question-4'>
        <h5><b>Section 3</b></h5>
        <h6><b>Questions 10 - 14</b></h6>
        <b>Listen to the conversation and complete the notes.</b>
        <p>Write no more than <b>TWO WORDS AND/OR A NUMBER</b> for each answer.</p>
        <div class="container">
            <b>GOOD MOVES ACCOMMODATION AGENCY</b>
            <p>Call taken by: Ben</p>
            <p>Name: Clarice Willard</p>
            <p>Telephone: &nbsp;&nbsp;<input type="input" placeholder="15" class="form__field" name="listen-15"/></p>
            <p>Heard about us from &nbsp;&nbsp;<input type="input" placeholder="16" class="form__field" name="listen-16"/></p>
            <p>Type of accommodation preferred: apartment</p>
            <p>Number of people: 2</p>
            <p>Preferred location: wants to be closed to <input type="input" class="form__field" placeholder="17" name="listen-17"/> Price: maximum £<input type="input"  class="form__field" placeholder="18" name="listen-18"/> per </p>
            <br><br>
            <p>Additional note:</p>
            <p>I suggest Flat 3 at <input type="input" class="form__field" placeholder="18" name="listen-18"/> Road in Bampton.</p>
            <p>I will send further details to customer by <input type="input" class="form__field" placeholder="20" name="listen-20"/></p>
        </div>
    </div>
</div>

@endsection