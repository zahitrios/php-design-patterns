<?php

namespace Command;

class CopyCommand implements Command{

    public function __construct(private ClipBoard $clipBoard, private Editor $editor)
    {
        
    }

    public function execute(): void{
        $this->clipBoard->setText($this->editor->getSelectedText());
    }
}
