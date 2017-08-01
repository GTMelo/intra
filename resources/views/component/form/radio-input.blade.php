<div class="form-item form-checkbox">
    @if(isset($field->label))
        <div class="form-item-label">
            <label>{{ $field->label }}</label>
        </div>
    @endif
    <div class="form-item-content">
        <div class="form-item-content-main">
            @foreach($field->options as $option)
                <div class="form-checkbox-item">
                    <input type="radio"
                           @if(isset($option->name))name="{{ $field->name }}"@endif
                           @if(isset($option->value))value="{{ $option->value }}"@endif
                    >
                    @if(isset($field->name) && isset($option->label))
                        <label for="{{ $field->name }}">
                            {{ $option->label }}
                        </label>
                    @endif
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