<?php
namespace App\Repositories\Blog;
use App\Repositories\RepositoryAbstract;
use App\Models\Blog;

class BlogRepository extends RepositoryAbstract implements BlogInterface
{
    /**
     * @var string
     */
    public function __construct(Blog $blogs)
    {
        parent::__construct();

        $this->modelName = 'Blog';
        $this->model = $blogs;
        $this->table = 'blogs';
    }
}
