<?php

namespace Getnet\API;

/**
 * Class Credit.
 */
class Tokenization implements \JsonSerializable
{
    use TraitEntity;

    // Bandeira a qual se destina o token: Mastercard
    public const TYPE_MASTER = 'UCAF';

    // Bandeira a qual se destina o token: Visa
    public const TYPE_VISA = 'TAVV';

    private $type;

    private $cryptogram;

    private $eci;

    private $requestor_id;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getCryptogram()
    {
        return $this->cryptogram;
    }

    public function setCryptogram($cryptogram)
    {
        $this->cryptogram = $cryptogram;

        return $this;
    }

    public function getEci()
    {
        return $this->eci;
    }

    public function setEci($eci)
    {
        $this->eci = $eci;

        return $this;
    }

    public function getRequestorId()
    {
        return $this->requestor_id;
    }

    public function setRequestorId($requestor_id)
    {
        $this->requestor_id = $requestor_id;

        return $this;
    }
}
