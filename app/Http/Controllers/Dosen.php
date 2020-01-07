<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Dosen_model;
use App\Models\Mhs_topik_ta;

use Illuminate\Http\Request;

class Dosen extends Controller {

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

	public function topik_ta_mhs()
	{
		$data['topik_ta_mhs'] = Mhs_topik_ta::all();
		return view('dosen/topik_ta_mhs', $data);
	}	

	public function set_pembimbing_skripsi()
	{
		$data['set_pembimbing_skripsi'] = Mhs_topik_ta::where('id_status_agree_topik', 1)->get();
		return view('dosen/set_pembimbing_skripsi', $data);
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
