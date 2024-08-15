{{-- @php
    $title = '.. » ..';
@endphp --}}

@extends('layouts.template')

@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 project-list">
                    <div class="row">
                        <div class="col-md-6" style="margin-top: -0.5rem; margin-left: -1.5rem">
                            <h4>Form Kategori</h4>
                        </div>
                        <div class="col-md-6" style="margin-top: -0.8rem;">
                            <div class="form-group mb-0 me-0"></div>
                            <a style="margin-right: -3rem;" class="btn btn-secondary" href="{{ route('paket_wisata') }}">
                                <i class="fa fa-reorder"></i>
                                Data Kategori
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="margin-top: -3rem">
                <hr>

                {{-- isi --}}
                
            </div>
        </div>
    </div>
@endsection
