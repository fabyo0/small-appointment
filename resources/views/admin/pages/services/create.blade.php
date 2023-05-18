@extends('admin.pages.main')
@section('breadcumb','Servis Yönetimi')

@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-11 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Tedavi Ekle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('service.store') }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">@csrf
                                    <div class="form-group">
                                        <p>Tedavi Adı</p>
                                        <input id="t-text" type="text" name="title"
                                               class="form-control @error('title') is-invalid @enderror" required>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Servis Fotoğrafı (120X70)</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="widget-content widget-content-area">
                                            <div class="row">
                                                <div class="col-lg-12 col-12 ">
                                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                                        <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                                                   class="custom-file-container__image-clear"
                                                                                   title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file">
                                                            <input type="file" form="mainForm" name="image"
                                                                   class="custom-file-container__custom-file__custom-file-input"
                                                                   accept="image/*" required>
                                                            <span
                                                                class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>

                                                        @error('image')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area">
                                            <div class="row">
                                                <div class="col-lg-12 col-12 ">
                                                    <button form="mainForm" type="submit"
                                                            class="btn btn-success btn-lg m-3">Kaydet
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
