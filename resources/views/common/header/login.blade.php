@if(!Auth::check())
    <div id="header_login">
        <a href="/login">
            <nav>Login</nav>
        </a>
        <div id="login_form">
            <form method="post" action="/login">
                {{ csrf_field() }}
                <input type="text" name="cpf" placeholder="CPF">
                <input type="password" name="pass" placeholder="Senha">
                <input type="submit" name="login" value="Entrar">
                <a href="/registrar">Novo usuário</a>
            </form>
        </div>
    </div>
@endif

@if(Auth::check())
    <div id="header_user">
        <div id="header_user_data">
            <span>{{ $user->rh->nome_curto }}</span>
            <span>DILID/SAIN</span>
        </div>
        <div id="header_user_avatar">
            <img class="avatar" src="{!! asset('images/avatar-default.png') !!}"/>
        </div>
    </div>
@endif