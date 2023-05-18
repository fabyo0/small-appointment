@extends('admin.pages.main')
@section('breadcumb','Site Yönetimi')

@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Genel Site Ayarları</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('settings.update',$settings->id) }}" method="post" id="mainForm"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <ul class="nav nav-tabs mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="underline-tab" data-toggle="tab"
                                               href="#underline-1" role="tab" aria-controls="underline-1"
                                               aria-selected="true">Genel Bilgiler</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="lineTabContent-3">
                                        <div class="tab-pane fade show active" id="underline-1" role="tabpanel"
                                             aria-labelledby="underline-tab">
                                            <div class="form-group">
                                                <label for="phone">Telefon</label>
                                                <input id="phone" type="text" name="phone"
                                                       class="form-control @error('phone') is-invalid @enderror"
                                                       value="{{ $settings->phone }}" required>
                                                @error('phone')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="phone_other">Diğer Telefon</label>
                                                <input id="phone_other" type="text" name="phone_other"
                                                       class="form-control @error('phone_other') is-invalid @enderror"
                                                       value="{{ $settings->phone_other }}" required>
                                                @error('phone_other')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">E-Posta</label>
                                                <input id="email" type="text" name="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       value="{{ $settings->email }}" required>
                                                @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Adres</label>
                                                <input id="address" type="text" name="address"
                                                       class="form-control @error('address') is-invalid @enderror"
                                                       value="{{ $settings->address }}" required>
                                                @error('address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="facebook">Facebook Link</label>
                                                <input id="facebook" type="text" name="facebook"
                                                       class="form-control @error('facebook') is-invalid @enderror"
                                                       value="{{ $settings->facebook }}" required>
                                                @error('facebook')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="twitter">Twitter Link</label>
                                                <input id="twitter" type="text" name="twitter"
                                                       class="form-control @error('twitter') is-invalid @enderror"
                                                       value="{{ $settings->twitter }}" required>
                                                @error('twitter')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="instagram">Instagram Link</label>
                                                <input id="instagram" type="text" name="instagram"
                                                       class="form-control @error('instagram') is-invalid @enderror"
                                                       value="{{ $settings->instagram }}" required>
                                                @error('instagram')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <div class="row">
                                                    <div class="col-lg-12 col-12"
                                                         style="align-items: end; justify-content: left; display: flex">
                                                        <button form="mainForm" type="submit"
                                                                class="btn btn-success btn-lg m-3">Güncelle
                                                        </button>
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

