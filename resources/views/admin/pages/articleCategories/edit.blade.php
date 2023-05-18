@extends('admin.pages.main')
@section('breadcumb','Kategori Yönetimi')

@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Kategori Güncelle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('category.update',$category->id) }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active " id="underline-tab" data-toggle="tab"
                                               href="#underline-1" role="tab" aria-controls="underline-1"
                                               aria-selected="true false ">Kategory'e ait Detaylar</a>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="tab-content col-6">
                                            <div class="" id="lineTabContent-3">
                                                <div class="tab-pane fade  show active" id="underline-1"
                                                     role="tabpanel"
                                                     aria-labelledby="underline-tab">
                                                    <div class="form-group">
                                                        <p>Kategori Başlığı</p>
                                                        <input id="t-text" type="text" name="name"
                                                               value="{{ $category->name }}"
                                                               class="form-control  @error('name') is-invalid @enderror"
                                                        >
                                                        @error('title')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="" id="lineTabContent-3">
                                                <div class="tab-pane fade  show active" id="underline-1"
                                                     role="tabpanel"
                                                     aria-labelledby="underline-tab">
                                                    <div class="form-group">
                                                        <p>Kategori Slug</p>
                                                        <input id="t-text" type="text" name="slug"
                                                               value="{{ $category->slug }}"
                                                               class="form-control @error('slug') is-invalid @enderror"
                                                        >
                                                        @error('slug')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <p>Kategori İçeriği</p>
                                                <label>
                                                    <textarea class="summernote"
                                                              name="description">
                                                        {{ $category->description }}
                                                    </textarea>
                                                </label>
                                                @error('description')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="widget-content widget-content-area">
                                                <button form="mainForm" type="submit"
                                                        class="btn btn-success btn-lg m-3">
                                                    Güncelle
                                                </button>
                                            </div>
                                        </div>

                                        <div class="tab-content col-6">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Kategori Görselleri (600X600)</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="widget-content widget-content-area">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12 ">
                                                            <div class="custom-file-container"
                                                                 data-upload-id="myFirstImage">
                                                                <label>Fotoğrafı Kaldır <a href="javascript:void(0)"
                                                                                           class="custom-file-container__image-clear"
                                                                                           title="Clear Image">x</a></label>
                                                                <label class="custom-file-container__custom-file">
                                                                    <input type="file" form="mainForm" name="image"
                                                                           class="custom-file-container__custom-file__custom-file-input"
                                                                           accept="image/*">
                                                                    <span
                                                                        class="custom-file-container__custom-file__custom-file-control"></span>
                                                                </label>
                                                                <div
                                                                    class="custom-file-container__image-preview"></div>

                                                                @error('image')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
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
