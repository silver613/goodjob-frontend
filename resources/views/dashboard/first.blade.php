@extends('layout.dash')

@section('style')
<link rel="stylesheet" href="{{ asset('template/vendor/fullcalendar5.1/main.css') }}">       
<link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
<style>
/* .fc-scrollgrid {
    display: none;
} */
.fc-timeGridDay-view table thead {
    display: none;
}

.fc-header-toolbar {
    display: none !important;
}
.fc .fc-timegrid-col.fc-day-today {
    background-color: #fff !important;
}
.fc-v-event .fc-event-title-container {
    border-left: 5px solid #F2CB05;
}
.fc-v-event .fc-event-title {
    font-size: 16px;
    font-weight: 600;
    position:absolute;top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    -ms-transform:translate(-50%,-50%);
}
.calendar-title {
    font-size: 14px;
}
</style>

@endsection('style')
@section('content')

    <!-- Header -->
    <div class="header">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h1 d-inline-block txt-dark">Hello, Jane</h6>
                        <p>Welcome - This is your personal dashboard.</p>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <button type="button" class="btn btn-twitter btn-icon-only rounded-circle">
                            <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light bg-white shadow 3dots" href="#">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid page-content">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card card-calendar">
                    <div class="card-header row mx-3 px-0">
                        <div class="col-lg-3 mt-3 mt-lg-0 text-lg-left col-sm-4">
                            <h5 class="h3 mb-0">Calendar</h5>
                        </div>

                        <div class="col-lg-9 mt-3 mt-lg-0 text-lg-right px-0 col-sm-8">
                            <!-- <button type="button" class="btn rounded-circle btn-icon-only btn-7" data-calendar-view="month">M</button>
                            <button type="button" class="btn rounded-circle btn-icon-only btn-7" data-calendar-view="basicWeek">W</button>
                            <button type="button" class="btn rounded-circle btn-icon-only btn-7" data-calendar-view="basicDay">D</button> -->
                            
                            <button type="button" class="btn btn-icon-only rounded-circle calendar-btn-prev btn-4">
                                <span class="btn-inner--icon"><i class="fa fa-arrow-left"></i></span>
                            </button>
                            <h6 class="calendar-title d-inline-block mb-0">October, 2020</h6>
                            <button type="button" class="btn btn-icon-only rounded-circle calendar-btn-next btn-4">
                                <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="f-calendar" id="f-calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" style="padding-bottom: 30px;">
                <div class="card map-1">
                    <div id="map-1"></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="h3 mb-0">Your next job</h5>
            </div>
            <div class="card-body px-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 px-0">
                            <div class="next-job-card py-3 px-2 row mb-3">
                                <div class="col-sm-7 px-0 my-auto">
                                    <h4 class="mb-0">
                                        <a href="#!">Maintenance in house blabla</a>
                                    </h4>
                                    <p class="text-sm text-muted mb-0">Lorem ipsum dolor Lorem ipsum dolor</p>
                                </div>
                                <div class="col-sm-3 px-0 my-auto">
                                    <p class="work-time mb-0">09.00 - 12.00 AM</p>
                                </div>
                                <div class="col-sm-2 px-0 my-auto text-right">
                                    <small>Pending </small>
                                    <span class="text-warning">●</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0">
                            <div class="next-job-card py-3 px-2 row mb-3">
                                <div class="col-sm-7 px-0 my-auto">
                                    <h4 class="mb-0">
                                        <a href="#!">Maintenance in house blabla</a>
                                    </h4>
                                    <p class="text-sm text-muted mb-0">Lorem ipsum dolor Lorem ipsum dolor</p>
                                </div>
                                <div class="col-sm-3 px-0 my-auto">
                                    <p class="work-time mb-0">09.00 - 12.00 AM</p>
                                </div>
                                <div class="col-sm-2 px-0 my-auto text-right">
                                    <small>Pending </small>
                                    <span class="text-warning">●</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 px-0">
                            <div class="next-job-card py-3 px-2 row mb-3">
                                <div class="col-sm-7 px-0 my-auto">
                                    <h4 class="mb-0">
                                        <a href="#!">Maintenance in house blabla</a>
                                    </h4>
                                    <p class="text-sm text-muted mb-0">Lorem ipsum dolor Lorem ipsum dolor</p>
                                </div>
                                <div class="col-sm-3 px-0 my-auto">
                                    <p class="work-time mb-0">09.00 - 12.00 AM</p>
                                </div>
                                <div class="col-sm-2 px-0 my-auto text-right">
                                    <small>Pending </small>
                                    <span class="text-warning">●</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0">
                            <div class="next-job-card py-3 px-2 row mb-3">
                                <div class="col-sm-7 px-0 my-auto">
                                    <h4 class="mb-0">
                                        <a href="#!">Maintenance in house blabla</a>
                                    </h4>
                                    <p class="text-sm text-muted mb-0">Lorem ipsum dolor Lorem ipsum dolor</p>
                                </div>
                                <div class="col-sm-3 px-0 my-auto">
                                    <p class="work-time mb-0">09.00 - 12.00 AM</p>
                                </div>
                                <div class="col-sm-2 px-0 my-auto text-right">
                                    <small>Pending </small>
                                    <span class="text-warning">●</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- Job Add Modal -->
<div class="modal fade" id="new-event" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="new-event--form">
                    <div class="form-group">
                        <label class="form-control-label">Job title</label>
                        <input type="text" class="form-control form-control-alternative new-event--title" placeholder="Event Title" />
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-control-label d-block mb-3">Status color</label>
                        <div class="btn-group btn-group-toggle btn-group-colors event-tag" data-toggle="buttons">
                            <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked /></label>
                            <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off" /></label>
                            <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off" /></label>
                            <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off" /></label>
                            <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off" /></label>
                            <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off" /></label>
                        </div>
                    </div>
                    <input type="hidden" class="new-event--start" />
                    <input type="hidden" class="new-event--end" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary new-event--add">Add Job</button>
                <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Job Edit Modal -->
