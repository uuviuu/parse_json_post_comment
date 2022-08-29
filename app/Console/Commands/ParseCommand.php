<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Service\SaveToBDService;

class ParseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activate parsing by link';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    
    public $service;

    public function __construct(SaveToBDService $service)
    {
        $this->service = $service;
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $url_posts = 'https://jsonplaceholder.typicode.com/posts';
        $url_comments = 'https://jsonplaceholder.typicode.com/comments';

        $data_posts = file_get_contents($url_posts);
        if ( ! empty($data_posts)) {
            $posts = json_decode(html_entity_decode($data_posts), TRUE);
        }
        $data_comments = file_get_contents($url_comments);
        if ( ! empty($data_comments)) {
            $comments = json_decode(html_entity_decode($data_comments), TRUE);
        }
        $count_posts = count($posts);
        $count_comments = count($comments);

        foreach ($posts as $post) {
            $this->service->create_post($post);  
        }        
        foreach ($comments as $comment) {
            $this->service->create_comment($comment);  
        }

        echo "\nЗагружено $count_posts записей и $count_comments комментариев\n\n";
    }
}
