@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    {{-- section 1 --}}
    <div class="row mb-5 gx-3 gy-3">
        <h3 class="section-title2 text-purple mt-5">Your Flow & Grow Tips
        </h3>
        <p class="section-description mt-4">Here are your brain strengths and have to improve brain strengths using
            ZEBRA BRAIN tips.</p>
        <div class="col-md-4">
            <div class="row progress-container align-items-center">
                <div class="col-2">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class=" ">Multi Tasking</h3>
                    <div class="progress" style="height: 15px;">
                        <div class="progress-bar purple-progress" role="progressbar" style="width: 70%;"
                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-2">
                    <h3 class=" ">&nbsp; </h3>
                    <h3 class=" text-purple">70%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row progress-container align-items-center">
                <div class="col-2">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class=" ">Balance Skills Tasking</h3>
                    <div class="progress" style="height: 15px;">
                        <div class="progress-bar purple-progress" role="progressbar" style="width: 60%;"
                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-2">
                    <h3 class=" ">&nbsp; </h3>
                    <h3 class=" text-purple">60%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row progress-container align-items-center">
                <div class="col-2">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class=" ">Creative Thinking</h3>
                    <div class="progress" style="height: 15px;">
                        <div class="progress-bar yellow-progress" role="progressbar" style="width: 40%;"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-2">
                    <h3 class=" ">&nbsp; </h3>
                    <h3 class=" text-purple">40%</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row progress-container align-items-center">
                <div class="col-2">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class=" ">Self Learning</h3>
                    <div class="progress" style="height: 15px;">
                        <div class="progress-bar yellow-progress" role="progressbar" style="width: 50%;"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-2">
                    <h3 class=" ">&nbsp; </h3>
                    <h3 class=" text-purple">50%</h3>
                </div>
            </div>
        </div>

    </div>





    {{-- section 2 --}}
    <div class="row mt-5 gx-3 gy-3">
        <h3 class="section-title2 text-purple mt-5">
            Let's watch tips to improve brain strengths
        </h3>
        <div class="col-md-4">
            <div class="row progress-container align-items-center">
                <div class="col-2">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class=" ">Tips completion</h3>
                    <div class="progress" style="height: 15px;">
                        <div class="progress-bar yellow-progress" role="progressbar" style="width: 40%;"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-2">
                    <h3 class=" ">&nbsp; </h3>
                    <h3 class=" text-purple">40%</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5 gx-3 gy-3">
        <div class="col-md-4">
            <div class="video-card">
                <h3 class="section-title3 text-purple">Management Skills</h3>
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100">
                <div class="row">
                    <div class="col-6">
                        <h3 class="text-start count mt-2">Showing 1 of 100</h3>
                    </div>
                    <div class="col-6">
                        <h3 class="text-end view-all mt-2 text-purple">View All</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="video-card">
                <h3 class="section-title3 text-purple">Sport Skills</h3>
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100">
                <div class="row">
                    <div class="col-6">
                        <h3 class="text-start count mt-2">Showing 1 of 100</h3>
                    </div>
                    <div class="col-6">
                        <h3 class="text-end view-all mt-2 text-purple">View All</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="video-card">
                <h3 class="section-title3 text-purple">Creative Thinking</h3>
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100">
                <div class="row">
                    <div class="col-6">
                        <h3 class="text-start count mt-2">Showing 1 of 100</h3>
                    </div>
                    <div class="col-6">
                        <h3 class="text-end view-all mt-2 text-purple">View All</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="video-card">
                <h3 class="section-title3 text-purple">Self Learning</h3>
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100">
                <div class="row">
                    <div class="col-6">
                        <h3 class="text-start count mt-2">Showing 1 of 100</h3>
                    </div>
                    <div class="col-6">
                        <h3 class="text-end view-all mt-2 text-purple">View All</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- section 6 --}}
    <div class="row mt-5 mb-5">
        <div class="col-6 p-5 text-center d-flex flex-column justify-content-center align-items-center">
            <h3 class="section-title text-purple">Parent community</h3>
            <button class="yellow-btn mt-4 px-5">Book now</button>
        </div>
        <div class="col-6 p-5">
            <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
        </div>
    </div>




</div>
@include('layouts.dashboard-footer')