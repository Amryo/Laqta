@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
    <div class="card-header">
     <h3 class="card-title">
      Edit rule
     </h3>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{route('rules.update',$rule->id)}}">
        @csrf
        @method('PUT')
        @include('admins.rules._form' ,[
          'button'=> 'Update'
        ])
    </form>
   </div>
@endsection
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/widgets.js')}}"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-switch.js')}}"></script>
    <script>
        var avatar2 = new KTImageInput('kt_image_2');

    </script>
    
@endsection
