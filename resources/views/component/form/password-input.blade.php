<div class="form-item">
    @if(isset($label))
        <div class="form-item-label">
            <label>{{ $label}}</label>
        </div>
    @endif
    <div class="form-item-content">
        <div class="form-item-content-main">
            <input type="password"
                   @if(isset($name))name="{{ $name }}" @endif
                   @if(isset($id))id="{{ $id }}" @endif
                   @if(isset($placeholder))placeholder="{{ $placeholder }}" @endif
                   @if(isset($classes))class="{{ $classes }}" @endif
            >
            @if(isset($confirm))
                <input type="password"
                       name="{{ $name . '_confirmation' }}"
                       id="{{ $id . '_confirmation' }}"
                       placeholder="Repita a senha"
                       class="{{ $classes }}"
                >
            @endif
        </div>
        @if(isset($help))
            <div class="form-item-content-tip">
                <small>{{ $help }}</small>
            </div>
        @endif
    </div>
</div>