@extends('author.layouts.app')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title text-center">List Admin</h1>
                                    <!-- Button trigger modal -->
                                    <div class="right">
                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#Novel">
                                            <i class="lnr lnr-plus-circle" style="font-size: 32px; color:#75ff33"></i>
                                        </button>
                                    </div>
                                </div>
                                
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Admin</th>
                                                <th>Nama Pengguna</th>
                                                <th>Status</th>
                                                <th>Alamat</th>
                                                <th>Avatar</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($profile as $data)
                                            <tr>
                                                <td>{{$data->nama}}</td>
                                                <td>{{$data->nama_panggilan}}</td>
                                                <td>{{$data->status}}</td>
                                                <td>{{$data->alamat}}</td>
                                                <td>
                                                    <img src="{{$data->getAvatar()}}" width="80" height="100">
                                                </td>
                                                <td>
                                                    <a href="/userweb/{{$data->id}}/profile" class="btn btn-primary btn-sm"><span class="lnr lnr-user"></span></a>
                                                    {{-- <a href="/userweb/{{$data->id}}/destroy" class="btn btn-danger btn-sm" onclick="return confirm('Anda ingin menghapus novel ini?')"><span class="lnr lnr-trash"></span></a> --}}
                                                    <a href="#" id="catchId" class="btn btn-danger btn-sm " userId="{{$data->id}}"><span class="lnr lnr-trash"></span></a>
                                                    <a href="/profile/{{$data->id}}/edit" class="btn btn-warning btn-sm"><span class="lnr lnr-pencil"></span></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('author.inc.modal_user')
    
@stop

@section('js')
<script>
        $('#catchId').click(function() {
            var user_id = $(this).attr('userId');
            alert(user_id);
        })
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    </script>
    
@endsection