<?php

namespace App\Models\Parser;

use App\Models\Lists\App;
use App\Models\Lists\ListToApp;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;
use voku\helper\HtmlDomParser;

class WbParser extends Model
{
    use HasFactory;

    public function parse_page($url, $id)
    {

    }

    static function parse_brand($url): array
    {
        $main_url = 'https://www.wildberries.ru';
        $html = HtmlDomParser::file_get_html($url);

        foreach ($html->find('.j-card-item') as $product) {

            $link = $product->find(".j-open-full-product-card")->href;
            if (!empty ($link[0])) {

                $links[] = $main_url . $link[0];
            }
        }
        $pages = $html->find('.pageToInsert');
        $nextpage = $pages->find('.pagination__next')->href;
        if (!empty($nextpage[0])) {

            $new_arr = WbParser::parse_brand($main_url . $nextpage[0], $id);
            $links = array_merge($links, $new_arr);
        }

        return $links;
    }

    static function findNewItem(array $links): array
    {
        $notNew = App::select('link')->whereIn('link', $links)->get()->toArray();
        $oldApp = array_intersect($links, $notNew);
        $newApp = array_diff($links, $notNew);
        return ['new' => $newApp, 'old' => $oldApp];

    }

    static function addNew(string $url, $id): bool{
        $page = App::create(['link'=>$url]);
        if (!empty($page->id))
        {
            ListToApp::create(['watch_lists_id'=>$id, 'apps_id'=>$page->id, 'active'=>1]);
        }

    }

}
