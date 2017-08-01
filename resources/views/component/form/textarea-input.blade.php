<div class="form-item form-checkbox">
    @if(isset($field->label))
        <div class="form-item-label">
            <label>{{ $field->label }}</label>
        </div>
    @endif
    <div class="form-item-content">
        <div class="form-item-content-main">
            <textarea
                    @if(isset($field->name))name="{{ $field->name }}" @endif
                    @if(isset($field->rows)) rows="{{$field->rows}}" @endif
                    @if(isset($field->classes)) class="{{$field->classes}}" @endif
                    @if(isset($field->placeholder)) placeholder="{{$field->placeholder}}" @endif
            >
                @if(isset($field->value)) {{$field->value}} @endif
            </textarea>
        </div>
        @if(isset($field->tip))
            <div class="form-item-content-tip">
                <small>{{ $field->tip }}</small>
            </div>
        @endif
    </div>
</div>