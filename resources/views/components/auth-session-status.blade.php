@props(['status'])

@if ($status)
    <p style="color: green">{{ $status }}</p>


@endif
