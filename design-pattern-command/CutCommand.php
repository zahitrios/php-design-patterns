<?php

namespace Command;

class CutCommand implements Command{

    public function __construct(private ClipBoard $clipBoard, private Editor $editor)
    {
        
    }

    public function execute(): void{
        $this->clipBoard->setText($this->editor->getSelectedText());
        $selectedRegion = $this->editor->getSelectedRegion();
        
        $newText = substr_replace(
            $this->editor->getText(),
            '',
            $selectedRegion['from'],
            $selectedRegion['length']
        );

        $this->editor->clear();
        $this->editor->writeText($newText);
        $this->editor->clearSelectedRegion();
    }
}
