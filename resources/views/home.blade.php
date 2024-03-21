<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- siswa -->
                <div class="card mt-5">
                    <div class="card-header" style="background-color: yellow;">
                        <h5>Data Siswa</h5>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">NAMA</th>
                                <th scope="col">KELAS</th>
                             
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->nama }}</td>
                                    <td>{!! $post->kelas !!}</td>
                                    
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>
                    </div>
                </div>
               <!-- pembayaran -->
                <div class="card mt-5 mb-5">
                    <div class="card-header" style="background-color: green;">
                        <h5>Data Pembayaran</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Total Kas</th>
                                    <th scope="col">Tanggal Terakhir Bayar</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bayar as $key => $lia )
                                    <tr class="text-center">
                                        <td style="width: 20px;">{{ $key + 1 }}</td>
                                        <td style="width: 150px;">
                                            @if ($lia->siswa)
                                            {{ $lia->siswa->nama}}
                                            @else<span style="color:red;">Kosong</span>
                                            @endif
                                        </td>
                                        <td style="width: 150px;">Rp. {{ number_format($lia->jumlah_bayar,0,',',',',) }}</td>
                                        <td style="width: 150px;">{{ \Carbon\Carbon::parse($lia->tanggal_bayar)->formatLocalized('%d %B %Y') }}</td>
                
                                        
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
        feather.replace();
        </script>
</body>
</html>