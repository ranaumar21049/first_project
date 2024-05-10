<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', function () {
//     return view('home');
// });






//Group routes
Route::prefix('page')->group(function(){

//     Route::get('/post', function () {
//         return view('post');
//     })->name('mypost');

//     Route::get('/post/firstpost', function () {
//         return view('firstpost');
//     });

//     Route::get('/about', function () {
//         return view('about');
//     });

Route::get('/', function () {
    return view('index');
})->name('index');

});




//named routes
// Route::get('page/post', function () {
//     return view('post');
// })->name('mypost');


// Route::view('/post','post');


// Route::get('/hello', function () {
//     return view('post');
// });


// Route::get('page/post/firstpost', function () {
//     return view('firstpost');
// });





//option parameter and constraints
// Route::get('/post/{id?}', function (string $id=null) {

//     if($id){
//         return "<h1>Post id: ".$id."</h1>";
//     }
//     else{
//         return "<h1>No id found</h1>";
//     }
    
// })->whereNumber('id');


// Route::get('/post/{id}', function (string $id) {

//     if($id){
//         return "<h1>Post id: ".$id."</h1>";
//     }
//     else{
//         return "<h1>No id found</h1>";
//     }
    
// })->wherein('id',['movie','song','painting']);

//more than one parameter
// Route::get('/post/{id}/comment/{comment}', function (string $id, string $comment ) {

//     if($id){
//         return "<h1>Post id: ".$id."</h1><h2>Comment is :"  .$comment."</h2>";
//     }
//     else{
//         return "<h1>No id found</h1>";
//     }
    
// })->wherein('id',['movie','song','painting'])->whereAlpha('comment');


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/test', function () {
//     return view('test');
// });


//Route::redirect('/about','/test');//redirection


Route::fallback(function(){
    return "<h1>Page not found</h1>";
});


//Data pass route to view;bg

// Route::get('/user', function () {
    
    
    // return view('user',
    // ['user'=>'Ali Hassan',
    // 'city'=>'islamabad']);

    // another method

    // $name='Asad Ali';

    // return view('user')
    // ->with('user',$name)
    // ->with('city','Karachi');

    //another

    // return view('user')->withUser("ali raza")->withCity("Lahore");


    //Array Values


    // $marks = array(  
    //     "Ankit" => array( 
              
    //         // Subject and marks are 
    //         // the key value pair 
    //         "C" => 95, 
    //         "DCO" => 85, 
    //         "FOL" => 74, 
    //     ), 
              
    //     // Ram will act as key 
    //     "Ram" => array( 
              
    //         // Subject and marks are 
    //         // the key value pair 
    //         "C" => 78, 
    //         "DCO" => 98, 
    //         "FOL" => 46, 
    //     ), 
          
    //     // Anoop will act as key 
    //     "Anoop" => array( 
              
    //         // Subject and marks are 
    //         // the key value pair 
    //         "C" => 88, 
    //         "DCO" => 46, 
    //         "FOL" => 99, 
    //     ), 
    // ); 



    // return view('user')->withuser($marks);


// });


function getuser(){
    return $marks = array(  
            "Ankit" => array( 
                  
                // Subject and marks are 
                // the key value pair 
                "C" => 95, 
                "DCO" => 85, 
                "FOL" => 74, 
            ), 
                  
            // Ram will act as key 
            "Ram" => array( 
                  
                // Subject and marks are 
                // the key value pair 
                "C" => 78, 
                "DCO" => 98, 
                "FOL" => 46, 
            ), 
              
            // Anoop will act as key 
            "Anoop" => array( 
                  
                // Subject and marks are 
                // the key value pair 
                "C" => 88, 
                "DCO" => 46, 
                "FOL" => 99, 
            ), 
        ); 
}


// Route::get('/users', function () {

//     $marks=getuser();
//     return view('users')->withuser($marks);


// });

// Route::get('/user/{id}', function (string $id) {
//     $users=getuser();
//     abort(!isset($user[$id]),404);
//     $user=$users[$id];
//     $user_name=$id;
//     return view('user',['id'=>$user,'name'=>$user_name]);
// })->name('view.user');






//Controller Routes



// Route::get('/home',[PageController::class,'showhome'])->name('home');
// Route::get('/about',[PageController::class,'showabout'])->name('about');
// Route::get('/user/{id}',[PageController::class,'showuser'])->name('user');


//group of page controlers

Route::controller(PageController::class)->group(function(){

    Route::get('/homes','showhome')->name('home');
    Route::get('/about','showabout')->name('about');
    Route::get('/user/{id}','showuser')->name('user');
   
});

Route::get('/test',TestingController::class);





