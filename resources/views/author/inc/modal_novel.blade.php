<!-- Modal -->
<div class="modal fade" id="Novel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Tambah Novel</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/novel/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nama">Nama Novel</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan nama novel...">
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe Novel</label>
                        <select class="form-control" name="tipe">
                            <option value="Light Novel (LN)">Light Novel (LN)</option>
                            <option value="Web Novel (WN)">Web Novel (WN)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Author</label>
                        <input type="text" class="form-control" name="penulis">
                    </div>
                    <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status Novel</label>
                        <select class="form-control" name="status">
                            <option value="ongoing">Ongoing</option>
                            <option value="complete">Complete</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>