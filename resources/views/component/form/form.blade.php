<form id="{{ $form->id }}" method="{{ $form->method }}" action="{{ $form->action }}">
    {{ csrf_field() }}
    @foreach($form->fieldsets as $fieldset)
        <fieldset class="{{ $fieldset->class }}">
            @foreach($fieldset->inputs as $field)
                {{ $field->toHtml() }}
            @endforeach
        </fieldset>
    @endforeach
</form>