@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            About Us 
        </h3>
    </div>
    <!--begin::Form-->
    <form method="POST" action="{{route('aboutus.store')}}" enctype="multipart/form-data">
        @csrf
        @include('admins.Aboutus.about._form' ,[
        'button'=> 'Add'
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
<script src="{{asset('js/pages/crud/forms/widgets/bootstrap-maxlength.js')}}"></script>
<script>
var avatar2 = new KTImageInput('kt_image_2');
</script>

@endsection