<?php

namespace DependencyInjection;

class Post {

    public function __construct(protected Category $category) {
    }

    public function getAll(): string{
        return 'All posts';
    }

    public function getAllCategories(){
        return $this->category->getAll(); // Post can use Category method without extends from Category
    }

}
