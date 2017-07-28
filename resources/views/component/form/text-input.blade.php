<div class="form-item">
    <div class="form-item-label">
        <label>{{ $field->label}}</label>
    </div>
    <div class="form-item-content">
        <div class="form-item-content-main">
            <input type="text"
                   @if(isset($field->name))name="{{ $field->name }}" @endif
                   @if(isset($field->id))id="{{ $field->id }}" @endif
                   @if(isset($field->placeholder))placeholder="{{ $field->placeholder }}" @endif
                   @if(isset($field->classes))class="{{ $field->classes }}" @endif
            >
            @if(isset($field->confirm))
                <input type="text"
                       name="{{ $field->name . '_confirmation' }}"
                       id="{{ $field->id . '_confirmation' }}"
                       placeholder="Repita o campo"
                       class="{{ $field->classes }}"
                >
            @endif
        </div>
        @if(isset($field->tip))
            <div class="form-item-content-tip">
                <small>{{ $field->tip }}</small>
            </div>
        @endif
    </div>
</div>