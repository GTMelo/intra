<div class="form-item form-checkbox">
    <div class="form-item-label">
        @if(isset($field->label))
            <label>
                {{ $field->label }}
            </label>
        @endif
    </div>
    <div class="form-item-content">
        <div class="form-item-content-main">
            @foreach($field->options as $option)
                <div class="form-checkbox-item">
                    <input type="checkbox"
                           @if(isset($option->name))name="{{ $field->name }}"@endif
                           @if(isset($option->value))value="{{ $option->value }}">@endif
                    @if(isset($option->label))<label @if(isset($field->name))for="{{ $field->name }}"@endif> {{ $option->label }}</label>@endif
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