<?php

namespace App\Http\Controllers;

use App\Models\Album;

class MainController extends Controller {
    public function home() {
        $album = Album::orderBy( 'id', 'desc' )-> get();
        return view( 'Frontend.pages.albums.index',
            [
                'album' => $album,
            ] );
    }
}
