@extends('layouts.backend')
@section('content')
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTitle2">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="zmdi zmdi-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Parent</label>
                                <input class="form-control" type="text" name="slug">
                            </div> -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-outline" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                     </form>
                </div>
            </div>
        </div>
@endsection
