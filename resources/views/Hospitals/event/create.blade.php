@extends('layout.hospitals.master')
@section('content')
<div class="add-services-section">
   <div class="toolbar" id="kt_toolbar">
      <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
         <div class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0 ">
            <p href="#" onclick="window.history.back()" class="d-inline-block mb-0">
               <i class="fa fa-angle-left text-black me-1 fa-2x d-inline-block v-middle"></i>
            <h1 class="d-inline-block fw-bolder fs-3 mb-0 v-middle">Add Event</h1>
            </p>
         </div>
      </div>
   </div>
   <div class="card mb-5 mb-xl-10">
      <div id="kt_account_settings_profile_details" class="collapse show">
         <form action="{{url('Hospitals/event')}}" method="post" id="form-create-add-on" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" enctype="multipart/form-data">
            @csrf
            <div class="card card-body border-top p-12">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="fv-row fv-plugins-icon-container">
                        <select class="form-select form-select-solid form-control" name="hospital_id" data-placeholder="Filter" required>
                           <option selected="false" disabled="disabled"> Select Hospital</option>
                           @foreach ($hospitals as $hospital)
                           <option value="{{ $hospital['id'] }}"> {{ $hospital['hospitalName'] }}</option>
                           @endforeach
                        </select>
                     </div>
                     @if ($errors->has('id'))
                     <p class="fs-6 text-danger"> {{ $errors->first('id') }} </p>
                     @endif
                  </div>
                  <div class="col-lg-6">
                     <input type="text" class="form-control " name="type" placeholder="Event Type" />
                  </div>
                  @if ($errors->has('id'))
                  <p class="fs-6 text-danger"> {{ $errors->first('type') }} </p>
                  @endif
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <input type="text" class="form-control " name="name" placeholder="Event Name" />
                  </div>
                  @if ($errors->has('name'))
                  <p class="fs-6 text-danger"> {{ $errors->first('name') }} </p>
                  @endif
                  <div class="col-lg-6">
                     <input type="text" class="form-control " name="description" placeholder="Event Description" />
                  </div>
                  @if ($errors->has('description'))
                  <p class="fs-6 text-danger"> {{ $errors->first('description') }} </p>
                  @endif
               </div>
               <br>
               <div class="row">
                  <div class="col-lg-6">
                     <input type="file" class="form-control" name="image" />
                  </div>
                  @if ($errors->has('image'))
                  <p class="fs-6 text-danger"> {{ $errors->first('image') }} </p>
                  @endif
               </div>

            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="row col-md-3" style="margin-left: 10px">
                     <button type="submit" class="btn btn-primary">Add Event</button><br />
                  </div>
               </div>
               <br />
            </div>
         </form>
      </div>
   </div>
</div>
@stop