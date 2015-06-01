<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use View,App\Guest,Input,Session,Redirect;


class GuestController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the guests
		$guests = Guest::all();

		// load the view and pass the guests
		return View::make('guests.index')
			->with('guests', $guests);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/guests/create.blade.php)
		return View::make('guests.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$guest = new Guest;
			$guest->name     = Input::get('name');
			$guest->address  = Input::get('address');
			$guest->phone 	= Input::get('phone');
			$guest->note 	= Input::get('note');
			$guest->save();

			// redirect
			Session::flash('message', 'Berhasil menambahkan catatan');
			return Redirect::to('guest');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// mendapatkan guest
		$guest = Guest::find($id);

		// menampilkan $guest
		return View::make('guest.show')
			->with('guest', $guest);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// mendapatkan guest
		$guest = Guest::find($id);

		// menampilkan $guest
		return View::make('guest.edit')
			->with('guest', $guest);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Menghapus
		$guest = Guest::find($id);
		$guest->delete();

		// redirect
		Session::flash('message', 'Berhasil menghapus guest!');
		return Redirect::to('guest');
	}

}
