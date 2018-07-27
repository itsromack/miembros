<?php

namespace App\Http\Controllers;

class LocalesController extends Controller
{
    public function show_locale($locale_id)
    {
        $members = app('db')->select('
            SELECT *
            FROM members m
            WHERE locale_church_id = ?', [$locale_id]);
        $result = app('db')->select('SELECT name FROM locales WHERE id = ?', [$locale_id]);
        $locale = null;
        if (!is_null($result))
        {
            $locale = array_pop($result);
        }
        return view('members.locale-members', compact(
            'members',
            'locale'
        ));
    }

    public function list()
    {
        $locales = app('db')->select('
                SELECT
                    l.id,
                    l.name as locale_name,
                    COUNT(l.id) as members_count,
                    (SELECT COUNT(id)
                        FROM members
                        WHERE active_status_level="active"
                        AND locale_church_id=l.id) AS active_count,
                    (SELECT COUNT(id)
                        FROM members
                        WHERE active_status_level="irregular"
                        AND locale_church_id=l.id) AS irregular_count,
                    (SELECT COUNT(id)
                        FROM members
                        WHERE active_status_level="inactive odt complete"
                        AND locale_church_id=l.id) AS odt_complete_count,
                    (SELECT COUNT(id)
                        FROM members
                        WHERE active_status_level="inactive odt incomplete"
                        AND locale_church_id=l.id) AS odt_incomplete_count,
                    (SELECT COUNT(id)
                        FROM members
                        WHERE active_status_level="missing"
                        AND locale_church_id=l.id) AS missing_count
                FROM members m
                JOIN locales l ON (m.locale_church_id=l.id)
                GROUP BY locale_church_id
            ');
        return view('members.locale-list', compact(
            'locales'
        ));
    }
}
