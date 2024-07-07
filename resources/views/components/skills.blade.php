<section class="py-12 bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900" id="skills">
    <div class="container mx-auto px-4">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-white">What I Do?</h2>
            <p class="mt-2 text-lg text-gray-300">building and developing websites, web applications, mobile
                applications, and systems to meet your digital requirements. Exceptional results guaranteed.</p>
        </div>
        <div class="d-flex flex-wrap">
            <!-- Example skill item -->
            @foreach ($skills as $skill)
            <div class="flex  items-center bg-blue-800 rounded-lg p-4">
                <img src="{{ $skill->image_path }}" style="border-radius: 10px;" width="150" height="150" alt="Laravel"
                    class="ml-3 mb-2">
                <h3 class="text-lg mt-3 text-center font-semibold text-white">{{ $skill->name }}</h3>
            </div>
            @endforeach
            <!-- Add more skills as needed -->
        </div>
    </div>
</section>