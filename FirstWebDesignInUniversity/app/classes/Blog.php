<?php

namespace App\classes;

class Blog
{
    public $blogs = [], $result = [];
    public function __construct()
    {
        $this->blogs = [0 => ['id' => 1, 'category_id' => 1, 'title' => 'What is Lorem Ipsum?', 'description' => 'Lorem Ipsum is simply dummy text of the printing andtypesetting industry. Lorem Ipsum has been the industrys standard dummy text ever sincethe 1500s, when an unknown printer took a galley of type and scrambled it to make atype specimen book. It has survived not only five centuries, but also the leap intoelectronic typesetting, remaining essentially unchanged. It was popularised in the 1960swith the release of Letraset sheets containing Lorem Ipsum passages, and more recentlywith desktop publishing software like Aldus PageMaker including versions of LoremIpsum', 'image' => 'https://placehold.co/600x400', 'The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line insection 1.10.32.', 'image' => 'https://placehold.co/600x400',], 4 => ['id' => 5, 'category_id' => 6, 'title' => 'Section 1.10.32 of "de Finibus Bonorum et Malorum", written byCicero in 45 BC', 'description' => '"Sed ut perspiciatis unde omnis iste natus error sit voluptatemaccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illoinventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsamvoluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magnidolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, quidolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquameius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Utenim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui inea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eumfugiat quo voluptas nulla pariatur?"', 'image' => 'https://placehold.co/600x400',], 5 => ['id' => 6, 'category_id' => 3, 'title' => 'The standard Lorem Ipsum passage, used since the 1500s?', 'description' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, seddo eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eufugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa quiofficia deserunt mollit anim id est laborum."', 'image' => 'https://placehold.co/600x400',],];
    }
    public function getAllBlog()
    {
        return $this->blogs;
    }
    public function getLastThreeBlog()
    {
        rsort($this->blogs);
        foreach ($this->blogs as $key => $blog) {
            if ($key <= 2) {
                array_push($this->result, $blog);
            } else {
                break;
            }
        }
        return $this->result;
    }
    public function getBlogByCategoryId($categoryId)
    {
        foreach ($this->blogs as $blog) {
            if ($blog['category_id'] == $categoryId) {
                array_push($this->result, $blog);
            }
        }
        return $this->result;
    }
    public function getBlogById($blogId)
    {
        foreach ($this->blogs as $blog) {
            if ($blog['id'] == $blogId) {
                return $blog;
            }
        }
    }
}
