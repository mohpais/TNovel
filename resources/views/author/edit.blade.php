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
                        <form action="/novel/{{$novel->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title text-center">Edit Novel</h1>
                                </div>
                                <div class="panel-body">
                                    <label for="nama">Nama Novel</label>
                                    <input type="text" class="form-control" name="nama" value="{{$novel->nama}}">
                                    <br>
                                    <label for="tipe">Tipe Novel</label>
                                    <select class="form-control" name="tipe">
                                        <option value="Light Novel (LN)" @if($novel->status == 'Light Novel (LN)') selected @endif>Light Novel (LN)</option>
                                        <option value="Web Novel (WN)" @if($novel->status == 'Web Novel (WN)') selected @endif>Web Novel (WN)</option>
                                    </select>
                                    <br>
                                    <label for="penulis">Author Novel</label>
                                    <input type="text" class="form-control" name="penulis" value="{{$novel->penulis}}">
                                    <br>
                                    <label for="status">Status Novel</label>
                                    <select class="form-control" name="status">
                                        <option value="ongoing" @if($novel->status == 'ongoing') selected @endif>Ongoing</option>
                                        <option value="complete" @if($novel->status == 'complete') selected @endif>Complete</option>
                                    </select>
                                    <br>
                                    <label for="gambar">Gambar</label>
                                    <input type="file" name="gambar" value="{{$novel->gambar}}" class="form-control">   
                                    <hr>
                                    <a href="/novel" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
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


@section('content1')    
    
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Well done!</h4>
            <p>{{session('success')}}</p>
            <hr>
            <p class="mb-0">Keep U'r Read at TNovel.</p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Novel</h1>
            <hr>
            <form action="/novel/{{$novel->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nama">Nama Novel</label>
                    <input type="text" class="form-control" name="nama" value="{{$novel->nama}}">
                </div>
                <div class="form-group">
                    <label for="status">Status Novel</label>
                    <select class="form-control" name="status">
                        <option value="ongoing" @if($novel->status == 'ongoing') selected @endif>Ongoing</option>
                        <option value="complete" @if($novel->status == 'complete') selected @endif>Complete</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    <input type="text" name="gambar" value="{{$novel->gambar}}" class="form-control">
                </div>
                <div class="modal-footer">
                    <a href="/novel" type="button" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>  
@endsection