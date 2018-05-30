<?php

namespace App\Console\Commands;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Console\Command;

class AddComment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comment:insert {content} {--slug=} {--comment=} {--type=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add a comment to a story or another comment';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $content = $this->argument("content");
        $slug = $this->option('slug');
        $commentId = $this->option('comment');
        $type = $this->option('type');
        $typeId = null;

        if (empty($type)) {
            $type = 'post';
        }

        if (!empty($slug)) {
            $post = Post::where("slug", $slug)->first();

            if (empty($post->id)) {
                $this->error('Post not found for ' . $slug);
                exit;
            }

            $typeId = $post->id;
        }

        if (!empty($commentId)) {
            $comment = Comment::where("id", $commentId)->first();

            if (empty($comment->id)) {
                $this->error('Comment not found for ' . $comment);
                exit;
            }

            $typeId = $comment->id;
        }

        if(empty($typeId)){
            $this->error('Please specify a type for this comment');
            exit;
        }

        $user = User::inRandomOrder()->where("first_name", "!=", "")->first();

        Comment::create(
            [
                "content" => $content,
                "type" => $type,
                "type_id" => $typeId,
                "user_id" => $user->id
            ]
        );

        $this->info('Comment successfully added for ' . url("/"));
    }
}
