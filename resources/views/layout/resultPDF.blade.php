<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div>
        <div class="text-center">
            <h5>TEST RESULT</h5>
        </div>

        <?php function checkSimilar($sa, $qa){
            similar_text(strtoupper($sa), strtoupper($qa),$percent);
            return $percent;
        } ?>

        <div class="col-12 mb-4">
            <p>Name: {{$studentInfo->first_name}}</p>
            <p>Phone: {{$studentInfo->phone}}</p>
            <p>Email: {{$studentInfo->email}}</p>
            <div class="col-12 p-0 border m-1">
                <div class="listening-result col-12 p-0">
                    <h6 class="p-2">I. Listening - <span class="text-success" >{{ $examDetail->score_listen }} point{{ $examDetail->score_listen > 1 ? 's' : '' }}</span></h6>
                    <div class="col-12 p-0">
                        <div class="col-12 p-0">
                            <div class="col-12">
                                <p class="mb-1">Section 1</p>
                                <ul class="pl-3">
                                    <li class="{{(checkSimilar($studentAnswer['listen_1'], $questionAnswer['listen_1']) >= 90) ? 'text-success' : 'text-danger' }}">1. {{$studentAnswer['listen_1']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_2'], $questionAnswer['listen_2']) >= 90) ? 'text-success' : 'text-danger' }}">2. {{$studentAnswer['listen_2']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_3'], $questionAnswer['listen_3']) >= 90) ? 'text-success' : 'text-danger' }}">3. {{$studentAnswer['listen_3']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_4'], $questionAnswer['listen_4']) >= 90) ? 'text-success' : 'text-danger' }}">4. {{$studentAnswer['listen_4']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_5'], $questionAnswer['listen_5']) >= 90) ? 'text-success' : 'text-danger' }}">5. {{$studentAnswer['listen_5']}}</li>
                                </ul>
                            </div>
    
                            <div class="col-12">
                                <p class="mb-1">Section 2</p>
                                <ul class="pl-3">
                                    <li class="{{(checkSimilar($studentAnswer['listen_6'], $questionAnswer['listen_6']) >= 90) ? 'text-success' : 'text-danger' }}">6. {{$studentAnswer['listen_6']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_7'], $questionAnswer['listen_7']) >= 90) ? 'text-success' : 'text-danger' }}">7. {{$studentAnswer['listen_7']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_8'], $questionAnswer['listen_8']) >= 90) ? 'text-success' : 'text-danger' }}">8. {{$studentAnswer['listen_8']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_9'], $questionAnswer['listen_9']) >= 90) ? 'text-success' : 'text-danger' }}">9. {{$studentAnswer['listen_9']}}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 p-0">
                            <div class="col-12">
                                <p class="mb-1">Section 3</p>
                                <ul class="pl-3">
                                    <li class="{{(checkSimilar($studentAnswer['listen_10'], $questionAnswer['listen_10']) >= 90) ? 'text-success' : 'text-danger' }}">10. {{$studentAnswer['listen_10']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_11'], $questionAnswer['listen_11']) >= 90) ? 'text-success' : 'text-danger' }}">11. {{$studentAnswer['listen_11']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_12'], $questionAnswer['listen_12']) >= 90) ? 'text-success' : 'text-danger' }}">12. {{$studentAnswer['listen_12']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_13'], $questionAnswer['listen_13']) >= 90) ? 'text-success' : 'text-danger' }}">13. {{$studentAnswer['listen_13']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_14'], $questionAnswer['listen_14']) >= 90) ? 'text-success' : 'text-danger' }}">14. {{$studentAnswer['listen_14']}}</li>
                                </ul>
                            </div>
    
                            <div class="col-12">
                                <p class="mb-1">Section 4</p>
                                <ul class="pl-3">
                                    <li class="{{(checkSimilar($studentAnswer['listen_15'], $questionAnswer['listen_15']) >= 90) ? 'text-success' : 'text-danger' }}">15. {{$studentAnswer['listen_15']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_16'], $questionAnswer['listen_16']) >= 90) ? 'text-success' : 'text-danger' }}">16. {{$studentAnswer['listen_16']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_17'], $questionAnswer['listen_17']) >= 90) ? 'text-success' : 'text-danger' }}">17. {{$studentAnswer['listen_17']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_18'], $questionAnswer['listen_18']) >= 90) ? 'text-success' : 'text-danger' }}">18. {{$studentAnswer['listen_18']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_19'], $questionAnswer['listen_19']) >= 90) ? 'text-success' : 'text-danger' }}">19. {{$studentAnswer['listen_19']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['listen_20'], $questionAnswer['listen_20']) >= 90) ? 'text-success' : 'text-danger' }}">20. {{$studentAnswer['listen_20']}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 border p-0 m-1">
                <div class="reading-result col-12 p-0">
                    <h6 class="p-2">II. Reading - <span class="text-success" >{{ $examDetail->score_read }} point{{ $examDetail->score_read > 1 ? 's' : '' }}</span></h6>
                        <div class="col-12">
                            <div class="col-12 p-0">
                                <ul class="pl-3">
                                    <li class="{{(checkSimilar($studentAnswer['read_1'], $questionAnswer['read_1']) >= 90) ? 'text-success' : 'text-danger' }}">1. {{$studentAnswer['read_1']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_2'], $questionAnswer['read_2']) >= 90) ? 'text-success' : 'text-danger' }}">2. {{$studentAnswer['read_2']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_3'], $questionAnswer['read_3']) >= 90) ? 'text-success' : 'text-danger' }}">3. {{$studentAnswer['read_3']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_4'], $questionAnswer['read_4']) >= 90) ? 'text-success' : 'text-danger' }}">4. {{$studentAnswer['read_4']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_5'], $questionAnswer['read_5']) >= 90) ? 'text-success' : 'text-danger' }}">5. {{$studentAnswer['read_5']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_6'], $questionAnswer['read_6']) >= 90) ? 'text-success' : 'text-danger' }}">6. {{$studentAnswer['read_6']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_7'], $questionAnswer['read_7']) >= 90) ? 'text-success' : 'text-danger' }}">7. {{$studentAnswer['read_7']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_8'], $questionAnswer['read_8']) >= 90) ? 'text-success' : 'text-danger' }}">8. {{$studentAnswer['read_8']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_9'], $questionAnswer['read_9']) >= 90) ? 'text-success' : 'text-danger' }}">9. {{$studentAnswer['read_9']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_10'], $questionAnswer['read_10']) >= 90) ? 'text-success' : 'text-danger' }}">10. {{$studentAnswer['read_10']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_11'], $questionAnswer['read_11']) >= 90) ? 'text-success' : 'text-danger' }}">11. {{$studentAnswer['read_11']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_12'], $questionAnswer['read_12']) >= 90) ? 'text-success' : 'text-danger' }}">12. {{$studentAnswer['read_12']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_13'], $questionAnswer['read_13']) >= 90) ? 'text-success' : 'text-danger' }}">13. {{$studentAnswer['read_13']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_14'], $questionAnswer['read_14']) >= 90) ? 'text-success' : 'text-danger' }}">14. {{$studentAnswer['read_14']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_15'], $questionAnswer['read_15']) >= 90) ? 'text-success' : 'text-danger' }}">15. {{$studentAnswer['read_15']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_16'], $questionAnswer['read_16']) >= 90) ? 'text-success' : 'text-danger' }}">16. {{$studentAnswer['read_16']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_17'], $questionAnswer['read_17']) >= 90) ? 'text-success' : 'text-danger' }}">17. {{$studentAnswer['read_17']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_18'], $questionAnswer['read_18']) >= 90) ? 'text-success' : 'text-danger' }}">18. {{$studentAnswer['read_18']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_19'], $questionAnswer['read_19']) >= 90) ? 'text-success' : 'text-danger' }}">19. {{$studentAnswer['read_19']}}</li>
                                    <li class="{{(checkSimilar($studentAnswer['read_20'], $questionAnswer['read_20']) >= 90) ? 'text-success' : 'text-danger' }}">20. {{$studentAnswer['read_20']}}</li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-12 m-1">
            <div class="col-12 border p-2">
                <div class="listening-result col-12 p-0">
                    <?php $wordCount = str_word_count($studentAnswer['writing']); ?>
                    <h6 class="p-0">III. Writing - <span>{{$wordCount}} word{{ $wordCount > 1 ? 's' : '' }}</span> </h6>
                    <span class="col-12 p-2">{{$studentAnswer['writing']}}</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>