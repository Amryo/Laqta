<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Project extends Model implements Searchable
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'secondary', 'description', 'image', 'status', 'year', 'category_id', 'featured'
    ];

    public static function booted()
    {
        static::creating(function (Project $project) {
            $project->slug = Str::slug($project->name);
            // $project->number = 1;
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public static function validateRule($id = null)
    {
        return [

            'name' => 'required|max:255',
            'description' => 'nullable',
            'image' => 'nullable',
            'secondary' => 'required',
            'status' => 'required|in:Active,Draft',
            'year' => 'required',
            'category_id' => 'required',

        ];
    }

    public function getFeatAttribute()
    {
        if ($this->featured == 1) {
            return 'Individual';
        }
        return 'Government';
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('fproject.show', $this);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}