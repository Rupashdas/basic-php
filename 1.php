<?php
class RGB {
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct( $colorCode = '' ) {
        $this->color = ltrim( $colorCode, "#" );
        $this->parseColor();
    }

    function getColor() {
        return $this->color;
    }
    function getRGBColor() {
        return array( $this->red, $this->green, $this->blue );
    }
    function readRGBColor() {
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }

    function setColor( $colorCode ) {
        if ( $this->color ) {
            $this->color = ltrim( $colorCode, "#" );
            $this->parseColor();
        }
    }
    function getRed(){
        return $this->red;
    }
    function getGreen(){
        return $this->green;
    }
    function getBlue(){
        return $this->blue;
    }
    private function parseColor() {
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, '%02x%02x%02x' );
        } else {
            list( $this->red, $this->green, $this->blue ) = array( 0, 0, 0 );
        }
    }
}

$myColor = new RGB( '#f3f3f3' );
$myColor->readRGBColor();