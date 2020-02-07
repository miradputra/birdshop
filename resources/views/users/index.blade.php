@extends('layouts.backend')
@section('content')
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
            <div class="box-header">
                <h3 class="box-title">Manajemen User</h3>
            </div>
                <div class="container-fluid">
                    <div class="card">
                    <div class="col-md-12">
                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">Tambah Baru</a>
                        <br>
                        <br>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>no</td>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Role</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($users as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                <td>{{ $row->name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>
                                        @foreach ($row->getRoleNames() as $role)
                                        <label for="" class="badge badge-info">{{ $role }}</label>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{ route('users.destroy', $row->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a href="{{ route('users.roles', $row->id) }}" class="btn btn-info btn-sm">set role<i class="fa fa-user-secret"></i></a>
                                            <a href="{{ route('users.edit', $row->id) }}" class="btn btn-warning btn-sm">edit<i class="fa fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm">delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                            </table>
                        </div>
                    </div>
                 </div>
            </div>
            </div>
        </div>
    </div>
          
@endsection