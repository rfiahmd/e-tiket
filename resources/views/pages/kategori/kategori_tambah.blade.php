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
                            <a style="margin-right: -3rem;" class="btn btn-secondary" href="{{ route('kategori') }}">
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
                <form class="row g-3 needs-validation custom-input" novalidate>
                    <div class="col-md-6">
                        <label class="form-label" for="validationCustom03">Nama Kategori</label>
                        <input class="form-control" id="validationCustom03" type="text" required>
                        <div class="invalid-feedback">Please provide a valid city.</div>
                        <div class="valid-feedback">
                            Looks's Good!
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="formFile1">Choose File</label>
                        <input class="form-control" id="formFile1" type="file" aria-label="file example"
                            required>
                        <div class="invalid-feedback">Invalid form file selected</div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="validationTextarea">Description</label>
                        <textarea class="form-control" id="validationTextarea" placeholder="Enter your comment" required></textarea>
                        <div class="invalid-feedback">Please enter a message in the textarea.</div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" id="invalidCheck" type="checkbox" value=""
                                required>
                            <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
