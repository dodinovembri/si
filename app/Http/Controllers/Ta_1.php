<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ta_1_model;
use App\Models\Mhs_topik_ta;

use Illuminate\Http\Request;

class Ta_1 extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function form_pengajuan_topik()
	{
		$data['form_pengajuan_topik'] = Mhs_topik_ta::all();
		return view('sempro/form_pengajuan_topik', $data);
	}

	public function topik_ta()
	{
		$data['topik_ta'] = Ta_1_model::all();
		return view('sempro/topik_ta', $data);
	}

	public function form_perubahan_topik()
	{
		$data['form_perubahan_topik'] = Ta_1_model::all();
		return view('sempro/form_perubahan_topik', $data);
	}

	public function status_sempro()
	{
		$data['status_sempro'] = Ta_1_model::all();
		return view('sempro/status_sempro', $data);
	}

	public function jadwal_sempro()
	{
		$data['jadwal_sempro'] = Ta_1_model::all();
		return view('sempro/jadwal_sempro', $data);
	}

	public function verifikasi_seminar()
	{
		$data['verifikasi_seminar'] = Ta_1_model::all();
		return view('sempro/verifikasi_seminar', $data);
	}

	public function perpanjang_sempro()
	{
		$data['perpanjang_sempro'] = Ta_1_model::all();
		return view('sempro/perpanjang_sempro', $data);
	}

	public function pendafataran_sempro()
	{
		$data['pendafataran_sempro'] = Ta_1_model::all();
		return view('sempro/pendafataran_sempro', $data);
	}

	public function penguji_sempro()
	{
		$data['penguji_sempro'] = Ta_1_model::all();
		return view('sempro/penguji_sempro', $data);
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
