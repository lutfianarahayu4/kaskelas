<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - SantriKoding.com</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
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
                        <a href="{{ route('pembayarans.create') }}" class="btn btn-md btn-success mb-3">Bayar Kas</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Total Kas</th>
                                <th scope="col">Tanggal Terakhir Bayar</th>
                                <th scope="col">Aksi</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembayarans as $key => $choi )
                                <tr class="text-center">
                                    <td style="width: 20px;">{{ $key + 1 }}</td>
                                    <td style="width: 150px;">
                                        @if ($choi ->siswa)
                                        {{ $choi ->siswa->nama}}
                                        @else<span style="color:red;">Kosong</span>
                                        @endif
                                    </td>
                                    <td style="width: 150px;">Rp. {{ number_format($choi ->jumblah_bayar,0,',',',',) }}</td>
                                    <td style="width: 150px;">{{ \Carbon\Carbon::parse($choi ->tanggal_bayar)->formatLocalized('%d %B %Y') }}</td>
                                    <td style="width: 150px;">

                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('pembayarans.destroy', $choi->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                @endforeach
                    
                            </tbody>
                          </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
<script>
    feather.replace();
  </script>
</body>
</html>