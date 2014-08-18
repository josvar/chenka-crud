<?php namespace Chenkacrud\Nodes\Posts;

use Laracasts\Commander\CommandHandler;

class PublishPostCommandHandler implements CommandHandler{

    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        dd($command->seo_tags);
    }
}