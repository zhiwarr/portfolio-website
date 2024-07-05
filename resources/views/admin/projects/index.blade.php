@extends('admin.layouts.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0 ">Projects</h6>

        </div>
        {{ $dataTable->table() }}
    </div>
</div>
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endsection