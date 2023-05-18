@extends('admin.pages.main')
@section('breadcumb','Mesaj Yönetimi')
@section('content')
    <div class="container-fluid">
        <div class="row layout-top-spacing">
            <div class="col-lg-10 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Mesaj Detayı</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('contact.destroy',$contactMessage->id) }}" method="post" id="mainForm" enctype="multipart/form-data">
                                    @method('DELETE')@csrf
                                    <div class="form-group">
                                        <p>Ad Soyad</p>
                                        <input id="t-text" type="text" disabled name="fullname" value="{{ $contactMessage->fullname }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <p>E-posta</p>
                                        <input id="t-text" type="text" disabled name="url" value="{{ $contactMessage->email }}" class="form-control" required>
                                        <input id="t-text" type="text" disabled name="url" value="{{ $contactMessage->email }}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <p>Mesaj İçeriği</p>
                                        <textarea class="form-control" disabled id="exampleFormControlTextarea1" rows="3">{{ $contactMessage->message }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-danger" type="submit">Mesajı Sil</button>
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
