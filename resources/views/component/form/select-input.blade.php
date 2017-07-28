<div class="form-item">
    <div class="form-item-label">
        <label>{{ $field->label }}</label>
    </div>
    <div class="form-item-content">
        <div class="form-item-content-main">
            <select
                    @if(isset($field->name))name="{{ $field->name }}" @endif
            @if(isset($field->id))id="{{ $field->id }}" @endif
                    @if(isset($field->classes))class="{{ $field->classes }}"@endif>
                @if(isset($field->options))
                    @foreach($field->options as $option)
                        <option value="{{ $option->value }}"
                                @if(isset($option->selected)) selected="selected" @endif>{{ $option->label }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        @if(isset($field->tip))
            <div class="form-item-content-tip">
                <small>{{ $field->tip }}</small>
            </div>
        @endif
    </div>
</div>