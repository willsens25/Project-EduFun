<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        return view('writers', [
            'title' => 'Our Writers',
            'writers' => Writer::all()
        ]);
    }

    public function show(Writer $writer)
    {
        return view('writer_detail', [
            'title' => 'Posts by ' . $writer->name,
            'writer' => $writer,
            'posts' => $writer->posts->load(['writer', 'category'])
        ]);
    }
}