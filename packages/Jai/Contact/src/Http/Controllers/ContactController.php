<?php namespace Jai\Contact\Http\Controllers;
/**
 * 
 * @author kora jai <kora.jayaram@gmail>
 */


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use PRedis;
use Redis;
use Jai\Contact\Http\Models\User;
use Jai\Contact\Http\Models\Comment;
class ContactController extends Controller
{

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	$comment = Comment::all();
		dd($comment);
	$user = User::first();
	dd($user->x);
		return view('contact::contact');
	}
}