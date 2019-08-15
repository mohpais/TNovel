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
                        <form action="/chapter/create" method="POST">
                            {{csrf_field()}}
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title text-center">Tambah Chapter Novel {{$novel->nama}}</h1>
                                </div>
                                <div class="panel-body">
                                    <input type="hidden" class="form-control" name="novel_id" value="{{$novel->id}}" readonly>
                                    <br>
                                    <label for="author">Author TNovel</label>
                                    <input type="text" class="form-control" name="author" value="{{auth()->user()->profile->nama_panggilan}}" readonly>
                                    <br>
                                    <label for="judul">Judul Chapter</label>
                                    <input type="text" class="form-control" name="judul" placeholder="Isi Judul Chapter...">
                                    <br>
                                    <label for="chapter">Chapter</label>
                                    <input type="number" class="form-control" name="chapter" placeholder="0">
                                    <br>
                                    <label for="description">Deskripsi</label>
                                    <textarea id="konten" name="description" value="" class="form-control">
                                    
                                    </textarea>
                                    <hr>
                                    <a href="/novel/{{$novel->id}}/list" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <br>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
