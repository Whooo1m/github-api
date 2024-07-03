<?php

namespace App\Http\Controllers;

use App\Models\SearchResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{


    public function search(Request $request)
    {


        $searchText = $request->input('search_query');

        $localResult = SearchResult::where('search_query', $searchText,)->exists();

        if ($localResult) {
            return view('repos.resultsLocal', compact('localResult',));

        } else {

            $response = Http::get("https://api.github.com/search/repositories", [
                'q' => $searchText
            ]);

            $githubResult = $response->json();

            SearchResult::create([
                'search_query' => $searchText,
                'github_response' => json_encode($githubResult, true),
            ]);


            return view('repos.results', compact('githubResult', 'localResult'));
        }
    }


}
