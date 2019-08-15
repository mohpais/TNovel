@extends('author.layouts.app')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="/chapter/{{$chapter->id}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title text-center">Edit Chapter {{$chapter->judul}}</h1>
                                </div>
                                <div class="panel-body">
                                    <input type="hidden" class="form-control" name="id" value="{{$chapter->id}}" readonly>
                                    <input type="hidden" class="form-control" name="novel_id" value="{{$chapter->novel_id}}" readonly>
                                    <label for="author">Author TNovel</label>
                                    <input type="text" class="form-control" name="author" value="{{$chapter->author}}">
                                    <br>
                                    <label for="judul">Judul Chapter</label>
                                    <input type="text" class="form-control" name="judul" value="{{$chapter->judul}}" placeholder="Isi Judul Chapter...">
                                    <br>
                                    <label for="chapter">Chapter</label>
                                    <input type="number" class="form-control" name="chapter" placeholder="0" value="{{$chapter->chapter}}">
                                    <br>
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="konten" value="" class="form-control" rows="25" cols="50">
                                        {!! stripslashes($chapter->description) !!}
                                    </textarea>
                                    <hr>
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
@endsection