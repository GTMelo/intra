@if(!Auth::check())
    <div id="header_login">
        <nav>
            <a id="loginbtn" href="#">Login</a>
        </nav>
        <div id="login_wrap" class="hidden">
            <form id="login_form" method="POST" action="/login">
                {{ csrf_field() }}
                <input type="text" name="cpf" placeholder="CPF">
                <input type="password" name="password" placeholder="Senha">
                <input type="submit" name="login" value="Entrar">
                <a href="/registrar">Novo usuário</a>
            </form>
        </div>
    </div>
@endif

@if(Auth::check())
    <div id="header_user">
        <div id="header_user_data">
            <span>{{ Auth::user()->rh->nome_curto }}</span>
            <span>DILID/SAIN &nbsp<a href="/logout">Sair</a></span>
        </div>
        <div id="header_user_avatar">
            <img class="avatar" src="{!! asset('images/avatar-default.png') !!}"/>
        </div>
    </div>
@endif