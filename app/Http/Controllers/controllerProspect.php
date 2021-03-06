<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prospect;

class controllerProspect extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$prospects = Prospect::all();
        $prospects = Prospect::where('fid', auth()->id())
                    ->orderBy ('lastname', 'asc')
                    ->take(50)
                    ->get();
        return view('prospect.listProspect', ['prospects' => $prospects]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prospect.creationProspect');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $prospect = Prospect::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prospect= Prospect::find($id);
        return view('prospect.detailProspect')->with('prospect', $prospect);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prospect= Prospect::find($id);
        return view('prospect.editProspect')->with('prospect', $prospect);
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
        $data = $request->all();
        Prospect::find($id)->update($data);
        return redirect()->route('prospects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prospect::find($id)->delete();
        return redirect()->route('prospect.index');
    }
}
