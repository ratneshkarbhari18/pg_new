<?php

namespace App\Controllers;

class PageLoader extends BaseController
{
	public function home()
	{
		$data = array("title"=>"Tagline");
		echo view("templates/header",$data);
		echo view('pages/home',$data);
		echo view("templates/footer",$data);
	}
	public function about()
	{
		$data = array("title"=>"About Us");
		echo view("templates/header",$data);
		echo view('pages/about',$data);
		echo view("templates/footer",$data);
	}
	public function all_projects()
	{
		$data = array("title"=>"All Projects");
		echo view("templates/header",$data);
		echo view('pages/all_projects',$data);
		echo view("templates/footer",$data);
	}
	public function precious_harmony()
	{
		$data = array("title"=>"Precious Harmony");
		echo view("templates/header",$data);
		echo view('pages/precious_harmony',$data);
		echo view("templates/footer",$data);
	}
	public function precious_emerald()
	{
		$data = array("title"=>"Precious Emerald");
		echo view("templates/header",$data);
		echo view('pages/precious_emerald',$data);
		echo view("templates/footer",$data);
	}
	public function precious_heritage(){
		$data = array("title"=>"Precious Heritage");
		echo view("templates/header",$data);
		echo view("pages/precious_heritage",$data);
		echo view("templates/footer",$data);
	}
	public function vj_pinkcity(){
		$data = array("title"=>"Vishwajeet Pinkcity");
		echo view("templates/header",$data);
		echo view("pages/vj_pinkcity",$data);
		echo view("templates/footer",$data);
	}
	public function vj_precious(){
		$data = array("title"=>"Vishwajeet Precious");
		echo view("templates/header",$data);
		echo view("pages/vj_precious",$data);
		echo view("templates/footer",$data);
	}
	public function investor_corner(){
		$data = array("title"=>"Investors Corner");
		echo view("templates/header",$data);
		echo view('pages/investors_corner',$data);
		echo view("templates/footer",$data);
	}

}
