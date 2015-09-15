<?php namespace Jai\Contact\Http\Controllers;
/**
 * 
 * @author kora jai <kora.jayaram@gmail>
 */


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use PRedis;
use Redis;

class ContactController extends Controller
{

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

	

		$user = PRedis::set('test','444');
		$user = PRedis::get('test');
var_dump($user);exit;
		return view('contact::contact');
	}
}