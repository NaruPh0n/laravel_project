<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function() {
 	return '<h1>This is home page</h1>' ;
});

Route::get('/blog/{page_id}', function($page_id) {
     return "<h1>This is blog page : $page_id </h1>" ;
});
Route::get('/product/{a}/{b}/{c}', function($a, $b, $c) {
 	return "<h1>This is product page </h1><div>$a , $b, $c</div>" ;
});
Route::get('/category/{a?}', function($a = "mobile") {
 	return "<h1>This is category page : $a </h1>" ;
});


Route::get('/greeting', function () {
	$data = [
'name'      => 'James' ,
'last_name' => 'Mars'
];
return view('greeting', $data);
});

Route::get('/hello', function () {	
return view('hello');
});
Route::get('/combine/{id}', function ($id) {
	$data = [
'id' => $id
];
return view('combine', $data);
});

Route::get('/quiz3', function () {	
return view('quiz3');
});








