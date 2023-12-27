<?php

namespace App\Helper;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTHelper {

    public static function CreateToken( $userEmail, $userID ) {
        $key     = "123-xyz-abc";
        $payload = [
            'iss'       => 'laravel demo',
            'iat'       => time(),
            'exp'       => time() + 60*60,
            'userEmail' => $userEmail,
            
        ];
        return JWT::encode( $payload, $key, 'HS256' );
    }

    public static function DecodeToken( $token ) {
        $key = "123-xyz-abc";
        return JWT::decode( $token, new Key( $key, 'HS256' ) );
    }

}
