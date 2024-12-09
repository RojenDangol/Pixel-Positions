<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // Job for this tag

        return view('results',['jobs'=>$tag->jobs]);
    }
}
