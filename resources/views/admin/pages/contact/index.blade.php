@extends('admin.pages.main')

@section('breadcumb','İletişim Mesajları Yönetimi')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6 ">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                        <tr>
                            <th class="d-none">#</th>
                            <th>Ad Soyad</th>
                            <th>Mesaj</th>
                            <th>E-posta</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contactMessages as $key => $contactMessage)
                            <tr>
                                <td class="d-none">{{ $key+1 }}</td>
                                <td>{{ $contactMessage->fullname }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($contactMessage->message, 50, $end='...') }}</td>
                                <td>{{ $contactMessage->email }}</td>
                                <td>
                                    <a href="{{ route('contact.show',$contactMessage->id) }}"><i style="color: cornflowerblue" class="far fa-eye fa-2x mr-2"></i>  </a>
                                    <a href="#" {{--onclick="document.getElementById('deleteform{{ $key }}').submit()"--}}  onclick="deleteItem({{ $key }})"><i style="color: red" class="far fa-trash-alt fa-2x"></i></a>
                                    <form id="deleteform{{ $key }}" method="POST" action="{{ route('contact.destroy',$contactMessage->id) }}">@method('DELETE')@csrf</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th class="d-none">#</th>
                            <th>Ad Soyad</th>
                            <th>Mesaj</th>
                            <th>E-posta</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

