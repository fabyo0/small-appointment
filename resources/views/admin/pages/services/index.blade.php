@extends('admin.pages.main')
@section('breadcumb','Servis Yönetimi')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6 ">
                    <div class="text-right">
                        <a href="{{ route('service.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Servis Başlığı</th>

                                <th class="no-content">Eylem</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($services as $key => $service)
                            <tr>
                                <td>
                                    <img width="200" height="150" src="/storage/{{ $service->image }}">
                                </td>
                                <td>{{ $service->title }}</td>
                                <td>
                                    <a href="{{ route('service.edit',$service->id) }}"><i style="color: cornflowerblue"
                                                                                           class="far fa-edit fa-2x"></i>
                                    </a>
                                    <a href="#"
                                      onclick="deleteItem({{ $key }})"><i
                                            style="color: red" class="far fa-trash-alt fa-2x"></i></a>
                                    <form id="deleteform{{ $key }}" method="POST"
                                          action="{{ route('service.destroy',$service->id) }}">@method('DELETE')@csrf</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Servis Başlığı</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
