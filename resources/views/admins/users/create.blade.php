@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="card card-custom card-shadowless rounded-top-0">
    <!--begin::Body-->
    <div class="card-body p-0">
      <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
        <div class="col-xl-12 col-xxl-10">
          <!--begin::Wizard Form-->
          <form class="form" id="kt_form">
            <div class="row justify-content-center">
              <div class="col-xl-9">
                <!--begin::Wizard Step 1-->
                <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                  <h5 class="text-dark font-weight-bold mb-10">User's Profile Details:</h5>
                  <!--begin::Group-->
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
                    <div class="col-lg-9 col-xl-9">
                      <div class="image-input image-input-outline" id="kt_image_5">
                        <div class="image-input-wrapper" style="background-image: url({{asset('media/users/100_6.jpg')}})"></div>
                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                          <i class="fa fa-pen icon-sm text-muted"></i>
                          <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                          <input type="hidden" name="profile_avatar_remove" />
                        </label>
                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                          <i class="ki ki-bold-close icon-xs text-muted"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!--end::Group-->
                  <!--begin::Group-->
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                    <div class="col-lg-9 col-xl-9">
                      <input name="first_name" class="form-control form-control-solid form-control-lg" name="firstname" type="text" value="" />
                    </div>
                  </div>
                  <!--end::Group-->
                  <!--begin::Group-->
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-lg-9 col-xl-9">
                      <input name="last_name" class="form-control form-control-solid form-control-lg" name="lastname" type="text" value="" />
                    </div>
                  </div>
                  <!--end::Group-->
                  
                 
                  <!--begin::Group-->
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                    <div class="col-lg-9 col-xl-9">
                      <div class="input-group input-group-solid input-group-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="la la-at"></i>
                          </span>
                        </div>
                        <input type="email" class="form-control form-control-solid form-control-lg" name="email" value="" />
                      </div>
                    </div>
                  </div>
                  <!--end::Group-->
                  <!--begin::Group-->
                  <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Company Site</label>
                    <div class="col-lg-9 col-xl-9">
                      <div class="input-group input-group-solid input-group-lg">
                        <input type="text" class="form-control form-control-solid form-control-lg" name="companywebsite" placeholder="Username" value="loop" />
                        <div class="input-group-append">
                          <span class="input-group-text">.com</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end::Group-->
                </div>
                <!--end::Wizard Step 1-->
               
                <!--begin::Wizard Actions-->
                <div class="d-flex justify-content-between border-top pt-10 mt-15">
                  <div class="mr-2">
                  </div>
                  <div>
                    <button type="button" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>
                  </div>
                </div>
                <!--end::Wizard Actions-->
              </div>
            </div>
          </form>
          <!--end::Wizard Form-->
        </div>
      </div>
    </div>
    <!--end::Body-->
  </div>
@endsection
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/widgets.js')}}"></script>
    <script src="{{asset('js/pages/crud/forms/widgets/bootstrap-maxlength.js')}}"></script>
    <script src="{{asset('js/pages/custom/user/add-user.js')}}"></script>
    <script>
        var avatar2 = new KTImageInput('kt_image_5');

    </script>
    
@endsection
