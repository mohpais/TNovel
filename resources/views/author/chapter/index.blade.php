@extends('author.layouts.app')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Well done!</h4>
                                    <p>{{session('success')}}</p>
                                    <hr>
                                    <p class="mb-0">Keep U'r Read at TNovel.</p>
                                </div>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title text-center">List Chapter {{$novel->nama}}</h1>
                                    <div class="right">
                                        <a href="/chapter/{{$novel->id}}/create"  class="btn btn-primary btn-sm">
                                            Tambah Chapter
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Novel</th>
                                                <th>Author</th>
                                                <th>Chapter Novel</th>
                                                <th>Description</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1?>
                                            @foreach ($chapter_novel as $chapter)
                                            <tr>
                                                <td>{{$no}}</td>
                                                <td>{{$chapter->judul}}</td>
                                                <td>{{$chapter->author}}</td>
                                                <td>Chapter {{$chapter->chapter}}</td>
                                                <td>
                                                    {!!stripslashes(str_limit($chapter->description, 30, '...'))!!}
                                                </td>
                                                <td>
                                                    <a href="/chapter/{{$chapter->id}}/edit" class="btn btn-warning btn-sm"><span class="lnr lnr-pencil"></span> </a>
                                                    <a href="#" class="btn btn-danger btn-sm delete" chapter-id="{{$chapter->id}}"><span class="lnr lnr-trash"></span></a>
                                                    {{-- <a href="/chapter/{{$chapter->id}}/destroy" class="btn btn-danger btn-sm" onclick="return confirm('Anda ingin menghapus novel ini?')"><span class="lnr lnr-trash"></span></a> --}}
                                                </td>
                                            </tr>
                                            <?php $no++ ?>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="col-md-12 text-center">
                                        {{$chapter_novel->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.delete').click(function(){
            var chapter_id =$(this).attr('chapter-id');
            swal({
                title: "Are you sure?",
                text: "Content with id "+chapter_id+" will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                window.location = "/chapter/"+chapter_id+"/destroy";
                }
            });
        });
    </script>
@endsection
