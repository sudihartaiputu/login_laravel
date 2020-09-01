<!DOCTYPE html>
<html>

<head>
    <title>CRUD AJAX LARAVEL</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/coba/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/coba/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
    <div class="container">
        <div class="card">

            <div class="card-body">
                <!-- MULAI TOMBOL TAMBAH -->
                <a href="javascript:void(0)" class="btn btn-info" id="tombol-tambah">Tambah Mata Pelajaran</a>
                <br><br>
                <!-- AKHIR TOMBOL -->
                <table id="mapel" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Mapel</th>
                            <th>Slug</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                </table>
            </div>

            <!-- MULAI MODAL FORM TAMBAH/EDIT-->
            <div class="modal fade" id="tambah-edit-modal" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-judul"></h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form id="form-tambah-edit" name="form-tambah-edit" class="form-horizontal">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <input type="hidden" name="id" id="id">

                                        <div class="form-group">
                                            <label for="name" class="col-sm-12 control-label">Nama Mapel</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="nama" name="nama" value="" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-offset-2 col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-block" id="tombol-simpan" value="create">Simpan
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
            <!-- AKHIR MODAL -->
            <!-- MULAI MODAL KONFIRMASI DELETE-->

            <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">PERHATIAN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><b>Jika menghapus Mata Pelajaran maka</b></p>
                            <p>Data Mapel tersebut hilang selamanya, apakah anda yakin?</p>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                                Data</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AKHIR MODAL -->
            <script type="text/javascript" language="javascript" src="{{asset('public/coba/jquery-3.5.1.js')}}"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
            </script>
            <script type="text/javascript" language="javascript" src="{{asset('public/coba/jquery.dataTables.min.js')}}"></script>
            <script type="text/javascript" language="javascript" src="{{asset('public/coba/dataTables.bootstrap4.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js" integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>

            <script type="text/javascript">
                //CSRF TOKEN PADA HEADER
                //Script ini wajib krn kita butuh csrf token setiap kali mengirim request post, patch, put dan delete ke server
                $(document).ready(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                });
                //TOMBOL TAMBAH DATA
                //jika tombol-tambah diklik maka
                $('#tombol-tambah').click(function() {
                    $('#button-simpan').val("create-post"); //valuenya menjadi create-post
                    $('#id').val(''); //valuenya menjadi kosong
                    $('#form-tambah-edit').trigger("reset"); //mereset semua input dll didalamnya
                    $('#modal-judul').html("Tambah Mata Pelajaran Baru"); //valuenya tambah mapel baru
                    $('#tambah-edit-modal').modal('show'); //modal tampil
                });
                //MULAI DATATABLE
                //script untuk memanggil data json dari server dan menampilkannya berupa datatable
                $(document).ready(function() {
                    $('#mapel').DataTable({
                        "language": {
                            "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian.json"
                        },
                        processing: true,
                        serverSide: true, //aktifkan server-side 
                        ajax: {
                            url: "{{ route('coba.index') }}",
                            type: 'GET'
                        },
                        columns: [{
                            data: 'nama',
                            name: 'nama'
                        }, {
                            data: 'slug',
                            name: 'slug'
                        }, {
                            data: 'action',
                            name: 'action'
                        }, ],
                        order: [
                            [0, 'asc']
                        ]
                    });
                });

                //SIMPAN & UPDATE DATA DAN VALIDASI (SISI CLIENT)
                //jika id = form-tambah-edit panjangnya lebih dari 0 atau bisa dibilang terdapat data dalam form tersebut maka
                //jalankan jquery validator terhadap setiap inputan dll dan eksekusi script ajax untuk simpan data
                if ($("#form-tambah-edit").length > 0) {
                    $("#form-tambah-edit").validate({
                        submitHandler: function(form) {
                            var actionType = $('#tombol-simpan').val();
                            $('#tombol-simpan').html('Sending..');

                            $.ajax({
                                data: $('#form-tambah-edit')
                                    .serialize(), //function yang dipakai agar value pada form-control seperti input, textarea, select dll dapat digunakan pada URL query string ketika melakukan ajax request
                                url: "{{ route('mapel.store') }}", //url simpan data
                                type: "POST", //karena simpan kita pakai method POST
                                dataType: 'json', //data tipe kita kirim berupa JSON
                                success: function(data) { //jika berhasil 
                                    $('#form-tambah-edit').trigger("reset"); //form reset
                                    $('#tambah-edit-modal').modal('hide'); //modal hide
                                    $('#tombol-simpan').html('Simpan'); //tombol simpan
                                    var oTable = $('#table_pegawai').dataTable(); //inialisasi datatable
                                    oTable.fnDraw(false); //reset datatable
                                    iziToast.success({ //tampilkan iziToast dengan notif data berhasil disimpan pada posisi kanan bawah
                                        title: 'Data Berhasil Disimpan',
                                        message: '{{ Session('
                                        success ')}}',
                                        position: 'bottomRight'
                                    });
                                },
                                error: function(data) { //jika error tampilkan error pada console
                                    console.log('Error:', data);
                                    $('#tombol-simpan').html('Simpan');
                                }
                            });
                        }
                    })
                }
                //TOMBOL EDIT DATA PER PEGAWAI DAN TAMPIKAN DATA BERDASARKAN ID PEGAWAI KE MODAL
                //ketika class edit-post yang ada pada tag body di klik maka
                $('body').on('click', '.edit-post', function() {
                    var data_id = $(this).data('id');
                    $.get('mapel/' + data_id + '/edit', function(data) {
                        $('#modal-judul').html("Edit Post");
                        $('#tombol-simpan').val("edit-post");
                        $('#tambah-edit-modal').modal('show');

                        //set value masing-masing id berdasarkan data yg diperoleh dari ajax get request diatas               
                        $('#id').val(data.id);
                        $('#nama').val(data.nama);
                    })
                });
                //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
                $(document).on('click', '.delete', function() {
                    dataId = $(this).attr('id');
                    $('#konfirmasi-modal').modal('show');
                });

                //jika tombol hapus pada modal konfirmasi di klik maka
                $('#tombol-hapus').click(function() {
                    $.ajax({

                        url: "mapel/" + dataId, //eksekusi ajax ke url ini
                        type: 'delete',
                        beforeSend: function() {
                            $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                        },
                        success: function(data) { //jika sukses
                            setTimeout(function() {
                                $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                                var oTable = $('#mapel').dataTable();
                                oTable.fnDraw(false); //reset datatable
                            });
                            iziToast.warning({ //tampilkan izitoast warning
                                title: 'Data Berhasil Dihapus',
                                message: '{{ Session('
                                delete ')}}',
                                position: 'bottomRight'
                            });
                        }
                    })
                });
            </script>