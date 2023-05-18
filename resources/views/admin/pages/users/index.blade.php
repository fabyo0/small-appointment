@extends('admin.pages.main')
@section('breadcumb','Kullanıcı Yönetimi')

@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6 ">
                    <div class="text-right">
                        <a href="{{ route('users.create') }}">
                            <button class="btn btn-success m-3">Ekle</button>
                        </a>
                    </div>
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Kullanıcı Adı</th>
                            <th>Durum</th>
                            <th>Eposta Adresi</th>
                            <th>Rol</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $key => $user)
                            <tr id="row-{{ $user->id }}">
                                <td>
                                    <img width="200" height="150" src="/storage/{{ $user->image }}">
                                </td>

                                <td>{{ $user->name }}</td>

                                <!--Status -->
                                <td>
                                    @if($user->status)
                                        <a href="javascript:void(0)" class="btn btn-success btn-sm btnChangeStatus"
                                           data-id="{{ $user->id }}">Aktif</a>
                                    @else
                                        <a href="javascript:void(0)" class="btn btn-danger btn-sm btnChangeStatus"
                                           data-id="{{ $user->id }}">Pasif</a>
                                    @endif
                                </td>
                                <td>{{ $user->email }}</td>
                                <!-- Rol -->
                                <td>
                                    @if($user->is_admin)
                                        <a href="javascript:void(0)" class="btn btn-primary btn-sm btnChangeIsAdmin"
                                           data-id="{{ $user->id }}">Admin</a>
                                    @else
                                        <a href="javascript:void(0)" class="btn btn-secondary btn-sm btnChangeIsAdmin"
                                           data-id="{{ $user->id }}">User</a>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('users.edit',$user->id) }}"><i style="color: cornflowerblue"
                                                                                     class="far fa-edit fa-2x"></i>
                                    </a>
                                    <a href="#"
                                       onclick="deleteItem({{ $key }})"><i
                                            style="color: red" class="far fa-trash-alt fa-2x"></i></a>
                                    <form id="deleteform{{ $key }}" method="POST"
                                          action="{{ route('users.destroy',$user->id) }}">@method('DELETE')@csrf</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Fotoğraf</th>
                            <th>Kullanıcı Adı</th>
                            <th>Durum</th>
                            <th>Eposta Adresi</th>
                            <th>Rol</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            // ajax setup
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //TODO:  Change Status
            $('.btnChangeStatus').click(function () {
                // data-id article->id
                let userID = $(this).data('id');
                // element
                let self = $(this);

                Swal.fire({
                    title: 'Status değiştirmek istediğinize emin misiniz?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Evet',
                    denyButtonText: `Hayır`,
                    cancelButtonText: "İptal"
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        // Ajax Status
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('user.change-status') }}',
                            data: {
                                userID: userID
                            },
                            success: function (data) {
                                // response article_status
                                if (data.user_status) {
                                    self.removeClass("btn-danger");
                                    self.addClass("btn-success");
                                    self.text("Aktif");
                                } else {
                                    self.removeClass("btn-success");
                                    self.addClass("btn-danger");
                                    self.text("Pasif");
                                }

                                Swal.fire({
                                    title: "Başarılı",
                                    text: "Status Güncellendi",
                                    confirmButtonText: 'Tamam',
                                    icon: "success"
                                });
                            }
                        })
                    } else if (result.isDenied) {
                        Swal.fire({
                            'title': 'Bilgi',
                            'text': 'Herhangi bir işlem yapılmadı',
                            'icon': 'info',
                            'confirmButtonText': 'Tamam'
                        });
                    }
                });
            });

            //TODO: Admin Authorize
            $('.btnChangeIsAdmin').click(function () {
                let id = $(this).data('id');
                let self = $(this);
                Swal.fire({
                    title: 'Admin durumunu değiştirmek istediğinize emin misiniz?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Evet',
                    denyButtonText: `Hayır`,
                    cancelButtonText: "İptal"
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            url: "{{ route('user.change-role') }}",
                            data: {
                                id: id
                            },
                            success: function (data) {
                                if (data.is_admin) {
                                    self.removeClass("btn-secondary");
                                    self.addClass("btn-primary");
                                    self.text("Admin");
                                } else {
                                    self.removeClass("btn-primary");
                                    self.addClass("btn-info");
                                    self.text("User");
                                }
                                Swal.fire({
                                    title: "Başarılı",
                                    text: "Rol Durumu Başarıyla Güncellendi",
                                    confirmButtonText: 'Tamam',
                                    icon: "success"
                                });
                            },
                            error: function () {
                                console.log("hata geldi");
                            }
                        })
                    } else if (result.isDenied) {
                        Swal.fire({
                            title: "Bilgi",
                            text: "Herhangi bir işlem yapılmadı",
                            confirmButtonText: 'Tamam',
                            icon: "info"
                        });
                    }
                })
            });

        })
    </script>
@endsection

