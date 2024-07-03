<?php

namespace App\Http\Controllers\GitHubApi;

use App\Http\Controllers\Controller;
use App\Models\SearchResult;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SearchController extends Controller
{
    public function search(Request $request)
    {dd(111);
        $searchText = $request->input('search_query');

         SearchResult::where('search_query', $searchText,)->exists();


        {

            $response = Http::get("https://api.github.com/search/repositories", [
                'q' => $searchText
            ]);

            $githubResult = $response->json();

            SearchResult::create([
                'search_query' => $searchText,
                'github_response' => json_encode($githubResult, true),
            ]);
            dd($response);


        }
    }
}
