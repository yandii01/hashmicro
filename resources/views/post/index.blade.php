@extends('layouts.main') 
@section('css') 
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/whether-icon.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection 
@section('body')
<div class="container-fluid general-widget">
        @if(session()->has('status'))
            @if (!session('hasError'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @elseif(session('hasError'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
        @endif

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="/post" autocomplete="off" id="formId" enctype="multipart/form-data">
                {{csrf_field()}}
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                    @endforeach
                </div>
                @endif
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="post">Post</label>
                            <input name="post" id="post" class="form-control" title="post"
                                type="text"  placeholder="post"
                            required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>
    <div class="row mt-2">
      <div class="col-xl-12 box-col-12">
        <div class="card testimonial text-center">
          <div class="card-body">
            <div>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr class="table-success">
                        <th class="col-md-1">No</th>
                        <th>Post</th>
                        <th class="col-md-3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @forelse($post as $item)
                        <tr>
                            <td class="text-center">{{ number_format($no++) }}</td>
                            <td>{{$item->post}}</td>
                            <td class="text-center">
                            <a href="{{url('/post/'.$item->id.'/edit')}}" class="btn btn-secondary">Edit
                            </a>
                            <a href="javascript:void(0)" class="btn btn-danger" type="button" onclick="hapusPost({{$item->id}})">Hapus
                            </a>
                            </td>
                        </tr>   
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Belum ada data</td>
                        <tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
    function hapusPost(id){
        event.preventDefault();
        swal({
            title: 'Anda akan menghapus data?',
            text: 'Data akan dihapus secara permanen!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                $.ajax({
                    url: '/post/'+id,
                    data : {
                        "_token" : "{{csrf_token()}}"
                    },
                    type: 'delete',
                    dataType: 'json',
                    success: function(result){
                        if(result){
                            swal({ 
                                title: "Berhasil!", 
                                text: "Penghapusan berhasil dilakukan !.", 
                                icon: "success" 
                            }).then(function() {
                                window.location = "/post/";
                            });

                        }else{
                            swal({ title: "Gagal!", text: result.message, icon: "error" })
                        }
                    },
                    error: function(err){
                        swal({ title: "Gagal!", text: "Terjadi kesalahan saat menghapus data !", icon: "error" })
                    }
                })
            }
        });
    }
</script>
@endsection