<?php

namespace App\Controllers;

use App\Models\newsModel;
use App\Models\pengumumanModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->newsModel = new newsModel();
	}
	public function index()
	{
		if (!(session()->username)) {
			return redirect()->to(base_url('/login'));
		}
		// $news = $this->newsModel->findAll();
		// $pengumuman = $this->pengumumanModel->findAll();
		$news = $this->newsModel->where('visible_news', "1")->orderBy('date_news', 'desc')->findAll();
		$data = [
			'news' => $news
		];
		return view('home/index', $data);
	}

	public function login()
	{
		return view('auth/login');
	}

	public function feedback()
	{
		return view('home/feedback');
	}
	//--------------------------------------------------------------------

}
