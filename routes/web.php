<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Mail\OrderMail;
use App\Mail\OrderShipped;
use App\Notifications\OrderNotification;
use App\Notifications\SMSNotification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/mail', function (){
//      $user = User::find(6);
//      return $user;
//      Mail::to($user)->send(new OrderMail());
// });

//Route::get('/mail',function(){
    // $user = User::find(1);
    // return $user;
    // $users = ["Dog","Cat","Rabbit","Bird"];
    // Mail::to($user)->send(new OrderShipped());
//     return new OrderShipped();
// });

Route::get('/mail',function(){
    $user = User::all();
    Notification::send($user,new OrderNotification());
});

Route::get('/sms',function(){
    Notification::route('nexmo','+959787158447')->notify(new SMSNotification());
});

Route::get('/test',function(){
    $data = ["Mg Mg","Zaw Zaw","Ko La"];
    // $collection = collect($data);
    // $result = $collection->map(function($value){
    //     return strtoupper($value);
    // });
    // return $result;

    // $result = collect($data)->map(function($value){
    //     return strtoupper($value);
    // });
    // return $result;

    // $data = [30,40,50,60];
    // $result = collect($data)->reject(function($value){
    //     return $value<50;
    // });
    // return $result;

    //$data = [10,20,30,40,50];
    // $result = collect($data)->contains(function($value,$key){
    //     return $value ==20;
    // });
    // return $result;
    // collect($data)->each(function($value,$key){
    //     echo $value;
    // });

    // $result = collect([10,20,30,40,50])->filter(function($value,$key){
    //     return $value<40;
    // });
    // return $result;

    // storage::disk("public")->put("example.txt","I am a developer.");
    // $result = Storage::get("example.txt");
    // echo $result;

    // Storage::delete("example.txt");
    // echo storage_path();

    // session(["age"=>21]);
    // session()->forget("age");
    // $result = session("age",20);
    // echo $result;
    Session::put("name","Mg Mg");
    $result = Session::get("name");
    return $result;

});