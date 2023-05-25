@extends('admin.app.app')
@section('main-content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create Package</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Packages</a></li>
                                <li class="breadcrumb-item active">Create Package</li>
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

                            <form method="POST" action="{{ route('packages.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                          value="{{ old('title') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <input type="text" class="form-control" id="subtitle" name="subtitle"
                                          value="{{ old('subtitle') }}" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="summernote" name="description"
                                          rows="5">{!! old('description') !!}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="itinerary" class="form-label">Itinerary</label>
                                        <textarea class="form-control" id="summernote1" name="itinerary"
                                          rows="5">{!! old('itinerary') !!}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="notes_policy" class="form-label">Notes & Policy</label>
                                        <textarea class="form-control" id="summernote2" name="notes_policy"
                                          rows="5">{!! old('notes_policy') !!}</textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="packages_pricing" class="form-label">Packages & Pricing</label>
                                        <textarea class="form-control" id="summernote3" name="packages_pricing"
                                          rows="5">{!! old('packages_pricing') !!}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="price" class="form-label">Price</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{ old('price') }}"
                                              id="price" name="price">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="duration" class="form-label">Duration (in days)</label>
                                        <input type="text" class="form-control" value="{{ old('duration') }}"
                                          id="duration" name="duration">
                                    </div>

                                    <div class="col-md-4">
                                        <label for="check_in" class="form-label">Check In</label>
                                        <input type="date" class="form-control" value="{{ old('check_in') }}"
                                          id="check_in" name="check_in">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="check_out" class="form-label">Check Out</label>
                                        <input type="date" class="form-control" value="{{ old('check_out') }}"
                                          id="check_out" name="check_out">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="tour_map" class="form-label">Tour Map (*insert embeded
                                            link)</label>
                                        <textarea rows="5" type="text" class="form-control" id="tour_map"
                                          name="tour_map">{{ old('tour_map') }}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="destination" class="form-label">Destination :</label>
                                        <select id="destination" name="destination_id" class="form-select">

                                            <option selected="">Choose...</option>
                                            @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}">{{ $destination->title }}
                                            </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="service" class="form-label">Under Service of :</label>
                                        <select id="service" name="service_id" class="form-select" required>

                                            <option selected="">Choose...</option>
                                            @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Image (Suggested: 380 * 380 px)</label>
                                        <input type="file" class="form-control dropify" id="image" name="image"
                                          data-default-file="{{ old('image') }}" required>
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
