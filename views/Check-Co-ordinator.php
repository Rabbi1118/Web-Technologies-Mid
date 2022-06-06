
<h1>Co-ordinators Details</h1>

<?php
$data=file_get_contents('../models/co-ordinator.json');
$json=json_decode($data,true);
echo 'Name: '.$json['co-ordinator'][0]['name'] ;
echo '<br>';
echo 'Joined: '.$json['co-ordinator'][0]['joined'];
echo '<br>';
echo 'Salary: '.$json['co-ordinator'][0]['salary'];
echo '<br>';
echo '<br>';
echo 'Name: '.$json['co-ordinator'][1]['name'] ;
echo '<br>';
echo 'Joined: '.$json['co-ordinator'][1]['joined'];
echo '<br>';
echo 'Salary: '.$json['co-ordinator'][1]['salary'];
echo '<br>';
echo '<br>';
echo 'Name: '.$json['co-ordinator'][2]['name'] ;
echo '<br>';
echo 'Joined: '.$json['co-ordinator'][2]['joined'];
echo '<br>';
echo 'Salary: '.$json['co-ordinator'][2]['salary'];
echo '<br>';
echo '<br>';
