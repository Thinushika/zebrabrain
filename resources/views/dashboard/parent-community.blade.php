@include('layouts.dashboard-header')
<div class="dashboard-page-content">
    <div class="p-3 w-100">
        <h3 class="section-title text-purple mt-3">
            Parent community
        </h3>
        <div class="d-flex flex-row mt-5">
            <input type="text" placeholder="What's on your mind?" class="parentInput me-2">
            <button class="postbutton  me-2">Post</button>
            <button class="AddImage hideOnMobile">
                + Add Image
            </button>
        </div>
        {{-- sec 1 --}}
        <div class="d-flex flex-column w-100 mb-5">

            <div class="d-flex flex-column w-100">
                <div class="d-flex flex-row mb-3 mt-5">
                    <img src="{{ asset('assets/images/zebra1.PNG') }}"
                        style="border-radius: 100%; width: 80px; height: 80px;">
                    <div class="d-flex flex-column px-3">
                        <p class="parentName mb-0">Name</p>
                        <span class="parentCareer">Career path name</span>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row w-100">
                    <div class="col-12 col-lg-6">


                        <p class="parentName mb-0">Post title name</p>
                        <img src="{{ asset('assets/images/zebra1.PNG') }}"
                            style="border-radius: 12px; width: 100%; height: auto;">
                        <div class="d-flex w-100 justify-content-between">
                            <p class="eventDateTimePurple"><i class="bi bi-chat-left-text pe-2"></i>20 comments</p>
                            <p class="eventDateTimePurple">2hrs agos</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 px-2 px-lg-5 d-flex flex-column">
                        <div class="scrollSec">
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="col-12 col-lg-2 px-2">
                                    <img src="{{ asset('assets/images/zebra1.PNG') }}"
                                        style="border-radius: 100%; width: 70px; height: 70px;">
                                </div>
                                <div class="col-12 col-lg-10 px-2">
                                    <p class="parentName mb-0">Name</p>
                                    <p class="section-description-intentship">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,
                                        dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam
                                        laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt
                                    </p>
                                    <p class="eventDateTimePurple">2 hrs ago</p>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="col-12 col-lg-2 px-2">
                                    <img src="{{ asset('assets/images/zebra1.PNG') }}"
                                        style="border-radius: 100%; width: 70px; height: 70px;">
                                </div>
                                <div class="col-12 col-lg-10 px-2">
                                    <p class="parentName mb-0">Name</p>
                                    <p class="section-description-intentship">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,
                                        dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam
                                        laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt
                                    </p>
                                    <p class="eventDateTimePurple">2hrs agos</p>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="col-12 col-lg-2 px-2">
                                    <img src="{{ asset('assets/images/zebra1.PNG') }}"
                                        style="border-radius: 100%; width: 70px; height: 70px;">
                                </div>
                                <div class="col-12 col-lg-10 px-2">
                                    <p class="parentName mb-0">Name</p>
                                    <p class="section-description-intentship">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,
                                        dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam
                                        laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt
                                    </p>
                                    <p class="eventDateTimePurple">2hrs agos</p>
                                </div>
                            </div>
                        </div>
                        <button class="parentComment mt-2">+ Add your comment</button>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column w-100">
                <div class="d-flex flex-row mb-3 mt-5">
                    <img src="{{ asset('assets/images/zebra1.PNG') }}"
                        style="border-radius: 100%; width: 80px; height: 80px;">
                    <div class="d-flex flex-column px-3">
                        <p class="parentName mb-0">Name</p>
                        <span class="parentCareer">Career path name</span>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row w-100">
                    <div class="col-12 col-lg-12">


                        <p class="parentName mb-0">Post title name</p>
                        <img src="{{ asset('assets/images/zebra1.PNG') }}"
                            style="border-radius: 12px; width: 100%; height: auto;">
                        <div class="d-flex w-100 justify-content-between">
                            <p class="eventDateTimePurple"><i class="bi bi-chat-left-text pe-2"></i>20 comments</p>
                            <p class="eventDateTimePurple">2hrs agos</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 px-2 px-lg-5 d-flex flex-column">
                        <div class="scrollSec">
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="col-12 col-lg-2 px-2">
                                    <img src="{{ asset('assets/images/zebra1.PNG') }}"
                                        style="border-radius: 100%; width: 70px; height: 70px;">
                                </div>
                                <div class="col-12 col-lg-10 px-2">
                                    <p class="parentName mb-0">Name</p>
                                    <p class="section-description-intentship">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,
                                        dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam
                                        laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt
                                    </p>
                                    <p class="eventDateTimePurple">2 hrs ago</p>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="col-12 col-lg-2 px-2">
                                    <img src="{{ asset('assets/images/zebra1.PNG') }}"
                                        style="border-radius: 100%; width: 70px; height: 70px;">
                                </div>
                                <div class="col-12 col-lg-10 px-2">
                                    <p class="parentName mb-0">Name</p>
                                    <p class="section-description-intentship">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,
                                        dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam
                                        laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt
                                    </p>
                                    <p class="eventDateTimePurple">2hrs agos</p>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-lg-row">
                                <div class="col-12 col-lg-2 px-2">
                                    <img src="{{ asset('assets/images/zebra1.PNG') }}"
                                        style="border-radius: 100%; width: 70px; height: 70px;">
                                </div>
                                <div class="col-12 col-lg-10 px-2">
                                    <p class="parentName mb-0">Name</p>
                                    <p class="section-description-intentship">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolore,
                                        dolor fugiat similique ab rerum, blanditiis harum debitis totam quisquam
                                        laboriosam eos recusandae quibusdam. Totam eligendi ab eaque incidunt
                                    </p>
                                    <p class="eventDateTimePurple">2hrs agos</p>
                                </div>
                            </div>
                        </div>
                        <button class="parentComment mt-2">+ Add your comment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@include('layouts.dashboard-footer')