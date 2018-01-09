<?php

namespace App\Http\Controllers\Frontend;

use App\AdminModel\Archive;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleUrlController extends Controller
{
    //
    public function articleUrls()
    {
        $urls=Archive::all();
        $links='';
        foreach ($urls as $url)
        {
            $links.='http://www.21yinpin.com/'.$url->arctype->real_path.'/'.$url->id.'.shtml#';
        }
        echo $links;

    }
}
