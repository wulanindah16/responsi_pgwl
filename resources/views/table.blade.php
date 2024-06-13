@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <div class="card shadow">
            <div class="card-header">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Wulan</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Risma</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rasydini</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Anggita</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Farmana</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Meyna</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
