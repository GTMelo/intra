<div class="form-item">
    @if(isset($label))
        <div class="form-item-label">
                <label>{{ $label }}</label>
        </div>
    @endif
    <div class="form-item-content">
        <div class="form-item-content-main">
            <select
                @if(isset($name))name="{{ $name }}" @endif
                @if(isset($id))id="{{ $id }}" @endif
                @if(isset($classes))class="{{ $classes }}"@endif
            >
                @if(isset($options))
                    @foreach($options as $option)
                        <option value="{{ $option['value'] }}"
                                @if(isset($option['selected'])) selected="selected" @endif> @if(isset($option['label'])){{ $option['label'] }}@endif
                        </option>
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