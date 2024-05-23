<?php

class ServiceColor
{
    private $service;
    private $cardImage;
    private $colorIdentity;
    private $colorHover;

    public function __construct($service)
    {
        $this->service = $service;
        $this->setColors();
    }

    private function setColors()
    {
        switch ($this->service) {
            case 'Netflix':
                $this->cardImage = '<img src="../src/assets/Card-Netflix.png" alt="Card-Netflix" class="card-image"/>';
                $this->colorIdentity = '#e32115';
                $this->colorHover = '#9f170f';
                break;
            case 'Disney':
                $this->cardImage = '<img src="../src/assets/Card-Disney.png" alt="Card-Disney" class="card-image"/>';
                $this->colorIdentity = '#203d89';
                $this->colorHover = '#162b60';
                break;
            case 'Viu':
                $this->cardImage = '<img src="../src/assets/Card-Viu.png" alt="Card-Viu" class="card-image"/>';
                $this->colorIdentity = '#fec119';
                $this->colorHover = '#b28712';
                break;
            case 'Bilibili':
                $this->cardImage = '<img src="../src/assets/Card-Bilibili.png" alt="Card-Bilibili" class="card-image"/>';
                $this->colorIdentity = '#23ade5';
                $this->colorHover = '#1979a0';
                break;
        }
    }

    public function getCardImage()
    {
        return $this->cardImage;
    }

    public function getColorIdentity()
    {
        return $this->colorIdentity;
    }

    public function getColorHover()
    {
        return $this->colorHover;
    }
}
