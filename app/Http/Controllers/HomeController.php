<?php

namespace App\Http\Controllers;
use DB;
use Request;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		return view('home');
	}
	public function auction() {
		// $users = DB::table('users')->get();
		// $shishir = "tr";

		$data = DB::table('auction')->get();

		return view('auction', compact('data'));
	}

	public function edit() {
		$users = DB::table('myself')->where('id', $_GET['id'])->first();
		dd($users);

		return view('edit', compact('users'));
	}

	public function ssstore(Request $request) {

		// dd($req->all());
		// INSERT INTO 'auction' () VALUES (NULL, 'bmw', 'az', '300', '10000000');
		$insert = array(
			'image' => $_REQUEST['Image'],
			'brand' => $_REQUEST['Brand'],
			'model' => $_REQUEST['Model'],
			'cc' => $_REQUEST['CC'],
			'price' => $_REQUEST['Price'],

		);
		DB::table('auction')
			->insert($insert);

		return redirect()->back();
	}

	public function uploadGalery(Request $request) {
		$this->validate($request, [
			'file' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
		]);
		if ($request->hasFile('image')) {
			$image = $request->file('image');
			$name = time() . '.' .
			$image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$image->move($destinationPath, $name);
			$this->save();
			return back()->with('success', 'Image Upload successfully');
		}

	}

	// public function sstore(Request $request) {

	// 	dd($_REQUEST);
	// 	$name = $request->input('name');

	// 	return view('auction', compact('name'));
	// }
}