<div class="modal fade" id="edit-event" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form class="edit-event--form">
                    <div class="form-group">
                        <label class="form-control-label">Job title</label>
                        <input type="text" class="form-control form-control-alternative edit-event--title" placeholder="Event Title" />
                    </div>
                    <div class="form-group">
                        <label class="form-control-label d-block mb-3">Status color</label>
                        <div class="btn-group btn-group-toggle btn-group-colors event-tag mb-0" data-toggle="buttons">
                            <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked /></label>
                            <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off" /></label>
                            <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off" /></label>
                            <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off" /></label>
                            <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off" /></label>
                            <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off" /></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Description</label>
                        <textarea class="form-control form-control-alternative edit-event--description textarea-autosize" placeholder="Event Desctiption"></textarea>
                        <i class="form-group--bar"></i>
                    </div>
                    <input type="hidden" class="edit-event--id" />
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-calendar="update">Update</button>
                <button class="btn btn-danger" data-calendar="delete">Delete</button>
                <button class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="side-menu">
    <button class="btn-14"><i class="fa fa-times"></i> Close</button>
    <h1>What exactly <br> do you want to do?</h1>
    <div class="card-7 mx-auto mt-4">
        <p class="my-auto">Small Introduction</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
        </button>
    </div>
    <div class="card-7 mx-auto">
        <p class="my-auto">Be the first to register employees</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
        </button>
    </div>
    <div class="card-7 mx-auto">
        <p class="my-auto">Rearrange the dashboard</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
        </button>
    </div>
    <div class="card-7 mx-auto">
        <p class="my-auto">I need help</p>
        <button type="button" class="btn btn-icon-only rounded-circle mr-3 my-auto">
            <span class="btn-inner--icon"><i class="fa fa-arrow-right"></i></span>
        </button>
    </div>
</div>



@endsection


@section('script')
<script src="{{ asset('template/vendor/fullcalendar5.1/main.min.js') }}"></script>
<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
<!-- <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script> -->
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMGmInKS9ci-aYtcPuCA0AEm64UxPxwv4&callback=initMap&libraries=&v=weekly"
      async
    ></script>
<script>
    mapboxgl.accessToken = "pk.eyJ1IjoiY29tbWE5MTUiLCJhIjoiY2trajB6czdkMjluazJ3cGF1ampyeHMwbCJ9.MK9s2uQZxIaJMZiBCk3bjA";

    var geojson = {
        type: "FeatureCollection",
        features: [
            {
                type: "Feature",
                geometry: {
                    type: "Point",
                    coordinates: [9.29, 47.54],
                },
                properties: {
                    title: "Mapbox",
                    description: "Washington, D.C.",
                },
            },
        ],
    };
    var map = new mapboxgl.Map({
        container: "map-1",
        style: "mapbox://styles/mapbox/streets-v9",
        center: [9.29, 47.54],
        zoom: 9,
    });

    // add markers to map
    geojson.features.forEach(function (marker) {
        var markerbox = document.createElement("div");
        var mark      = document.createElement("div");
        var avatar    = document.createElement("img");
        var after     = document.createElement("img");
        markerbox.className = "marker-box";
        mark.className    = "marker";
        avatar.className    = "mark-avatar";
        after.className     = "mark-after";
        avatar.src = "{{ asset('image/map-avatar.jpg') }}"
        after.src  = "{{ asset('image/ripple.svg') }}"
        mark.append(avatar);
        
        markerbox.append(mark);
        markerbox.append(after);

        new mapboxgl.Marker(markerbox,{ offset: [-28, -50] })
            .setLngLat(marker.geometry.coordinates)
            .addTo(map);
    });
    map.on('load', function() {
        var btn = document.getElementsByClassName('sidenav-toggler');
        btn.onclick = function() {
            alert();
        }
    });
    $(".sidenav-toggler").on("click", function() {
        // map.resize();
        // console.log(map);
    })

    var height = $("#map-1").height()-78;

    $(".calendar-btn-next").on("click", function() {
        $(".fc-next-button").click();
        $(".calendar-title").text($(".fc-toolbar-title").text());
    });
    $(".calendar-btn-prev").on("click", function() {
        $(".fc-prev-button").click();
        $(".calendar-title").text($(".fc-toolbar-title").text());
    });
    $(document).ready(function() {
        $(".calendar-title").text($(".fc-toolbar-title").text());
    })
    document.addEventListener("DOMContentLoaded", function () {
        var calendarEl = document.getElementById("f-calendar");

        var calendar = new FullCalendar.Calendar(calendarEl, {
            displayEventTime: false,
            eventStartEditable: false,
            eventTextColor: "#0f2231",
            allDaySlot: false,
            height: height,
            expandRows: true,
            slotMinTime: "00:00",
            slotMaxTime: "24:00",
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
            },
            initialView: "timeGridDay",
            initialDate: "2021-03-19",
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            selectable: true,
            nowIndicator: true,
            dayMaxEvents: true, // allow "more" link when too many events
            events: [
                {   
                    groupId: 111,
                    title: "Maintenance in House Blabla",
                    start: "2021-03-19T09:00:00",
                    end  : "2021-03-19T11:00:00",
                    color: "#FCF5CD",
                },
            ]
        });

        calendar.render();
    });

    $(".3dots").on("click", function () {

    })

</script>
@endsection