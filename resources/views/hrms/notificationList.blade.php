@extends('hrms.layouts.base')

@section('content')
<div class="inner-body">
	<!-- PAGE HEADER -->
	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-24 mg-b-5">Notification List</h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
				<li class="breadcrumb-item active" aria-current="page">Notification List</li>
			</ol>
		</div>
		<div class="d-flex">
			<div class="justify-content-center">
				<button type="button" class="btn btn-white btn-icon-text my-2 me-2"> <i class="fe fe-settings"></i> <span>Settings</span> </button>
				<button type="button" class="btn btn-primary my-2 btn-icon-text"> <i class="fe fe-download-cloud bg-white-transparent text-white"></i> <span>Reports</span> </button>
			</div>
		</div>
	</div>
	<!-- END PAGE HEADER -->
	<!-- CONTAINER -->
	<div class="container">
		<ul class="notification">
		    @foreach(auth()->user()->unreadNotifications as $notification)
                <?php 
                    if($notification->type == 'App\notification\UserNotification'){                    
                    $userNotifi = App\Models\Employee::where('user_id',$notification->data['user_id'])->first();
                    }elseif($notification->type == 'App\notification\notificationStatus'){
                    $userNotifi = App\Models\Employee::where('user_id',$notification->data['approvedBy'])->first();
                    }
                ?>		    
			<li>
				<div class="notification-time"> <span class="date">Today</span> <span class="time">02:31</span> </div>
				<div class="notification-icon">
					<a href="javascript:void(0);"></a>
				</div>
				<div class="notification-time-date mb-2 d-block d-md-none"> <span class="date">Today</span> <span class="time ms-2">02:31</span> </div>
				<div class="notification-body">
					<div class="media mt-0">
						<div class="main-avatar avatar-md online"> <img alt="avatar" class="rounded-6" src="{{asset($userNotifi->photo)}}"> </div>
						<div class="media-body ms-3 d-flex">
							<div class="">
								<p class="tx-14 text-dark mb-0 tx-semibold">{{$userNotifi->name}}</p>
								@if($notification->type == 'App\notification\UserNotification')
                                
                                <p class="mb-0 tx-13 text-muted">{{$notification->data['description']}}.</p>
                                @elseif($notification->type == 'App\notification\notificationStatus')
                                    @if($notification->data['status'] == 1)
                                        <p class="mb-0 tx-13 text-muted">Approved Your Leave.</p>
                                    @elseif($notification->data['status'] == 2)
                                        <p class="mb-0 tx-13 text-muted">Disapprove Your Leave.</p>
                                    @endif
                                @endif
							</div>
							<div class="notify-time">
								<p class="mb-0 text-muted tx-11">{{$notification->created_at->diffForHumans()}}</p>
							</div>
						</div>
					</div>
				</div>
			</li>
			<?php
			    \Auth::user()->notifications->markAsRead();
			?>
			@endforeach
			@if(count(auth()->user()->unreadNotifications) == 0)
			    <h3 class="m5 text-center p-5" style="color:#4d65d9">Notification Not Found!</h3>
			@endif
		</ul>
	</div>
	<!-- END CONTAINER -->
</div>
@endsection
@push('scripts')

@endpush