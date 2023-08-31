@extends('hrms.layouts.base')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card mg-b-20 mt-5" id="tabs-style3">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Work Experience</h6>
                </div>
            </div>
            <div class="card-body">
                <div class="text-wrap">
                    <form action="{{route('updWork')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <input type="hidden" name="id" value="{{ $details->id }}">
                        <div class="example">
                            <div class="panel panel-primary tabs-style-3">         
                                <div class="panel-body tabs-menu-body">
                                            @foreach($empExperience as $val)
                                            <div class=''>
                                        		<!-- Make sure the repeater list value is different from the first repeater  -->
                                        		<div data-repeater-list="group_job">
                                        			<div data-repeater-item>
                                        			    <input type="hidden" name="empExpId[]" value="{{$val->id}}" />
                                                        <div class="form-group">
                                                            <label for="code" class="form-label tx-semibold">Title</label>
                                                            <input type="text" name="jobTitle[]" id="code" class="form-control" placeholder="" value="{{$val->jobTitle}}" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Company Name</label>
                                                            <input type="text" name="companyName[]" id="designation" class="form-control" placeholder="" value="{{$val->companyName}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Location</label>
                                                            <input type="text" name="compLoc[]" id="designation" class="form-control" placeholder="" value="{{$val->compLoc}}">
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="date_of_joining" class="form-label tx-semibold">Start Date</label>
                                                                <input type="date" name="job_date_of_joining[]" id="job_date_of_joining" class="form-control" placeholder="" value="{{$val->job_date_of_joining}}">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                            <div class="form-check ">
                                                              <input class="form-check-input currentWork" type="checkbox" name="currentlyWork[]" value="" id="flexCheckDefault"  <?php if($val->job_date_of_confirmation == '0000-00-00'){echo'checked';}?>>
                                                              <label class="form-check-label" for="flexCheckDefault">
                                                                I am Currently Working In
                                                              </label>
                                                            </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="date_of_confirmation" class="form-label tx-semibold">End Date</label>
                                                                <input type="date" name="job_date_of_confirmation[]" id="job_date_of_confirmation"  class="form-control" placeholder="" value="{{($val->job_date_of_confirmation != "")?$val->job_date_of_confirmation:""}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group d-flex justify-content-end">
                                                            <button type="button" onclick="deleteExperience({{ $val->id }}, this)"  class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="EmplHr"/>
                                            @endforeach
                                                
                                            <div class='repeater-two'>
                                        		<!-- Make sure the repeater list value is different from the first repeater  -->
                                        		<div data-repeater-list="group_job">
                                        			<div data-repeater-item>
                                                        <div class="form-group">
                                                            <label for="code" class="form-label tx-semibold">Title</label>
                                                            <input type="text" name="jobTitle" id="code" class="form-control" placeholder="" value="" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Company Name</label>
                                                            <input type="text" name="companyName" id="designation" class="form-control" placeholder="" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="designation" class="form-label tx-semibold">Location</label>
                                                            <input type="text" name="compLoc" id="designation" class="form-control" placeholder="" value="">
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <label for="date_of_joining" class="form-label tx-semibold">Start Date</label>
                                                                <input type="date" name="job_date_of_joining" id="job_date_of_joining" class="form-control" placeholder="" value="">
                                                            </div>
                                                            <!--<div class="form-group col-md-4">-->
                                                            <!--    <label for="date_of_joining" class="form-label tx-semibold">I am Currently Working In</label>-->
                                                            <!--    <input type="checkbox" name="currentlyWork" id="currentlyWork" class="form-check-input" >-->
                                                            <!--</div>-->
                                                            <div class="form-group col-md-4">
                                                            <div class="form-check">
                                                              <input class="form-check-input currentWork" type="checkbox" name="currentlyWork" value="present" id="flexCheckDefault" onclick="hideBtn(this)">
                                                              <label class="form-check-label" for="flexCheckDefault">
                                                                I am Currently Working In
                                                              </label>
                                                            </div>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="date_of_confirmation" class="form-label tx-semibold">End Date</label>
                                                                <input type="date" name="job_date_of_confirmation" id="job_date_of_confirmation"  class="form-control endDate" placeholder="" value="" onclick="endDate(this)">
                                                            </div>
                                                        </div>
                                                        <div class="form-group d-flex justify-content-end">
                                                            <button type="button" data-repeater-delete class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group overflow-hidden">
                                                <div class="">
                                                    <button type="button" data-repeater-create class="btn btn-primary addBtn" id="addBtn">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Add
                                                    </button>
                                                </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="ml-auto btn btn-primary mt-3" style="margin-left: auto;display: block;">Update Experience</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@push('scripts')
<script>
// $(document).ready(function(){
//  $('.currentWork').click(function(){
//   if ($(this).is(":checked"))
//     {   
//             // alert('csdc');
//         console.log($(this).parent().parent());
//         $(this).parent().parent().parent().find('.endDate').val('')  
//         $('#addBtn').hide(1000)
//     }else{
//         $(this).parent().parent().parent().find('.endDate');
//         $('#addBtn').show(1000)
//     }
//  }); 

// });

function hideBtn(e){
    
    if ($(e).is(":checked"))
    {   
            // alert('csdc');
        console.log($(e).parent().parent());
        $(e).parent().parent().parent().find('.endDate').val(null)  
        $('#addBtn').hide(1000)
    }else{
        $(e).parent().parent().parent().find('.endDate');
        $('#addBtn').show(1000)
    }
    
}
function endDate(e){
     console.log($(e).parent().parent());
    if($(e).val() == ""){
        $(e).parent().parent().find('.currentWork').prop('disabled',true)
    }else{
        $(e).parent().parent().find('.currentWork').prop('disabled',false)
    }
}
</script>
@endpush