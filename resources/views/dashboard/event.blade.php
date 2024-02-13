@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <h3 class="section-title text-purple mt-3">
        Our Events
    </h3>

    <h3 class="section-title2 text-purple mt-3">All</h3>

    <div class="d-flex w-100">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 w-100">
            <div class="col p-2">
                <div class="eventcard p-3">
                    <div class="eventImgWrapper">
                        <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100 eventImage" style="border-radius: 10px">
                    </div>
                    <p class="yellow-text-lg mt-3 px-2" style="font-weight: 700">
                        Event name
                    </p>
                    <p class="white-text-lg  px-2">Lorem ipsum dolor sit, amet adipisicing elit. Delectus sed repellat!</p>
                    <div class="d-flex justify-content-between px-2 pt-5">
                        <p class="eventDateTime">20th July 2023</p>
                        <p class="eventDateTime">8.00 am - 12.00 am</p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="eventcard p-3">
                    <div class="eventImgWrapper">
                        <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100 eventImage" style="border-radius: 10px">
                    </div>
                    <p class="yellow-text-lg mt-3 px-2" style="font-weight: 700">
                        Event name
                    </p>
                    <p class="white-text-lg  px-2">Lorem ipsum dolor sit, amet adipisicing elit. Delectus sed repellat!</p>
                    <div class="d-flex justify-content-between px-2 pt-5">
                        <p class="eventDateTime">20th July 2023</p>
                        <p class="eventDateTime">8.00 am - 12.00 am</p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="eventcard p-3">
                    <div class="eventImgWrapper">
                        <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100 eventImage" style="border-radius: 10px">
                    </div>
                    <p class="yellow-text-lg mt-3 px-2" style="font-weight: 700">
                        Event name
                    </p>
                    <p class="white-text-lg  px-2">Lorem ipsum dolor sit, amet adipisicing elit. Delectus sed repellat!</p>
                    <div class="d-flex justify-content-between px-2 pt-5">
                        <p class="eventDateTime">20th July 2023</p>
                        <p class="eventDateTime">8.00 am - 12.00 am</p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="eventcard p-3">
                    <div class="eventImgWrapper">
                        <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100 eventImage" style="border-radius: 10px">
                    </div>
                    <p class="yellow-text-lg mt-3 px-2" style="font-weight: 700">
                        Event name
                    </p>
                    <p class="white-text-lg  px-2">Lorem ipsum dolor sit, amet adipisicing elit. Delectus sed repellat!</p>
                    <div class="d-flex justify-content-between px-2 pt-5">
                        <p class="eventDateTime">20th July 2023</p>
                        <p class="eventDateTime">8.00 am - 12.00 am</p>
                    </div>
                </div>
            </div>
            <div class="col p-2">
                <div class="eventcard p-3">
                    <div class="eventImgWrapper">
                        <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100 eventImage" style="border-radius: 10px">
                    </div>
                    <p class="yellow-text-lg mt-3 px-2" style="font-weight: 700">
                        Event name
                    </p>
                    <p class="white-text-lg  px-2">Lorem ipsum dolor sit, amet adipisicing elit. Delectus sed repellat!</p>
                    <div class="d-flex justify-content-between px-2 pt-5">
                        <p class="eventDateTime">20th July 2023</p>
                        <p class="eventDateTime">8.00 am - 12.00 am</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- section 6 --}}
    <div class="row mt-5 mb-5">
        <div class="col-6 p-5 text-center d-flex flex-column justify-content-center align-items-center">
            <h3 class="section-title text-purple">Find out your child <br>
                or your brain!</h3>
            <button class="yellow-btn mt-1 px-5">Let's find out!</button>
        </div>
        <div class="col-6 p-5">
            <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
        </div>
    </div>

</div>
@include('layouts.dashboard-footer')