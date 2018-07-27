@extends('layouts.app')

@section('styles')
<!-- STYLES -->
@endsection

@section('content')
<div class="uk-container uk-overflow-auto">
    <div class="uk-card uk-card-body uk-card-primary">
        <h3 class="uk-card-title">{{ strtoupper($active_status) }} ({{ count($members) }})</h3>
        <a class="uk-button uk-button-default" href="/stats/statuses">
            Statistics
        </a>
    </div>
    <table class="uk-table uk-table-small uk-table-justify uk-table-striped uk-table-hover">
        <caption></caption>
        <thead>
            <tr>
                <th>Church ID</th>
                <th>Full Name</th>
                <th>Locale</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Church ID</td>
                <th>Full Name</th>
                <th>Locale</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
        @foreach ($members as $member)
            <tr>
                <td>{{ $member->church_id }}</td>
                <td>{{ $member->last_name }}, {{ $member->first_name }} {{ $member->middle_name }}</td>
                <td>{{ $member->locale_name }}</td>
                <td>
                    <a class="uk-button uk-button-primary uk-button-small" href="/members/{{ $member->id }}">
                        Full Details
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
