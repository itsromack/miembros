<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Members List</title>
        <link rel="stylesheet" href="/node_modules/uikit/dist/css/uikit.min.css">
    </head>
    <body>

        <div class="uk-container uk-overflow-auto">
            <div class="uk-card uk-card-body uk-card-primary">
                <h3 class="uk-card-title">Members List</h3>
            </div>
            <table class="uk-table uk-table-small uk-table-justify uk-table-striped uk-table-hover">
                <caption></caption>
                <thead>
                    <tr>
                        <th>Church ID</th>
                        <th>Full Name</th>
                        <th>Primary Address</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td>Church ID</td>
                        <th>Full Name</th>
                        <th>Primary Address</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->church_id }}</td>
                        <td>{{ $member->last_name }}, {{ $member->first_name }} {{ $member->middle_name }}</td>
                        <td>{{ $member->primary_address }}</td>
                        <td>
                            @if ('active' == $member->active_status_level)
                            <span class="uk-label uk-label-success">
                                {{ $member->active_status_level }}
                            </span>
                            @elseif ('archive' == $member->active_status_level)
                            <span class="uk-label uk-label-danger">
                                {{ $member->active_status_level }}
                            </span>
                            @else
                            <span class="uk-label uk-label-warning">
                                {{ $member->active_status_level }}
                            </span>
                            @endif
                        </td>
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

        <script src="/dist/bundle.js"></script>
    </body>
</html>