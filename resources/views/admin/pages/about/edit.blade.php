@extends('admin.pages.main')
@section('breadcumb','Hakkımızda Yönetimi')
@section('content')

    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Hakkımızda Düzenle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('about.update',$about->id) }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">
                                    @csrf @method('put')
                                    <div class="form-group">
                                        <p>Hakkımızda Yazısı İçeriği</p>
                                        <textarea class="summernote"
                                                  name="text">{{ $about->text }}</textarea>
                                        @error('text')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12 text-right ">
                            <button form="mainForm" type="submit" class="btn btn-success btn-lg"
                                    style="align-items: end; justify-content: left; display: flex">
                                Güncelle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@section('js')
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
@endsection--}}

