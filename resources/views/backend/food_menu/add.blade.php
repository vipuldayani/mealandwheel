@extends('backend.layouts.app')
  @section('style')
    <style type="text/css">
      
    </style>
  @endsection 
@section('content')

        <ul class="breadcrumb">
            <li><a href="">Food Menu</a></li>
            <li><a href="">Add Food Menu</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Add Food Menu</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Food Menu</h3>
                        </div>
                    {{-- Section Start --}}
                     @include('backend.food_menu._form') 
                    {{-- Section End --}}
                    </div>
                </div>
            </div>
        </div>
 
@endsection
  @section('script')
  <script type="text/javascript">
   
  </script>
@endsection
