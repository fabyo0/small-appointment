@extends('admin.pages.main')
@section('breadcumb','Notlarım')

@section('style')
    <link href="{{ asset('panel/assets/css/apps/notes.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('panel/assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">


        <!--  BEGIN CONTENT AREA  -->

        <div class="layout-px-spacing">

            <div class="row app-notes layout-top-spacing" id="cancel-row">
                <div class="col-lg-12">
                    <div class="app-hamburger-container">
                        <div class="hamburger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </div>
                    </div>

                    <div class="app-container">

                        <div class="app-note-container">

                            <div class="app-note-overlay"></div>

                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 text-center">
                                        <a id="btn-add-notes" class="btn btn-primary" href="javascript:void(0);">Not
                                            Oluştur</a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12 mt-5">
                                        <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions active" id="all-notes">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-edit">
                                                        <path
                                                            d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path
                                                            d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg>
                                                    Tüm Notlar
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions" id="note-fav">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-star">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                    </svg>
                                                    Favoriler</a>
                                            </li>
                                        </ul>

                                        <hr/>

                                        <p class="group-section">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-tag">
                                                <path
                                                    d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                                <line x1="7" y1="7" x2="7" y2="7"></line>
                                            </svg>
                                            Etiketler
                                        </p>

                                        <ul class="nav nav-pills d-block group-list" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-primary" id="note-personal">Kişisel</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-warning" id="note-work">İş</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-success"
                                                   id="note-social">Sosyal</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-danger"
                                                   id="note-important">Önemli</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div id="ct" class="note-container note-grid">

                                @foreach($notes as $note)
                                    <div id="row-{{ $note->id }}" class="note-item all-notes note-personal">
                                        <div class="note-inner-content">
                                            <div class="note-content">
                                                <p class="note-title"
                                                   data-noteTitle="Meeting with Kelly">{{ $note->title }}
                                                    - {{ $note->appointment->fullname }}</p>
                                                <p class="meta-time">{{ \Carbon\Carbon::parse($note->created_at)->translatedFormat("d F Y") }}</p>
                                                <div class="note-description-content">
                                                    <p class="note-description"
                                                       data-noteDescription="{{ $note->description }}">
                                                        {{ $note->description }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="note-action">

                                                {{-- <form method="post" action="{{ route('notes.destroy',$note->id) }}">
                                                     @csrf
                                                     @method('DELETE')--}}
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2"
                                                     stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-star fav-note">
                                                    <polygon
                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                                {{--  <a  data-id="{{ $note->id }}"><i class="fa fa-trash btnDelete"></i></a>--}}
                                                <a href="javascript:void(0)"
                                                   class="btn btn-danger btn-sm btnDelete"
                                                   data-id="{{ $note->id }}">
                                                    <i class="fa fa-trash btnDelete"></i>
                                                </a>

                                                {{--   </form>--}}

                                            </div>
                                            <div class="note-footer">
                                                <div class="tags-selector btn-group">
                                                    <a class="nav-link dropdown-toggle d-icon label-group"
                                                       data-toggle="dropdown" href="#" role="button"
                                                       aria-haspopup="true"
                                                       aria-expanded="true">
                                                        <div class="tags">
                                                            <div class="g-dot-personal"></div>
                                                            <div class="g-dot-work"></div>
                                                            <div class="g-dot-social"></div>
                                                            <div class="g-dot-important"></div>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24"
                                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                 stroke-width="2" stroke-linecap="round"
                                                                 stroke-linejoin="round"
                                                                 class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <div class="dropdown-menu d-icon-menu">
                                                        <a class="note-personal label-group-item label-personal dropdown-item position-relative g-dot-personal"
                                                           href="javascript:void(0);"> Kişisel</a>
                                                        <a class="note-work label-group-item label-work dropdown-item position-relative g-dot-work"
                                                           href="javascript:void(0);"> İş</a>
                                                        <a class="note-social label-group-item label-social dropdown-item position-relative g-dot-social"
                                                           href="javascript:void(0);"> Sosyal</a>
                                                        <a class="note-important label-group-item label-important dropdown-item position-relative g-dot-important"
                                                           href="javascript:void(0);"> Önemli</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $notes->links() }}
                        </div>

                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="notesMailModal" tabindex="-1" role="dialog"
                         aria-labelledby="notesMailModalTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                    <div class="notes-box">
                                        <div class="notes-content">
                                            <form action="{{ route('notes.store') }}" method="post" id="">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="d-flex note-title">
                                                            <input type="text" name="title" id="n-title"
                                                                   class="form-control"
                                                                   maxlength="25" placeholder="Title">
                                                        </div>
                                                        <span class="validation-text"></span>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="d-flex note-title">
                                                            <select class="selectpicker form-control"
                                                                    name="appointment_id">
                                                                <option value="">Hasta Seçiniz</option>
                                                                @foreach($users as $user)
                                                                    <option
                                                                        value="{{ $user->id }}">{{ $user->fullname }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="d-flex note-description">
                                                            <textarea id="n-description" name="description"
                                                                      class="form-control"
                                                                      maxlength="60" placeholder="Description"
                                                                      rows="3"></textarea>
                                                        </div>
                                                        <span class="validation-text"></span>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="btn-n-save" class="float-left btn">Kaydet</button>
                                    <button class="btn" data-dismiss="modal">
                                        <a id="trash" href="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-trash">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </a>
                                        Iptal
                                    </button>
                                    <button id="btn" class="btn btn-primary" type="submit">Ekle</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->
        @endsection

        @section('js')
            <script>
                $(document).ready(function () {
                    App.init();
                });
            </script>

            <script src="{{ asset('panel/assets/js/custom.js') }}"></script>
            <!-- END GLOBAL MANDATORY SCRIPTS -->

            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{ asset('panel/assets/js/ie11fix/fn.fix-padStart.js') }}"></script>
            <script src="{{ asset('panel/assets/js/apps/notes.js') }}"></script>
            <!-- END PAGE LEVEL SCRIPTS -->

            <script>

                $(document).ready(function () {
                    // ajax setup
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $('.btnDelete').click(function () {

                        let noteID = $(this).data('id');

                        Swal.fire({
                            title: 'Notu silmek istediğinize emin misiniz?',
                            showDenyButton: true,
                            showCancelButton: true,
                            confirmButtonText: 'Evet',
                            denyButtonText: `Hayır`,
                            cancelButtonText: `Iptal`,
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            if (result.isConfirmed) {
                                $.ajax({
                                    method: "POST",
                                    url: "{{ route('remove.not') }}",
                                    data: {
                                        "_method": "DELETE",
                                        noteID: noteID
                                    },
                                    success: function (data) {
                                        console.log(data);
                                        $('#row-' + noteID).remove();

                                        Swal.fire({
                                            title: "Başarılı",
                                            text: "Not Başarıyla Silindi",
                                            confirmButtonText: 'Tamam',
                                            icon: "success"
                                        });
                                    }
                                });

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

                });

            </script>

@endsection
