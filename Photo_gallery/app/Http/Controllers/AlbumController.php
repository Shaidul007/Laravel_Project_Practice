<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller {
//     public function home()
// {

//     $album  = Album::get();
//     return view( 'Frontend.pages.albums.index',
// [
//     'album' => $album,
// ] );
// }
    public function index() {

        $album = Album::get();

        return view( 'Frontend.pages.albums.index', compact( 'album' ) );
    }
//create album
    public function create() {

        return view( 'Frontend.pages.albums.create' );
    }

//store album
    public function store( Request $request ) {
        //validation
        $this->validate( $request, [
            'name'        => 'required|max:25',
            'description' => 'nullable|string|max:255',
            'cover_image' => 'required|image|max:10000|mimes:jpeg,png,jpg,gif,svg',
        ] );
        // images processing
        if ( $request->hasFile( 'cover_image' ) ) {
            $image           = $request->file( 'cover_image' );
            $fileNameToStore = 'cover_image_' . md5( uniqid() ) . time() . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'assets/images/albums' ), $fileNameToStore );
        }

        //save data
        Album::create( [
            'name'        => $request->name,
            'description' => $request->description,
            'cover_image' => 'assets/images/albums/' . $fileNameToStore,
        ] );
        return redirect()->back()->with( 'success', 'Album created successfully' );
    }

    //show album
    public function show( $id ) {
        $albumA = Album::where( 'id', $id )->first();
        $album  = Album::leftJoin( 'photos', 'albums.id', '=', 'photos.album_id' )
            ->where( 'albums.id', $id )
            ->get();
       return view( 'Frontend.pages.albums.show', compact( 'album', 'albumA' ) );
    }

}
