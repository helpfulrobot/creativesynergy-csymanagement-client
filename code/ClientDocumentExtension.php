<?php
class ClientDocumentExtension extends DataExtension {
  
  // - Einstellungen des PDF updaten
  public function updatePDFOptions($pdf) {
    // $pdf->setOption('username', '**');
    // $pdf->setOption('password', '**');
    $pdf->setOption('user-style-sheet', BASE_PATH . '/csymanagement-client/css/pdf.css');
  }

  // - PDF Seite updaten
  // public function updatePDFPage($obj, $variables, $pdf) {
  //   return $pdf::getHtml($obj, $variables, 'ClientPDF');
  // }
}