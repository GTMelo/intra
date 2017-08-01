<div class="form-item">
    @if(isset($field->label))
        <div class="form-item-label">
            <label>{{ $field->label }}</label>
        </div>
    @endif
    <div class="form-item-content">
        <div class="form-item-content-main">
            <input type="datetime-local" class="datepicker" @if(isset($field->placeholder)) placeholder="{{ $field->placeholder }}" @endif>
        </div>
        @if(isset($field->tip))
            <div class="form-item-content-tip">
                <small>{{ $field->tip }}</small>
            </div>
        @endif
    </div>
</div>