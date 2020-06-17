@extends('template_blog.content')
@section('isi')

<div class="col-md-8 hot-post-left">
    <div class="post post-row">
        <table class="table table-bordered table-striped table-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kasus Positif</th>
                        <th scope="col">Kasus Sembuh</th>
                        <th scope="col">Meninggal</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($korona as $dataPasien)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $dataPasien['attributes']['Provinsi'] }}</td>
                            <td>{{ $dataPasien['attributes']['Kasus_Posi'] }}</td>
                            <td>{{ $dataPasien['attributes']['Kasus_Semb'] }}</td>
                            <td>{{ $dataPasien['attributes']['Kasus_Meni'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>			   

@endsection 