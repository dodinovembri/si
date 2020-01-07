<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Bidang_ilmu;
use App\Models\Jurusan;
use App\Models\Angkatan;
use App\Models\User_group;
use App\User;

use Illuminate\Http\Request;

class System extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['user'] = User::all();
		return view('user/index', $data);
	}

	public function add_new_user()
	{
		// $data['user'] = User::all();
		return view('user/add_new_user');
	}
		
	public function bidang_ilmu()
	{
		$data['bidang_ilmu'] = Bidang_ilmu::all();
		return view('bidang_ilmu/index', $data);
	}

	public function jurusan()
	{
		$data['jurusan'] = Jurusan::all();
		return view('jurusan/index', $data);
	}

	public function angkatan()
	{
		$data['angkatan'] = Angkatan::all();
		return view('angkatan/index', $data);
	}		

	public function user_group()
	{
		$data['user_group'] = User_group::all();
		return view('user/user_group', $data);
	}

	public function profile()
	{
		// $data['profile'] = User_group::all();
		return view('user/profile');
	}		

	public function add_new_bidang_ilmu()
	{
		// $data['profile'] = User_group::all();
		return view('user/add_new_bidang_ilmu');
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
