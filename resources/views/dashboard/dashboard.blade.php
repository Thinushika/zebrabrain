@include('layouts.dashboard-header')
<div class="dashboard-page-content">
    <h3 class="section-title-big  ">Hi ! Good Evening</h3>
    <h3 class="section-title text-purple mt-5">Let's check your future opportunities</h3>
    <!-- <h3 class="section-title text-purple">Your Flow & Frow Tips</h3> -->
    <!-- <p class="section-description mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla molestie arcu eu finibus.</p> -->



    {{-- section 1 --}}
    <div class="row mt-5 mb-5 gx-3 gy-3">
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">2030 jobs</h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
                <div class="card-icon-wrap">
                    <i class="bi bi-lock-fill"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">Leadership Programs</h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
                <div class="card-icon-wrap">
                    <i class="bi bi-lock-fill"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">2030 jobs</h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
                <div class="card-icon-wrap">
                    <i class="bi bi-lock-fill"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">2030 jobs</h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
                <div class="card-icon-wrap">
                    <i class="bi bi-lock-fill"></i>
                </div>
            </div>
        </div>

    </div>


    {{-- section 2 --}}
    <div class="row mt-5 mb-5 gx-3 gy-3">
        <h3 class="section-title text-purple mt-5">Up & coming events
        </h3>
        <p class="section-description mt-4">Let's check your event calendar</p>
        <div class="col-8">
            <div id="calendarDiv"></div>
        </div>
        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-row">
                <div class="col-6">
                    <div id="month-year"></div>
                </div>
                <div class="col-6 d-flex flex--row">
                    <button onclick="previousMonth()"><i class="bi bi-arrow-left"></i></button>
                    <button onclick="nextMonth()"><i class="bi bi-arrow-right"></i></button>
                </div>
            </div>

            <table id="calendar">
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                <tbody id="calendar-body">
                    <!-- Calendar days will be dynamically generated here -->
                </tbody>
            </table>
        </div>
    </div>


    {{-- section 3 --}}
    <div class="row mt-5 gx-3 gy-3">
        <div class="col-9 d-flex justify-content-between">
            <div class="col-9 p-2 d-flex align-items-center">
                <h3 class="section-title text-purple mt-5">
                    Let's check your brain stripes & your test result
                </h3>
            </div>
            <div class="col-3 p-2 d-flex align-items-center justify-content-end">
                <button class="yellow-button">Download Report</button>
            </div>
        </div>
        <div class="col-3 p-2 d-flex align-items-center">
            <h3 class="section-title3 text-purple mt-5">ZebraZen: 86%</h3>
        </div>
    </div>
    <div class="row mb-5 gx-3 gy-3">
        <div class="col-9 d-flex flex-row">
            <div class="col-6 p-2">
                <img src="{{ asset('assets/images/brain.png') }}">
            </div>
            <div class="col-6 p-2">
                <div class="row row-cols-2">
                    <div class="col-6 p-1">
                        <div class="box-data p-5">
                            <p class="mb-0">
                                ZebraZen
                            </p>
                            <h3 class="mb-0">
                                86%
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 p-1">
                        <div class="box-data p-5">
                            <p class="mb-0">
                                ZebraZeal
                            </p>
                            <h3 class="mb-0">
                                72%
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 p-1">
                        <div class="box-data p-5">
                            <p class="mb-0">
                                ZebraZing
                            </p>
                            <h3 class="mb-0">
                                75%
                            </h3>
                        </div>
                    </div>
                    <div class="col-6 p-1">
                        <div class="box-data p-5">
                            <p class="mb-0">
                                ZebraZest
                            </p>
                            <h3 class="mb-0">
                                67%
                            </h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-3">
            <p class="paragraph-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quisquam culpa ab praesentium, minus sint
                eaque amet dolor, labore fuga dolorem itaque consequatur natus voluptates rerum at laudantium
                perspiciatis nesciunt!
            </p>
            <p class="paragraph-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quisquam culpa ab praesentium, minus sint
                eaque amet dolor, labore fuga dolorem itaque consequatur natus voluptates rerum at laudantium
                perspiciatis nesciunt!
            </p>
        </div>
    </div>
    <div class="row mt-5 mb-5 gx-3 gy-3">
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">Relationship Style</h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">Leadership style
                    </h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">Relationship Style
                    </h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">Studying Style
                    </h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="row p-2 m-1 card-small rounded-3 progress-container align-items-center position-relative">
                <div class="col-4">
                    <img src="{{ asset('assets/images/zebra2.PNG') }}">
                </div>
                <div class="col-8">
                    <h3 class="card-title-style1-purple">Relationship Style
                    </h3>
                    <p class="card-title-style2-purple">Short Description</p>
                </div>
            </div>
        </div>

    </div>




    {{-- section 4 --}}
    <div class="row mt-5 mb-5 gx-3 gy-3">
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





    {{-- section 4 --}}
    <div class="row mt-5 mb-5 gx-3 gy-3">
        <h3 class="section-title2 text-purple mt-5">
            Let's watch tips to improve brain strengths
        </h3>
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




    {{-- section 5 --}}
    <div class="row mt-5 mb-5  gx-4 gy-3">
        <h3 class="section-title text-purple">
            consultation booking
        </h3>
        <p class="section-description mt-2">
            Select your career category
        </p>
        <div class="col-md-3">
            <div class="video-card">
                <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                <h3 class="text-center view-all mt-2 text-purple">
                    Business consultant
                </h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="video-card">
                <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                <h3 class="text-center view-all mt-2 text-purple">
                    Name consultant
                </h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="video-card">
                <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                <h3 class="text-center view-all mt-2 text-purple">
                    Construction consultant
                </h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="video-card">
                <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                <h3 class="text-center view-all mt-2 text-purple">Medical consultant</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="video-card">
                <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                <h3 class="text-center view-all mt-2 text-purple">Lawyer consultant
                </h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="video-card">
                <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
                <h3 class="text-center view-all mt-2 text-purple">Developer consultant</h3>
            </div>
        </div>
        
    </div>



    {{-- section 6 --}}
    <div class="row mt-5 mb-5">
        <h3 class="section-title text-purple">Parent community</h3>
        <div class="col-6 p-5">
            <img src="{{ asset('assets/images/parent.PNG') }}" class="w-100">
        </div>
        <div class="col-6 p-5">
            <p class="section-description mt-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis consectetur, porro aut. Nobis, minus natus modi totam in praesentium hic earum magni mollitia ad corrupti architecto eum omnis ipsam deleniti ut debitis. Aperiam, soluta!
            </p>
            <button class="yellow-btn mt-4 px-5">Join now</button>
        </div>
        
    </div>


    {{-- section 6 --}}
    <div class="row mt-5 mb-5">
        <h3 class="section-title text-purple">Enroll for super future club!</h3>
        <div class="col-6 p-5">
            <img src="{{ asset('assets/images/parent.PNG') }}" class="w-100">
        </div>
        <div class="col-6 p-5">
            <p class="section-description mt-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta hic asperiores neque quibusdam reiciendis vero dolorum possimus, voluptatem dolore cupiditate cum illum tenetur odit blanditiis consectetur, porro aut. Nobis, minus natus modi totam in praesentium hic earum magni mollitia ad corrupti architecto eum omnis ipsam deleniti ut debitis. Aperiam, soluta!
            </p>
            <button class="yellow-btn mt-4 px-5">Join now</button>
        </div>
        
    </div>


</div>
@include('layouts.dashboard-footer')