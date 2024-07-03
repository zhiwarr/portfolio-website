@extends('admin.layouts.master')
@section('content')
<!-- Main Content -->
<div class="mt-1 -ml-3 -mr-3 rounded-none card">
    <div class="card-body !px-2.5">
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
            <div class="lg:col-span-2 2xl:col-span-1">
                <div
                    class="relative inline-block rounded-full shadow-md size-20 mr-4 bg-slate-100 profile-user xl:size-28">
                    <img src="{{ env('APP_URL').'uploads/user-image/'.$data->image }}" alt=""
                        class="object-cover border-0 rounded-full img-thumbnail mr-4 user-profile-image">
                    <div
                        class="absolute bottom-0 flex items-center justify-center rounded-full size-8 ltr:right-0 rtl:left-0 profile-photo-edit">
                        <input id="profile-img-file-input" type="file" class="hidden profile-img-file-input">
                        <label for="profile-img-file-input"
                            class="flex items-center justify-center bg-white rounded-full shadow-lg cursor-pointer size-8 dark:bg-zink-600 profile-photo-edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" data-lucide="image-plus"
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
            <!--end col-->
            <div class="lg:col-span-10 2xl:col-span-9">
                <h5 class="mb-1">{{ Auth::user()->name }} <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" data-lucide="badge-check"
                        class="lucide lucide-badge-check inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20">
                        <path
                            d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
                        </path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg></h5>
                <div class="flex gap-3 mb-4">
                    <p class="text-slate-500 dark:text-zink-200"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" data-lucide="user-circle"
                            class="lucide lucide-user-circle inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="10" r="3"></circle>
                            <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                        </svg> Web Developer &amp; </p>
                    <p class="text-slate-500 dark:text-zink-200"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" data-lucide="map-pin"
                            class="lucide lucide-map-pin inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg> {{ Auth::user()->address }}</p>
                </div>
                <ul
                    class="flex flex-wrap gap-3 mt-4 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                    <li class="px-5">
                        <h5>1542</h5>
                        <p class="text-slate-500 dark:text-zink-200">Projects</p>
                    </li>
                    <li class="px-5">
                        <h5>10.65k</h5>
                        <p class="text-slate-500 dark:text-zink-200">Courses</p>
                    </li>
                    <li class="px-5">
                        <h5>115+</h5>
                        <p class="text-slate-500 dark:text-zink-200">Languages</p>
                    </li>
                </ul>
                <p class="mt-4 text-slate-500 dark:text-zink-200">Phone : {{ Auth::user()->phone }}</p>
                <p class="mt-4 text-slate-500 dark:text-zink-200">Email : {{ Auth::user()->email }}</p>
                <p class="mt-4 text-slate-500 dark:text-zink-200">Birthday : {{ Auth::user()->birthday }}</p>
                <p class="mt-4 text-slate-500 dark:text-zink-200"><a href="{{ url('/download') }}"> CV : {{
                        Auth::user()->cv
                        }}</a></p>
                <p class="mt-4 text-slate-500 dark:text-zink-200">{!! $data->description !!}</p>
                <div class="flex gap-2 mt-4">
                    <a href="{{ Auth::user()->fb_url }}"
                        class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            data-lucide="facebook" class="lucide lucide-facebook size-4">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                            </path>
                        </svg>
                    </a>
                    <a href="{{ Auth::user()->inst_url }}"
                        class="flex items-center justify-center text-pink-500 transition-all duration-200 ease-linear bg-pink-100 rounded size-9 hover:bg-pink-200 dark:bg-pink-500/20 dark:hover:bg-pink-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            data-lucide="instagram" class="lucide lucide-instagram size-4">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="{{ Auth::user()->linkedin_url }}"
                        class="flex items-center justify-center transition-all duration-200 ease-linear rounded text-custom-500 bg-custom-100 size-9 hover:bg-custom-200 dark:bg-custom-500/20 dark:hover:bg-custom-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            data-lucide="linkedin" class="lucide lucide-linkedin size-4">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                            </path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>

                    <a href="{{ Auth::user()->github_url }}"
                        class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-slate-500 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            data-lucide="github" class="lucide lucide-github size-4">
                            <path
                                d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                            </path>
                            <path d="M9 18c-4.51 2-5-2-7-2"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-12 2xl:col-span-2">
                <div class="flex gap-2 2xl:justify-end">
                    <a href="mailto:{{ Auth::user()->gmail_url }}"
                        class="flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            data-lucide="mail" class="lucide lucide-mail size-4">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg></a>
                    <a href="{{ route('admin.profile.edit',Auth::user()->id) }}"
                        class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Edit
                        Profile</a>

                </div>
            </div>
        </div>
        <!--end grid-->

    </div>
</div>


@endsection