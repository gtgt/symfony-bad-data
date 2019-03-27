<?php
namespace App\ValueObject;

class Info implements InfoInterface {
    /**
     * @var string
     */
    protected $data;

    /**
     * Info constructor.
     *
     * @param string $data
     */
    public function __construct(string $data) {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData(): string {
        return $this->data;
    }
}