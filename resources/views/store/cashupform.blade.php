@extends('layouts.store')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Store Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                      <!--first row-->
                        <div class="row">
                          <div class="col-sm  border">
                            One of 4 columns
                          </div>
                          <div class="col-sm border">
                            One of 4 columns
                          </div>
                          <div class="col-sm border">
                            One of 4 columns
                          </div>
                          <div class="col-sm border">
                            One of 4 columns
                          </div>
                        </div>
                        <!--MID-->
                        <div class="row">
                          <div class="col-sm  border">
                            <div class="row">
                              <div class="col-sm  border">
                                One of 1 columns
                              </div>
                              <div class="col-sm border">
                                One of 2 columns
                              </div>
                            </div>
                          </div>
                          <div class="col-sm border">
                            <div class="row">
                              <div class="col-sm  border">
                                One of 2 rows
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm  border">
                                One of 2 rows
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--END-->
                        <div class="row">
                          <div class="col-sm  border">
                            One of 4 columns
                          </div>
                          <div class="col-sm border">
                            One of 4 columns
                          </div>
                          <div class="col-sm border">
                            One of 4 columns
                          </div>
                          <div class="col-sm border">
                            <div class="row">
                              <div class="col-sm  border">
                                One of 2 rows
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm  border">
                                One of 2 rows
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
