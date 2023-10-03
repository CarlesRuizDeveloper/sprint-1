<?php

class PokerDice {
    private $faces = ['As', 'K', 'Q', 'J', '7', '8'];
    private $currentFace;
    
    
    public function throw() {
        $randomIndex = array_rand($this->faces);
        $this->currentFace = $this->faces[$randomIndex];
    }
    
    public function shapeName() {
        return  $this->currentFace." \n";
    }
}


?>
