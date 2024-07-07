<section class="py-5 bg-dark" id="projects">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h1 class="display-4 text-white">Projects</h1>
            <p class="lead text-light">Showcasing some of the notable projects I have worked on.</p>
        </div>

        <!-- Projects Loop -->
        @foreach ($projects as $index => $project)
        <div class="row mb-5 align-items-center clearfix {{ $index % 2 == 0 ? 'flex-row-reverse' : '' }}">
            <!-- Project Image and Overlay -->
            <div class="col-md-10 d-flex justify-content-center">
                <div class="position-relative w-80 p-2 d-flex flex-col"
                    style="background: #263041;border-radius:10px; height: 400px;">
                    <img src="{{ $project->image_path }}" width="200" height="200" alt="{{ $project->title }}"
                        class="img-fluid rounded shadow-lg col-md-6">
                    <div class="text-center col-md-6 text-white p-4">
                        <h2 class="h3 mt-5">{{ $project->title }}</h2>
                        <p>{!! $project->description !!}</p>
                        <a href="{{ $project->project_url }}" class=" btn btn-primary">
                            visit Link
                        </a>
                    </div>

                </div>
            </div>
            <!-- Project Number and Description -->
            <div class="col-md-2 d-flex justify-content-center align-items-center text-white">
                <div class="text-center">
                    <span class="display-1 text-white-50">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>