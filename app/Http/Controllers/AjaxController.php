<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class AjaxController extends Controller
{
	public function getDataIndex($page){
		$phantubatdau = ($page - 1)*3;
		$data = News::select()->skip($phantubatdau)->take(3)->get()->toArray();
		foreach ($data as $item) {
			echo '<div>
					<h2>
						<a href="#">'.$item["titles"].'</a>
					</h2>
					<p class="lead">
						Đăng bởi : <a href="index.php">'.$item["created_by"].'</a>
					</p>
					<p><span class="glyphicon glyphicon-time"></span>'.$item["created_at"].'</p>
					<hr>
					<div class="video-container">
						<iframe width="100%" height="400" src="'.$item["links"].'" frameborder="0" allowfullscreen></iframe>
					</div>
					<hr>
					<p>'.$item["contents"].'</p>
					<a class="btn btn-primary" href="'.route('detail',['id' => $item["id"]]).'">Xem Chi Tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
					<hr>
				</div>';
		}
	}
}
// {{route('detail',['id' => $item["id"]]) }}
