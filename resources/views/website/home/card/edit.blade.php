@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
    <div class="card-header">
     <h3 class="card-title">
      Add Card To Home Page
     </h3>
    </div>
    <div class="card-body">
    <div class="form-group row">
        <label  class="col-2 col-form-label">Select Category</label>
        
       <select id="selectType" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="0">One</option>
            <option value="1">Two</option>
            <option value="2">Three</option>
        </select>
       </div>
    </div>
    <div id="selectDiv">

    </div>
    <!--begin::Form-->
    {{-- <form method="POST" action="{{route('home.card.update' , $card->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="form-group mb-8">
             <div class="alert alert-custom alert-default" role="alert">
              <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
              <div class="alert-text">
               Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
              </div>
             </div>
            </div>
        
            
               <div class="form-group row">
                <label  class="col-2 col-form-label">description</label>
                    <div  class="col-10">
                    <input id="kt_maxlength_1" name="description" class="form-control" type="text" maxlength="25" value="{{$main->description}}" id="example-text-input"/>
                    </div>
               </div>
        
               
           <div class="card-footer">
            <div class="row">
             <div class="col-2">
             </div>
             <div class="col-10">
              <button type="submit" class="btn btn-success mr-2">Edit</button>
              <button type="reset" class="btn btn-secondary">Cancel</button>
             </div>
            </div>
           </div>
    </form> --}}
   </div>
@endsection
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/widgets.js')}}"></script>
    <script src="{{asset('js/pages/crud/forms/widgets/bootstrap-maxlength.js')}}"></script>
    <script>
        var avatar2 = new KTImageInput('kt_image_2');

    </script>
    <script src="{{asset('js/selectType.js')}}"></script>
    
@endsection
