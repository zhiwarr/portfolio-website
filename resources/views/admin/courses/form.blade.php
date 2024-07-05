@extends('admin.layouts.master')
@section('content')
<!-- Main Content -->

<div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
    <div class="grow">
        <h5 class="text-16"> @isset($data)
            Edit
            @else
            Add
            @endisset
            Course</h5>
    </div>
    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
        <li
            class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
            <a href="#!" class="text-slate-400 dark:text-zink-200">Courses</a>
        </li>
        <li class="text-slate-700 dark:text-zink-100">
            @isset($data)
            Edit
            @else
            Add
            @endisset
            Courses
        </li>
    </ul>
</div>
<div class="grid grid-cols-1 xl:grid-cols-10 gap-x-5">
    <div class="xl:col-span-2">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15"> @isset($data)
                    Edit
                    @else
                    Add
                    @endisset
                    Courses</h6>

                <form
                    action="{{ !isset($data) ? route('admin.courses.store'):route('admin.courses.update',['course'=>$data->id]) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($data)
                    @method('PUT')
                    @endisset
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        {{ $error }}
                        @endforeach
                        @endif
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">
                                Course_name</label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ isset($data)?$data->course_name:old('course_name') }}" name="course_name"
                                required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">
                                description</label>
                            <textarea name="description"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                id="desc" placeholder="Enter Description" rows="5"> @isset($data)
                                 {{ $data->description }}@endisset
                                </textarea>

                        </div>
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">
                                youtube_link</label>
                            <input type="text" id="productEmailInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ isset($data)?$data->youtube_link:old('youtube_link') }}" name="youtube_link"
                                required>
                        </div>
                        <div class="xl:col-span-12">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">github_url
                            </label>
                            <input type="text" id="productNameInput"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                value="{{ isset($data)?$data->github_url:old('github_url') }}" name="github_url">
                        </div>

                        <!--end grid-->
                        <div class="lg:col-span-2 xl:col-span-12">
                            <label for="genderSelect" class="inline-block mb-2 text-base font-medium">Image</label>
                            <input type="file" name="image"
                                class="cursor-pointer form-file border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                        </div>
                        <button type="submit" class="text-white btn-primary btn">
                            @isset($data)
                            Update
                            @else
                            Save
                            @endisset

                        </button>
                </form>
            </div>
        </div>
        <!--end card-->
    </div>

</div>
<!--end grid-->

@endsection