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
                <td>
                    <a href="/members/{{ $locale->id }}/active">
                        <span class="uk-badge">
                            {{ $locale->active_count }}
                        </span>
                    </a>
                </td>
                <td>
                    <a href="/members/{{ $locale->id }}/irregular">
                        <span class="uk-badge">
                            {{ $locale->irregular_count }}
                        </span>
                    </a>
                </td>
                <td>
                    <a href="/members/{{ $locale->id }}/inactive odt complete">
                        <span class="uk-badge">
                            {{ $locale->odt_complete_count }}
                        </span>
                    </a>
                </td>
                <td>
                    <a href="/members/{{ $locale->id }}/inactive odt incomplete">
                        <span class="uk-badge">
                            {{ $locale->odt_incomplete_count }}
                        </span>
                    </a>
                </td>
                <td>
                    <a href="/members/{{ $locale->id }}/missing">
                        <span class="uk-badge">
                            {{ $locale->missing_count }}
                        </span>
                    </a>
                </td>
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
