<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with('category')->get();
        $categories = Category::all();
        return view('front.projects.index', [
            'projects' => $projects,
            'categories' => $categories,
            'page_title' => 'Our Creative Projects'
        ]);
    }
    public function show(Project $project)
    {
        $categories = Category::get();

        return view('front.projects.show', [
            'project' => $project,
            'categories' => $categories,
            'page_title' => 'Our Creative Projects'
        ]);
    }

    public function showFeatureProjects($feature)
    {

        Session::put('feature', $feature);

        $value = Session::get('category');
        if ($value) {
            $projects = Project::where('featured', $feature)->where('category_id', $value->id)->get();
            return $projects;
        }
        $projects = Project::where('featured', $feature)->get();
        return $projects;
    }

    public function showCategoryProjects(Category $category)
    {
        Session::put('category', $category);

        $value = Session::get('feature');
        if ($value) {
            return $category->load('projects')->projects()->where('featured', $value)->get();
        }

        return $category->load('projects')->projects()->get();
    }
}