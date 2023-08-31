@extends('hrms.layouts.base')

@section('content')

    <div id="hamdan" class="mt-3">
        <div class="container">
            <div  style="align-items: center;margin-bottom: 20px;background: black;justify-content: center!important;display: flex!important;" id="print">
                <img  src="https://hrms.technifiedlabs.com/photos/logonew.png" alt="Logo" style="width: 230px;height: 95px;padding: 10px 0px 10px 0;">
            </div>
            
        </div>
    
        <div class="container" id="" style="max-width: 1140px;">
            <div class="row">
                <div class="col-md-12 d-flex">    
                    <!--<div class="col-md-12 firstContent">-->
                    <!--    <p>Salary Slip for the month of</p>    -->
                    <!--</div>-->
                    <div class="col-md-12 firstContent">
                        <?php 
                        // om the database into the $dbTimestamp variable
                        $dbTimestamp = $invoice->invoice_date;
                        
                        // Create a DateTime object from the timestamp
                        $dateTime = new DateTime($dbTimestamp);
                        
                        // Extract the date using the format() method and the desired format ('Y-m-d')
                        $date = $dateTime->format('Y-m-d');
                        $formattedDate = date('F , Y', strtotime($date));
                        ?>
                        <p>Salary Slip for the month of  <span class="dateColor" >{{$formattedDate}}</span></p>  
                        
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <table id="customers">
                          <tr>
                            <th class="desktop">Employee Code</th>
                            <th class="desktop">Employee Name</th>
                            <th class="desktop">Date Of Joining</th>
                          </tr>
                          <tr>
                            <td class="mobile-flex" data-header="Employee Code">{{$invoice->employee_code}}</td>
                            <td class="mobile-flex" data-header="Employee Name" id="empName">{{$invoice->employee_name}}</td>
                            <td class="mobile-flex" data-header="Date Of Joining">{{$invoice->employee_dof}}</td>
                          </tr>
                    </table>
                </div>
                <div class="col-md-6 mt-5">
                    <table id="customers">
                          <tr>
                            <th class="desktop">Employee Designation</th>
                            <th class="desktop">Employee Department</th>
                          </tr>
                          <tr>
                            <td class="mobile-flex" data-header="Employee Designation">{{$invoice->employee_desig}}</td>
                            <td class="mobile-flex" data-header="Employee Department">{{$invoice->department->name}}</td>
                          </tr>
                    </table>
                </div>
                <div class="col-md-6 mt-5">
                    <table id="customers">
                          <tr>
                            <th class="desktop main h4">Break Up</th>
                            <th class="desktop">Gross Salary</th>
                            <th class="desktop">Fuel Allowance</th>
                            <th class="desktop">Cell Phone Allowance</th>
                            <th class="desktop">Special Utility</th>
                            <th class="desktop">Car Allowance</th>
                            <th class="desktop">Maintenance Allowance</th>
                            <th class="desktop">Gross Salary & Allowances</th>
                          </tr>
                          <tr>
                            <td class="mobile-flex main h4" data-header="Break Up"></td>
                            <td class="mobile-flex" data-header="Gross Salary">{{$invoice->gross_salary}}</td>
                            <td class="mobile-flex" data-header="Fuel Allowance">{{$invoice->fuel_allowance}}</td>
                            <td class="mobile-flex" data-header="Cell Phone Allowance">{{$invoice->ceel_phone_allowance}}</td>
                            <td class="mobile-flex" data-header="Special Utility">{{$invoice->special_utility}}</td>
                            <td class="mobile-flex" data-header="Car Allowance">{{$invoice->car_allowance}}</td>
                            <td class="mobile-flex" data-header="Maintenance Allowance">{{$invoice->maintan_allowance}}</td>  
                            <td class="mobile-flex main" data-header="Gross Salary & Allowances">{{$invoice->gross_salary_allowance}}</td> 
                            
                          </tr>
                    </table>
    
                </div>
                <div class="col-md-6 mt-5">
                    <table id="customers">
                          <tr>
                            <th class="desktop main h4">Deduction</th>
                            <th class="desktop">Absent Deduction</th>
                            <th class="desktop">Tax Deduction</th>
                            <th class="desktop">EOBI</th>
                            <th class="desktop">Loan Deduction</th>
                            <th class="desktop">Advance Salary</th>
                            <th class="desktop">Total Deduction</th>
                          </tr>
                          <tr>
                            <td class="mobile-flex main h4" data-header="Deduction"></td>
                            <td class="mobile-flex" data-header="Absent Deduction">{{$invoice->absent_deduction}}</td>
                            <td class="mobile-flex" data-header="Tax Deduction">{{$invoice->tax_deduction}}</td>
                            <td class="mobile-flex" data-header="EOBI">{{$invoice->eobi}}</td>
                            <td class="mobile-flex" data-header="Loan Deduction">{{$invoice->loan_deduction}}</td>
                            <td class="mobile-flex" data-header="Advance Salary">{{$invoice->advance_salary}}</td>  
                            <td class="mobile-flex main" data-header="Total Deduction">{{$invoice->total_deduction}}</td> 
                            
                          </tr>
                    </table>
                    <!--<table id="customers" class="mt-5">-->
                    <!--      <tr>-->
                    <!--        <th class="desktop">Net Salary Calculation:</th>-->
                    <!--        <th class="desktop">Security Retention</th>-->
                    <!--        <th class="desktop">Car Parking Deduction</th>-->
                    <!--      </tr>-->
                    <!--      <tr>-->
                    <!--        <td class="mobile-flex" data-header="Net Salary Calculation:"></td>-->
                    <!--        <td class="mobile-flex" data-header="Security Retention">-</td>-->
                    <!--        <td class="mobile-flex" data-header="Car Parking Deduction">-</td>-->
                    <!--      </tr>-->
                    <!--</table>-->
                    <table id="customers" class="mt-5">
                          <tr>
                            <th class="desktop">Net Salary Disbursement:</th>
                          </tr>
                          <tr>
                            <td class="mobile-flex main" data-header="Net Salary Disbursement">{{$invoice->net_salary_disbursement}}</td>
                          </tr>
                    </table>
                </div>
                <div class="col-md-12 mt-5 d-flex justify-content-center">
                    <div class="w-50">
                        <hr/>
                        <h4 class="text-center">Note:<span class="ml-2 noteText">This is computer generated slip doesn't required any stamp or sign.</span></h4>
                    </div>
                </div>
            </div>
            <hr/>
        </div>
    </div>
    <div id="editor"></div>
    <div class="container mb-2">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end ">
                <button class="btn btn-success" id="cmd" >Download As Pdf</button>
            </div>
        </div>
    </div>
    
