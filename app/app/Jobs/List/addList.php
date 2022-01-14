<?php

namespace App\Jobs\List;

use App\Models\Lists\WatchLists;
use App\Models\Parser\WbParser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class addList implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id =$id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $Wlist = WatchLists::find($this->id);
        $lists = json_decode($Wlist->list);
        foreach ($lists as $list){
            $link = explode("?", $lists);
            if (preg_match('/wildberries.ru\//', $link[0]))
            {
                if (preg_match('/\/brands\//', $link[0]))
                {
                    WbParser::parse_brand($lists[0], $this->id);
                }
            }
        }
    }
}
