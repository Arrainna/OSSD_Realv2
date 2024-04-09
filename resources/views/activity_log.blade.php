@extends('layouts.default')

@section('title','Home')

@section('content')
    <div class="p-0 mt-4 "  style="height:300px;">
        <h2 class="ps-4">User Activity</h2>
        <ul class="p-0" style="list-style-type:none;">
        @php
            $count = 0;
        @endphp
        <li class="d-flex align-items-center custom-table" style="height: 50px">
            <div class="col-2 d-flex align-items-center ps-4" style="height:100%">
                <label label class="fs-6 fw-normal cursor" for=""><b>Username</b></label>
            </div>
            <div class="col-3 d-flex align-items-center" style="height:100%">
                <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><b>Email</b></label>
            </div>
            <div class="col-2 d-flex align-items-center" style="height:100%">
                <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><b>IP-Address</b></label>
            </div>
            <div class="col-2 d-flex align-items-center" style="height:100%">
                <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><b>Description</b></label>
            </div>
            <div class="col-2 d-flex align-items-center" style="height:100%">
                <label class="fs-6 fw-normal mt-1 ms-2 cursor" for=""><b>Date-Time</b></label>
            </div>
        </li>
        @php
            $reversed_activities = array_reverse($user_activity);
        @endphp
        @foreach ($reversed_activities as $index => $activity)
        @if ($activity->id_user == Auth::user()->id && $count < 13)
            <li class="d-flex align-items-center custom-table" style="height: 50px">
                <div class="col-2 d-flex align-items-center ps-4" style="height:100%">
                    <label label class="fs-6 fw-normal cursor" for="">{{ $activity->name }}</label>
                </div>
                <div class="col-3 d-flex align-items-center" style="height:100%">
                    <label class="fs-6 fw-normal mt-1 ms-2 cursor" for="">{{ $activity->email }}</label>
                </div>
                <div class="col-2 d-flex align-items-center" style="height:100%">
                    <label label class="fs-6 fw-normal cursor" for="">{{ $activity->ip }}</label>
                </div>
                <div class="col-2 d-flex align-items-center" style="height:100%">
                    <label class="fs-6 fw-normal mt-1 ms-2 cursor" for="">{{ $activity->description }}</label>
                </div>
                <div class="col-2 d-flex align-items-center" style="height:100%">
                    <label class="fs-6 fw-normal mt-1 ms-2 cursor" for="">{{ $activity->date_time }}</label>
                </div>
            </li>
            @php
                $count++;
            @endphp
        @endif
@endforeach
        </ul>
@endsection

@section('js')
@endsection
