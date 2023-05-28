<!DOCTYPE html>
<html>

<head>
    <title>Get User Location</title>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;
        }

        window.onload = getLocation;
    </script>
</head>

<body>
    <h1>Get User Location</h1>
    <form action="process_location.php" method="POST">
        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" placeholder="Latitude" readonly>
        <br>
        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" placeholder="Longitude" readonly>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
