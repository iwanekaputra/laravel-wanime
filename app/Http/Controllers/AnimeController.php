<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AnimeController extends Controller
{
    
    public function index() {
        $allData = Http::get('https://kusonime-scrapper.glitch.me/api/page/1')->json();
        $rekomendasi = Http::get('https://kusonime-scrapper.glitch.me/api/rekomendasi')->json();    
        $seasons = Http::get('https://kusonime-scrapper.glitch.me/api/seasons')->json(); 
        $genres = Http::get('https://kusonime-scrapper.glitch.me/api/genres')->json();

        return view('landingpage.index', compact('allData', 'rekomendasi', 'seasons', 'genres'));
    }

    public function show($slug) {    
        $data = Http::get('https://kusonime-scrapper.glitch.me/api/anime/' . $slug)->json();
        return view('landingpage.show', compact('data'));
    }

    public function genres() {
        $genres = Http::get('https://kusonime-scrapper.glitch.me/api/genres')->json();
        return view('landingpage.genres', compact('genres'));
    }

    public function genre($genre) {
        $genres = Http::get('https://kusonime-scrapper.glitch.me/api/genres/'. $genre .'/1')->json();

        return view('landingpage.posts-by-genres', compact('genres'), [
            'genre' => $genre
        ]);
    }

    public function season($season) {
        $seasons = Http::get('https://kusonime-scrapper.glitch.me/api/seasons/'. $season .'/1')->json();

        return view('landingpage.posts-by-seasons', compact('seasons'), [
            'title' => $season
        ]);
    }

    public function seasons() {
        $seasons = Http::get('https://kusonime-scrapper.glitch.me/api/seasons')->json();
        return view('landingpage.seasons', compact('seasons'));
    }

    public function search () {
        $posts = Http::get('https://kusonime-scrapper.glitch.me/api/cari/' . request('search'))->json();
        $seasons = Http::get('https://kusonime-scrapper.glitch.me/api/seasons')->json();

        return view('landingpage.posts-by-search', compact('posts', 'seasons'));
    }


}
