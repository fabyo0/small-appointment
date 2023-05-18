@extends('admin.pages.main')
@section('breadcumb','Kullanıcı Yönetimi')

@section('content')

    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Kullanıcı Güncelle</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('users.update',$user->id) }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">@csrf
                                    @method('PUT')
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active " id="underline-tab" data-toggle="tab"
                                               href="#underline-1" role="tab" aria-controls="underline-1"
                                               aria-selected="true false ">Kullanıcıy'a ait Detaylar</a>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="tab-content col-6">
                                            <div class="" id="lineTabContent-3">
                                                <div class="tab-pane fade  show active" id="underline-1"
                                                     role="tabpanel"
                                                     aria-labelledby="underline-tab">
                                                    <div class="form-group">
                                                        <p>Kullanıcı Adı</p>
                                                        <input id="t-text" type="text" name="name"
                                                               value="{{ $user->name }}"
                                                               class="form-control @error('name') is-invalid @enderror"
                                                               required>
                                                        @error('name')
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
                                                        <p>Email Adresi</p>
                                                        <input id="t-text" type="text" name="email"
                                                               value="{{ $user->email }}"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               required>
                                                        @error('email')
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
                                                        <p>Şifre</p>
                                                        <input id="t-text" type="password" name="password"
                                                               class="form-control @error('password') is-invalid @enderror"
                                                               >
                                                        @error('profession')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="tab-pane fade  show active">
                                                        <input class="form-check-input ml-1" type="checkbox" name="is_admin" value="1"
                                                               id="is_admin" {{ isset($user) && $user->is_admin  ? "checked" : (old('is_admin') ? 'checked' : "") }}>
                                                        <label class="form-check-label ml-4" for="is_admin">
                                                            Kullanıcı Admin mi?
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="tab-pane fade  show active">
                                                        <input class="form-check-input" type="checkbox" name="status" value="1"
                                                               id="status" {{ isset($user) && $user->status  ? "checked" : (old('status') ? 'checked' : "") }}>
                                                        <label class="form-check-label" for="status">
                                                            Kullanıcı Aktif Olsun mu?
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="widget-content widget-content-area">
                                                <button form="mainForm" type="submit"
                                                        class="btn btn-success btn-lg mt-4">
                                                    Güncelle
                                                </button>
                                            </div>
                                        </div>

                                        <div class="tab-content col-6">
                                            <div class="statbox widget box box-shadow">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Kullanıcı Görselleri (600X600)</h4>
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
                                                                           accept="image/*" >
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

