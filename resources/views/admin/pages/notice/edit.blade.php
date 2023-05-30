@extends('admin.app.app')
@section('main-content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Edit Notice</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">notice</a></li>
                                    <li class="breadcrumb-item active">Edit Notice</li>
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
                                <form method="POST" action="{{ route('notices.update', $notice->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="type" class="form-label">Type</label>
                                            <select class="form-control" id="type" name="type" required>
                                                <option value=""> ----- ------ </option>
                                                @foreach ($types as $type)
                                                    <option @if ($notice->type = $type->id) selected @endif
                                                        value="{{ $type->id }}"> {{ $type->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ $notice->title }}" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="subtitle" class="form-label">Subtitle</label>
                                            <input type="text" class="form-control" id="subtitle" name="subtitle"
                                                value="{{ $notice->subtitle }}" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="pdf_file" class="form-label">PDF FILE</label>
                                            <input type="file" class="form-control dropify" id="pdf_file"
                                                name="pdf_file"
                                                data-default-file="{{ asset('uploads/notices/' . $notice->pdf_file) }}">
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
