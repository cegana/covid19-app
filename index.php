<?php


echo phpinfo();

exit;


//$mongo = new MongoDB\Driver\Manager('mongodb+srv://omnistack:omnistack@omnistack-n4jj0.mongodb.net/mercadolivre?retryWrites=true&w=majority');
$mongo = new MongoDB\Driver\Manager('mongodb+srv://covid19app:sY4gsk!MVzXH@covid19cluster-0rnw7.mongodb.net/test?retryWrites=true&w=majority');


$filter      = [];
$options = [];

$query = new MongoDB\Driver\Query($filter, $options);
$rows   = $mongo->executeQuery('covid19app.users', $query); 

echo "<pre>";
//print_r($rows);

foreach($rows as $r){
    print_r($r);
}