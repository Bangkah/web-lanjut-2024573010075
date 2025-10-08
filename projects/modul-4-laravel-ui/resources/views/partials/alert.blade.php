@if(!empty($message))
<div class="alert alert-{{ $type ?? 'info' }} alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif
