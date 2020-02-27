<?php


namespace AnyImage\Pornsnag;


class Client {

    public static function score( $filepath, $url = 'http://pornsnag:5000' ) {
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, [ 'Content-Type: image/jpeg', ] );
        curl_setopt( $ch, CURLOPT_BINARYTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_TIMEOUT, 9 );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, file_get_contents( $filepath ) );
        $score = curl_exec( $ch );

        return $score;
    }
}
