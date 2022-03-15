@extends('layouts.main') 
@section('css') 
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/whether-icon.css">
    <!-- Plugins css Ends-->
@endsection 
@section('body')
<div class="container-fluid general-widget">
    <div class="row mt-2">
      <div class="col-xl-12 box-col-12">
        <div class="card testimonial text-center">
          <div class="card-body">
            <div>
            <form action="{{url('/post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
                @method('patch')
                {{csrf_field()}}
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                    </div>
                @endif
                <div class="card-body">
                    <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                        <label for="post">Post</label>
                        <input type="text" class="form-control" value="{{$post->post}}" name="post" id="post" placeholder="" required>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection 
@section('script') 
    <!-- Plugins JS start-->
    <script src="/assets/js/prism/prism.min.js"></script>
    <script src="/assets/js/clipboard/clipboard.min.js"></script>
    <script src="/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="/assets/js/counter/counter-custom.js"></script>
    <script src="/assets/js/custom-card/custom-card.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="/assets/js/general-widget.js"></script>
    <script src="/assets/js/height-equal.js"></script>
    <script src="/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    {{-- <script src="/assets/js/theme-customizer/customizer.js"></script>--}}
    <script>
    $(document).ready(function() {
        loaddata();
    });
    function loaddata(){	
        $.ajax({
            type: 'post',
            url: '/api/data',
            data : {
                'token' : 'tokencollega123' 
            },
            success: function (data) {
                if(data.status==1){
                    $('#data tbody').empty();
                    for(var i=0; i<data.data.length; i++){
                        var tr_str = "<tr>" +
                        "<td align='center'>" + data.data[i].quote  
                        +"</td>" +
                        "</tr>";

                        $("#data tbody").append(tr_str);
                    }
                }
                else{
                    console.log('error');
                }
            }
        });
    }
</script>
@endsection