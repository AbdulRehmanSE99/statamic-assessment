<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Statamic\Facades\Entry;
use Statamic\Facades\Collection;
use Statamic\Facades\Taxonomy;

class ApiController extends Controller
{
    /**
     * Get all blog posts
     */
    public function getBlogs(): JsonResponse
    {
        $blogs = Entry::query()
            ->where('collection', 'blogs')
            ->orderBy('date', 'desc')
            ->get()
            ->map(function ($entry) {
                return [
                    'id' => $entry->id(),
                    'title' => $entry->get('title'),
                    'slug' => $entry->slug(),
                    'date' => $entry->date()->format('Y-m-d H:i:s'),
                    'excerpt' => $entry->get('excerpt'),
                    'featured_image' => $entry->get('featured_image'),
                    'author' => $entry->get('author'),
                    'categories' => $entry->get('categories'),
                    'url' => $entry->url(),
                ];
            });

        return response()->json([
            'success' => true,
            'data' => $blogs,
            'count' => $blogs->count()
        ]);
    }

    /**
     * Get a specific blog post by slug
     */
    public function getBlog(string $slug): JsonResponse
    {
        $blog = Entry::query()
            ->where('collection', 'blogs')
            ->where('slug', $slug)
            ->first();

        if (!$blog) {
            return response()->json([
                'success' => false,
                'error' => 'Blog post not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'id' => $blog->id(),
                'title' => $blog->get('title'),
                'slug' => $blog->slug(),
                'date' => $blog->date()->format('Y-m-d H:i:s'),
                'excerpt' => $blog->get('excerpt'),
                'content' => $blog->get('content'),
                'featured_image' => $blog->get('featured_image'),
                'author' => $blog->get('author'),
                'categories' => $blog->get('categories'),
                'url' => $blog->url(),
            ]
        ]);
    }

    /**
     * Get all categories
     */
    public function getCategories(): JsonResponse
    {
        $categories = collect();

        // Get all taxonomy terms for categories
        $terms = \Statamic\Facades\Term::query()
            ->where('taxonomy', 'categories')
            ->get();

        $categories = $terms->map(function ($term) {
            return [
                'id' => $term->id(),
                'title' => $term->get('title'),
                'slug' => $term->slug(),
                'description' => $term->get('description'),
                'url' => $term->url(),
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $categories,
            'count' => $categories->count()
        ]);
    }

    /**
     * Get collections status
     */
    public function getCollections(): JsonResponse
    {
        $collections = Collection::all()->map(function ($collection) {
            $entries = Entry::query()
                ->where('collection', $collection->handle())
                ->get();

            return [
                'handle' => $collection->handle(),
                'title' => $collection->title(),
                'entries_count' => $entries->count(),
                'url' => $collection->url(),
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $collections,
            'count' => $collections->count()
        ]);
    }
}
