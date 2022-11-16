@extends('layouts.store')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" ">
            <div class="card col-md-auto">
                <div class="card-header">{{ __('Store Cash Up') }}</div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <livewire:store-cash-up-form-component>
                </div>
            </div>
        </div>
    </div>
@endsection
