<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<style>
    #map
    {
        width: 1500px;
        height: 1500px;
    }
</style>





</head>

<body>
    <div id="map"></div>
</body>
    <script>

    const map=L.map('map');
    map.setView([<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<style>
    #map
    {
        width: 1500px;
        height: 1500px;
    }
</style>





</head>

<body>
    <div id="map"></div>
</body>
    <script>

    const map=L.map('map');
    map.setView([15.5877,73.9514], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([15.5566,74.0161],
{
    title: "PRIMARY HEALTH CENTER SAKHALI",
})
.bindPopup('<h2>BLOOD BANK</h2>contact details:<a href="tel:832 236 4258">832 236 4258</a><br><a href="http://www.gmc.goa.gov.in/index.php/en/utility/blood-bank/47-goa-medical-college-blood-bank-blood-stocks">website</a></h3>')
.addTo(map)

L.marker([15.5885,73.9655],
{
    title: "BICHOLIM HOSPITAL",
})
.bindPopup('<h2>BLOOD BANK</h2>contact details:<a href="tel:9011025053">9011025053</a><br><a href="http://www.gmc.goa.gov.in/index.php/en/utility/blood-bank/47-goa-medical-college-blood-bank-blood-stocks">website</a></h3>')
.addTo(map)




    </script>


</html>], 15);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([15.68763,73.83082],
{
    title: "REDKER HOSPITAL AND RESEARCH CENTER",
})
.bindPopup('<h2>BLOOD BANK</h2>contact details:<a href="tel:09146885522">09146885522</a><br><a href="http://www.gmc.goa.gov.in/index.php/en/utility/blood-bank/47-goa-medical-college-blood-bank-blood-stocks">website</a></h3>')
.addTo(map)





    </script>


</html>