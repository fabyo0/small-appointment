@extends('admin.pages.main')
@section('breadcumb','Referans Yönetimi')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6 ">
                    <div class="text-right">
                        <a href="{{ route('reference.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Fotoğraf</th>
                            <th>Referans Adı</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($references as $key => $reference)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>
                                    <img width="100" height="75" src="/storage/{{ $reference->image }}">
                                </td>
                                <td>{{ $reference->name }}</td>
                                <td>
                                    <a href="{{ route('reference.edit',$reference->id) }}"><i
                                            style="color: cornflowerblue" class="far fa-edit fa-2x"></i> </a>
                                    <a href="#"
                                       onclick="deleteItem({{ $key }})"><i
                                            style="color: red" class="far fa-trash-alt fa-2x"></i></a>
                                    <form id="deleteform{{ $key }}" method="POST"
                                          action="{{ route('reference.destroy',$reference->id) }}">@method('DELETE')@csrf</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Fotoğraf</th>
                            <th>Referans Adı</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

