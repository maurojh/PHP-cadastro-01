<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<!-- 2020-03-04 qua 15:52 -->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>&lrm;</title>
<meta name="generator" content="Org mode" />
<style type="text/css">
 <!--/*--><![CDATA[/*><!--*/
  .title  { text-align: center;
             margin-bottom: .2em; }
  .subtitle { text-align: center;
              font-size: medium;
              font-weight: bold;
              margin-top:0; }
  .todo   { font-family: monospace; color: red; }
  .done   { font-family: monospace; color: green; }
  .priority { font-family: monospace; color: orange; }
  .tag    { background-color: #eee; font-family: monospace;
            padding: 2px; font-size: 80%; font-weight: normal; }
  .timestamp { color: #bebebe; }
  .timestamp-kwd { color: #5f9ea0; }
  .org-right  { margin-left: auto; margin-right: 0px;  text-align: right; }
  .org-left   { margin-left: 0px;  margin-right: auto; text-align: left; }
  .org-center { margin-left: auto; margin-right: auto; text-align: center; }
  .underline { text-decoration: underline; }
  #postamble p, #preamble p { font-size: 90%; margin: .2em; }
  p.verse { margin-left: 3%; }
  pre {
    border: 1px solid #ccc;
    box-shadow: 3px 3px 3px #eee;
    padding: 8pt;
    font-family: monospace;
    overflow: auto;
    margin: 1.2em;
  }
  pre.src {
    position: relative;
    overflow: visible;
    padding-top: 1.2em;
  }
  pre.src:before {
    display: none;
    position: absolute;
    background-color: white;
    top: -10px;
    right: 10px;
    padding: 3px;
    border: 1px solid black;
  }
  pre.src:hover:before { display: inline;}
  /* Languages per Org manual */
  pre.src-asymptote:before { content: 'Asymptote'; }
  pre.src-awk:before { content: 'Awk'; }
  pre.src-C:before { content: 'C'; }
  /* pre.src-C++ doesn't work in CSS */
  pre.src-clojure:before { content: 'Clojure'; }
  pre.src-css:before { content: 'CSS'; }
  pre.src-D:before { content: 'D'; }
  pre.src-ditaa:before { content: 'ditaa'; }
  pre.src-dot:before { content: 'Graphviz'; }
  pre.src-calc:before { content: 'Emacs Calc'; }
  pre.src-emacs-lisp:before { content: 'Emacs Lisp'; }
  pre.src-fortran:before { content: 'Fortran'; }
  pre.src-gnuplot:before { content: 'gnuplot'; }
  pre.src-haskell:before { content: 'Haskell'; }
  pre.src-hledger:before { content: 'hledger'; }
  pre.src-java:before { content: 'Java'; }
  pre.src-js:before { content: 'Javascript'; }
  pre.src-latex:before { content: 'LaTeX'; }
  pre.src-ledger:before { content: 'Ledger'; }
  pre.src-lisp:before { content: 'Lisp'; }
  pre.src-lilypond:before { content: 'Lilypond'; }
  pre.src-lua:before { content: 'Lua'; }
  pre.src-matlab:before { content: 'MATLAB'; }
  pre.src-mscgen:before { content: 'Mscgen'; }
  pre.src-ocaml:before { content: 'Objective Caml'; }
  pre.src-octave:before { content: 'Octave'; }
  pre.src-org:before { content: 'Org mode'; }
  pre.src-oz:before { content: 'OZ'; }
  pre.src-plantuml:before { content: 'Plantuml'; }
  pre.src-processing:before { content: 'Processing.js'; }
  pre.src-python:before { content: 'Python'; }
  pre.src-R:before { content: 'R'; }
  pre.src-ruby:before { content: 'Ruby'; }
  pre.src-sass:before { content: 'Sass'; }
  pre.src-scheme:before { content: 'Scheme'; }
  pre.src-screen:before { content: 'Gnu Screen'; }
  pre.src-sed:before { content: 'Sed'; }
  pre.src-sh:before { content: 'shell'; }
  pre.src-sql:before { content: 'SQL'; }
  pre.src-sqlite:before { content: 'SQLite'; }
  /* additional languages in org.el's org-babel-load-languages alist */
  pre.src-forth:before { content: 'Forth'; }
  pre.src-io:before { content: 'IO'; }
  pre.src-J:before { content: 'J'; }
  pre.src-makefile:before { content: 'Makefile'; }
  pre.src-maxima:before { content: 'Maxima'; }
  pre.src-perl:before { content: 'Perl'; }
  pre.src-picolisp:before { content: 'Pico Lisp'; }
  pre.src-scala:before { content: 'Scala'; }
  pre.src-shell:before { content: 'Shell Script'; }
  pre.src-ebnf2ps:before { content: 'ebfn2ps'; }
  /* additional language identifiers per "defun org-babel-execute"
       in ob-*.el */
  pre.src-cpp:before  { content: 'C++'; }
  pre.src-abc:before  { content: 'ABC'; }
  pre.src-coq:before  { content: 'Coq'; }
  pre.src-groovy:before  { content: 'Groovy'; }
  /* additional language identifiers from org-babel-shell-names in
     ob-shell.el: ob-shell is the only babel language using a lambda to put
     the execution function name together. */
  pre.src-bash:before  { content: 'bash'; }
  pre.src-csh:before  { content: 'csh'; }
  pre.src-ash:before  { content: 'ash'; }
  pre.src-dash:before  { content: 'dash'; }
  pre.src-ksh:before  { content: 'ksh'; }
  pre.src-mksh:before  { content: 'mksh'; }
  pre.src-posh:before  { content: 'posh'; }
  /* Additional Emacs modes also supported by the LaTeX listings package */
  pre.src-ada:before { content: 'Ada'; }
  pre.src-asm:before { content: 'Assembler'; }
  pre.src-caml:before { content: 'Caml'; }
  pre.src-delphi:before { content: 'Delphi'; }
  pre.src-html:before { content: 'HTML'; }
  pre.src-idl:before { content: 'IDL'; }
  pre.src-mercury:before { content: 'Mercury'; }
  pre.src-metapost:before { content: 'MetaPost'; }
  pre.src-modula-2:before { content: 'Modula-2'; }
  pre.src-pascal:before { content: 'Pascal'; }
  pre.src-ps:before { content: 'PostScript'; }
  pre.src-prolog:before { content: 'Prolog'; }
  pre.src-simula:before { content: 'Simula'; }
  pre.src-tcl:before { content: 'tcl'; }
  pre.src-tex:before { content: 'TeX'; }
  pre.src-plain-tex:before { content: 'Plain TeX'; }
  pre.src-verilog:before { content: 'Verilog'; }
  pre.src-vhdl:before { content: 'VHDL'; }
  pre.src-xml:before { content: 'XML'; }
  pre.src-nxml:before { content: 'XML'; }
  /* add a generic configuration mode; LaTeX export needs an additional
     (add-to-list 'org-latex-listings-langs '(conf " ")) in .emacs */
  pre.src-conf:before { content: 'Configuration File'; }

  table { border-collapse:collapse; }
  caption.t-above { caption-side: top; }
  caption.t-bottom { caption-side: bottom; }
  td, th { vertical-align:top;  }
  th.org-right  { text-align: center;  }
  th.org-left   { text-align: center;   }
  th.org-center { text-align: center; }
  td.org-right  { text-align: right;  }
  td.org-left   { text-align: left;   }
  td.org-center { text-align: center; }
  dt { font-weight: bold; }
  .footpara { display: inline; }
  .footdef  { margin-bottom: 1em; }
  .figure { padding: 1em; }
  .figure p { text-align: center; }
  .inlinetask {
    padding: 10px;
    border: 2px solid gray;
    margin: 10px;
    background: #ffffcc;
  }
  #org-div-home-and-up
   { text-align: right; font-size: 70%; white-space: nowrap; }
  textarea { overflow-x: auto; }
  .linenr { font-size: smaller }
  .code-highlighted { background-color: #ffff00; }
  .org-info-js_info-navigation { border-style: none; }
  #org-info-js_console-label
    { font-size: 10px; font-weight: bold; white-space: nowrap; }
  .org-info-js_search-highlight
    { background-color: #ffff00; color: #000000; font-weight: bold; }
  .org-svg { width: 90%; }
  /*]]>*/-->
</style>
<script type="text/javascript">
/*
@licstart  The following is the entire license notice for the
JavaScript code in this tag.

Copyright (C) 2012-2019 Free Software Foundation, Inc.

The JavaScript code in this tag is free software: you can
redistribute it and/or modify it under the terms of the GNU
General Public License (GNU GPL) as published by the Free Software
Foundation, either version 3 of the License, or (at your option)
any later version.  The code is distributed WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.

As additional permission under GNU GPL version 3 section 7, you
may distribute non-source (e.g., minimized or compacted) forms of
that code without the copy of the GNU GPL normally required by
section 4, provided you include this license notice and a URL
through which recipients can access the Corresponding Source.


@licend  The above is the entire license notice
for the JavaScript code in this tag.
*/
<!--/*--><![CDATA[/*><!--*/
 function CodeHighlightOn(elem, id)
 {
   var target = document.getElementById(id);
   if(null != target) {
     elem.cacheClassElem = elem.className;
     elem.cacheClassTarget = target.className;
     target.className = "code-highlighted";
     elem.className   = "code-highlighted";
   }
 }
 function CodeHighlightOff(elem, id)
 {
   var target = document.getElementById(id);
   if(elem.cacheClassElem)
     elem.className = elem.cacheClassElem;
   if(elem.cacheClassTarget)
     target.className = elem.cacheClassTarget;
 }
/*]]>*///-->
</script>
</head>
<body>
<div id="content">
<div id="table-of-contents">
<h2>Table of Contents</h2>
<div id="text-table-of-contents">
<ul>
<li><a href="#org8d9c1b5">1. Cadastro de dados no banco</a>
<ul>
<li><a href="#org1d8491f">1.1. Criando o banco de dados e tabela</a></li>
<li><a href="#orgea3b50f">1.2. Formulário</a></li>
<li><a href="#org7b4d32e">1.3. Cadastro</a>
<ul>
<li><a href="#orga130293">1.3.1. Conexão com o banco de dados:</a></li>
<li><a href="#orgd27a801">1.3.2. Verificar se não houveram erros:</a></li>
<li><a href="#orga02f4f7">1.3.3. Recebendo o nome do usuário:</a></li>
<li><a href="#org49355d0">1.3.4. Criando o comando INSERT:</a></li>
<li><a href="#org3e4f14b">1.3.5. Executa o insert</a></li>
<li><a href="#org2d653d9">1.3.6. Fechando a conexão com o banco</a></li>
<li><a href="#orgb57bf75">1.3.7. Página de cadastro completa:</a></li>
</ul>
</li>
</ul>
</li>
</ul>
</div>
</div>

<div id="outline-container-org8d9c1b5" class="outline-2">
<h2 id="org8d9c1b5"><span class="section-number-2">1</span> Cadastro de dados no banco</h2>
<div class="outline-text-2" id="text-1">
</div>
<div id="outline-container-org1d8491f" class="outline-3">
<h3 id="org1d8491f"><span class="section-number-3">1.1</span> Criando o banco de dados e tabela</h3>
<div class="outline-text-3" id="text-1-1">
<p>
Use o localhost/phpmyadmin para criar o banco de dados e a tabela, ou importe o arquivo abaixo:
</p>

<pre class="example">
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Mar-2020 Ã s 18:29
-- VersÃ£o do servidor: 5.7.26
-- versÃ£o do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--
CREATE DATABASE IF NOT EXISTS `banco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `banco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;
</pre>
</div>
</div>

<div id="outline-container-orgea3b50f" class="outline-3">
<h3 id="orgea3b50f"><span class="section-number-3">1.2</span> Formulário</h3>
<div class="outline-text-3" id="text-1-2">
<p>
No formulário temos um campo de &lt;input&gt; com name para receber o dado na página indicada em action:
</p>

<pre class="example">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;

&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Cadastro usuário&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;
    &lt;form action="cadastro.php"&gt;
        &lt;input type="text" name="usuario"&gt;
        &lt;input type="submit" value="Cadastrar"&gt;
    &lt;/form&gt;
&lt;/body&gt;

&lt;/html&gt;
</pre>
</div>
</div>

<div id="outline-container-org7b4d32e" class="outline-3">
<h3 id="org7b4d32e"><span class="section-number-3">1.3</span> Cadastro</h3>
<div class="outline-text-3" id="text-1-3">
</div>
<div id="outline-container-orga130293" class="outline-4">
<h4 id="orga130293"><span class="section-number-4">1.3.1</span> Conexão com o banco de dados:</h4>
<div class="outline-text-4" id="text-1-3-1">
<p>
Crie o objeto de conexão:
</p>

<pre class="example">
//                   "endereco", "usuario", "senha", "nome_do_banco"
$ligacao = new mysqli("localhost", "root", "toor", "banco");
</pre>
</div>
</div>

<div id="outline-container-orgd27a801" class="outline-4">
<h4 id="orgd27a801"><span class="section-number-4">1.3.2</span> Verificar se não houveram erros:</h4>
<div class="outline-text-4" id="text-1-3-2">
<p>
Erros ficam em connect_errno:
</p>

<pre class="example">
if ($ligacao-&gt;connect_errno) {
    printf("A conexão falhou: %s\n", $ligacao-&gt;connect_error);
    exit();
}
</pre>
</div>
</div>

<div id="outline-container-orga02f4f7" class="outline-4">
<h4 id="orga02f4f7"><span class="section-number-4">1.3.3</span> Recebendo o nome do usuário:</h4>
<div class="outline-text-4" id="text-1-3-3">
<p>
O usuário digitou o nome no campo do formulário com name='usuario':
</p>

<pre class="example">
$nome = $_GET['usuario'];
</pre>
</div>
</div>

<div id="outline-container-org49355d0" class="outline-4">
<h4 id="org49355d0"><span class="section-number-4">1.3.4</span> Criando o comando INSERT:</h4>
<div class="outline-text-4" id="text-1-3-4">
<p>
O comando de inserção pode ser copiado da aba Insere no PHPMyAdmin:
</p>

<pre class="example">
    
$comando = "INSERT INTO `usuarios` (`id`, `nome`) VALUES (NULL, '$nome')";

</pre>
</div>
</div>

<div id="outline-container-org3e4f14b" class="outline-4">
<h4 id="org3e4f14b"><span class="section-number-4">1.3.5</span> Executa o insert</h4>
<div class="outline-text-4" id="text-1-3-5">
<p>
Usando o método query do objeto ligação:
</p>

<pre class="example">
if ($ligacao-&gt;query($comando) === TRUE) {
    printf("Usuário ($nome) foi cadastrado com sucesso!\n");
}
</pre>
</div>
</div>

<div id="outline-container-org2d653d9" class="outline-4">
<h4 id="org2d653d9"><span class="section-number-4">1.3.6</span> Fechando a conexão com o banco</h4>
<div class="outline-text-4" id="text-1-3-6">
<pre class="example">
$ligacao-&gt;close();
</pre>
</div>
</div>

<div id="outline-container-orgb57bf75" class="outline-4">
<h4 id="orgb57bf75"><span class="section-number-4">1.3.7</span> Página de cadastro completa:</h4>
<div class="outline-text-4" id="text-1-3-7">
<pre class="example">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Cadastrar no banco&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php   
    
    //                   "endereco", "usuario", "senha", "nome_do_banco"
$ligacao = new mysqli("localhost", "root", "toor", "banco");
    
if ($ligacao-&gt;connect_errno) {
    printf("A conexão falhou: %s\n", $ligacao-&gt;connect_error);
    exit();
}
    
$nome = $_GET['usuario'];
    
$comando = "INSERT INTO `usuarios` (`id`, `nome`) VALUES (NULL, '$nome')";

if ($ligacao-&gt;query($comando) === TRUE) {
    printf("Usuário ($nome) foi cadastrado com sucesso!\n");
}
    
$ligacao-&gt;close();
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
</div>
</div>
</div>
</div>
</div>
<div id="postamble" class="status">
<p class="date">Created: 2020-03-04 qua 15:52</p>
<p class="validation"><a href="http://validator.w3.org/check?uri=referer">Validate</a></p>
</div>
</body>
</html>
