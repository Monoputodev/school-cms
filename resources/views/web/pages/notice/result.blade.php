
@extends('web.app.app')
@section('main-body')
    <div class="main-body">

        <section class="breadcrumbs-area bg-3 ptb-110 bg-opacity bg-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumbs">
                            <h2 class="page-title">All Announcements</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="upcoming-event-area pt-110 pb-70">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h1 class="uppercase">All Announcements</h1>
                    <div class="separator my mtb-15">
                        <i class="icofont icofont-hat-alt"></i>
                    </div>
                </div>
                <div class="all-upcoming-event">
                    <div class="row">

                      <div class="col-md-12">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



