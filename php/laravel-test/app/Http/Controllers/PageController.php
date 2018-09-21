<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Posts;

class PageController extends Controller
{
    protected $data = [];

    public function index()
    {
        $this->data['todays_date'] = Carbon::now();
        $this->data['posts'] = Post::all();

        return view('site/index', $this->data);
    }
}
