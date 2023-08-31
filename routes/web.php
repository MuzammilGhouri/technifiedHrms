<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::group(['middleware' => ['web']], function () {

Route::group(['middleware' => ['guest']], function ()
{

    Route::get('/', 'AuthController@showLogin');

    Route::post('/', 'AuthController@doLogin');

    Route::get('reset-password', 'AuthController@resetPassword');

    Route::post('reset-password', 'AuthController@processPasswordReset');

    Route::get('register', 'AuthController@showRegister');


});

Route::group(['middleware' => ['auth']], function ()
{

    Route::get('home', 'HomeController@index');
    
    Route::get('birthday-wish','HomeController@birthdayWish');
    
    Route::get('change-password', 'AuthController@changePassword')->name('change-password');

    Route::post('change-password', 'AuthController@processPasswordChange');

    Route::get('logout', 'AuthController@doLogout')->name('logout');

    Route::get('welcome', 'AuthController@welcome');

    Route::get('not-found', 'AuthController@notFound');

    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'AuthController@dashboard']);

    Route::get('profile', 'ProfileController@show')->name('profile');

    //Route For Update Profiel
    Route::get('bank-detail','ProfileController@bankDetail')->name('bank-detail');
    
    Route::post('update-bank-detail','ProfileController@updateBank')->name('updBank');
    
    Route::get('work-experience','ProfileController@experienceDetail')->name('exp-detail');
    
    Route::post('update-work-detail','ProfileController@updateWork')->name('updWork');
    
    Route::get('education-details','ProfileController@educaDetail')->name('educ-detail');
    
    Route::post('update-education-detail','ProfileController@updateEduc')->name('updEduc');
    
    Route::get('personal-details','ProfileController@empDetail')->name('emp-detail');
    
    Route::post('update-personal-details','ProfileController@updatePers')->name('updPers');
    
    Route::post('delete-education-variants','ProfileController@deleteEduc')->name('delete.education.variant');
    
    Route::post('delete-experience-variants','ProfileController@deleteExp')->name('delete.experience.variant');
    //Routes for add-employees

    Route::get('add-employee', ['as' => 'add-employee', 'uses' => 'EmpController@addEmployee']);

    Route::post('add-employee', ['as' => 'add-employee', 'uses' => 'EmpController@processEmployee']);

    Route::post('update-employee', ['as' => 'update-employee', 'uses' => 'EmpController@processEmployeeUpdate']);

    Route::get('employee-manager', ['as' => 'employee-manager', 'uses' => 'EmpController@showEmployee']);

    Route::post('employee-manager', 'EmpController@searchEmployee');
    
    Route::get('changeStatus',['as'=>'changeStatus','uses'=>'EmpController@changeStatus']);

    Route::get('upload-emp', ['as' => 'upload-emp', 'uses' => 'EmpController@importFile']);

    Route::post('upload-emp', ['as' => 'upload-emp', 'uses' => 'EmpController@uploadFile']);

    Route::get('edit-emp/{id}', ['as' => 'edit-emp', 'uses' => 'EmpController@showEdit']);

    Route::get('view-emp/{id}', ['as' => 'view-emp', 'uses' => 'EmpController@viewEmp']);

    Route::post('edit-emp/{id}', ['as' => 'edit-emp', 'uses' => 'EmpController@doEdit']);

    Route::get('delete-emp/{id}', ['as' => 'delete-emp', 'uses' => 'EmpController@doDelete']);

    //Routes for Bank Account details

    Route::get('bank-account-details', ['uses' => 'EmpController@showDetails'])->name('bank-account-details');

    Route::post('update-account-details', ['uses' => 'EmpController@updateAccountDetail']);

    //Routes for Team.

    Route::get('add-team', ['as' => 'add-team', 'uses' => 'TeamController@addTeam']);

    Route::post('add-team', ['as' => 'add-team', 'uses' => 'TeamController@processTeam']);

    Route::get('team-listing', ['as' => 'team-listing', 'uses' => 'TeamController@showTeam']);

    Route::get('edit-team/{id}', ['as' => 'edit-team', 'uses' => 'TeamController@showEdit']);

    Route::post('edit-team/{id}', ['as' => 'edit-team', 'uses' => 'TeamController@doEdit']);

    Route::get('delete-team/{id}', ['as' => 'delete-team', 'uses' => 'TeamController@doDelete']);
    
    //Route For Invoice
    
    Route::get('create-invoice',['as' => 'create-invoice', 'uses' => 'InvoiceController@addInvoice']);
    Route::post('create-invoice',['as' => 'create-invoice', 'uses' => 'InvoiceController@storeInvoice']);
    Route::get('inovice-listing', ['as' => 'inovice-listing', 'uses' => 'InvoiceController@showInvoice']);
    Route::get('inovice-view/{id}', ['as' => 'inovice-view', 'uses' => 'InvoiceController@pdfViewr']);
    Route::get('delete-invoice/{id}', ['as' => 'delete-invoice', 'uses' => 'InvoiceController@doDelete']);
    
    Route::get('generate-pdf/{id}',['as' => 'generate-pdf', 'uses' => 'InvoiceController@generatePdf']);
    //Route For Department
    
    Route::get('add-department', ['as' => 'add-department', 'uses' => 'DepartmentController@addDepartment']);
    Route::post('add-department', ['as' => 'add-department', 'uses' => 'DepartmentController@storeDepartment']);
    Route::get('depart-listing', ['as' => 'depart-listing', 'uses' => 'DepartmentController@showDepart']);
    Route::get('edit-depart/{id}', ['as' => 'edit-depart', 'uses' => 'DepartmentController@showEdit']);
    Route::post('edit-depart/{id}', ['as' => 'edit-depart', 'uses' => 'DepartmentController@doEdit']);
    Route::get('delete-depart/{id}', ['as' => 'delete-depart', 'uses' => 'DepartmentController@doDelete']);
    Route::get('my-invoice',['as'=>'my-invoice','uses'=>'HomeController@myInvoice']);
    //Routes for Role.

    Route::get('add-role', ['as' => 'add-role', 'uses' => 'RoleController@addRole']);

    Route::post('add-role', ['as' => 'add-role', 'uses' => 'RoleController@processRole']);

    Route::get('role-list', ['as' => 'role-list', 'uses' => 'RoleController@showRole']);

    Route::get('edit-role/{id}', ['as' => 'edit-role', 'uses' => 'RoleController@showEdit']);

    Route::post('edit-role/{id}', ['as' => 'edit-role', 'uses' => 'RoleController@doEdit']);

    Route::get('delete-role/{id}', ['as' => 'delete-role', 'uses' => 'RoleController@doDelete']);

    //Routes for Leave.

    Route::get('add-leave-type', ['as' => 'add-leave-type', 'uses' => 'LeaveController@addLeaveType']);

    Route::post('add-leave-type', ['as' => 'add-leave-type', 'uses' => 'LeaveController@processLeaveType']);

    Route::get('leave-type-listing', ['as' => 'leave-type-listing', 'uses' => 'LeaveController@showLeaveType']);

    Route::get('edit-leave-type/{id}', ['as' => 'edit-leave-type', 'uses' => 'LeaveController@showEdit']);

    Route::post('edit-leave-type/{id}', ['as' => 'edit-leave-type', 'uses' => 'LeaveController@doEdit']);

    Route::get('delete-leave-type/{id}', ['as' => 'delete-leave-type', 'uses' => 'LeaveController@doDelete']);

    Route::get('apply-leave', ['as' => 'apply-leave', 'uses' => 'LeaveController@doApply']);

    Route::post('apply-leave', ['as' => 'apply-leave', 'uses' => 'LeaveController@processApply']);

    Route::get('my-leave-list', ['as' => 'my-leave-list', 'uses' => 'LeaveController@showMyLeave']);

    Route::get('total-leave-list/{id?}', ['as' => 'total-leave-list', 'uses' => 'LeaveController@showAllLeave']);
    
    Route::get('leave-list', ['as' => 'leave-list', 'uses' => 'LeaveController@leaveDistinct']);
    
    
    Route::post('total-leave-list', 'LeaveController@searchLeave');

    Route::get('leave-drafting', ['as' => 'leave-drafting', 'uses' => 'LeaveController@showLeaveDraft']);

    Route::post('leave-drafting', ['as' => 'leave-drafting', 'uses' => 'LeaveController@createLeaveDraft']);
    
    Route::get('change-status/{id}',['as'=>'change-status','uses'=>'LeaveController@changeStatus']);
    
    Route::post('update-status/{id}',['as'=>'update-status','uses'=>'LeaveController@approveLeave']);
    
    Route::get('notification/{id}', ['as' => 'notification', 'uses' => 'HomeController@notification']);
    //Routes for Attendance.

    Route::get('attendance-upload', ['as' => 'attendance-upload', 'uses' => 'AttendanceController@importAttendanceFile']);

    Route::post('attendance-upload-sheet', ['as' => 'attendance-upload-sheet', 'uses' => 'AttendanceController@uploadFile']);

    Route::get('attendance-manager', ['as' => 'attendance-manager', 'uses' => 'AttendanceController@showSheetDetails']);

    Route::post('attendance-manager', ['as' => 'attendance-manager', 'uses' => 'AttendanceController@searchAttendance']);

    Route::get('delete-file/{id}', ['as' => 'delete-file', 'uses' => 'AttendanceController@doDelete']);

    //Routes for Assets.

    Route::get('hr-policy', ['as' => 'hr-policy', 'uses' => 'IndexController@showPolicy']);

    Route::get('calendar', 'AuthController@calendar');

    //Routes for Leave and Holiday.

    Route::post('get-leave-count', 'LeaveController@getLeaveCount');

    // Route::post('approve-leave', 'LeaveController@approveLeave');

    Route::post('disapprove-leave', 'LeaveController@disapproveLeave');

    Route::get('add-holidays', 'LeaveController@showHolidays');

    Route::post('add-holidays', 'LeaveController@processHolidays');

    Route::get('holiday-listing', 'LeaveController@showHoliday');

    Route::get('edit-holiday/{id}', 'LeaveController@showEditHoliday');

    Route::post('edit-holiday/{id}', 'LeaveController@doEditHoliday');

    Route::get('delete-holiday/{id}', 'LeaveController@deleteHoliday');


    //Routes for Training.

    Route::post('status-update', 'UpdateController@index');

    Route::post('post-reply', 'UpdateController@reply');

    Route::get('post/{id}', 'UpdateController@post');

    //Route For All Notification
    
    Route::get('all-notification',['as' => 'all-notification' , 'uses'=> 'HomeController@allNotifi']);
    
    
    //For Notes 
    Route::get('add-notice',['as' => 'add-notice', 'uses' => 'NotesController@addnotes']);
    
    Route::post('add-notice', ['as' => 'add-notice', 'uses' => 'NotesController@processNote']);
    
    Route::get('delete-notice/{id}', ['as' => 'delete-notice', 'uses' => 'NotesController@doDelete']);
     
    Route::get('notice-listing', ['as' => 'notice-listing', 'uses' => 'NotesController@showNote']);
    
    Route::get('edit-notice/{id}', ['as' => 'edit-notice', 'uses' => 'NotesController@showEdit']);

    Route::post('edit-notice/{id}', ['as' => 'edit-notice', 'uses' => 'NotesController@doEdit']);
    
    Route::get('notice-detail/{id}',['as' => 'notice-detail', 'uses' => 'NotesController@detail']);
    
    //Route For 
    
    Route::get('add-compliance','ComplianceController@addCompliance')->name('add.compliance');
    Route::get('showmycompliance','ComplianceController@showMycompliance')->name('showmycompliance.compliance');
    Route::get('complianceview/{id}', 'ComplianceController@complianceview')->name('complianceview.compliance');
    Route::get('viewticket','ComplianceController@ticketView')->name('show.viewticket');
    
    Route::post('store-compliance','ComplianceController@storeCompliance')->name('store.compiance');
    Route::post('ticketcomplete','ComplianceController@ticketcomplete')->name('ticketcomplete.compiance');
    
    
    //Route For 
    
    Route::get('members','HomeController@teamMember')->name('team-members');
    
});
