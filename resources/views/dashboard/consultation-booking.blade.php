@include('layouts.dashboard-header')
<div class="dashboard-page-content">
    
    <div class="d-flex flex-row">
        <div class="col-9 scrollable-column">
            <h3 class="section-title text-purple mt-3">
                consultation booking
            </h3>
            <h3 class="section-title2 text-purple mt-5">Please answer these questions</h3>
            <h3 class="title-style-3 mt-2 text-purple">Answer all 10 questions.</h3>
            {{-- question 1 --}}
            <div class="d-flex flex-column mb-3">
                <p class="section-description mt-2 mb-2">
                    1. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis consectetur, porro aut. 
                </p>
                <div class="d-flex row row-cols-3">
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 active" onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5 active">
                        <button class="sample-answer-btn px-2 py-1 active" onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                </div>
            </div>
            {{-- question 2 --}}
            <div class="d-flex flex-column mb-3">
                <p class="section-description mt-2 mb-2">
                    2. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis consectetur, porro aut. 
                </p>
                <div class="d-flex row row-cols-3">
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="sample-answer-btn px-2 py-1 active" onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5 active">
                        <button class="sample-answer-btn px-2 py-1" onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                </div>
            </div>
            {{-- question 3 --}}
            <div class="d-flex flex-column mb-3">
                <p class="section-description mt-2 mb-2">
                    3. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis consectetur, porro aut. 
                </p>
                <div class="d-flex row row-cols-3">
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5 active">
                        <button class="sample-answer-btn px-2 py-1" onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                </div>
            </div>
            {{-- question 4 --}}
            <div class="d-flex flex-column mb-3 -right-3">
                <p class="section-description mt-2 mb-2">
                    3. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis consectetur, porro aut. 
                </p>
                <div class="d-flex row row-cols-3">
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5 active">
                        <button class="sample-answer-btn px-2 py-1" onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                </div>
            </div>
            {{-- question 5 --}}
            <div class="d-flex flex-column mb-3">
                <p class="section-description mt-2 mb-2">
                    3. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis consectetur, porro aut. 
                </p>
                <div class="d-flex row row-cols-3">
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-5 active">
                        <button class="sample-answer-btn px-2 py-1" onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                    <div class="col-3">
                        <button class="sample-answer-btn px-2 py-1 " onclick="ConsultationButtonClicked(this)">
                            <img src="{{ asset('assets/images/brain.PNG') }}" style="width: 20px;height: auto;">
                            Sample Answer
                        </button>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn-purple mt-4 px-5">Submit</button>
            </div>
        </div>
        <div class="col-3 d-flex align-items-center justify-content-center position-relative">
            <img src="{{ asset('assets/images/brain.PNG') }}" class="brain-fixed-image img-fluid">
        </div>
    </div>


</div>
@include('layouts.dashboard-footer')