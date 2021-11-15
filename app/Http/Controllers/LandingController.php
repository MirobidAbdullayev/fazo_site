<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Carausels;
use App\Models\About;
use App\Models\Servic;
use App\Models\AboutServic;
use App\Models\Statistic;
use App\Models\Team;
use App\Models\Blog;
use App\Models\Contact;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carausels = Carausels::whereNull('deleted_at')->get();
        $abouts    = About::whereNull('deleted_at')->get();
        $services  = Servic::whereNull('deleted_at')->get();
        $aboutServices = AboutServic::whereNull('deleted_at')->get();
        $statistics    = Statistic::whereNull('deleted_at')->get();
        $teams         = Team::whereNull('deleted_at')->get();
        $blogs         = Blog::whereNull('deleted_at')->get();
        $contacts      = Contact::whereNull('deleted_at')->get(); 
 
        return view('welcome')->with([
            'carausels' => $carausels,
            'abouts'    => $abouts,
            'services'  => $services,
            'aboutServices' => $aboutServices,
            'statistics'    => $statistics,
            'teams'         => $teams,
            'blogs'         => $blogs,
            'contacts'      => $contacts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ContactMessage::create($request->all());

        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
