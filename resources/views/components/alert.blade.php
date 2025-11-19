@props(['type' => 'success', 'message' => ''])

@php
    $bg = [
        'success' => 'alert-success',
        'danger' => 'alert-danger',
        'warning' => 'alert-warning',
        'info' => 'alert-info'
    ][$type];
@endphp

@if ($message)
    <div class="alert {{ $bg }} alert-dismissible fade show" role="alert">
        {{ $message }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
