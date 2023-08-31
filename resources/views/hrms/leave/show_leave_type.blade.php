@extends('hrms.layouts.base')

@section('content')

<!--<div class="page-header">-->
<!--    <div>-->
<!--        <h2 class="main-content-title tx-24 mg-b-5">Leave Type Listings</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Leave</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Leave Type Listings</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--</div>-->

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card mt-5">
            <div class="card-body">
                <div>
                    <h6 class="main-content-label mb-3">Leave Type Listings</h6>
                </div>
                <div class="table-responsive">
                    <table class="table border text-nowrap text-md-nowrap table-striped mg-b-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Leave Type</th>
                                <th>Total Leave</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i =0;?>
                        @foreach($leaves as $leave)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$leave->leave_type}}</td>
                                <td>{{$leave->total_leave}}</td>
                                <td>{{$leave->description}}</td>
                                <td>
                                    <a href="/edit-leave-type/{{$leave->id}}" class="btn ripple btn-primary btn-sm">Edit</a>
                                    <a href="/delete-leave-type/{{$leave->id}}" class="btn ripple btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $leaves->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection