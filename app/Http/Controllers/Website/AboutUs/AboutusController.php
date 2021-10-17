<?php

namespace App\Http\Controllers\Website\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\About\Allabout;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abouttext = new Allabout();
        return view('admins.Aboutus.about.create', [
            'abouttext' => $abouttext,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string'
        ]);

        $about = Allabout::create($request->all());
        return redirect()->route('aboutus.edit', $about->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouttext = Allabout::findOrFail($id);
        return view('admins.Aboutus.about.edit', [
            'abouttext' => $abouttext
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
        $about = Allabout::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string'
        ]);
        $about->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
