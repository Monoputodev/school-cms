@extends('admin.app.app')
@section('main-content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Advertisement Content</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">content</a></li>
                                    <li class="breadcrumb-item active">Advertisement Content</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('advertisement.update', $content->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="type" class="form-label">Banner Top Status</label>
                                            <select class="form-control" id="type" name="banner_top_status" required>

                                                <option @if ($content->banner_top_status == 1) selected @endif value="1">
                                                    Active </option>
                                                <option @if ($content->banner_top_status == 0) selected @endif value="0">
                                                    Hidden </option>

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="image" class="form-label"> Advertisement Banner Top (recommened 1270 * 150)</label>
                                            <input type="file" class="form-control dropify" id="image"
                                                name="banner_top"
                                                data-default-file="{{ asset('uploads/content/' . $content->banner_top) }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="type" class="form-label">Banner Slider Status</label>
                                            <select class="form-control" id="type" name="banner_hero_status" required>

                                                <option @if ($content->banner_hero_status == 1) selected @endif value="1">
                                                    Active </option>
                                                <option @if ($content->banner_hero_status == 0) selected @endif value="0">
                                                    Hidden </option>

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="image" class="form-label"> Advertisement Banner Slider (recommened 600 * 1500)</label>
                                            <input type="file" class="form-control dropify" id="image"
                                                name="banner_hero"
                                                data-default-file="{{ asset('uploads/content/' . $content->banner_hero) }}">
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div> <!-- page-content -->


        {{-- </div> --}}
    @endsection
