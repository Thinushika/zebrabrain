@include('layouts.dashboard-header')
<div class="dashboard-page-content">
    <div class="p-3 w-100">
        <div class="d-flex flex-row">
            <div class="col-12 col-lg-7">
                <h3 class="section-title text-purple mt-3">
                    My brain test attempts
                </h3>
                <p class="section-description-intentship mt-1 pe-5">
                    You can see latest 10 attempts only. Other older attempts will be deleted automatically.
                </p>
                <div class="d-flex flex-row justify-content-between w-100 ">
                    <div class="divtable">
                        {{-- row-1 --}}
                        <div class="d-flex flex-column row1">
                            <div class="d-flex flex-row justify-content-between">
                                <p class="title-16-purple" style="font-weight: 700">
                                    Attempt 03
                                </p>
                                <p class="title-16-purple" style="font-weight: 500">
                                    21 - 09 - 2023
                                </p>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-3">
                                    <p class="section-description-intentship">
                                        L1 = 86%
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="section-description-intentship">
                                        L2 = 66%
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-3">
                                    <p class="section-description-intentship">
                                        R1 = 52%
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="section-description-intentship">
                                        R2 = 650
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- row-2 --}}
                        <div class="d-flex flex-column row2">
                            <div class="d-flex flex-row justify-content-between">
                                <p class="title-16-purple" style="font-weight: 700">
                                    Attempt 02
                                </p>
                                <p class="title-16-purple" style="font-weight: 500">
                                    21 - 09 - 2023
                                </p>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-3">
                                    <p class="section-description-intentship">
                                        L1 = 86%
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="section-description-intentship">
                                        L2 = 66%
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-3">
                                    <p class="section-description-intentship">
                                        R1 = 52%
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="section-description-intentship">
                                        R2 = 650
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- row-3 --}}
                        <div class="d-flex flex-column row1">
                            <div class="d-flex flex-row justify-content-between">
                                <p class="title-16-purple" style="font-weight: 700">
                                    Attempt 03
                                </p>
                                <p class="title-16-purple" style="font-weight: 500">
                                    21 - 09 - 2023
                                </p>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-3">
                                    <p class="section-description-intentship">
                                        L1 = 86%
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="section-description-intentship">
                                        L2 = 66%
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="col-3">
                                    <p class="section-description-intentship">
                                        R1 = 52%
                                    </p>
                                </div>
                                <div class="col-9">
                                    <p class="section-description-intentship">
                                        R2 = 650
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-center justify-content-lg-end my-5 my-lg-0">
                    <button class="yellow-btn mt-4 px-5">Try again</button>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/brain.PNG') }}" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@include('layouts.dashboard-footer')