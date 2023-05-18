@extends('admin.pages.main')
@section('breadcumb','Blog Yönetimi')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6 ">
                    <div class="text-right">
                        <a href="{{ route('doctors.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Doktor Adı</th>
                                <th>Uzmanlık Alanı</th>
                                <th>Hakkında</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($doctors as $key => $doctor)
                            <tr>
                                <td>
                                    <img width="200" height="150" src="/storage/{{ $doctor->image }}">
                                </td>
                                <td>{{ $doctor->title }}</td>
                                <td>{{ $doctor->profession }}</td>
                                <td>{!!  Str::limit($doctor->about,15) !!}</td>
                                <td>
                                    <a href="{{ route('doctors.edit',$doctor->id) }}"><i style="color: cornflowerblue"
                                                                                           class="far fa-edit fa-2x"></i>
                                    </a>
                                    <a href="#"
                                        onclick="deleteItem({{ $key }})"><i
                                            style="color: red" class="far fa-trash-alt fa-2x"></i></a>
                                    <form id="deleteform{{ $key }}" method="POST"
                                          action="{{ route('doctors.destroy',$doctor->id) }}">@method('DELETE')@csrf</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Doktor Adı</th>
                                <th>Uzmanlık Alanı</th>
                                <th>Hakkında</th>
                                <th class="no-content">Eylem</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
