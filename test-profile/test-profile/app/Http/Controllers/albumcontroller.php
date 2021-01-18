<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;

use Illuminate\Http\Request;
use Storage;
use views;

class albumcontroller extends Controller
{
    //
    function getfile(){
$json=[];
$mydata=[];
$json = Storage::disk('local')->get('landscapes.json');
$mydata = json_decode($json, true);


$name = $mydata['name'];
$phone= $mydata['phone'];
$email = $mydata['email'];
$bio=$mydata['bio'];
$profile_picture= $mydata['profile_picture'];
$album= $mydata['album'];

foreach ($album as $photos){
$id=$photos['id'];
$album_title=$photos['title'];
$album_description=$photos['description'];
$album_image=$photos['img'];
$date=$photos['date'];
$album_featured=$photos['featured'];
}

	return view('profile_page')->withData($mydata,$photos);
	}
}