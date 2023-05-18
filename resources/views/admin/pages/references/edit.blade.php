@extends('admin.pages.main')
@section('breadcumb','Referans Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-7 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Referans Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('reference.update',$reference->id) }}" method="post" id="mainForm" enctype="multipart/form-data">@csrf @method('PUT')
                                    <div class="form-group">
                                        <p>Referans Adı</p>
                                        <input id="t-text" type="text" name="fullname" value="{{ $reference->fullname }}" class="form-control @error('name') is-invalid @enderror" required>
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </form>
                            </div>

                                <div class="widget-content widget-content-area">
                                        <div class="col-lg-12 col-12 ">
                                            <button form="mainForm" type="submit" class="btn btn-success btn-lg m-3">Kaydet</button>
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Referans Fotoğrafı(100x100)</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-lg-12 col-12 ">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Fotoğrafı Kaldır <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                        <input type="file" form="mainForm" name="image" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
