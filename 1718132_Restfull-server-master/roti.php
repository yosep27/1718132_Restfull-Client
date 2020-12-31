<h1 class="h3 mb-4 text-gray-800 text-center text-primary"><strong>Jenis Roti</strong></h1>
<br><br><br>
<button type="button" class="btn btn-info btn-lg create" data-toggle="modal" data-target="#exampleModalCenterroti"><i class="fa fa-table mr-3"></i>Tambah Data</button>
<br>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID Jenis</th>
            <th scope="col">Jenis roti</th>
            <th scope="col">Jenis Nama roti</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody id="table_jadwal">

    </tbody>
</table>
<div class="modal fade" id="exampleModalCenterroti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formroti">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID Roti</label>
                        <input type="text" class="form-control" name="id_jenis" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Roti</label>
                        <input type="text" class="form-control" name="createBarang" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Nama Roti</label>
                        <input type="text" class="form-control" name="createNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keterangan</label>
                        <input type="text" class="form-control" name="createKet" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary addroti" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModalCenterroti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formroti">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID Jenis</label>
                        <select class="form-control inputUproti" name="id_jenis">

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Barang</label>
                        <input type="date" class="form-control" name="updateBarang" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Nama Barang</label>
                        <input type="time" class="form-control" name="updateNama" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keterangan</label>
                        <input type="time" class="form-control" name="updateKet" id="exampleFormControlInput1" placeholder="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary updateroti" data-dismiss="modal">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>