<div class="form-item">
    @if(isset($label))
        <div class="form-item-label">
            <label>{{ $label }}</label>
        </div>
    @endif
    <div class="form-item-content">
        <div class="form-item-content-main">
            <input type="datetime-local" class="datepicker" @if(isset($placeholder)) placeholder="{{ $placeholder }}" @endif>
        </div>
        @if(isset($help))
            <div class="form-item-content-tip">
                <small>{{ $help }}</small>
            </div>
        @endif
    </div>
</div>