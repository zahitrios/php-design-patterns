<?php

require_once 'Singleton.php';
require_once 'ClipBoard.php';
require_once 'Editor.php';
require_once 'Command.php';
require_once 'CopyCommand.php';
require_once 'CutCommand.php';

use Command\Editor;
use Command\ClipBoard;
use Command\CopyCommand;
use Command\CutCommand;

$editor = Editor::getInstance(); //singleton
$clipBoard = ClipBoard::getInstance(); // singleton

$copyCommand = new CopyCommand($clipBoard, $editor);
$cutCommand = new CutCommand($clipBoard, $editor);

$editor->writeText('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, ut! Ut, quae corrupti atque quaerat libero facilis explicabo!');
$editor->writeText('Ea, culpa doloribus perspiciatis dolorem tempore, quod consequatur beatae provident aspernatur rem, consequuntur laborum deleniti atque voluptate sunt suscipit placeat corrupti facere!');
$editor->selectRegion(0,11);
echo 'Complete text: '.$editor->getText().PHP_EOL.PHP_EOL;

$copyCommand->execute();
echo 'Text copied!: '.$clipBoard->getText().PHP_EOL.PHP_EOL;

$editor->selectRegion(0,57);
$cutCommand->execute();
echo 'Text cuted!: '.$clipBoard->getText().PHP_EOL.PHP_EOL;

echo 'Complete text: '.$editor->getText().PHP_EOL.PHP_EOL;
