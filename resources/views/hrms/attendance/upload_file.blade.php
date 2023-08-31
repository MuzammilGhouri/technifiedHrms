@extends('hrms.layouts.base')

@section('content')
<!--<div class="page-header">-->
<!--    <div>-->
<!--        <h2 class="main-content-title tx-24 mg-b-5">Attendance Manager</h2>-->
<!--        <ol class="breadcrumb">-->
<!--            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Attendance</li>-->
<!--            <li class="breadcrumb-item active" aria-current="page">Attendance Manager</li>-->
<!--        </ol>-->
<!--    </div>-->
<!--    <div class="d-flex">-->
<!--        <div class="justify-content-center">-->
<!--            <a class="btn btn-white btn-icon-text my-2 me-2" href="/sample_sheet/attendance_sheet1.xlsx">-->
<!--                <i class="fe fe-list"></i>-->
<!--                <span>Sample Sheet</span>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card mt-5">
            <div class="card-header">
                <div>
                    <h6 class="main-content-label">Upload Attendance Sheet</h6>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('attendance-upload-sheet') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @if(session('message'))
                        {{session('message')}}
                    @endif
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">
                            {{ session::get('flash_message') }}
                        </div>
                        @endif
                    <div class="">
                        <div class="form-group">
                            <label for="username" class="form-label tx-semibold">Description</label>
                            <input type="text" class="gui-input form-control" name="description" placeholder="Description" required>
                        </div>
                        <div class="section form-group">
                            <label for="file1" class="form-label tx-semibold">Upload File</label>
                            <input type="file" class="gui-file form-control" name="upload_file" id="file1" onChange="document.getElementById('uploader1').value = this.value;" accept=".csv">
                            <p id="uploader1"></p>
                        </div>
                        <div class="form-group" style="text-align: right;">
                            <button type="submit" class="btn btn-primary mb-0">Upload Sheet</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                <div>
                    <h6 class="main-content-label mb-3">Employee Lists</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom mb-0 border dataTable no-footer" id="recentorders" role="grid" aria-describedby="recentorders_info">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i =0;?>
                            @foreach($files as $file)
                            <tr>
                                <td scope="row">{{$i+=1}}</td>
                                <td>{{$file->name}}</td>
                                <td>{{$file->description}}</td>
                                <td>{{getFormattedDate($file->date)}}</td>
                                <td>
                                    <!--<a href="" class="btn ripple btn-primary btn-sm">Edit</a>-->
                                    <a href="/delete-file/{{$file->id}}" class="btn ripple btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
                 <div class="d-felx justify-content-center">

                    {{  $files->links() }}
        
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
    <script src="/assets/js/pages/forms-widgets.js"></script>
@endpush