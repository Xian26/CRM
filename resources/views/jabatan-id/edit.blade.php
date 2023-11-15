@extends('layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Jabatan Id</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Jabatan Id</a>
                        </li>
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Edit</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <form id="form_add" class="form d-flex flex-column flex-lg-row"
                    action="{{ route('jabatan-id.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Jabatan Id</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Kode</label>
                                        <input type="text" name="kode" class="form-control mb-2" placeholder="Kode" value="{{$data->kode}}" />
                                    <div class="text-muted fs-7"> </div>
                                </div>

                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" value="{{$data->nama}}" />
                                    <div class="text-muted fs-7"></div>
                                </div>

                                <div class="mb-10 fv-row">
                                    <label class="form-label">Status</label>
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status" @if($data->status == 1) checked="checked" @endif/>
                                        <label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Aktif</label>
                                    </div>
                                    <div class="text-muted fs-7"> </div>
                                </div>
                            </div>
                        </div>
                        <!--end::General options-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{route('jabatan-id')}}" id="kt_ecommerce_add_product_cancel"
                                class="btn btn-light me-5">Cancel</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" id="add_bank_account_submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
       $(document).ready(function() {
            $("#form_add").validate({
                errorClass: "error",
                rules: {
                    kode: {
                        required: true,
                    },
                    nama: {
                        required: true,
                    }
                },
                messages: {
                    kode: {
                        required: "Please enter your kode",
                    },
                    nama: {
                        required: "Please enter your nama",
                    }
                }
            })

        });
    </script>
@endpush
