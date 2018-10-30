<?php

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
	\Log::info('LOGA', [public_path(),]);
    return view('church44');
});


Route::get('/church1', function () {
	\Log::info('LOGA', [public_path(),]);
    return view('church_1');
});


Route::get('/church2', function () {
	\Log::info('LOGA', [public_path(),]);
    return view('churchwebsite');
});



Route::get('/about', function () {
	\Log::info('LOGA', ['aboutroute',]);
    return view('church44assets/aboutpage');
});






// Route::get('/testPerson', function () {
// 	\Log::info('nRoute testPerson', []);

// 	$matt = new \App\Libs\Test\Employee();
// 	$matt->talk('Hello, how are you?');
// 	$matt->work();



//     return 'done';
// });





// Route::get('Hello', function () {
// 	\Log::info('LOGA', [url('/images/v-transparent-6.png')]);
//     return view('goodbye');
// });




// Route::get('test', function () {
//     return 'test data 123';
// });


// Route::get('matt', function () {
//     return 'test data 987';
// });




// Route::get('new/{code}/{fname}', function (Request $request, $code, $fname) {
// 	if($code != env('MATT_CODE')){
// 		return 'bad!';
// 	}

// 	$inputData =  $request::all(); // \Illuminate\Support\Facades\Input::all();
// 	\Log::info('LOGA',[$inputData]);
// 	$userArray = ['Ben', 'Matt', 'Joe', 'jane'];

//     return view('grouping.numberone', ['users'=> $userArray, 'fullname'=> $fname   ]);
// });



// Route::get('new/{fname}/{lname}', function (Request $request, $fname, $lname) {
// 	$inputData =  $request::all(); // \Illuminate\Support\Facades\Input::all();
// 	\Log::info('LOGA',[$inputData]);
// 	$userArray = ['Ben', 'Matt', 'Joe', 'jane'];

//     return view('grouping.numberone', ['users'=> $userArray, 'fullname'=> $fname . ' ' . $lname  ]);
// });

// Route::get('sumIt/{numberA}/{numberB}', 'MattController@sum');
// Route::get('mmm', 'MattController@myThing');












/* function (Request $request, $fname, $lname) {
	$inputData =  $request::all(); // \Illuminate\Support\Facades\Input::all();
	\Log::info('LOGA',[$inputData]);
	$userArray = ['Ben', 'Matt', 'Joe', 'jane'];

    return view('grouping.numberone', ['users'=> $userArray, 'fullname'=> $fname . ' ' . $lname  ]);*/