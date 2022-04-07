<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function __construct()
{
$this->middleware('auth');
}
public function index(Request $request)
{
$request->user()->authorizeRoles(['internaute ', 'admin']);
return view('home');
}
/* function qui didié pour les admin
public function someAdminStuff(Request $request)
{
$request->user()->authorizeRoles('admin');
// rmaplacer par une vue selon votre projet
return view(‘some.view’);
}
*/
}
