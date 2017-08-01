<div class="form-item">
    @if(isset($field->label))
        <div class="form-item-label">
                <label>{{ $field->label }}</label>
        </div>
    @endif
    <div class="form-item-content">
        <div class="form-item-content-main">
            <select
                @if(isset($field->name))name="{{ $field->name }}" @endif
                @if(isset($field->id))id="{{ $field->id }}" @endif
                @if(isset($field->classes))class="{{ $field->classes }}"@endif
            >
                @if(isset($field->options))
                    @foreach($field->options as $option)
                        <option value="{{ $option->value }}"
                                @if(isset($option->selected)) selected="selected" @endif> @if(isset($option->label)){{ $option->label }}@endif
                        </option>
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