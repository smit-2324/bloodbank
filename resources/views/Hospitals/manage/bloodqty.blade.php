@extends('layout.hospitals.master')
@section('content')
<div class="add-services-section">
   <div class="toolbar" id="kt_toolbar">
      <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
         <div  class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0 ">
         <p href="#" onclick="window.history.back()" class="d-inline-block mb-0">
            <i class="fa fa-angle-left text-black me-1 fa-2x d-inline-block v-middle"></i>
            <h1 class="d-inline-block fw-bolder fs-3 mb-0 v-middle">Add Blood Qty</h1>
        </p>
         </div>
      </div>
   </div>
   <div class="card mb-5 mb-xl-10">
      <div id="kt_account_settings_profile_details" class="collapse show">
         <form action="{{route('Hospitals.manage.bloodqtystore')}}" method="post" id="form-create-add-on" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
            @csrf

            <div class="card-body border-top p-9">
               <div class="row mb-6">
                  <label class="col-lg-4 col-form-label required fw-bold fs-6">Blood Type</label>
                  <div class="col-lg-8">
                     <div class="fv-row fv-plugins-icon-container">
                        <select class="form-select form-select-solid form-control" name="blood_type_id" data-placeholder="Filter" required>
                           <option selected="false" disabled="disabled"> Choose Blood Type</option>
                           @foreach ($bloodType as $data)
                           <option value="{{ $data['id'] }}"> {{ $data['bloodType'] }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <br>
                  <label class="col-lg-4 col-form-label required fw-bold fs-6">Blood Type</label>
                  <br>
                  <div class="col-lg-8">
                    <div class="fv-row fv-plugins-icon-container">
                  <input class="form-solid form-control" type="text" name="qty"/>
               </div>
            </div>

            <div></div>
                <center>  <button type="submit" class="btn btn-success" style="width: 100px !important;">Submit</button></center>
                <div></div>


      </div>
   </div>
</div>
@stop
