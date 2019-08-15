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
                        <form action="/userweb/{{$user->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="panel">
                                <div class="panel-heading">
                                    <h1 class="panel-title text-center">Edit Profile</h1>
                                </div>
                                <div class="panel-body">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                                    <br>
                                    <label for="nama_panggilan">Username</label>
                                    <input type="text" class="form-control" name="nama_panggilan" value="{{$user->nama_panggilan}}">
                                    <br>
                                    @if (auth()->user()->role == 'superadmin')
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="aktif" @if($user->status == 'aktif') selected @endif>Active</option>
                                        <option value="tidak" @if($user->status == 'tidak') selected @endif>Non-Active</option>
                                    </select>
                                    <br>
                                    @endif
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="5">
                                        {{$user->alamat}}
                                    </textarea>
                                    <br>
                                    <label for="avatar">Avatar</label>
                                    <input type="file" name="avatar" value="{{$user->avatar}}" class="form-control">
                                    {{-- <img src="{{asset($)}}" alt=""> --}}
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