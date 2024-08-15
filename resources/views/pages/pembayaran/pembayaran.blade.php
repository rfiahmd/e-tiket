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
                            <h4>Data Pembayaran</h4>
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
                                <th>Kode Transaksi</th>
                                <th>Atas Nama</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong style="font-size: 16px;">#A-2835</strong>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5>Jamilah</h5>
                                            <a href="{{ route('pembayaran_detail') }}">
                                                <span style="font-size: 12px;">Detail Pembayaran...</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge rounded-pill badge-warning"> in process</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong style="font-size: 16px;">#A-194326</strong>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5>Maimunah</h5>
                                            <a href="{{ route('pembayaran_detail') }}">
                                                <span style="font-size: 12px;">Detail Pembayaran...</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge rounded-pill badge-danger">Pending</span></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong style="font-size: 16px;">#A-4263</strong>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h5>Aisyah</h5>
                                            <a href="{{ route('pembayaran_detail') }}">
                                                <span style="font-size: 12px;">Detail Pembayaran...</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge rounded-pill badge-success">hired</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
