<?php
// Carregar o autoload do Composer
require_once __DIR__ . '/vendor/autoload.php'; // Certifique-se de que o caminho está correto

// Criar uma instância do mPDF
$mpdf = new \Mpdf\Mpdf();

// Adicionar conteúdo ao PDF
$html = '<h1>Meu Primeiro PDF com mPDF</h1>';
$html .= '<p>Este é um PDF gerado usando a biblioteca mPDF em PHP!</p>';

// Escrever o HTML no arquivo PDF
$mpdf->WriteHTML($html);

// Salvar o PDF em um arquivo
$mpdf->Output();


