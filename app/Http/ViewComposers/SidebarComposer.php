<?php
/**
 * Created by: gabriel
 * Date: 29/11/17
 * Time: 10:44
 */

namespace Blog\HTTP\VIewComposers;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SidebarComposer
{
    //
    public function compose(View $view)
    {
        //
        //$blogPosts = \Blog\Post::with('user')->get();
        $archivesSql = DB::table('posts')->selectRaw('month(created_at) as month, year(created_at) as year')->distinct()->orderByRaw('year(created_at) desc,month(created_at) desc')->get();

        $archives = array_map(
            function($item){
                return Carbon::createFromDate($item->year,$item->month,'01');
            },
            $archivesSql->toArray()
        );

        $view->with('archives', $archives);
    }
}