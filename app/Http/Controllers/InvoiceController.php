<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Team;
use App\Models\Invoice;
use App\Models\Role;
use App\Models\Department;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class InvoiceController extends Controller
{
    
    public function addInvoice(){
        
        $employee = DB::table('employees')->get();
        return view('hrms.invoice.createInvoice',compact('employee'));
    }
    
    public function storeInvoice(Request $request){
        // dd($request->input());
        $invoice = new Invoice();
        $invoice->employee_id = $request->employee_id;
        $employee = Employee::where('id',$request->employee_id)->first();
        
        $invoice->invoice_date = $request->invoiceDate;
        $invoice->employee_code = $employee->code;
        $invoice->employee_name = $employee->name;
        $invoice->employee_dof = $employee->date_of_joining;
        $invoice->employee_desig = $employee->designation;  
        $invoice->employee_depart = $employee->department_id;
        $invoice->gross_salary = $request->gross_salary;
        $invoice->fuel_allowance = $request->fuel_allowance;
        $invoice->ceel_phone_allowance = $request->ceel_phone_allowance;
        $invoice->special_utility = $request->special_utility;
        $invoice->car_allowance = $request->car_allowance;
        $invoice->maintan_allowance = $request->maintan_allowance;
        $invoice->gross_salary_allowance = $request->gross_salary + $request->fuel_allowance + $request->ceel_phone_allowance + $request->special_utility + $request->car_allowance + $request->maintan_allowance ;
        $invoice->absent_deduction = $request->absent_deduction;
        $invoice->tax_deduction = $request->tax_deduction;
        $invoice->eobi = $request->eobi;
        $invoice->loan_deduction = $request->loan_deduction;
        $invoice->advance_salary = $request->advance_salary;
        $invoice->total_deduction = $request->absent_deduction + $request->tax_deduction + $request->eobi + $request->loan_deduction + $request->advance_salary;
        $invoice->security_retention = $request->security_retention;
        $invoice->car_parking_deduction = $request->car_parking_deduction;
        $invoice->net_salary_disbursement = $invoice->gross_salary_allowance - $invoice->total_deduction;
        
        $invoice->save();
        \Session::flash('flash_message', 'Invoice successfully added!');
        return redirect()->back();
    }
    
    public function showInvoice(){
        
        $invoices = DB::table('invoices')->get();
        return view('hrms.invoice.index',compact('invoices'));
    }
    
    public function pdfViewr($id){
        
        $invoice = Invoice::where('id',$id)->first();
        // dd($invoice);
        return view('hrms.invoice.pdf-viewer',compact('invoice'));
    }
    
    public function doDelete($id)
    {
        $invoice = Invoice::where('id',$id);
        $invoice->delete();

        \Session::flash('flash_message', 'Team member successfully removed!');
        return redirect('inovice-listing');
    }
    public function generatePdf(){
        
    }
}