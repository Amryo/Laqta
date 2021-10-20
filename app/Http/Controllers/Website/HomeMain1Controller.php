<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Home\HomeMian1;
use App\View\Components\HomeMain1;
use Illuminate\Http\Request;

class HomeMain1Controller extends Controller
{
    public function customEdit()
    {
        $card = HomeMian1::get();
        
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
        

        //Gate::authorize('categories.update');
    //     // $request->validate(HomeHeader::validateRule($id));
        $request->validate([
            'description' => 'required'
        ]);
        
        $header = HomeMian1::find($id);
      
    
    //     // return $request;
        $header->update($request->all());

        return redirect()->route('index');
    }

    public function show($id)
    {
        $desc = HomeMian1::where('type', $id)->first();
        return $desc;
    }
}

