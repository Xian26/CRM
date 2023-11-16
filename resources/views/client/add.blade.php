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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Client</h1>
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
                            <a href="#" class="text-muted text-hover-primary">Client</a>
                        </li>
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Add</li>
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
                    action="{{route('client.save')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Client</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Nama</label>
                                        <input type="text" name="name" class="form-control mb-2" placeholder="Nama" value="" />
                                    <div class="text-muted fs-7"> </div>
                                </div>

                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Email</label>
                                        <input type="text" name="email" class="form-control mb-2" placeholder="Email" value="" />
                                    <div class="text-muted fs-7"></div>
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">No Telepon</label>
                                        <input type="number" name="no_telepon" class="form-control mb-2" placeholder="No Telepon" value="" />
                                    <div class="text-muted fs-7"></div>
                                </div>

                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Contact</label>
                                        <input type="text" name="contact" class="form-control mb-2" placeholder="Contact" value="" />
                                    <div class="text-muted fs-7"></div>
                                </div>

                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Alamat</label>
                                        <textarea name="alamat" class="form-control" cols="20" rows="5"></textarea>
                                    <div class="text-muted fs-7"></div>
                                </div>

                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Info Lainnya</label>
                                        <textarea name="info_lainnya" class="form-control" cols="20" rows="5"></textarea>
                                    <div class="text-muted fs-7"></div>
                                </div>
                                
                            </div>
                        </div>
                        <!--end::General options-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{route('client')}}" id="kt_ecommerce_add_product_cancel"
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
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email:true,
                    },
                    no_telepon: {
                        required: true,
                    },
                    contact: {
                        required: true,
                    },
                    alamat: {
                        required: true,
                    },
                    info_lainnya: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                    },
                    email: {
                        required: "Please enter your email",
                        email:"Data yang dimasukkan salah"
                    },
                    no_telepon: {
                        required: "Please enter your no telepon",
                    },
                    contact: {
                        required: "Please enter your contact",
                    },
                    alamat: {
                        required: "Please enter your alamat",
                    },
                    info_lainnya: {
                        required: "Please enter your info lainnya",
                    },
                }
            })

        });
    </script>
@endpush
