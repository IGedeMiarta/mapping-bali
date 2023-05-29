<!DOCTYPE html>
<html>

<head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
    <div class="main-block">
        <form action="/">
            <h1>Tambahkan Tempat Baru</h1>
            <fieldset>
                <legend>
                    <h3>Input Wajib</h3>
                </legend>
                <div class="account-details">
                    <div>
                        <label>Nama Tempat*</label><input type="text" name="place_name" required>
                    </div>
                    <div>
                        <label>Alamat Lengkap*</label>
                        <input type="text" name="alamat" required>
                    </div>
                    <div>
                        <label>Nama Pengelola*</label><input type="password" name="cp" required>
                    </div>
                    <div>
                        <label>Nomor Telp*</label><input type="text" name="phone" required>
                    </div>
                    <div>
                        <label>Latitude*</label><input type="text" name="lat" required readonly id="latitude">
                    </div>
                    <div>
                        <label>Longitude*</label><input type="text" name="lng" required readonly id="longitude">
                    </div>

                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <h3>Input Optional</h3>
                </legend>
                <div class="personal-details">
                    <div>
                        <div><label>Email</label><input type="text" name="name" required></div>
                        <div><label>Web</label><input type="text" name="name" required></div>
                    </div>
                    <div>
                        <div><label>Instagram</label><input type="text" name="name"></div>
                        <div><label>YouTube</label><input type="text" name="name" required></div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <h3>Terms</h3>
                </legend>
                <div class="terms-mailing">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox"><span>Saya Memberikan Informasi dengan jujur &
                            benar</span>
                    </div>
            </fieldset>
            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>
