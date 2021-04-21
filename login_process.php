<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.js"></script>
    <script type="text/javascript">
        navigator.geolocation.getCurrentPosition(success, error);

        function success(position) {

            var GEOCODING = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + '%2C' + position.coords.longitude + '&language=en';

            $.getJSON(GEOCODING).done(function(location) {
                $('#country').html(location.results[0].address_components[5].long_name);
                $('#state').html(location.results[0].address_components[4].long_name);
                $('#city').html(location.results[0].address_components[2].long_name);
                $('#address').html(location.results[0].formatted_address);
                $('#latitude').html(position.coords.latitude);
                $('#longitude').html(position.coords.longitude);
            })

        }

        function error(err) {
            console.log(err)
        }
    </script>
    <script type="text/javascript">
		<!--
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }

		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		//-->
		</script>
        <script type='text/javascript'>
			<!--
			var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;
			document.getElementById('date').innerHTML=thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
			//-->
		</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        body {
    color: #fff;
    overflow-x: hidden;
    height: 100%;
    background-color: #CFD8DC;
    background-repeat: no-repeat
}

.card {
    background-image: linear-gradient(to bottom right, #9600FF,#AEBAF8);
    background-size: cover;
    width: 600px;
    height: 350px;
    border-radius: 20px;
    box-shadow: 0px 8px 16px 4px #9E9E9E;
    margin-top: 50px;
    margin-bottom: 50px
}

.time-font {
    font-size: 50px
}

.sm-font {
    font-size: 18px
}

.med-font {
    font-size: 28px
}

.large-font {
    font-size: 60px
}
    </style>
    
</head>
<body>
    <div class="container-fluid px-1 px-md-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center px-3">
        <div class="card">
	<p class="time-font mb-0 ml-4 mt-auto" id="clock"> <span class="sm-font">AM</span></p>
            <h2 class="ml-auto mr-4 mt-3 mb-0" id='City'></h2>
            <p class="ml-auto mr-4 mb-0 med-font"></p>
            <h1 class="ml-auto mr-4 large-font">
		<script>
        <?php
$username=$_POST['username'];
$password=$_POST['password'];
if(($username=="nisa"||$username=="satsat")&&$password=="2104"){
}else{
echo"<h1>Loginfails</h1>";
}
date_default_timezone_set('Asia/Jakarta');
$jam=date("G");
if($jam>=0&&$jam<=11)
$sapa="Selamat Pagi,";
else if($jam>=12&&$jam<=15)
$sapa="Selamat Siang,";
else if($jam>=16&&$jam<=18)
$sapa="Selamat Sore,";
else if($jam>=19&&$jam<=23)
$sapa="Selamat Malam,";
echo $sapa." ".$username;
    ?>
    </script>
		</h1>
            <p class="ml-4 mb-4" id="date"></p>
        </div>
    </div>
    </div>
    <!-- Menampilkan Jam (Aktif) -->
	<div id="clock">

    </div>
		

		<!-- Menampilkan Hari, Bulan dan Tahun -->
		<br>
		
</body>
</html>
