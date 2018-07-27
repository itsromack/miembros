<?php

namespace App\Http\Controllers;

class StatisticsController extends Controller
{
    public function active_statuses()
    {
        $active_stats = app('db')->select('
                SELECT
                    active_status_level,
                    COUNT(id) as level_count
                FROM members
                GROUP BY active_status_level
            ');

        $active_stats_chart_data = [];
        $active_stats_chart_labels = [];
        foreach ($active_stats as $stat)
        {
            array_push($active_stats_chart_data, $stat->level_count);
            array_push($active_stats_chart_labels, $stat->active_status_level);
        }

        return view('members.statistics', compact(
            'active_stats',
            'active_stats_chart_data',
            'active_stats_chart_labels'
        ));
    }
}
