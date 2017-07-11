<div class="form-item">
    <div class="form-item-label">
        <label>{{ $slot }}</label>
    </div>
    <div class="form-item-content">
        <div class="form-item-content-main">
            <input type="datetime-local" class="datepicker">
        </div>
        @if(isset($help))
            <div class="form-item-content-tip">
                <small>{{ $help }}</small>
            </div>
        @endif
    </div>
</div>