<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;



class Contact extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'message'
    ];


    public function getSearchResult(): Searchable
    {
        $url = route('fproject.show', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}