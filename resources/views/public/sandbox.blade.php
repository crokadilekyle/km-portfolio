@extends('layouts.portfolio')

@section('content')
<section class="container">

    <button class="btn" style="margin-top: 50px" id="find-me">Show my location</button><br />

    <p id="status"></p>
    <a id="map-link" style="color: #325d79" target=" _blank"></a>

    <script>
        function geoFindMe() {

            const status = document.querySelector('#status');
            const mapLink = document.querySelector('#map-link');

            mapLink.href = '';
            mapLink.textContent = '';

            function success(position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                status.textContent = '';
                mapLink.href = `https://www.google.com/maps/search/?api=1&query=${latitude}, ${longitude}`;
                mapLink.textContent = `${latitude} ${longitude}`;
            }

            function error() {
                status.textContent = 'Unable to retrieve your location';
            }

            if (!navigator.geolocation) {
                status.textContent = 'Geolocation is not supported by your browser';
            } else {
                status.textContent = 'Locating…';
                navigator.geolocation.getCurrentPosition(success, error);
            }

        }

        document.querySelector('#find-me').addEventListener('click', geoFindMe);

    </script>

</section>
@endsection
