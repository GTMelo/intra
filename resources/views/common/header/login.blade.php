@if(!Auth::check())
    <div id="header_login">
        <nav>
            <a id="loginbtn" href="#">Login</a>
        </nav>
        <div id="login_wrap" class="hidden">
            @include('form.login-form')
        </div>
    </div>
@endif

@if(Auth::check())
    <div id="header_user">
        <div id="header_user_data">
            <span id="user_nome">{{ Auth::user()->rh->nome_curto }}</span>
            <span id="user_data">{{ Auth::user()->rh->unidade->sigla }} &nbsp<a href="/logout">(sair)</a></span>
        </div>
        <div id="header_user_avatar">
            <img class="avatar" src="{!! asset('images/avatar-default.png') !!}"/>
        </div>
    </div>
@endif