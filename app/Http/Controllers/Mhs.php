<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Mhs_model;

use Illuminate\Http\Request;

class Mhs extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['mhs'] = Mhs_model::all();
		return view('mhs/mhs', $data);
	}

	public function mhs_aktif()
	{
		$data['mhs_aktif'] = Mhs_model::where('status_aktif', 1)->get();
		return view('mhs/mhs_aktif', $data);
	}

	public function mhs_memenuhi_syarat()
	{
		$data['mhs_memenuhi_syarat'] = Mhs_model::where('status_kkt_file', 1)->get();
		return view('mhs/mhs_memenuhi_syarat', $data);
	}

	public function mhs_tidak_memenuhi_syarat()
	{
		$data['mhs_tidak_memenuhi_syarat'] = Mhs_model::where('status_kkt_file', 2)->get();
		return view('mhs/mhs_tidak_memenuhi_syarat', $data);
	}

	public function verifikasi_data_mhs()
	{
		$data['verifikasi_data_mhs'] = Mhs_model::where('status_kkt_file', 0)->get();
		return view('mhs/verifikasi_data_mhs', $data);
	}

	public function upload_data_mhs()
	{
		$data['upload_data_mhs'] = Mhs_model::where('status_kkt_file', 0)->get();
		return view('mhs/upload_data_mhs', $data);
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
