<?php

if (file_exists('C:\PHPprogs\prac7\database\users.csv'))
    $user = str_getcsv(str_replace("\n", ",", file_get_contents('C:\Users\Katalian\Practice7\database\users.csv')));

for ($i = 0; $i < count($user); $i += 4) {
    $users[($i)/3] = [
        'name' => $user[$i],
        'email' => $user[$i+1],
        'gender' => $user[$i+2],
        'filePath' => $user[$i+3]
    ];
}

for($i = 0; $i < count($users); $i++){
    echo $user[$i]."<br />";
    echo " <td> ".$users[$i]['name']." </td> ";
    echo " <td> ".$users[$i]['email']." </td> ";
    echo " <td> ".$users[$i]['gender']." </td> ";
    $img = pathinfo($users[$i]['filePath']);
    if ($users[$i]['filePath'] == "")
        $myFile['image'] = "image.jpg";
    echo "<td>"."<img src='"."public/images/".$img['image']."' alt='' width='55' height='55'"."</td>";
}