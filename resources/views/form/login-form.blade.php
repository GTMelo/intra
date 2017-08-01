<form id="login_form" method="POST" action="/login" class="login">
    {{ csrf_field() }}
    @include('component.form.text-input', [
        'name' => 'cpf',
        'placeholder' => 'CPF'
    ])
    @include('component.form.password-input', [
        'name' => 'password',
        'placeholder' => 'Senha'
    ])
    @include('component.form.submit-input', [
        'value' => 'Entrar'
    ])
    <a href="/registrar">Novo usuário</a>
</form>