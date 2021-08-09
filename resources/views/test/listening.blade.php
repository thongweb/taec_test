<div class="col-12 p-0 mt-3">

    <h5 class="font-weight-bold section-title"><span>I. LISTENING</span></h5>
    <h6 class="font-weight-bold m-0">Section 1</h6>
    <p class="font-weight-bold m-0">Question 1 - 5</p>
    <p class="font-weight-bold m-0">Listen to the conversation and complete the message pads.</p>
    <div id="audio-1" class="mt-3">
        <p class="text-danger font-weight-bold m-0"><span >Notice:</span> The audio file only plays once. Cannot pause or replay.</p>
        <audio controls id="myAudio-1">
            <source src="{{ asset(url('audio/SECTION1.mp3')) }}" type="audio/mpeg">
        </audio>
    </div>
    <!-- listen section 1 -->
    <div class='section-1 mt-3'>
        <table class="w-100 mb-4 mt-2">
            <thead>
                <th class="pl-2">A.</th>
                <th class="pl-2">B.</th>
            </thead>
            <tbody>
                <tr>
                    <td class="pl-2"><b>HERE’S WHO CALLED YOU</b></td>
                    <td class="pl-2"><b>HERE’S WHO CALLED YOU</b></td>
                </tr>
                <tr>
                    <td class="pl-2"><span><b>Message for:</b> James </span></td>
                    <td class="pl-2"><span><b>Message for:</b> Mary </span></td>
                </tr>
                <tr>
                    <td class="pl-2"><span><input type="input" class="form__field" placeholder="1" name="listen_1" />
                            called. Phone </span></td>
                    <td class="pl-2"><span><input type="input" class="form__field" placeholder="3" name="listen_3" />
                            called. </span> </span></td>
                </tr>
                <tr>
                    <td class="pl-2"><span>number: <input type="input" class="form__field" placeholder="2"
                                name="listen_2" /> </span></td>
                    <td class="pl-2"><span>Phone number: <input type="input" class="form__field" placeholder="4"
                                name="listen_4" /> </span></td>
                </tr>
                <tr>
                    <td class="pl-2">
                        <span class="font-weight-bold">5.</span>
                        <input type="hidden" name="listen_5" value="" checked='true'>
                        <label class="label-radius">Please call.
                            <input type="radio" name="listen_5" value="Please call">
                            <span class="checkmark"></span>
                        </label>
                        <label class="label-radius">He/She will call you.
                            <input type="radio" name="listen_5" value="He/She will call you">
                            <span class="checkmark"></span>
                        </label>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- listen section 2 -->
    <div class="section-2">
        <h5><b>Section 2</b></h5>
        <div id="audio-2" class="mt-3">
            <p class="text-danger font-weight-bold m-0"><span >Notice:</span> The audio file only plays once. Cannot pause or replay.</p>
            <audio controls id="myAudio-2">
                <source src="{{ asset(url('audio/SECTION2.mp3')) }}" type="audio/mpeg">
            </audio>
        </div>
        <div class="reading-radio">
            <div class="reading-left">
                <legend class="Polaris-ChoiceList__Title">6. The color is ______.</legend>
                <input type="hidden" name="listen_6" value="" checked='true'>
                <label class="label-radius">A. Red
                    <input type="radio" name="listen_6" value="A">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">B. Silver
                    <input type="radio" name="listen_6" value="B">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">C. Red with silver straps
                    <input type="radio" name="listen_6" value="C">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">D. Silver with red straps
                    <input type="radio" name="listen_6" value="D">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="reading-right">
                <legend class="Polaris-ChoiceList__Title">7. They are pair of _____.</legend>
                <input type="hidden" name="listen_7" value="" checked='true'>
                <label class="label-radius">A. Tennis shoes
                    <input type="radio" name="listen_7" value="A">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">B. High heels
                    <input type="radio" name="listen_7" value="B">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">C. Sneakers
                    <input type="radio" name="listen_7" value="C">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">D. Loafers
                    <input type="radio" name="listen_7" value="D">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
        <div class="reading-radio">
            <div class="reading-left">
                <legend class="Polaris-ChoiceList__Title">8. The price is _____.</legend>
                <input type="hidden" name="listen_8" value="" checked='true'>
                <label class="label-radius">A. More than $250
                    <input type="radio" name="listen_8" value="A">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">B. Almost $200
                    <input type="radio" name="listen_8" value="B">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">C. Over $200
                    <input type="radio" name="listen_8" value="C">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">D. Exactly $200
                    <input type="radio" name="listen_8" value="D">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="reading-right">
                <legend class="Polaris-ChoiceList__Title">9. They are _____.</legend>
                <input type="hidden" name="listen_9" value="" checked='true'>
                <label class="label-radius">A. Very comfortable
                    <input type="radio" name="listen_9" value="A" value="A">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">B. Extremely comfortable
                    <input type="radio" name="listen_9" value="B">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">C. Somewhat comfortable
                    <input type="radio" name="listen_9" value="C">
                    <span class="checkmark"></span>
                </label>
                <label class="label-radius">D. Not comfortable
                    <input type="radio" name="listen_9" value="D">
                    <span class="checkmark"></span>
                </label>
            </div>
        </div>
    </div>
    <!-- listen section 3 -->
    <div class='section-3'>
        <h5><b>Section 3</b></h5>
        <h6><b>Questions 10 - 14</b></h6>
        <div id="audio-3" class="mt-3">
            <p class="text-danger font-weight-bold m-0"><span >Notice:</span> The audio file only plays once. Cannot pause or replay.</p>
            <audio controls id="myAudio-3">
                <source src="{{ asset(url('audio/SECTION3.mp3')) }}" type="audio/mpeg">
            </audio>
        </div>
        <p>People are talking about health problems. What is each person’s problem?</p>
        <div class="col-12 d-flex align-items-center p-0">
            <div class="col-6 p-0"><b>10.</b>Julia<input type="input" class="form__field" name="listen_10" /></div>
            <div class="col-6 p-0"><b>a.</b> sore throat</div>
        </div>
        <div class="col-12 d-flex align-items-center p-0">
            <div class="col-6 p-0"><b>11.</b>Henry<input type="input" class="form__field" name="listen_11" /></div>
            <div class="col-6 p-0"><b>b.</b> stomachache</div>
        </div>
        <div class="col-12 d-flex align-items-center p-0">
            <div class="col-6 p-0"><b>12.</b>Regina<input type="input" class="form__field" name="listen_12" /></div>
            <div class="col-6 p-0"><b>c.</b> cold</div>
        </div>
        <div class="col-12 d-flex align-items-center p-0">
            <div class="col-6 p-0"><b>13.</b>Dale<input type="input" class="form__field" name="listen_13" /></div>
            <div class="col-6 p-0"><b>d.</b> toothache</div>
        </div>
        <div class="col-12 d-flex align-items-center p-0">
            <div class="col-6 p-0"><b>14.</b>Victoria<input type="input" class="form__field" name="listen_14" /></div>
            <div class="col-6 p-0"><b>e.</b> backache</div>
        </div>
    </div>
    <!-- listen section 4 -->
    <div class='section-4 mt-3'>
        <h5><b>Section 4</b></h5>
        <h6><b>Questions 15 - 20</b></h6>
        <b>Listen to the conversation and complete the notes.</b>
        <p>Write no more than <b>TWO WORDS AND/OR A NUMBER</b> for each answer.</p>
        <div id="audio-4" class="mt-3">
            <p class="text-danger font-weight-bold m-0"><span >Notice:</span> The audio file only plays once. Cannot pause or replay.</p>
            <audio controls id="myAudio-4">
                <source src="{{ asset(url('audio/SECTION4.mp3')) }}" type="audio/mpeg">
            </audio>
        </div>
        <div class="border border-dark p-2">
            <div class="col-12 p-0"><span class="font-weight-bold">GOOD MOVES ACCOMMODATION AGENCY</span></div>
            <div class="col-12 p-0"><span>Call taken by: Ben</span></div>
            <div class="col-12 p-0"><span>Name: Clarice Willard</span></div>
            <div class="col-12 p-0"><span>Telephone: &nbsp;<input type="input" placeholder="15" class="form__field"
                        name="listen_15" /></span></div>
            <div class="col-12 p-0"><span>Heard about us from &nbsp;&nbsp;<input type="input" placeholder="16"
                        class="form__field" name="listen_16" /></span></div>
            <div class="col-12 p-0"><span>Type of accommodation preferred: apartment</span></div>
            <div class="col-12 p-0"><span>Number of people: 2</span></div>
            <div class="col-12 p-0"><span>Preferred location: wants to be closed to <input type="input"
                        class="form__field" placeholder="17" name="listen_17" /> Price: maximum £<input type="input"
                        class="form__field" placeholder="18" name="listen_18" /> per </span></div>
            <div class="col-12 p-0"><span>Additional note:</span></div>
            <div class="col-12 p-0"><span>I suggest Flat 3 at <input type="input" class="form__field" placeholder="19"
                        name="listen_19" /> Road in Bampton.</span></div>
            <div class="col-12 p-0"><span>I will send further details to customer by <input type="input"
                        class="form__field" placeholder="20" name="listen_20" /></span></div>
        </div>
    </div>
</div>