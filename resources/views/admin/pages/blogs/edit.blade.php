@extends('admin.pages.main')
@section('breadcumb','Blog Yönetimi')
@section('content')

    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Blog Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('blogs.update',$blog->id) }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">@csrf @method('put')
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        {{--                                        @foreach($locales as $key => $locale)--}}
                                        <li class="nav-item">
                                            <a class="nav-link active" id="underline-tab" data-toggle="tab"
                                               href="#underline" role="tab" aria-controls="underline"
                                               aria-selected="  true ">Blog'a ait Detaylar</a>
                                        </li>
                                        {{--                                        @endforeach--}}
                                    </ul>

                                    <div class="tab-content" id="lineTabContent-3">
                                        {{--                                        @foreach($locales as $key => $locale)--}}
                                        <div class="tab-pane fade show active" id="underline" role="tabpanel"
                                             aria-labelledby="underline-tab">
                                            <div class="form-group">
                                                <p>Blog Adı</p>
                                                <input id="t-text" type="text" name="name"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       value="{{ $blog->name }}" required>
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <p>Blog İçeriği</p>
                                                <textarea class="summernote" name="text">{{ $blog->text }}</textarea>
                                                @error('text')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{--                                        @endforeach--}}
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Blog Kapak Görseli (360x340)</h4>
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
                                            <input type="file" form="mainForm" name="image_cover"
                                                   class="custom-file-container__custom-file__custom-file-input"
                                                   accept="image/*">
                                            <span
                                                class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="statbox widget box box-shadow" style=" display: flex; justify-content: end">
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-12 col-12 ">
                                    <button form="mainForm" type="submit" class="btn btn-success btn-lg m-3">Güncelle
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
