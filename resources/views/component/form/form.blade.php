<form id="{{ $form->id }}" method="{{ $form->method }}" action="{{ $form->action }}">
    {{ csrf_field() }}

        {{--{{ dd($form->fieldsets) }}--}}

    @foreach($form->fieldsets as $fieldset)
                <fieldset class="{{ $fieldset->classes }}">
                        <legend>{{ $fieldset->legend }}</legend>
                        @foreach($fieldset->fields as $field)
                                @include('component.form.' . $field->type . '-input')
            @endforeach
        </fieldset>
    @endforeach
</form>