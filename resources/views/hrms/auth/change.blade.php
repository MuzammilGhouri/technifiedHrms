@extends('hrms.layouts.base')

@section('content')
     <!--START CONTENT -->
    <!--<div class="content">-->


    <!--     -------------- Content -------------- -->
    <!--    <section id="content" class="table-layout animated fadeIn" >-->
    <!--         -------------- Column Center -------------- -->
    <!--        <div class="chute-affix" data-spy="affix" data-offset-top="200">-->
    <!--            <div class="row">-->
    <!--                <div class="col-xs-12">-->
    <!--                    <div class="panel">-->
    <!--                        <div class="panel-heading">-->

    <!--                                <span class="panel-title hidden-xs"> Change Password </span>-->
    <!--                        </div>-->

    <!--                        <div class="panel-body pn">-->
    <!--                            <div class="table-responsive">-->
    <!--                                <div class="panel-body p25 pb10">-->
    <!--                                    @if(Session::has('flash_message'))-->
    <!--                                        <div class="alert alert-success">-->
    <!--                                            {{Session::get('flash_message')}}-->
    <!--                                        </div>-->
    <!--                                    @endif-->
    <!--                                    {!! Form::open(['class' => 'form-horizontal', 'id' => 'passwordForm']) !!}-->

    <!--                                    <div class="form-group">-->
    <!--                                        <label class="col-md-3 control-label"> Enter Old Password </label>-->
    <!--                                        <div class="col-md-6">-->

    <!--                                                <input type="password" name="old" id="old_password" class="select2-single form-control" placeholder="Old password">-->

    <!--                                        </div>-->
    <!--                                    </div>-->

    <!--                                        <div class="form-group">-->
    <!--                                            <label class="col-md-3 control-label"> Enter New Passowrd </label>-->
    <!--                                            <div class="col-md-6">-->

    <!--                                                <input type="password" name="new" id="new_password" class="select2-single form-control" placeholder="New password">-->

    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                        <div class="form-group">-->
    <!--                                            <label class="col-md-3 control-label"> Confirm New Password </label>-->
    <!--                                            <div class="col-md-6">-->

    <!--                                                <input type="password" name="confirm" id="confirm_password" class="select2-single form-control" placeholder="Confirm password">-->

    <!--                                            </div>-->
    <!--                                        </div>-->

    <!--                                        <div class="form-group">-->
    <!--                                        <label class="col-md-3 control-label"></label>-->
    <!--                                        <div class="col-md-2">-->

    <!--                                            <input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">-->
    <!--                                        </div>-->
    <!--                                        <div class="col-md-2"><a href="/change-password" >-->
    <!--                                                <input type="button" class="btn btn-bordered btn-success btn-block" value="Reset"></a></div>-->
    <!--                                    </div>-->
    <!--                                    {!! Form::close() !!}-->

    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--    </section>-->

    <!--</div>-->
    
<div class="row row-sm mt-5">
	<div class="col-md-12">
		<div class="card custom-card main-content-body-profile">
			<div class="tab-content">
			    <div class="main-content-body tab-pane p-4 border-top-0 active" id="settings">
					<div class="card custom-card border">
						<div class="card-body" data-select2-id="12">
						    <div class="mb-4 main-content-label">Account</div>
						    @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{Session::get('flash_message')}}
                            </div>
                            @endif
                            {!! Form::open(['class' => 'form-horizontal', 'id' => 'passwordForm']) !!}
                            
							<div class="form-group ">
								<div class="row row-sm">
									<div class="col-md-2">
							    		<label class="form-label">Enter Old Password</label>
									</div>
								<div class="col-md-10">
								    <input type="password" name="old" class="form-control" id="old_password" placeholder="Old password" required> </div>
								</div>
							</div>                            
                            
							<div class="form-group ">
								<div class="row row-sm">
									<div class="col-md-2">
							    		<label class="form-label">Enter New Passowrd</label>
									</div>
								<div class="col-md-10">
								    <input type="password" name="confirm" id="confirm_password" class="form-control" placeholder="New password" required> </div>
								</div>
							</div>                            
                            <div class="form-group mb-2">
								<div class="row row-sm">
									<div class="col-md-2">
							    		<label class="form-label">Confirm New Password</label>
									</div>
								<div class="col-md-10">
								    <input type="password" name="confirm" id="confirm_password" class="form-control" placeholder="Confirm password" required>
								</div>
							</div>  
							<div class="card-footer py-3 mt-5">
								<div class="btn-list float-end">
									<button class="btn ripple btn-outline-danger w-md" type="submit">Submit</button>
									<a class="btn ripple btn-danger w-md" href="/change-password">Reset</a>
								</div>
							</div>
                            {!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
							
	</div>
</div>
@endsection