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

use Illuminate\Http\Request;
use App\admins;
use App\contact_detail;
use App\Http\Controllers\fromfacebook;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

use App\servicess;

Route::get('getposts', function () {
	$page_id = "110709393678809";
	$tokenmanager  =  contact_detail::first();
	$access_token =   $tokenmanager->facebookapi;

	if (isset($_GET['next'])) {

		//	echo('I am here okay thanks');
		$url = $_GET['next'];

		echo $url;
		die();
	} else {


		$url = "https://graph.facebook.com/v19.0/$page_id/feed?access_token=$access_token&fields=full_picture,message,created_time";
	}


	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);


	if (curl_errno($ch)) {
		echo 'Error: ' . curl_error($ch);
	}

	curl_close($ch);
	$datas =  json_decode($response,  true);


	foreach ($datas['data'] as $output) {
		// The Facebook timestamp
		$facebookTimestamp = $output['created_time'];

		// Convert the Facebook timestamp to Carbon instance
		$carbonDate = Carbon::parse($facebookTimestamp);

		// Get the Laravel created_at formatted timestamp
		$laravelCreatedAt = $carbonDate->toDateTimeString();
		//check with id before inserting okay!
		$check  = servicess::where('facebookid', $output['id'])->count();
		if ($check  ==  0) {
			$save  =  new servicess();
			$save->body  = $output['message'];
			if (isset($output['full_picture'])) {
				$save->image  = $output['full_picture'];
			} else {
				$save->image  =  '  ';
			}
			$save->facebookid  = $output['id'];
			$save->created_at  = $laravelCreatedAt;

			$string = $output['message'];

			// Use str_word_count to split the string into an array of words
			$words_array = str_word_count($string, 1);

			// Extract the first 6 words
			$first_six_words = array_slice($words_array, 0, 6);

			// Join the words back into a string
			$result = implode(' ', $first_six_words);

			$save->title  =  $result . '...';

			$save->publish  = 'yes';

			$save->save();
		}
		print_r($output);
		echo  "<br/> <br/><br/>";
	}




	echo  "<br/> <br/><br/>";
	if (isset($datas['paging']['next'])) {
		print_r("<h5><a   href='/getposts?next=" . $datas['paging']['next'] . "' > Next </a></h5>");
	}
});




/* Route::get('/',  function () {
	return  view('home2');
}); */

Route::get('/',  function () {
	return  view('home.index');
	
});



Route::post('/send_volunteer', function (Request   $request) {

	//send mail here 



	$mailbody = "From  : \n\n " . $request->name . "\n\n" . $request->phone  . "\n\n"  .  $request->email .  "\n\n"  .   $request->message   . "\n\n \n\n";

	$from = "From:" . $request->email;


	$contact  = contact_detail::first();

	$to  = $contact->email;

	mail($to, "WholePlanet (New Volunteer )", $mailbody, $from);
?>

	<script>
		setTimeout(function() {
			alert('Message Delivered')
		}, 3000);
	</script>



<?php


	return  view('volunteer');
});


Route::get('/volunteer',  function () {

	return  view('volunteer');
});



Route::get('/donate',  function () {

	return  view('donate');
});



Route::get('event', function () {


	return  view('news');
});




Route::get('/email',  function () {
?>
	<script>
		window.location = 'https://emailmg.ipage.com';
	</script>
<?php

});



Route::get('getpostnow',  [fromfacebook::class,  'upload_post']);

Route::post('/logins',  function (Request $request) {

	$checking = 	admins::where('username', $request->username)->where('password',   $request->password)->first();

	if (isset($checking->id)) {

		//set the session  ok		
		$request->session()->put('admin',  $request->username);

		return redirect('/admins');
	} else {

		$error = 'wrong password or email address';
		return redirect('/admin_signin')->with('error', $error);
	}
});



Route::get('page/{id}/{name}',  function ($id, $name) {


	$all = array('id' => $id, 'name' => $name);
	return  view('about')->with($all);
});

Route::get('newsletter/{id}/{name}',  function ($id, $name) {


	$all = array('id' => $id, 'name' => $name);
	return  view('services')->with($all);
});




Route::get('/gallery_view',  function () {
	return  view('gallery');
});


Route::get('/management',  function () {
	return  view('management');
});




Route::get('/board_members',  function () {
	return  view('board');
});






Route::get('/contact-us',  function () {
	return  view('contact-us');
});












Route::get('/admins',  function () {

	return  view('admin_folder/home');
})->middleware('article');







Route::resources([
	'newsletters' => 'service',
	'post' => 'post',
	'pages' => 'pages',
	'slidder' => 'slidder',
	'users' => 'users',
	'contact' => 'contact',
	'logo' => 'logo',
	'menu' => 'menu',
	'managements' => 'managements',
	'gallery' => 'galleries',
	'board' => 'boards',





]);




Route::get('/admin_signin', function () {

	return view('admin_folder/login');
});


Route::get('/logout', function (Request $request) {

	// logout
	$request->session()->forget('admin');


	return view('admin_folder/login');
});


Route::get('/admins',  function () {

	return  view('admin_folder/home');
})->middleware('article');



Route::post('/large_file',  function (Request $request) {
	//upload the file here period okay  


	$image = $request->file('others');
	$getsize =  $image->getSize();
	$original_name = $image->getClientOriginalName();
	$new_name = rand() . '.' . $image->getClientOriginalExtension();
	$real_path  =   $image->getRealPath();
	$image->move(public_path('uploads'), $new_name);




	if ($image->getClientOriginalExtension() ==  'mp4'  or $image->getClientOriginalExtension() ==  'mp3') {


		return response()->json([
			'message'   =>    '<video  src="/uploads/' . $new_name . '"   style="width: 100%"    controls   />',
			'file_name'   => $original_name

		]);
	} else {

		return response()->json([
			'message'   => '<a  class="btn btn-primary"    href="/uploads/' . $new_name . '"  target="_top"   > ' . $original_name . ' </a>',

			'file_name'   => $original_name

		]);
	}
})->middleware('article');
