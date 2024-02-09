@include('layouts.header')
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">
        <h3 class="section-title text-purple">Brain Test</h3>


        <div class="row mt-5">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <h1 class="question text-center">
                    Question {{$question_no}}
                </h1>
                <h1 class="question-count text-center">
                    {{$question_no}} out of 30
                </h1>
                @if (session('message'))
                <p style="color:red;font-size:14px;text-align:center;">{{ session('message') }}</p>
                 @endif
                <h1 class="question-title text-center mt-4">
                    {{$question->question}}
                </h1>
                <div class="answers-container">
                    <h1 class="question-answer text-center" onclick="pickAnswer(this,'{{$question->answer_1}}')">
                        {{$question->answer_1}}
                    </h1>
                    <h1 class="question-answer text-center " onclick="pickAnswer(this,'{{$question->answer_2}}')">
                        {{$question->answer_2}}
                    </h1>
                    <h1 class="question-answer text-center " onclick="pickAnswer(this,'{{$question->answer_3}}')">
                        {{$question->answer_3}}
                    </h1>
                    <h1 class="question-answer text-center " onclick="pickAnswer(this,'{{$question->answer_4}}')">
                        {{$question->answer_4}}
                    </h1>
                    <h1 class="small-link text-start text-purple" style="cursor:pointer;" onclick="restAnswer()">
                        <i class="fas fa-undo"></i> Reset answers
                    </h1>
                    <div id="answer_error" class="mt-2" style="color:red;font-weight:bold;text-align:left;"></div>
                    <div class="row mt-5">
                        <div class="col-6 text-start">
                            <?php if($question_no != "01"){
                            $prevoius_page = $question_no-1;
                            ?>
                            <a href="{{url('questions/q'.$prevoius_page.'')}}"><button class="question-nav text-purple"><i class="fa-solid fa-chevron-left px-1"> </i></i>Previous</button></a>
                           <?php } ?>
                        </div>

                        <div class="col-6 text-end">
                            <form id="myForm" action="{{url('save-answers')}}" method="post">
                            @csrf

                            <input type="hidden" name="question_id" value="{{$question->id}}">
                            <input type="hidden" name="first_answer" id="first_answer" value="">
                            <input type="hidden" name="second_answer" id="second_answer" value="">
                            <input type="hidden" name="third_answer" id="third_answer" value="">
                            <input type="hidden" name="forth_answer" id="forth_answer" value="">
                            <input type="hidden" name="question_no" value="{{$question_no}}">

                            <button class="question-nav text-purple" type="button" onclick="validateAndSubmit()">Next<i class="fa-solid fa-chevron-right px-1"> </i></i></button>

                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>


    </div>
    </section>
@include('layouts.footer')
<script>
    function pickAnswer(element, answer) {

        var first_answer = document.getElementById("first_answer");
        var second_answer = document.getElementById("second_answer");
        var third_answer = document.getElementById("third_answer");
        var forth_answer = document.getElementById("forth_answer");

        element.classList.add('clicked');

        if(first_answer.value == ""){
            first_answer.value = answer;
        }
        else if(second_answer.value == ""){
            second_answer.value = answer;
        }
        else if(third_answer.value == ""){
            third_answer.value = answer;
        }
        else if(forth_answer.value == ""){
            forth_answer.value = answer;
        }
        else{

        }
    }
function restAnswer() {

document.getElementById("first_answer").value ="";
document.getElementById("second_answer").value ="";
document.getElementById("third_answer").value ="";
document.getElementById("forth_answer").value ="";

var answers = document.querySelectorAll('.question-answer');
    answers.forEach(function (answer) {
        answer.classList.remove('clicked');
      });

}

</script>


<script>
    function validateAndSubmit() {
        var firstAnswer = $('#first_answer').val();
        var secondAnswer = $('#second_answer').val();
        var thirdAnswer = $('#third_answer').val();
        var forthAnswer = $('#forth_answer').val();

        if (firstAnswer !== '' && secondAnswer !== '' && thirdAnswer !== '' && forthAnswer !== '') {
            $('#myForm').submit();
        } else {
            document.getElementById('answer_error').textContent = 'Please select all answers';
        }
    }
</script>
