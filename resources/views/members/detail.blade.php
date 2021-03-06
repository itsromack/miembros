@extends('layouts.app')

@section('styles')
<!-- STYLES -->
@endsection

@section('content')
<div class="uk-container uk-overflow-auto">
    <div class="uk-card uk-card-body uk-card-primary">
        <h3 class="uk-card-title">Member Data: {{ $member->last_name }}, {{ $member->first_name }} {{ $member->middle_name }}</h3>
        <a class="uk-button uk-button-default" href="/locale/list">
            Locales
        </a>
    </div>
    <form class="uk-form-horizontal uk-margin-large">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">Personal Data</legend>
            <div class="uk-margin">
                <label class="uk-form-label">Church ID</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="church_id" type="text" value="{{ $member->church_id }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">First Name</label>
                <div class="uk-form-controls">
                    <input class="uk-input tippy" name="first_name" type="text" value="{{ $member->first_name }}" title="First Name">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Middle Name</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="middle_name" type="text" value="{{ $member->middle_name }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Last Name</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="last_name" type="text" value="{{ $member->last_name }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Locale</label>
                <div class="uk-form-controls">
                    <select class="uk-select" name="locale_church_id">
                    @foreach ($locales as $locale)
                        <option value="{{ $locale->id }}" @if ($locale->id == $member->locale_church_id) selected="selected" @endif>{{ $locale->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Baptism Date</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="baptised_at" type="text" value="{{ $member->baptised_at }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Birth Date</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="born_at" type="text" value="{{ $member->born_at }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Civil Status</label>
                <div class="uk-form-controls">
                    <select class="uk-select" name="civil_status">
                        <option value="single" @if ('single' == $member->civil_status) selected="selected" @endif>Single</option>
                        <option value="married" @if ('married' == $member->civil_status) selected="selected" @endif>Married</option>
                        <option value="separated" @if ('separated' == $member->civil_status) selected="selected" @endif>Separated</option>
                        <option value="widowed" @if ('widowed' == $member->civil_status) selected="selected" @endif>Widowed</option>
                    </select>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Spouse Name (if married)</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="spouse_name" type="text" value="{{ $member->spouse_name }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Primary Address</label>
                <div class="uk-form-controls">
                    <textarea class="uk-textarea" name="primary_address">{{ $member->primary_address }}</textarea>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Secondary Address</label>
                <div class="uk-form-controls">
                    <textarea class="uk-textarea" name="secondary_address">{{ $member->secondary_address }}</textarea>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Provincial Address</label>
                <div class="uk-form-controls">
                    <textarea class="uk-textarea" name="provincial_address">{{ $member->provincial_address }}</textarea>
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Contact Numbers (separate numbers with comma)</label>
                <div class="uk-form-controls">
                    @php
                    $numbers = json_decode($member->contact_numbers);
                    $contact_numbers = null;
                    if (!empty($numbers))
                    {
                        $contact_numbers = implode(', ', $numbers);
                    }
                    @endphp
                    <input class="uk-input" name="contact_numbers" type="text" value="{{ $contact_numbers }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">PhilHealth Number</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="philhealth_number" type="text" value="{{ $member->philhealth_number }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">SSS Number</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="sss_number" type="text" value="{{ $member->sss_number }}">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Active Voter</label>
                <div class="uk-form-controls">
                    <input class="uk-radio" name="is_active_voter" type="radio" value="1" @if ($member->is_active_voter) checked="checked" @endif> Yes
                    <input class="uk-radio" name="is_active_voter" type="radio" value="0" @if (!$member->is_active_voter) checked="checked" @endif> No
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label">Voting Precint Numbers</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="precint_number" type="text" value="{{ $member->precint_number }}">
                </div>
            </div>

            <legend class="uk-legend">Medical History</legend>
            <div class="uk-margin">
                <textarea class="uk-textarea" name="medical_history">{{ $member->medical_history }}</textarea>
            </div>

            <legend class="uk-legend">Brief History</legend>
            <div class="uk-margin">
                <textarea class="uk-textarea" name="history">{{ $member->history }}</textarea>
            </div>

            <legend class="uk-legend">Progress History</legend>
            <div class="uk-margin">
                <textarea class="uk-textarea" name="progress_history">{{ $member->progress_history }}</textarea>
            </div>

            <legend class="uk-legend">Documents</legend>
            <div class="uk-margin">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </fieldset>
        <button class="uk-button" id="opentip" data-ot="The content" data-ot-delay="2" data-ot-hide-trigger="closeButton">Text</button>
    </form>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
(function() {
    var myInput = document.getElementById("opentip");
    var inputOpentip = new Opentip(myInput, { showOn: null, style: 'alert' });
    console.log(inputOpentip);
    console.log('x');
})();
</script>
@endsection
