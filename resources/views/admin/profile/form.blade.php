@extends('admin.layouts.master')
@section('content')
<!-- Main Content -->
<div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
    <div class="grow">
        <h5 class="text-16">Add New</h5>
    </div>
    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
        <li
            class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
            <a href="#!" class="text-slate-400 dark:text-zink-200">Products</a>
        </li>
        <li class="text-slate-700 dark:text-zink-100">
            Add New
        </li>
    </ul>
</div>
<div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
    <div class="xl:col-span-9">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">Edit Profile</h6>

                <form action="{{ route('admin.profile.update',['profile'=>$data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="lg:col-span-2 2xl:col-span-1">
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            {{ $error }}
                            @endforeach
                            @endif
                            <div
                                class="relative inline-block rounded-full shadow-md size-20 mr-4 bg-slate-100 profile-user xl:size-28">
                                <img src="{{ env('APP_URL').'uploads/user-image/'.Auth::user()->image }}" alt=""
                                    class="object-cover border-0 rounded-full img-thumbnail mr-4 user-profile-image">
                                <div
                                    class="absolute bottom-0 flex items-center justify-center rounded-full size-8 ltr:right-0 rtl:left-0 profile-photo-edit">
                                    <input id="profile-img-file-input" name="image" type="file"
                                        class="hidden profile-img-file-input">
                                    <label for="profile-img-file-input"
                                        class="flex items-center justify-center bg-white rounded-full shadow-lg cursor-pointer size-8 dark:bg-zink-600 profile-photo-edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="image-plus"
                                            class="lucide lucide-image-plus size-4 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500">
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7"></path>
                                            <line x1="16" x2="22" y1="5" y2="5"></line>
                                            <line x1="19" x2="19" y1="2" y2="8"></line>
                                            <circle cx="9" cy="9" r="2"></circle>
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                Name</label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ $data->name }}" name="name" required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                Email</label>
                            <input type="text" id="productEmailInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ $data->email }}" name="email" required>
                        </div>

                        <!--end col-->
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                Password</label>
                            <input type="password" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                name="password">
                        </div>
                        <!--end col-->
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                Confirm Password</label>
                            <input type="password" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                name="password_confirmation">
                        </div>
                        <!--end col-->
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                address</label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ $data->address }}" name="address">
                        </div>
                        <!--end col-->
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                facebook</label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ $data->fb_url }}" name="fb_url">
                        </div>
                        <!--end col-->
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                Instagram</label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ $data->inst_url }}" name="inst_url">
                        </div>
                        <!--end col-->
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                linkedin</label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ $data->linkedin_url }}" name="linkedin_url">
                        </div>
                        <!--end col-->
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                github</label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ $data->github_url }}" name="github_url">
                        </div>
                        <!--end col-->
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">Profile
                                gmail</label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ $data->gmail_url }}" name="gmail_url">
                        </div>
                        <!--end col-->

                        <div class="lg:col-span-2 xl:col-span-12">
                            <div>
                                <label for="desc" class="inline-block mb-2 text-base font-medium">Description</label>
                                <textarea name="description"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    id="desc" placeholder="Enter Description"
                                    rows="5"> {{ $data->description }}</textarea>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="xl:col-span-4">
                            <label for="publishDateTime"
                                class="inline-block mb-2 text-base font-medium">Birthday</label>
                            <input type="date" id="publishDateTime"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Select date & time" data-provider="flatpickr" name="birthday"
                                value="{{ $data->birthday }}" data-date-format="d M, Y" data-enable-time>
                        </div>

                        <!--end col-->

                    </div>
                    <!--end grid-->
                    <div class="lg:col-span-2 xl:col-span-12">
                        <label for="genderSelect" class="inline-block mb-2 text-base font-medium">CV file</label>
                        <div
                            class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dark:bg-zink-700 dark:border-zink-500 dropzone2">
                            <div class="fallback">
                                <input name="file" name="cv" type="file">
                            </div>
                            <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                <div class="mb-3">
                                    <i data-lucide="upload-cloud"
                                        class="block mx-auto size-12 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>

                                <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Drag and drop
                                    your file or <a href="#!">browse</a> file</h5>
                            </div>
                        </div>

                        <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2">
                            <li class="mt-5" id="dropzone-preview-list2">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded border-slate-200 dark:border-zink-500">
                                    <div class="p-2 text-center">
                                        <div>
                                            <div class="p-2 mx-auto rounded-md size-14 bg-slate-100 dark:bg-zink-600">
                                                <img data-dz-thumbnail class="block w-full h-full rounded-md"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAADsQAAA7EB9YPtSQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAfdSURBVHic7Z1PbBVFHMe/80or/UPUiNg2NaFo0gCJQeBogMSLF6Xg3RgTTRM0aALGhKsXwAMHE40nOXgxMVj05AkPykFIvDSEaKGmoa0NkYDl9bXP3fHQPmh3Z3d2Z34zu+/t73th57fznZ3ufNi3019/eQIONDUlex4MLI8LIcYhsV8KjAig/1EHsbl/pKmOW3rU/YWBR32dX1bq+PT+XTRqIhzt7vl7Z1fP99v75amvhofrKcMUrrSf0UhXZ+vHpRTnBbAr9WIdBsFr89NYkBKo1YCuGlDrwmB3T/PVJ3rf/WZ0x8WUYQpVjWogKWXt178a56QU30Gx+AAgExuxphOPur808MTPLTRXgTAAwhAIQiAMsNBc7f62vvT1m9OLF1KGKVRkAFydXTkLyNOtto8FNfE4gyAI1xY/AkEzDHCp8e/JY9PzX6QMU5hIALg6Uz8OGZ4CkOnGdSQEYZAIQRiGmGzUJ96Ynv88ZZhCZA3A1JTsCQXOrbXkpn8ih5vUaRA8WvgUCH5s1E+U7UlgDcC9geVxAC88vjkVhSAMM0FQtieBNQBC4ljruNIQBEFmCMr0JLB/BxA4sLFZWQjCMBcEk436RBkgoHgJHIoGKglBa+HbDAJrACQwkBDffNTpEIRBW0JAsg3U3+gKQBCEbQkB3W8CtfHOhuDxIrcXBPYA5FrQDoZg0yK3DwQ0TwCGQLHI7QEB2UdA5SEIVYtcfgjoAACqDUF0wdsEAoptYGKgUhBsWMB2gsDNNrCCEEQXsF0gcLcNrBoEigVsBwhI3wGqDEGfqLUlBLQvgaguBM929yQuYJkhIAcAqCYEu7c9lbqAVBBcXlmeoPwbQ/pdQFK8wyE48tywdgEpIAiCAJcbSyffnll8J2GqueQpGRQPdBoERwZHMLK1zwsEzTDAT8v1L9+bm+tLmGpmeUwGxQOdBMEWUcOHu/dlWkAKCOb+a3bffSg+S5hmZnlOBpl42geCI0PP463RMW8QzATNowlTzKwttgMAWLsJInaY1MXAs36U9zqRTj487+95GUIAF2/dVLhodbu5Mmg7Bg0AAEOw3qgJgQ/27MdLT+/AhRu/Y7bxUOGkUW8oa/csx7AGIOnGVRkCADg8NIJXBodxZeEOrizewY0H97HYXEE9DBWj5Ndg1xaceXI7TliOY10c+vPtuowNlKG4MhbP5RFm1+mwglQIYN/QVqs1dLML4BdDTX9p4NHPzUTucgEMgaY/EQSWcpsLYAg0/YuHwH0ugCHQ9C8WAicAAAyBLwhs5SwZFDvHEGj6FwOB02RQ7BxDoOnvHwLnyaDYOYZA098vBF6SQbFzDIGmvz8IvFUGxc4xBJr+fiDwWhkUO8cQaPq7h4B2F8AQWHlMILAV/S6AIbDy+IagsGSQiYchoIeg0GSQiYchIP0EKD4ZZOJhCOggKEUyyMTDENBAUJpkkImHIbBXqZJBJh6GwE4ETwDJEHjyUL78tUT0EcAQ+PJQQ0CYDGIIfHkoISBOBjEEvjxUEDhIBjEEvjwUEDhKBjEEPj02cpgMYgh8ekzlOBnEEPj0mMhDMoghcOqxlKdkEEPg1GMhj8kghsCpx1Cek0EMAbXHVgUkgxgCao+NCqoMYgioPaYqsDKIIaD2mKjgyiCGgNqTVyWoDGIIqD15VJLKIIbA1GOrElUGMQSmHhuVrDKIITD1mKqElUEMganHRCWtDGIIcs3NQiWuDGIIcs3NUCWvDGIIcs3NQH6+MoYhcAaBrfx9ZQxDUEoI/H5lDENQOgjcfnGkKs4QlAoC0mSQoqmOMwSlgYA8GaRoquMMQSkgcJIMUjTVcYbAGgJbOUsGKZpaD0PgHwKnySBFU+thCPxC4DwZpGhqPQyBPwi8JIMUTa2HIchxHQt5SwYpmloPQ+AeAq/JIEVT62EI3ELgPRlk4mEIaB/7G1VIMsjEwxC4gaCwZJCJhyGgh8BLYQhDkBwoGgJvhSEMQXKgSAi8FoYwBMmBoiCg3QYyBFoPNQS2ot8GMgRaT5kgcLMNZAi0nrJA4G4byBBoPSQQWMrt3wQyBFpP0RC4TQZFAgxBhv6mHkORfGGENsIQaD1FQUC0C2AIKDwm98xWhLsAhoDC4xsC4l0AQ0Dh8QmBg2QQQ0Dh8QWBo2QQQ0Dh8QGBw2QQQ0DhcQ2B42QQQ0DhSbtntvKQDGIIKDyuIPCUDGIIKDwuIPCYDGIIKDyET38A3pNBDAGFhxKCApJBDAGFhwoC95VBkQBDQOehgMBPZVAkwBDQemzkrzIoEmAIaD2m8lsZFAkwBLQeE/mvDFJ6GAIqT14VUxmk9DAEVJ48IgBALAFgCAqBQD5IsWUSwS5Azm1oqA4j/ZMDDEE+j4CYU/XNI4qPgGt5fyCGgOY6EvgtpXsmUTwBJtfnszGoOkRClwQPQ6D1hLic0jWTrAEYXhq4BCH+BBgCzxDcema5t3gADh4UTUB83GozBKoGOQRSSvnR3r1iNWXYTCLZBr4+1ncJwPlWmyFQNUghOHt4V7/1/36A8DeB18f6PwFwrtVmCFQNawgkgLOHdvaeSRkmlwTVQC39cPPhOIDzkPLF2AWE8jB9QjFP3Kn3aK4jUs5l8KTdRLVHGHjwRw3y9KHR/skUa26RAwAA167J7vmBpaOAGAdwQECMAHIgekWGINWzBMhZQFyXwOS2f3on1963aPU/SCR3QJ8FDxUAAAAASUVORK5CYII="
                                                    alt="Dropzone-Image">
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="mb-1 text-15" data-dz-name>&nbsp;</h5>
                                            <p class="mb-0 text-slate-500 dark:text-zink-200" data-dz-size></p>
                                            <strong class="error text-danger" data-dz-errormessage></strong>
                                        </div>
                                        <div class="mt-2">
                                            <button data-dz-remove
                                                class="px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button type="submit"
                        class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 mt-5 active:ring active:ring-custom-100 dark:ring-custom-400/20">Update</button>
                </form>
            </div>
        </div>
        <!--end card-->
    </div>

</div>
<!--end grid-->

@endsection