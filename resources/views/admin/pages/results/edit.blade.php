@extends('admin.app.app')
@section('main-content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit Result</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">result</a></li>
                                <li class="breadcrumb-item active">Edit Result</li>
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
                            <form method="POST" action="{{ route('results.update',$result->id) }}"
                              enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Subtitle</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $result->title }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="course_id" class="form-label">Course</label>
                                        <select class="form-control" id="course_id" name="course_id" required>
                                            <option value=""> ----- ------ </option>
                                            @foreach ($courses as $course)
                                                <option @if ($notice->course_id = $course->id) selected @endif
                                                    value="{{ $course->id }}"> {{ $course->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="file" class="form-label">PDF FILE</label>
                                        <input type="file" class="form-control dropify" id="file"
                                            name="file"
                                            data-default-file="{{ asset('uploads/notices/' . $result->file) }}">
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
