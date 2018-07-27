@extends('layouts.app')

@section('styles')
<!-- STYLES -->
@endsection

@section('content')
<div class="uk-container uk-overflow-auto">
    <div class="uk-card uk-card-body uk-card-primary">
        <h3 class="uk-card-title">Statistics</h3>
        <a class="uk-button uk-button-default" href="/locale/list">
            Locales
        </a>
    </div>

    <h3>Active Status</h3>

    <table class="uk-table uk-table-small uk-table-justify uk-table-striped uk-table-hover">
        <caption></caption>
        <thead>
            <tr>
                <th>Active Status</th>
                <th>Count</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Active Status</th>
                <th>Count</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
        @foreach ($active_stats as $stat)
            <tr>
                <td>{{ strtoupper($stat->active_status_level) }}</td>
                <td>{{ $stat->level_count }}</td>
                <td>
                    <a class="uk-button uk-button-primary uk-button-small" href="/members/list/{{ $stat->active_status_level }}">
                        List Persons
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
