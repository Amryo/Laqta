<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Home\HomeCard;
use Illuminate\Http\Request;

class HomeCardsController extends Controller
{
    public function edit()
    {
        $card = HomeCard::first();
        
        return view('website.home.card.edit', [
            'card' => $card
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        //Gate::authorize('categories.update');
        // $request->validate(HomeHeader::validateRule($id));
        $request->validate([
            'number' => 'required',
            'paragraph1' => 'required',
            'paragraph2' => 'required',
            'paragraph3' => 'required',
        ]);
        
        
        $header = HomeCard::find($id);
      
    
        // return $request;
        $header->update($request->all());

        return redirect()->route('index');
    }
}
