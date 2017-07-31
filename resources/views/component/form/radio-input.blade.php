<div class="form-item form-checkbox">
    <div class="form-item-label">
        <label>{{ $field->label }}</label>
    </div>
    <div class="form-item-content">
        <div class="form-item-content-main">
            @foreach($field->options as $option)
                <div class="form-checkbox-item">
                    <input type="radio" name="{{ $field->name }}" value="{{ $option->value }}"><label for="{{ $field->name }}">{{ $option->label }}</label>
                </div>
            @endforeach
        </div>
        @if(isset($field->tip))
            <div class="form-item-content-tip">
                <small>{{ $field->tip }}</small>
            </div>
        @endif
    </div>
</div>