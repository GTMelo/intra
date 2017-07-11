<div class="form-item">
    <div class="form-item-label">
        <label>{{ $slot }}</label>
    </div>
    <div class="form-item-content">
        <div class="form-item-content-main">
            <input type="text"
                   @if(isset($name))name="{{ $name }}"@endif
                   @if(isset($id))id="{{ $id }}" @endif
                   @if(isset($placeholder))placeholder="{{ $placeholder }}" @endif
                   @if(isset($classes))class="{{ $classes }}" @endif
            >
        </div>
        @if(isset($help))
            <div class="form-item-content-tip">
                <small>{{ $help }}</small>
            </div>
        @endif
    </div>
</div>