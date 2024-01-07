@if (flash()->message)
    <div>

        <div class="alert d-flex align-items-center alert-{{ flash()->class ?? 'success' }}" role="alert">

            @if (flash()->class === 'warning' || flash()->class === 'danger')
                <i class="bi me-2 bi-exclamation-triangle"></i>
            @endif

            @if (flash()->class === 'info')
                <i class="bi me-2 bi-exclamation-circle"></i>
            @endif

            @if (!flash()->class || flash()->class === 'success')
                <i class="bi me-2 bi-check-circle"></i>
            @endif


            {{ flash()->message }}
        </div>
    </div>
@endif
