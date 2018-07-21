<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Member Data: ({{ $member->last_name }}, {{ $member->first_name }} {{ $member->middle_name }})</title>
        <link rel="stylesheet" href="/node_modules/uikit/dist/css/uikit.min.css">
    </head>
    <body>
        <div class="uk-container uk-overflow-auto">
            <div class="uk-card uk-card-body uk-card-primary">
                <h3 class="uk-card-title">Member Data: {{ $member->last_name }}, {{ $member->first_name }} {{ $member->middle_name }}</h3>
                <a class="uk-button uk-button-default" href="/members/list">
                    Back
                </a>
            </div>
            <div class="uk-section uk-section-default">
                <div class="uk-container">

                    <h3>Personal Data</h3>

                    <div class="uk-grid-match uk-child-width-1@l" uk-grid>
                        <div>
                            <p>
                            <img data-src="{{ $member->picture }}" src="{{ $member->picture }}" width="200" height="200" align="right" alt="{{ $member->church_id}}" uk-img>
                                Church ID: <strong>{{ $member->church_id }}</strong><br>
                                Baptism Date: <strong>{{ $member->baptised_at }}</strong><br>
                                Birth date: <strong>{{ $member->born_at }}</strong><br>
                                Civil Status: <strong>{{ $member->civil_status }}</strong><br>
                                @if ('married' == $member->civil_status)
                                Spouse Name: <strong>{{ $member->spouse_name }}</strong><br>
                                @endif
                                Primary Address: <strong>{{ $member->primary_address }}</strong><br>
                                Secondary Address: <strong>{{ $member->secondary_address }}</strong><br>
                                Provincial Address: <strong>{{ $member->provincial_address }}</strong><br>
                                Contact Numbers: <strong>{{ $member->contact_numbers }}</strong><br>
                                PhilHealth #: <strong>{{ $member->philhealth_number }}</strong><br>
                                SSS #: <strong>{{ $member->sss_number }}</strong><br>
                                Active Voter:
                                @if ($member->is_active_voter)
                                <strong>YES</strong>
                                @else
                                <strong>NO</strong>
                                @endif<br>
                                Voter Precint #: <strong>{{ $member->precint_number }}</strong>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="uk-section uk-section-muted">
                <div class="uk-container">

                    <h3>History</h3>

                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <div>
                            <p>{{ $member->history }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="uk-section uk-section-primary uk-light">
                <div class="uk-container">

                    <h3>Progress History</h3>

                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <div>
                            <p>{{ $member->progress_history }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="uk-section uk-section-secondary uk-light">
                <div class="uk-container">

                    <h3>Medical History</h3>

                    <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                        <div>
                            <p>{{ $member->medical_history }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="uk-section-default">
                <div class="uk-section uk-light uk-background-cover"">
                    <div class="uk-container">

                        <h3>Section with Images</h3>

                        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>