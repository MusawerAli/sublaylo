@if (Auth::user())
    {{Auth::user()->all}}
@endif