<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="{{ $courses->count() }}">{{ $courses->count() }}</strong>
                        <span>Courses</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="{{ $projects->count() }}">{{ $projects->count() }}</strong>
                        <span>Projects</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>