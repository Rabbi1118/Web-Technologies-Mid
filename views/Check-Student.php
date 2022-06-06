
<h1>Students Details</h1>

<?php
$data=file_get_contents('../models/student.json');
$json=json_decode($data,true);
echo 'Name: '.$json['student'][0]['name'] ;
echo '<br>';
echo 'Address: '.$json['student'][0]['address'];
echo '<br>';
echo 'Enrolled Course: '.$json['student'][0]['Enrolled Course'];
echo '<br>';
echo '<br>';
echo 'Name: '.$json['student'][1]['name'] ;
echo '<br>';
echo 'Address: '.$json['student'][1]['address'];
echo '<br>';
echo 'Enrolled Course: '.$json['student'][1]['Enrolled Course'];
echo '<br>';
echo '<br>';
echo 'Name: '.$json['student'][2]['name'] ;
echo '<br>';
echo 'Address: '.$json['student'][2]['address'];
echo '<br>';
echo 'Enrolled Course: '.$json['student'][2]['Enrolled Course'];
echo '<br>';
echo '<br>';
