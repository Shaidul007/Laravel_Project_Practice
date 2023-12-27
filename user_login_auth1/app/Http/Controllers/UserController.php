<?php

namespace App\Http\Controllers;

use App\Helper\JWTHelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function userRegistration( Request $request ) {
        try {
            User::create( $request->input() );
            return response()->json( ['status' => 'success', 'message' => 'User created successfully',
            ] );
        } catch ( Exception $exception ) {
            return response()->json( ['status' => 'failed', 'message' => $exception->getMessage(),
            ] );
        }
    }

    public function userLogin( Request $request ) {
        try {
            $user   = User::where( $request->input() )->select( 'id' )->first();
            $userID = $user->id;
            if ( $userID > 0 ) {
                $token = JWTHelper::CreateToken( $request->input( 'email' ), $userID );
                
                return response()->json( ['status' => 'success', 'message' => 'Login Success',
                ] )->cookie( 'token', $token, time() + 60 * 60 );

            } else {
                return response()->json( ['status' => 'fail', 'message' => 'User not found',
                ] );
            }
        } catch ( Exception $exception ) {
            return response()->json( ['status' => 'failed', 'message' => $exception->getMessage(),
            ] );
        };
    }

}
