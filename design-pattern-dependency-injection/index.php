<?php

require_once ('Post.php');
require_once ('Category.php');


use DependencyInjection\Post;
use DependencyInjection\Category;

$post = new Post(new Category);

echo $post->getAll().PHP_EOL;
echo $post->getAllCategories().PHP_EOL;
