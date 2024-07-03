@extends('repos.search')

    <div class="container">
        <div class="row">
            @foreach($githubResult ['items'] as $repo)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $repo['name'] }}</h5>
                            <p class="card-text">Автор: {{  $repo['owner']['login']  }}</p>
                            <p class="card-text">Звезды: {{ $repo['stargazers_count'] }}</p>
                            <p class="card-text">Просмотры: {{ $repo['watchers_count'] }}</p>
                            <a href="{{  $repo['html_url']  }}" class="btn btn-primary">Перейти на GitHub</a>
                        </div>
                    </div>
                </div>
            @endforeach



