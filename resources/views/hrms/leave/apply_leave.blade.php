@extends('hrms.layouts.base')

@section('content')
<!--<div class="page-header">-->
<!--    <div>-->
<!--        <h2 class="main-content-title tx-24 mg-b-5">Dashboard</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Leave</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Apply Leave</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->

<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card mt-5">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Apply Leave Form</h6>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('flash_message'))
                <div class="alert alert-success">
                {{Session::get('flash_message')}}
                </div>
                @endif
                <form method="post" action="{{ route('apply-leave') }}">
                    {{ csrf_field()}}
                    <input type="hidden" value="{{\Auth::user()->id}}" id="user_id">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label tx-semibold"> Leave Type </label>
                                <select class="select2-multiple form-control select-primary leave_type" name="leave_type" required>
                                    <option value="" selected>Select One</option>
                                    @foreach($leaves as $leave)
                                    <option value="{{$leave->id}}">{{$leave->leave_type}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date_from" class="form-label tx-semibold"> Date From </label>
                                <input type="text" id="start-date" class="select2-single form-control" name="dateFrom" required onfocus="(this.type='date')">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="date_to" class="form-label tx-semibold"> Date To </label>
                                <input type="text" id="end-date" class="select2-single form-control" name="dateTo" required onfocus="(this.type='date')">
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="time_from" class="form-label tx-semibold"> Time From </label>
                                <input type="text" id="timepicker1" class="select2-single form-control" value="9:30" name="time_from" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="time_to" class="form-label tx-semibold"> Time To </label>
                                <input type="text" id="timepicker4" class="select2-single form-control" value="18:00" name="time_to" required>
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="input002" class="form-label tx-semibold"> Days </label>
                                <input id="number-of-days" name="number_of_days" value="" readonly="readonly" type="text" size="90" class="select2-single form-control"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="input002" class="form-label tx-semibold"> Reason </label>
                                <input type="text" id="textarea1" class="select2-single form-control" name="reason" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="form-group" style="text-align: right;">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
    function treatAsUTC(date) {
        var result = new Date(date);
        result.setMinutes(result.getMinutes() - result.getTimezoneOffset());
        return result;
    }
    function daysBetween(startDate, endDate) {
        var millisecondsPerDay = 24 * 60 * 60 * 1000;
        return (treatAsUTC(endDate) - treatAsUTC(startDate)) / millisecondsPerDay;
    }
    $(document).ready(function(){
        $('#start-date').change(function(){
            $('#number-of-days').val(1);
        });
        $('#end-date').change(function(){
            $('#number-of-days').val((daysBetween($('#start-date').val(), $(this).val())) + 1);
        });
    })
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;

    // or instead:
    // var maxDate = dtToday.toISOString().substr(0, 10);

    
    $('#start-date').attr('min', maxDate);
    $('#end-date').attr('min', maxDate);
</script>
@endpush