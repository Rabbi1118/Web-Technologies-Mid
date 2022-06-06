
<h1>Instructors Details</h1>

<?php
$data=file_get_contents('../models/instructor.json');
$json=json_decode($data,true);
echo 'Name: '.$json['instructor'][0]['name'] ;
echo '<br>';
echo 'Course: '.$json['instructor'][0]['course'];
echo '<br>';
echo 'Joined: '.$json['instructor'][0]['joined'];
echo '<br>';
echo '<br>';
echo 'Name: '.$json['instructor'][1]['name'] ;
echo '<br>';
echo 'Course: '.$json['instructor'][1]['course'];
echo '<br>';
echo 'Joined: '.$json['instructor'][1]['joined'];
echo '<br>';
echo '<br>';
echo 'Name: '.$json['instructor'][2]['name'] ;
echo '<br>';
echo 'Course: '.$json['instructor'][2]['course'];
echo '<br>';
echo 'Joined: '.$json['instructor'][2]['joined'];
echo '<br>';
echo '<br>';
echo 'Name: '.$json['instructor'][3]['name'] ;
echo '<br>';
echo 'Course: '.$json['instructor'][3]['course'];
echo '<br>';
echo 'Joined: '.$json['instructor'][3]['joined'];
echo '<br>';
echo '<br>';
?>