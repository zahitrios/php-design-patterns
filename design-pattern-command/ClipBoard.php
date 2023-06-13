<?php

namespace Command;

class ClipBoard extends Singleton{

    private string $text;

    public function setText(string $text): void{
        $this->text = $text;
    }

    public function getText(): string{
        return $this->text;
    }
}
