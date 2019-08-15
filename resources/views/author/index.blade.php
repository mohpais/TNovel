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
                                    <h1 class="panel-title text-center">List Novel</h1>
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
                                                <th></th>
                                                <th>Nama Novel</th>
                                                <th>Tipe</th>
                                                <th>Author</th>
                                                <th>Status</th>
                                                <th>Gambar</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no=1;
                                            @endphp
                                            @foreach ($data_novel as $novel)
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$novel->nama}}</td>
                                                <td>{{$novel->tipe}}</td>
                                                <td>{{$novel->penulis}}</td>
                                                <td>{{$novel->status}}</td>
                                                <td><img src="{{$novel->getGambar()}}" width="100" height="140"></td>
                                                <td>
                                                    <a href="/novel/{{$novel->id}}/edit" class="btn btn-warning btn-sm"><span class="lnr lnr-pencil"></span></a>
                                                    <a href="#" class="btn btn-danger btn-sm delete" novel-id="{{$novel->id}}"><span class="lnr lnr-trash"></span></a>
                                                    {{-- <a href="/novel/{{$novel->id}}/destroy" class="btn btn-danger btn-sm" onclick="return confirm('Anda ingin menghapus novel ini?')"><span class="lnr lnr-trash"></span></a> --}}
                                                    <a href="http://localhost:8000/novel/{{$novel->slug}}" class="btn btn-primary btn-sm"><span class="lnr lnr-enter"></span></a>
                                                </td>
                                            </tr>
                                            @php
                                                $no++;
                                            @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="col-md-12 text-center">
                                        {{$data_novel->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('author.inc.modal_novel')
@endsection

@section('js')
    <script>
        $('.delete').click(function(){
            var novel_id =$(this).attr('novel-id');
            swal({
                title: "Are you sure?",
                text: "Content with id "+novel_id+" will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                window.location = "/novel/"+novel_id+"/destroy";
                }
            });
        });
    </script>
@endsection
