@extends('admin.pages.main')
@section('breadcumb','Randevu Talepleri')
@section('style')
    <style>
        /* Modal Görünümü */
        .modal-content {
            border-radius: 0;
        }

        .modal-header {
            background-color: #f8f9fa;
            border-bottom: none;
            padding: 15px;
            text-align: center;
        }

        .modal-title {
            color: #333;
            font-size: 24px;
            margin: 0;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-body p {
            margin-bottom: 10px;
        }

        .modal-footer {
            background-color: #f8f9fa;
            border-top: none;
            padding: 15px;
            text-align: right;
        }

        .modal-footer .btn-secondary {
            background-color: #ccc;
            color: #333;
        }

        .modal-footer .btn-secondary:hover,
        .modal-footer .btn-secondary:focus {
            background-color: #bbb;
            color: #333;
        }
    </style>
@endsection
@section('content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%;padding: 15px">
                        <thead>
                        <tr>
                            <th>Adı Soyadı</th>
                            <th>Tarih</th>
                            <th>Saat</th>
                            <th>Telefon</th>
                            <th>Durum</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointments as $appointment)
                            <tr id="row-{{ $appointment->id }}">
                                <td>{{ $appointment->fullname }}</td>
                                <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->translatedFormat("d F Y") }}</td>
                                <td>{{ \Carbon\Carbon::parse($appointment->appointment_time)->translatedFormat("H:i") }}</td>
                                <td>{{ $appointment->phone }}</td>
                                <td>
                                    @if($appointment->status)
                                        <a href="javascript:void(0)" class="btn btn-primary btnChangeStatus"
                                           data-id="{{ $appointment->id }}">Aktif</a>
                                    @else
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger btnChangeStatus"
                                           data-id="{{ $appointment->id }}">Pasif</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="preview-appointment" data-toggle="modal"
                                       data-target="#appointmentModal" data-id="{{ $appointment->id }}">
                                        <i style="color: cornflowerblue" class="far fa-eye fa-2x"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Adı Soyadı</th>
                            <th>Tarih</th>
                            <th>Saat</th>
                            <th>Telefon</th>
                            <th>Durum</th>
                            <th class="no-content">Eylem</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel">Randevu Detayları</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Adı Soyadı:</strong> {{ $appointment->fullname }}</p>
                    <p><strong>Tedavi:</strong> {{ $appointment->service->title }}</p>
                    <p><strong>Doktoru:</strong> {{ $appointment->doctor->title }}</p>
                    <p><strong>Tarih:</strong> {{ \Carbon\Carbon::parse($appointment->appointment_date)->translatedFormat("d F Y") }}</p>
                    <p><strong>Saat:</strong> {{ \Carbon\Carbon::parse($appointment->appointment_time)->format('H:i') }}</p>
                    <p><strong>Telefon:</strong> {{ $appointment->phone }}</p>
                    <p><strong>E-posta:</strong> {{ $appointment->email }}</p>
                    <p><strong>Durum:</strong> {{ $appointment->status ? 'Muayenesi Tamamlandı' : 'Pasif' }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // ajax setup
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //TODO: Appointment Change Status
        $('.btnChangeStatus').click(function () {
            // data-id appointment->id
            let appointment = $(this).data('id');
            // element
            let self = $(this);

            Swal.fire({
                title: 'Durumu değiştirmek istediğinize emin misiniz?',
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
                        url: '{{ route('appointment.change-status') }}',
                        data: {
                            appointmentID : appointment
                        },
                        success: function (data) {
                            // response article_status
                            if (data.appointment_status) {
                                Swal.fire({
                                    title: "Başarılı",
                                    text: "Hasta Muayenesi Tamamlandı",
                                    confirmButtonText: 'Tamam',
                                    icon: "success"
                                });
                                $('#row-' + appointment).remove();
                            } else {
                                self.removeClass("btn-success");
                                self.addClass("btn-danger");
                                self.text("Pasif");
                            }
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

    </script>
@endsection
