<style>
    .selected{
      font-weight: bold;
      color: red;
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #dddddd;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      padding: 8px;
    }
</style>
<ul>
    <li><a class="{{ $page->selected('about') }}"
        href="{{ $page->baseUrl }}about">Sobre nós</a></li>
    <li><a class="{{ $page->selected('projects') }}"
        href="{{ $page->baseUrl }}projects">Projetos</a></li>
    <li><a class="{{ $page->selected('posts') }}"
        href="{{ $page->baseUrl }}blog">Blog</a></li>
    <li><a class="{{ $page->selected('artigos') }}"
            href="{{ $page->baseUrl }}artigos">Artigos</a></li>
    <li><a class="{{ $page->selected('contato') }}"
        href="{{ $page->baseUrl }}contato">Contato</a></li>
</ul>