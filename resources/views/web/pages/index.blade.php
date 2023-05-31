@extends('web.app.app')
@section('main-body')
<div class="main-body">
    @include('web.component.section-2')
    @include('web.component.section-1')
    @include('web.component.section-3')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                 @include('web.component.result-table')
                </div>
            <div class="col-md-6">
                @include('web.component.rutine-table')
            </div>

        </div>
    </div>


    {{-- @include('web.component.section-4') --}}
    @include('web.component.form')
    @include('web.component.section-5')
    @include('web.component.section-6')
    @include('web.component.section-7')
</div>

@endsection

