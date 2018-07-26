<?php

namespace App\Http\Controllers;

class MembersController extends Controller
{
    public function list()
    {
        $members = app('db')->select('
            SELECT m.*, l.name AS locale_name
            FROM members m
            JOIN locales l
                ON (m.locale_church_id=l.id)');

        return view('members.list', compact('members'));
    }

    public function detail($id)
    {
        $member = null;

        $result = app('db')->select('
            SELECT m.*, l.name AS locale_name
            FROM members m
            JOIN locales l
                ON (m.locale_church_id=l.id)
            WHERE m.id = ?', [$id]);
        if (count($result) > 0)
        {
            $member = array_pop($result);
        }

        $locales = app('db')->select('SELECT id, name FROM locales');

        return view('members.detail', compact(
            'member',
            'locales'
        ));
    }
}
