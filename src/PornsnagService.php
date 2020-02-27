<?php


namespace AnyImage\Pornsnag;


use Afterflow\Chisel\Docker\Service;

class PornsnagService extends Service {

    protected $config = [
        'port' => 5000,
    ];

    public function compose() {
        return $this->image( 'mxmcherry/yahoo-open-nsfw-http' )
                    ->ports( [ 5000 => $this->config( 'port', 5000 ) ] )
                    ->restart( 'always' );
    }

}
