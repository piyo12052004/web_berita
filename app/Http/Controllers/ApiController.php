<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function api()
    {
        $apiKey = config('services.blogger.api_key');
        $maxResults = 100;
        $bloggerApiUrl = "https://www.googleapis.com/blogger/v3/blogs/5415303908760757607/posts?key={$apiKey}&maxResults={$maxResults}";
        

        $response = Http::get($bloggerApiUrl);

        $bloggerData = $response->json();

        foreach ($bloggerData['items'] as $bloggerPost) {
            $blog = Blog::updateOrCreate(
                ['blogger_id' => $bloggerPost['id']],
                [
                    'title' => $bloggerPost['title'],
                    'category' => isset($bloggerPost['labels']) ? implode(', ', $bloggerPost['labels']) : '', // Nilai default
                    'content' => $bloggerPost['content'],
                    'image_url' => $this->extractImageUrl($bloggerPost['content']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
            $syncedData[] = $blog;
        }
        
        return $syncedData;
    }

    private function extractImageUrl($content)
    {
        // Gunakan regex untuk mengekstrak URL gambar dari konten HTML
        preg_match('/<img.+?src=["\'](.+?)["\'].*?>/i', $content, $matches);

        return isset($matches[1]) ? $matches[1] : ''; 
    }
}
