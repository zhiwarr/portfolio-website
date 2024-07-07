<section class="ftco-section" id="courses">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Courses</h1>
                <h2 class="mb-4">Courses</h2>
                <p>And here is our latest courses in youtube</p>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)

            <div class="col-md-4 text-center d-flex ftco-animate">
                <div class="services-1 d-flex align-items-center flex-column">
                    <img src="{{ $course->image_path }}" width="300" alt="">
                    <h3 class="mb-2">{{ $course->course_name }}</h3>
                    <a class="d-block mb-2 btn btn-dark" href="{{ $course->youtube_link }}">Course Link</a>
                    @isset($course->github_url)
                    <a class="d-block btn btn-outline-success" href="{{ $course->github_url }}">Source Code</a>
                    @endisset
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>