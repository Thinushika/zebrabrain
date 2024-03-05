@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="p-3 w-100 mb-5 mb-lg-2">
        <h3 class="section-title text-purple mt-3">
            Your Flow & Grow Tips
        </h3>


        <div class="d-flex flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-8 pe-3">
                <h3 class="section-title text-purple mt-3">
                    Management Skills
                </h3>
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100" style="border-radius: 8px">
                <h3 class="section-title2 text-purple mt-5">Tip number 01
                </h3>
                <p class="section-description-intentship mt-1 pe-lg-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia repellat modi? Ullam laudantium
                    reiciendis inventore explicabo quisquam error illo quidem, recusandae accusamus ducimus voluptatibus amet
                    quibusdam officia enim non.
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <h3 class="section-title text-purple mt-3">
                    Tips Playlist
                </h3>
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100" style="border-radius: 8px">
                <h3 class="section-title text-purple mt-3">
                    Tip Name
                </h3>
                <p class="section-description-intentship mt-1 pe-lg-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia repellat modi? 
                </p>
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100" style="border-radius: 8px">
            </div>
        </div>

        
    </div>

</div>
@include('layouts.dashboard-footer')