<?php

namespace App\Http\Controllers;

use App\Models\Song;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->has('s')) {
            $songs = Song::where('title', 'LIKE', "%{$request->input('s')}%")->get();
        } else {
            $songs = Song::all();
        }

        return view("index")
            ->with("songs", $songs->sortByDesc('updated_at'));
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

    public function store(Request $request)
    {
        $start_date = '2002-01-01';
        $end_date = '2020-12-31';
        $rules = [
            'title' => 'required|min:5|max:20',
            'artist_name' => 'required|min:3|max:15',
            'album_name' => 'required',
            'release_date' =>
            "required|date|after_or_equal:$start_date|before_or_equal:$end_date",
            'lyric' => 'required',
        ];

        $messages = [
            'release_date.after_or_equal' => 'The release date must be a date between 2002-2020',
            'release_date.before_or_equal' => 'The release date must be a date between 2002-2020',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $song = new Song;
        $song->title = $request->title;
        $song->artist_name = $request->artist_name;
        $song->album_name = $request->album_name;
        $song->release_date = $request->release_date;
        $song->lyric = nl2br($request->lyric);
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
        $start_date = '2002-01-01';
        $end_date = '2020-12-31';
        $rules = [
            'title' => 'required|min:5|max:20',
            'artist_name' => 'required|min:3|max:15',
            'album_name' => 'required',
            'release_date' =>
            "required|date|after_or_equal:$start_date|before_or_equal:$end_date",
            'lyric' => 'required',
        ];

        $messages = [
            'release_date.after_or_equal' => 'The release date must be a date between 2002-2020',
            'release_date.before_or_equal' => 'The release date must be a date between 2002-2020',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $song->title = $request->title;
        $song->artist_name = $request->artist_name;
        $song->album_name = $request->album_name;
        $song->release_date = $request->release_date;
        $song->lyric = nl2br($request->lyric);
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
        $song->delete();
        return redirect("/");
    }
}
