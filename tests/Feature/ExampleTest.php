<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
         
            $response->assertSuccessful();
        
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular'=>$this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing'=>$this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/movie/genre/movie/list'=>$this->fakeGenres(),


        ]);
        $response = $this->get(route('movies.index'));

        $response->assertSee('Popular Movies');
        $response->assertSuccessful('Fake Movies');
        $response->assertSuccessful();
        $response->assertSee('Now Playing');
        $response->assertSuccessful('Now Playing Fake Movies');
        $response->assertSuccessful();
    }
    private function fakePopularMovies(){
        return Http::response([
            [
                [
                    "adult" => false,
                    "backdrop_path" => "/jZIYaISP3GBSrVOPfrp98AMa8Ng.jpg",
                    "genre_ids" =>  [
                      0 => 16,
                      1 => 35,
                      2 => 10751,
                      3 => 14,
                      4 => 10749,
                    ],
                    "id" => 976573,
                    "original_language" => "en",
                    "original_title" => "Elemental",
                    "overview" => "In a city where fire, water, land and air residents live together, a fiery young woman and a go-with-the-flow guy will discover something elemental: how much they have in common."      
                   , "popularity" => 2075.582,
                    "poster_path" => "/4Y1WNkd88JXmGfhtWR7dmDAo1T2.jpg",
                    "release_date" => "2023-06-14",
                    "title" => "Fake Movies",
                    "video" => false,
                    "vote_average" => 7.8,
                    "vote_count" => 1582,
                ]]] ,200);

    }
    private function fakeNowPlayingMovies(){

    }
    private function fakeGenres(){

    }

    }
