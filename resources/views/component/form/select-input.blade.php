<div class="form-item">
    <div class="form-item-label">
        <label>{{ $slot }}</label>
    </div>
    <div class="form-item-content">
        <div class="form-item-content-main">
            <select @if(isset($name))name="{{ $name }}" @endif @if(isset($id))id="{{ $id }}"
                    @endif @if(isset($classes))class="{{ $classes }}"@endif>
                @if(isset($options))
                    @foreach($options as $option)
                        <option value="{{ $option[1] }}" @if(isset($option[2])) selected="selected" @endif>{{ $option[0] }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        @if(isset($help))
            <div class="form-item-content-tip">
                <small>{{ $help }}</small>
            </div>
        @endif
    </div>
</div>