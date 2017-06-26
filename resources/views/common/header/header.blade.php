<header id="page_header" class="margin-0 align-items-center d-flex justify-content-between">
    <div id="brand">
        <a href="/">
            <svg class="d-inline-block align-top" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="54" height="41"
                 viewBox="0 0 241 181">
                <path d="M142 143.9c-21-10.8-37.3-23.4-50-38.6C77.3 87.6 67.2 69.3 61.8 50.8c-0.5-1.7-1.2-4.4-1.8-7.3C52.5 53.3 47.6 64.4 45.4 75.9c4.3 19.3 18 37.8 38.2 44.7l-10.2 30.4c27.3 21.4 65.6 21.7 93.2 0.8 -0.4 0-0.7-0.1-1.1-0.1C158.5 150.7 149 147.5 142 143.9z"/>
                <path d="M83.6 37c6.5 28 31.8 61 60 78.5 9.3 5.8 24 12.5 34.8 12.5 3.2 0 5.8-0.6 7.7-1.8l3.1-1.9c3-6.1 5.2-12.6 6.4-19.1 -4.3-19.3-18-37.8-38.2-44.7l10.2-30.4c-23.6-18.6-55.7-21.2-81.7-8l-0.1 0.1C83.5 25.5 82.6 33.1 83.6 37z"/>
                <path d="M67.5 16c0.7-0.3 1.2-0.5 1.6-0.6C25.1 27.4-0.3 74.3 1.7 105.4c2 31.8 22.6 58.1 48.1 73.3l15.5-46.2c-28.1-16.8-42.2-58.9-28.3-87.6C44.3 27.6 61.2 18.4 67.5 16z"/>
                <path d="M239.3 75.6c-2-31.8-22.6-58.1-48.1-73.3l-15.5 46.3c28.1 16.8 42.2 58.9 28.4 87.6 -7.4 17.2-24.2 26.4-30.6 28.9 -0.7 0.3-1.3 0.5-1.7 0.6C215.9 153.6 241.3 106.7 239.3 75.6z"/>
            </svg>
        </a>
        <a href="/">
            <span>IntraSAIN</span>
        </a>

    </div>
    <div id="header_menu">
        <nav><a href="/">Página Principal</a></nav>
        <nav class="dropdown">
            <span class="dropbtn">Áreas da SAIN</span>
            <nav class="dropdown-content">
                <a href="/areas/sain">SAIN</a>
                <a href="/areas/cgab">CGAB</a>
                <a href="/areas/dilid">DILID</a>
            </nav>
        </nav>
        <nav class="dropdown">
            <span class="dropbtn">SAIN na Internet</span>
            <nav class="dropdown-content wider">
                <a href="http://sain.fazenda.gov.br">Portal Institucional</a>
                <a href="http://pcn.fazenda.gov.br">Portal PCN</a>
                <a href="https://webmail.fazenda.gov.br">Webmail Exchange</a>
                <a href="https://expresso.fazenda.gov.br">Webmail Expresso</a>
            </nav>
        </nav>
        <nav>Ferramentas</nav>
        <nav><a href="/legislacao">Legislação</a></nav>
    </div>
    <div id="header_search">
        <form method="get" id="header_search_form" action="/pesquisa">
            <input type="search" name="q"/>
            <input type="submit" value="Pesquisar"/> {{--TODO trocar pra ícone--}}
        </form>
    </div>

    @include('common.header.login')

</header>