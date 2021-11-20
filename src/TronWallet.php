<?php

namespace dgladys\TronGenerator;

class TronWallet {
    /** @var string */
    private $public_key;
    
    /** @var string */
    private $private_key;
    
    public function __construct($args)
    {
        if (isset($args['public'])) {
            $this->public_key = $args['public'];
        }
        if (isset($args['private'])) {
            $this->private_key = $args['private'];
        }
    }
    
    /**
     * @return bool
     * */
    public function isValid(): bool
    {
        return $this->public_key && $this->private_key;
    }
    
    public function __toString()
    {
        return json_encode([
            'public' => $this->public_key,
            'private' => $this->private_key
        ], true);
    }
}