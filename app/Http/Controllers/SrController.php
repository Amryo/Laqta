<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;


class SrController extends Controller
{
    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Project::class, 'name')
            ->search('proj');

        return view('search', compact('searchResults'));
    }
}