# Simple-Openweather-CI
See the current weather with PHP
CodeIgniter 3 + Openweathermap

# Install
Paste all folder to your CI application/ folder.

# Try Script
***access Your CI URL /weather***
```Quote
Example:
localhost/codeigniter/weather
```

# Usage For Project
***Call Modal***
```PHP
<?php
$this->load->model('M_weather'); ?>
```
***Send variabel city to model***
```PHP
<?php
$city="Yogyakarta";

$data="$this->M_weather->get($city)"; //array ?>
```
***Use to View***
```PHP
The weather of <?=$data['name']?> at <?=date("d M Y")?> is <?=$data['weather'][0]['main']?>
```

***Array Refreance - Example***
```LIST
"id":1650357,
"name":"Bandung",
"coord":{"lon":107.618607,"lat":-6.90389},
"main":{"temp":293.573,"temp_min":293.573,"temp_max":293.573,"pressure":918.18,"sea_level":1024.43,"grnd_level":918.18,"humidity":94},
"dt":1474503083,
"wind":{"speed":0.98,"deg":92.5},
"sys":{"country":"ID"},
"clouds":{"all":0},
"weather":[{"id":800,"main":"Clear","description":"Sky is Clear","icon":"01d"}]
```
