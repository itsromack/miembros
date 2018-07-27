@extends('layouts.app')

@section('styles')
<!-- STYLES -->
@endsection

@section('content')
<div class="uk-container uk-overflow-auto">
    <div class="uk-card uk-card-body uk-card-primary">
        <h3 class="uk-card-title">Locales</h3>
        <a class="uk-button uk-button-default" href="/stats/statuses">
            Statistics
        </a>
    </div>
    <table class="uk-table uk-table-small uk-table-justify uk-table-striped uk-table-hover">
        <caption></caption>
        <thead>
            <tr>
                <th>Locales</th>
                <th>Registered Members</th>
                <th>Active</th>
                <th>Irregular</th>
                <th>Inactive ODT Complete</th>
                <th>Inactive ODT Incomplete</th>
                <th>Missing</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Locales</th>
                <th>Registered Members</th>
                <th>Active</th>
                <th>Irregular</th>
                <th>Inactive ODT Complete</th>
                <th>Inactive ODT Incomplete</th>
                <th>Missing</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
        @foreach ($locales as $locale)
            <tr>
                <td>{{ $locale->locale_name }}</td>
                <td>{{ $locale->members_count }}</td>
                <td>{{ $locale->active_count }}</td>
                <td>{{ $locale->irregular_count }}</td>
                <td>{{ $locale->odt_complete_count }}</td>
                <td>{{ $locale->odt_incomplete_count }}</td>
                <td>{{ $locale->missing_count }}</td>
                <td>
                    <a class="uk-button uk-button-primary uk-button-small" href="/locale/{{ $locale->id }}">
                        Open Locale
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<!-- SCRIPTS -->
@endsection
