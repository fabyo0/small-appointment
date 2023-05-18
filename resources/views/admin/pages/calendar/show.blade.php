@extends('admin.pages.main')
@section('breadcumb','Takvim')

@section('content')
    <div id="calendar"></div>
@endsection

@section('js')

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.7/index.global.min.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                slotMinTime: '9:00:00',
                slotMaxTime: '21:00:00',
                events: @json($events),
            });
            calendar.render();
        });

    </script>

@endsection
