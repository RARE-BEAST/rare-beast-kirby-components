<?php

use Kirby\Uuid\Uuid;

class ReviewsPage extends Page
{
    public function children(): Pages
    {
        if ($this->children instanceof Pages) {
            return $this->children;
        }

        $results = [];
        $pages   = [];
        $apiKey  = 'pTTdG3bhF4Y18l5mx0DXUUzpbvXetkrC';
        $request = Remote::get('https://api.nytimes.com/svc/books/v3/reviews.json?author=Stephen+King&api-key=' . $apiKey);

        if ($request->code() === 200) {
            $results = $request->json(false)->results;
        }

        foreach ($results as $key => $review) {
            $pages[] = [
                'slug'     => Str::slug($review->book_title),
                'num'      => $key+1,
                'template' => 'review',
                'model'    => 'review',
                'content'  => [
                    'title'    => $review->book_title,
                    'date'     => $review->publication_dt,
                    'summary'  => $review->summary,
                    'link'     => $review->url,
                    'uuid'     => Uuid::generate(),

                ]
            ];
        }

        return $this->children = Pages::factory($pages, $this);
    }
}