<?php
$people = '{"data":[{"first_name":"jake","last_name":"bennett","age":31,"email":"jake@bennett.com","secret":"VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM="},{"first_name":"jordon","last_name":"brill","age":85,"email": "jordon@brill.com","secret":"YWxidXF1ZXJxdWUuIHNub3JrZWwu"}]}';

$listOfPeople = json_decode($people);
$persons = $listOfPeople->data;

$peopleEmails = "";
foreach ($persons as $person) {
    $peopleEmails = $peopleEmails . $person->email . ",";
};

$peopleEmails = substr($peopleEmails, 0, -1);
print_r($peopleEmails);
