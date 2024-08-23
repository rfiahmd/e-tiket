@php
    $title = 'Data Karyawan';
    $titleHeader = '<li><strong style="margin: 0 8px;">/</strong>Data Karyawan</li>';
@endphp

@extends('layouts.template')

@section('content')
    @if (session('success'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
            <div class="toast" id="liveToast4" role="alert" aria-live="polite" aria-atomic="true">
                <div class="d-flex justify-content-between align-items-center alert-light-success">
                    <div class="toast-body">
                        <i class="close-search stroke-success" data-feather="check-square"></i>
                        {{ session('success') }}
                    </div>
                    <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    @if (session('errors'))
        <div class="toast-container position-fixed bottom-0 end-0 p-3 toast-index toast-rtl">
            <div class="toast" id="liveToast4" role="alert" aria-live="polite" aria-atomic="true">
                <div class="d-flex justify-content-between align-items-center alert-light-danger">
                    <div class="toast-body">
                        <i class="close-search stroke-danger" data-feather="x-circle"></i>
                        {{ session('errors') }}
                    </div>
                    <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 project-list">
                    <div class="row">
                        <div class="col-md-6" style="margin-top: -0.5rem; margin-left: -1.5rem">
                            <h4>Data Karyawan Wisata</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="margin-top: -3rem">
                <hr>
                <div class="table-responsive theme-scrollbar">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th style="width: 30px;">No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Gmail</th>
                                <th>Password</th>
                                <th style="width: 70px; text-align: center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ach Rofii</td>
                                <td>arf_</td>
                                <td>ar002@gmail.com</td>
                                <td>1234567890</td>
                                <td>
                                    <ul class="action d-flex justify-content-center align-items-center mb-0">
                                        <li class="edit"> <a href=""><i
                                                    class="icon-pencil-alt"></i></a></li>
                                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
