<form action="{{ route('guidance.update', $data->id_bimbingan) }}" enctype="multipart/form-data" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="" class="control-label">Nama Bab</label>
            <input type="text" name="nama_bab" class="form-control" id="nama_bab" value=" {{ isset($data) ? $data->nama_bab : '' }}">
        </div>
        <div class="form-group">
            <label for="" class="control-label">File Bab</label>
            <input type="file" class="form-control" id="file_krs" name="file_bab">
            <input type="hidden" name="old_file_bab" value="{{ $data->file_bab }}">
        </div>
        <div class="form-group">
            <label for="" class="control-label">Keterangan</label>
        <textarea name="keterangan" id="keterangan" class="form-control" rows="5">{{ isset($data) ? $data->keterangan : ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="" class="control-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ isset($data) ? $data->tanggal : '' }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12" align="right">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
</form>