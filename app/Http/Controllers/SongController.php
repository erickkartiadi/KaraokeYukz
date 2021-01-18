<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view("index")
            ->with("songs", $songs);
    }

    public function addSong()
    {
        return view('addSong');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // TODO add validation
    public function store(Request $request)
    {
        $song = new Song;
        $song->title = $request->title;
        $song->artist_name = $request->artist_name;
        $song->album_name = $request->album_name;
        $song->release_date = $request->release_date;
        $song->lyric = $request->lyric;
        $song->save();
        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view("showSong")->with("song", $song);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view("editSong")->with("song", $song);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $song->title = $request->title;
        $song->artist_name = $request->artist_name;
        $song->album_name = $request->album_name;
        $song->release_date = $request->release_date;
        $song->lyric = $request->lyric;
        $song->update();
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
    }
}
