@extends('admin.app.app')'title' => 'required',
@section('main-content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create Teacher</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Teachers</a></li>
                                <li class="breadcrumb-item active">Create Teacher</li>
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
                            <form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                  <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="designation" name="designation" required>
                                  </div>


                                  <div class="col-md-6">
                                    <label for="image" class="form-label">Image (suggested 265 * 275px)</label>
                                    <input type="file" class="form-control dropify" id="image" name="image" data-default-file="{{ old('image') }}" required>
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


