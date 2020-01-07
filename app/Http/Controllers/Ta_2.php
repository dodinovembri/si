
	public function data_prasyarat_ta()
	{
		//
	}<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Ta_2 extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['dosen'] = Dosen_model::all();
		return view('dosen/index', $data);
	}

	public function data_prasyarat_ta()
	{
		$data['dosen'] = Dosen_model::all();
		return view('dosen/index', $data);
	}

	public function status_skripsi()
	{
		$data['dosen'] = Dosen_model::all();
		return view('dosen/index', $data);
	}

	public function jadwal_skripsi()
	{
		$data['dosen'] = Dosen_model::all();
		return view('dosen/index', $data);
	}

	public function verifikasi_skripsi()
	{
		$data['dosen'] = Dosen_model::all();
		return view('dosen/index', $data);
	}

	public function perpanjang_skripsi()
	{
		$data['dosen'] = Dosen_model::all();
		return view('dosen/index', $data);
	}

	public function pendaftaran_skripsi()
	{
		$data['dosen'] = Dosen_model::all();
		return view('dosen/index', $data);
	}
	
	public function jadwal_penguji()
	{
		$data['dosen'] = Dosen_model::all();
		return view('dosen/index', $data);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
		//
	}

}