@endsection
@push('styles')
    <style>

    .noteText{
    text-transform: capitalize;
    font-size: 16px;
    }
    .headerPdf {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      background:black;
    }
    
    .logo {
        width: auto;
        height: auto;
        padding: 10px 0px 10px 0;
    }
    
    .title {
      font-size: 24px;
      font-weight: bold;
      margin-left: 20px;
    }
    
    .content {
      font-size: 16px;
      line-height: 1.5;
    }
    .firstContent{
        font-weight: 600;
        text-transform: uppercase;
    }
    .invoiceDate{
        font-weight: 600;
        color: #fb642f;
    }
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
   
    /* display th for desktop only, hide on mobile */
    .desktop {
        display: none;
    }
    /* arranges td as column in the tr */
    .mobile-flex {
        display: flex;
        width: 100%;
    }
    .dateColor {
        color: #f14e24;
    }

    /* adds faux-headers on each td by reading "data-header" attribute of the td*/
    td:before {
    content: attr(data-header);
    display: block;
    font-weight: bold;
    margin-right: 10px;
    max-width: 200px;
    min-width: 220px;
    word-break: break-word;
    }
    .dark-theme td {
        border: 1px solid #fff !important;
        color: #fff;
    }
    
    .dark-theme #customers tr:nth-child(even) {
        background-color: transparent;
    }
    .dark-theme #hamdan{
        background-color: black;
    }
    .main{
    background: #f5661d;
    color: white;
    padding: 20px 10px 20px;
    }
    hr{
    border-top: 2px solid rgb(0 0 0 / 58%);
    }
    
  </style>
@endpush 
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script>

// var doc = new jsPDF('p', 'pt', 'a4');
// var specialElementHandlers = {
//     '#editor': function (element, renderer) {
//         return true;
//     }
// };

var cmd = document.querySelector('#cmd');
cmd.addEventListener("click", function () {   
    var FileName = $('#empName').text().replace(/\s+/g, '-').toLowerCase();
    var element = document.getElementById('hamdan');
var opt = {
  margin:       0,
  filename:     ''+FileName+'-invoice.pdf',
  image:        { type: 'jpeg', quality: 0.98 },
  html2canvas:  {
  

    scrollY: 0,
    scrollX: 0,
  },
  jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
};

// New Promise-based usage:
html2pdf().set(opt).from(element).save();

// Old monolithic-style usage:
// html2pdf(element, opt);
 
});
</script>
@endpush