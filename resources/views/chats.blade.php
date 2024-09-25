@extends('layouts.liveview')


@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
    <div class="col-md-6">
        @livewire("chat-list")
        </div>
        <div class="col-md-6">
        @livewire("chat-form")
        </div>
    </div>

</div>


@endsection


       