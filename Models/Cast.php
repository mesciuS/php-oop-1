<?php
class Cast {
    public $main;
    public $supportOne;
    public $supportTwo;

    function __construct(string $main, string $supportOne, string $supportTwo)
    {
        $this->main = $main;
        $this->supportOne = $supportOne;
        $this->supportTwo = $supportTwo;

    }

    public function getFullCast() {
        return "{$this->main}, {$this->supportOne}, {$this->supportTwo}.";
    }
}
?>