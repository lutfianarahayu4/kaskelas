<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                     @foreach ($errors->all() as $item)
                                    <li>{{$item}}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('pembayarans.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="id_siswa" class="col-lg-12-offset-1 control-label mt-2">Nama</label>
                                <div class="col-lg-12">
                                    <select id="id_siswa" name="id_siswa" class="form-control custom-select">
                                        <option selected disabled>pilih</option>
                                        @forelse($pembayarans as $kamu)
                                        <option value="{{$kamu->id}}">
                                            {{$kamu->nama}}
                                        </option>>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jumblah">Nominal</label>
                                <input type="text " id="jumblah" style="width: 65rem;" name="jumblah_bayar" class="form-control" placeholder="Enter your nominal...">

                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal Bayar</label>
                                <input type="date" id="tanggal_bayar" style="width: 65rem;" name="tgl_bayar" class="form-control" placeholder="Enter your nominal...">
                            </div>


                            <button type="submit" class="btn btn-md btn-primary mt-3">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning mt-3">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>     
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>