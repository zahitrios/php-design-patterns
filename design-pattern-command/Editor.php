<?php

namespace Command;

class Editor extends Singleton{

    private string $text = '';
    private array $selectedRegion = [
        'from' => 0,
        'length' => 0
    ];

    public function clear(): void{
        $this->text = '';
    }

    public function clearSelectedRegion(): void{
        $this->selectedRegion = [
            'from' => 0,
            'length' => 0
        ];
    }
   
    public function writeText(string $text): void{
        $this->text .= $text;
    }

    public function getText(): string{
        return $this->text;
    }

    public function selectRegion(int $from, int $length): void{
        $this->selectedRegion['from'] = $from;
        $this->selectedRegion['length'] = $length;
    }

    public function getSelectedText(): string{
        //TODO, handle errors if text is to short or empty
        return substr($this->text, $this->selectedRegion['from'], $this->selectedRegion['length']);
    }

    public function getSelectedRegion(): array{
        return $this->selectedRegion;
    }
}
