<?php
interface Publicacao {
    public function abrirLivro();
    public function fecharLivro();
    public function folhear($qtdPaginas);
    public function avancarPag();
    public function voltarPag();
}
