<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use DateTime;

class NewController extends Controller
{
	public function index(){
		$data = News:: select()->get()->toArray();
		return view('index',['news' => $data]);
	}
	public function detail($id){
		$data = News::find($id);
		return view('detail',['data' => $data]);
	} 

	public function list(){
		$data = News:: select()->get()->toArray();
		// print_r($data);
		return view('list',['news' => $data]);
	} 
	public function add(){
		return view('add');
	}
	public function create(Request $request){
		$news             = new News;
		$news->created_by = $request->txtFullName;
		$news->titles     = $request->txtNameYoutube;
		$news->links      = $request->txtLink;
		$news->emails     = $request->txtEmail;
		$news->contents   = $request->txtContent;
		$news->created_at = new DateTime();
		$news->save();
		return redirect()->route('list');
	} 

	public function edit($id){
		$data = News:: find($id)->toArray();
		return view('edit',['data' =>$data]);
	} 
	public function update(Request $request, $id){
		$news		= News::find($id);
		$news->created_by = $request->txtFullName;
		$news->titles     = $request->txtNameYoutube;
		$news->links      = $request->txtLink;
		$news->emails     = $request->txtEmail;
		$news->contents   = $request->txtContent;
		$news->updated_at = new DateTime();
		$news->save();
		return redirect()->route('list');
	} 
	public function delete($id){
		$news = News::find($id);
		$news->delete();
		return redirect()->route('list');
	} 
}
