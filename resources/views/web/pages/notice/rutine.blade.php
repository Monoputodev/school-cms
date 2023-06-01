@extends('web.app.app')
@section('main-body')
    <div class="main-body">

        <section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
            <div class="container-md">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">ক্লাস রুটিন</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="upcoming-event-area pt-110 pb-70">

            <div class="container-md">
                <div class="col-sm-12 col-12" id="mainpage">


                    <div class="col-sm-12 col-12 p-0" data-aos="fade-in" data-aos-duration="2000">
                        <ul class="list-group p-0">
                            <li class="list-group-item font-weight-bold bg-success text-light" id="about">
                                {{ $title }}
                            </li>
                            <li class="list-group-item">

                                <div class="table table-responsive">
                                    <div id="example_wrapper" class="dataTables_wrapper no-footer">
                                        <table id="example" class="display table-bordered dataTable no-footer"
                                            style="width:100%" role="grid" aria-describedby="example_info">
                                            <thead>
                                                <tr style="font-size: 15px;" role="row">
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="ক্রমিক: activate to sort column descending"
                                                        style="width: 63.8438px;">ক্রমিক</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="তারিখ: activate to sort column ascending"
                                                        style="width: 83.0312px;">তারিখ</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="শিরোনাম: activate to sort column ascending"
                                                        style="width: 370.328px;">শিরোনাম</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="বিভাগ: activate to sort column ascending"
                                                        style="width: 60.6562px;">বিভাগ</th>

                                                    <th class="sorting" tabindex="0" aria-controls="example"
                                                        rowspan="1" colspan="1"
                                                        aria-label="ডাউনলোড: activate to sort column ascending"
                                                        style="width: 97.9375px;">ডাউনলোড</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rutines as $rutine)
                                                    <tr style="font-size: 12px;" class="odd">
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td>{{ $rutine->created_at->format('d M y') }}</td>
                                                        <td>{{ $rutine->title }}</td>
                                                        <td>{{ $rutine->course->name }}</td>


                                                        <td><a href="{{ asset('/') }}uploads/files/{{ $rutine->file }}"
                                                                class=""
                                                                download="{{ $rutine->title }}"><img
                                                                    src="https://www.fenipoly.edu.bd/public/frontend/img/pdf_icon.png"
                                                                    class="img-fluid"></a></td>
                                                    </tr>
                                                @endforeach



                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                                            Showing {{ $rutines->firstItem() }} to {{ $rutines->lastItem() }} of
                                            {{ $rutines->total() }} entries
                                        </div>
                                        {{ $rutines->links('pagination::bootstrap-4') }}
                                    </div>

                                </div>

                            </li>

                        </ul>
                    </div>
                </div>





            </div>
        </div>
    </div>
@endsection
