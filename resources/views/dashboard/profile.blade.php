@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="p-3 w-100">
        <h3 class="section-title text-purple mt-3">
            Profile
        </h3>
    
    
        <div class="d-flex flex-column flex-lg-row w-100 profileContent">
            <div class="col-12 col-lg-4 displayOnMobile">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                    <img src="{{ asset('assets/images/zebra1.PNG') }}" style="border-radius: 100%; width: 100px; height: 100px;">
                    <p class="yellow-text mb-0">Name</p>
                    <span class="yellow-text-small">Career path name</span>
                </div>
                <p class="section-description-intentship">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia repellat modi? Ullam laudantium
                    reiciendis
                    inventore explicabo quisquam error illo quidem, recusandae accusamus ducimus voluptatibus amet quibusdam
                    officia
                    enim non.
                </p>
            </div>
            <div class="col-12 col-lg-8 w-100 d-flex flex-column flex-lg-row">
                <form action="" method="post" enctype="multipart/form-data" class="w-100 d-flex flex-column flex-lg-row justify-content-center">
                    <div class="col-12 col-lg-6 pe-lg-5 d-flex flex-column">
    
                        @csrf
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                            @if($errors->has("name")) <p style="color:red;font-size:14px;">{{ $errors->first('name') }}
                            </p>
                            @endif
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                            @if($errors->has("email")) <p style="color:red;font-size:14px;">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pe-lg-5">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Career path</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="career_path">
                            @if($errors->has("career_path")) <p style="color:red;font-size:14px;">{{ $errors->first('career_path') }}</p>
                            @endif
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Bio description</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="bio_desc">
                            @if($errors->has("bio_desc")) <p style="color:red;font-size:14px;">{{ $errors->first('bio_desc') }}
                            </p>
                            @endif
                        </div>
                        <button class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5 w-100 mb-5">Save</button>
                </form>

            </div>
            <div class="col-12 col-lg-4 hideOnMobile flex-column">
                <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                    <img src="{{ asset('assets/images/zebra1.PNG') }}" style="border-radius: 100%; width: 100px; height: 100px;">
                    <p class="yellow-text mb-0">Name</p>
                    <span class="yellow-text-small">Career path name</span>
                </div>
                <p class="section-description-intentship">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia repellat modi? Ullam laudantium
                    reiciendis
                    inventore explicabo quisquam error illo quidem, recusandae accusamus ducimus voluptatibus amet quibusdam
                    officia
                    enim non.
                </p>
            </div>
        </div>

        <div class="displayOnMobile d-flex flex-column mb-5">
            <p class="text-purple mb-0 text-center" style="font-weight: 600">You can add parent buddy</p>
            <button class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5 w-100">Add buddy</button>
        </div>
        
    </div>
</div>
@include('layouts.dashboard-footer')