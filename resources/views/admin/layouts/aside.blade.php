<!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img class="logo-icon" src="{{ asset('assets/images/logo-icon.png') }}" alt="Qr Code" class="img-fluid rounded">
            </div>
            <div>
              <h4 class="logo-text">NCCCUL</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="{{ route('admin.dashboard') }}" class="">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">User Management</div>
              </a>
              <ul>
                <li> <a href="user-role.html"><i class="bi bi-arrow-right-short"></i>Role</a>
                </li>
                <li> <a href="permission.html"><i class="bi bi-arrow-right-short"></i>Permission</a>
                </li>
                <li> <a href="#"><i class="bi bi-arrow-right-short"></i>Users Login</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-grid"></i>
                </div>
                <div class="menu-title">Administrative</div>
              </a>
              <ul>
                <li><a href="{{route('admin.administrative.user-type.index')}}"><i class="bi bi-arrow-right-short"></i> User Type</a></li>
                <li><a href="{{route('admin.administrative.department.index')}}"><i class="bi bi-arrow-right-short"></i> Department</a></li>
                <li><a href="{{route('admin.administrative.designation.index')}}"><i class="bi bi-arrow-right-short"></i> Designation</a></li>
                <li><a href="{{route('admin.administrative.division.index')}}"><i class="bi bi-arrow-right-short"></i> Division</a></li>
                <li><a href="{{route('admin.administrative.district.index')}}"><i class="bi bi-arrow-right-short"></i> District</a></li>
                <li><a href="{{route('admin.administrative.upazila.index')}}"><i class="bi bi-arrow-right-short"></i> Upazila</a></li>
                <li><a href="{{route('admin.administrative.occupation-type.index')}}"><i class="bi bi-arrow-right-short"></i> Occupation Type</a></li>
                <li><a href="{{route('admin.administrative.gender.index')}}"><i class="bi bi-arrow-right-short"></i> Gender</a></li>
                <li><a href="{{route('admin.administrative.blood-group.index')}}"><i class="bi bi-arrow-right-short"></i> Blood Group</a></li>
                <li><a href="{{route('admin.administrative.marital-status.index')}}"><i class="bi bi-arrow-right-short"></i> Marital Status </a></li>
                <li><a href="{{route('admin.administrative.financial-year.index')}}"><i class="bi bi-arrow-right-short"></i> Financial Year</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Interest Rates</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Policies</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Operational Guidelines</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Account Transaction Type</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Scheme Definition</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> LPS Definition</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Loan Definition</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Time Allotment</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Yearly Account Charge Process</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Yearly Product Calculation For Credit & Savings</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Monthly Product Calculation All Scheme</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i> Yearly Benefit Pay Credit & Savings</a></li>
              </ul>
            </li>

             <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Collection Department</div>
                </a>
                <ul>
                  <li><a href="{{ route('collection-department.collection-all') }}"><i class="bi bi-arrow-right-short"></i> Collection All</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i> Collection </a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i> Scheme Collection Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i> Collection Summary </a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i> Credit Collection Summary </a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i> Savings Collection Summary</a></li>
                </ul>
             </li>
             <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Withdrawal</div>
                </a>
                <ul>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i> Withdrawn </a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i> Withdrawn Summary </a></li>
                </ul>
             </li>
             <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Accounts Department</div>
                </a>
                <ul>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Voucher Entry Form</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Double Account Transaction</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Budget</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Trnsaction Type</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Account Transaction</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Cash Journal</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>GL Journal</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Cash Deposit Slip</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Cash Journal Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Cash Journal Details</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Chart of Accounts with Charges</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Credit Personal Ledger</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Bank Deposit Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Bank Withdraw Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Saving Personal Ledger</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Heigher Education Fund Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Scheme's Personal Ledger</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>L.P.S Fund Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Statement of Daily Collection</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Debit Voucher</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Credit Voucher</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Account Receipt & Payment</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Account Income & Expenses</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Account Balance Sheet</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>General Ledger Group</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>General Ledger</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Daily Cash Report</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Statement of Daily Receipt</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Statement of Daily Payment</a></li>
              </ul>

             </li>
             <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Loan Saction</div>
                </a>
                <ul>
				  <li><a href="{{ route('loan-management.loan-request') }}"><i class="bi bi-arrow-right-short"></i> Loan Request</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Loan Approval</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Loan Reschedule/Reinstall</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Loan Request Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Loan Form Report</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Loan Approve Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Loan Transfer Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Reinstallment Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Real Reschedule Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Defaulter List</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Surety Check List</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Update Schedule Paid</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Update Schedule Loan Wise</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Need to Update Period Number Loan Wise</a></li>
                </ul>
             </li>
             <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Customer Service</div>
                </a>
                <ul>
                   <li><a href="{{ route('account-open.index') }}"><i class="bi bi-arrow-right-short"></i> Account Open</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Scheme Open</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Account Close</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Account Close Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Create Cheque Book</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>All Member's Credit Account Register</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>All Menber's Savings Account Register</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>All Menber's Scheme Account Register</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Member's Credit Account Register</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Member's Savings Account Register</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Member's Scheme Account Register</a></li>
                </ul>
             </li>
              <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Supply Chain Department</div>
                </a>
                <ul>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Inventory Balance (Locatorwise)</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Inventory Details Report</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Internal Use Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Inventory Move</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Purchase Order</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Sales Processing</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Purchase Order Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Material Receipt Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Invoice Vendor Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Sales Order Summary</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Sales Collection Report</a></li>
                </ul>

             </li>
             <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">HR Department</div>
                </a>
                <ul>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Payroll Employee (Customized)</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Payroll Salary Structure</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Payroll Process</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Payroll Movement</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Payroll Dily Attendance</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Employee Transfer</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Employee Information</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Employee Promotion</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Employee Increment</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Salary Statement-Employee Wise</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Salary Statement</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Employee Transfer Report</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Employee Increment Report</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Employee Promotion Report</a></li>
                </ul>

             </li>
             <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Credit Management Reports</div>
                </a>
                <ul>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>User Login Status</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Chart of Account</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Business Partner Information</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Product List With Sales Price</a></li>
                </ul>


             </li>
             <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Repayment (Transfer) Management</div>
                </a>
             </li>
              <li>
                <a href="javascript:;" class="has-arrow">
                  <div class="parent-icon"><i class="bi bi-grid"></i>
                  </div>
                  <div class="menu-title">Settings</div>
                </a>
                 <ul>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i>Database Export</a></li>
                  <li><a href="#"><i class="bi bi-arrow-right-short"></i> Database Import</a></li>
                </ul>
             </li>
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->
