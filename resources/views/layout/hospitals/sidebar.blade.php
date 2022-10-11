 <div class="sidebar-wrapper" data-simplebar="true">
     <div class="sidebar-header">
     <img src="<?=env('SITE_URL');?>/admin-theme/assets/images/favicon_smallbyzloans.png" type="image/png" class="img-logo">

         <h3 class="logo-text">

          <img src="<?=env('SITE_URL');?>/admin-theme/assets/images/smallbyzloans_logo.png"></h3>

         <div class="toggle-icon ms-auto">      <i class='bx bx-arrow-to-left'></i>

         </div>
     </div>
     <!--navigation-->
     <ul class="metismenu" id="menu">
         <li>
             <a href="">
                 <div class="parent-icon"><i class='bx bx-home-circle'></i>
                 </div>
                 <div class="menu-title">Dashboard</div>
             </a>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class='lni lni-customer'></i>
                 </div>
                 <div class="menu-title">Doner</div>
             </a>
             <ul>
                 <li> <a href="{{ route('Hospitals.manage.donar') }}"><i
                             class="bx bx-right-arrow-alt"></i>All Merchants</a>
                 </li>
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="lni lni-invest-monitor"></i>
                 </div>
                 <div class="menu-title">Term Loan</div>
             </a>
             <ul>
                 {{-- <li> <a href="{{ route('manage.loans.index') }}"><i
                             class="bx bx-right-arrow-alt"></i>Term Loan Application</a>
                 </li> --}}
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="lni lni-invest-monitor"></i>
                 </div>
                 <div class="menu-title">ACH Signature</div>
             </a>
             <ul>
                 {{-- <li> <a href="{{ route('achapplicationform') }}"><i
                             class="bx bx-right-arrow-alt"></i>ACH Application Form</a>
                 </li> --}}
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class='lni lni-users'></i>
                 </div>
                 <div class="menu-title">Brokers</div>
             </a>
             <ul>
                 {{-- <li> <a href="{{ route('manage.users.index') }}"><i
                             class="bx bx-right-arrow-alt"></i>All Brokers</a>
                 </li>
                 <li> <a href="{{ route('manage.users.create') }}"><i
                             class="bx bx-right-arrow-alt"></i>New Brokers</a>
                 </li> --}}


             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class="fadeIn animated bx bx-money"></i>
                 </div>
                 <div class="menu-title">Lenders/Funders</div>
             </a>
             <ul>
                 {{-- <li> <a href="{{ route('manage.lenders.index') }}"><i
                             class="bx bx-right-arrow-alt"></i> All Lenders</a>
                 </li>
                 <li> <a href="{{ route('manage.lenders.create') }}"><i
                             class="bx bx-right-arrow-alt"></i> New Lenders Screen</a>
                 </li> --}}
             </ul>
         </li>
         <li>
             <a href="javascript:;" class="has-arrow">
                 <div class="parent-icon"><i class='bx bx-cog bx-spin'></i>
                 </div>
                 <div class="menu-title">Settings</div>
             </a>
             <ul>
                 {{-- <li> <a href="{{ route('manage.settings.index') }}"><i
                             class="bx bx-right-arrow-alt"></i>Overall Settings</a>
                 </li>
                 <li> <a href="{{ route('manage.roles.index') }}"><i
                             class="bx bx-right-arrow-alt"></i> Role & Permissions</a>
                 </li> --}}
             </ul>
         </li>

     </ul>
 </div>
