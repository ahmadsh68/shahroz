@extends('layouts.app')

@section('content')
<div class="card card-custom gutter-b">
    <div class="card-header">
        <h3 class="card-title">@lang('admin.categories.create')</h3>
    </div>

    <!--begin::Form-->
    {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put', 'class' => 'form']) !!}
    @include('admin.categories._form')
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-6">
                <button type="submit" class="btn btn-primary mr-2">@lang('admin.global.save')</button>
                <button type="reset" class="btn btn-secondary">@lang('admin.global.cancel')</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <!--end::Form-->
</div>
@endsection