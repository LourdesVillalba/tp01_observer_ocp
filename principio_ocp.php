<?php

// Definición de la interfaz
interface Exportable {
    public function export(array $data);
}

class PdfExporter implements Exportable {
    public function export(array $data) {
        echo "Exportando datos a PDF... <br>";
        print_r($data);
    }
}

class CsvExporter implements Exportable {
    public function export(array $data) {
        echo "Exportando datos a CSV... <br>";
        print_r($data);
    }
}

class ExcelExporter implements Exportable {
    public function export(array $data) {
        echo "Exportando datos a Excel... <br>";
        print_r($data);
    }
}

class Exporter {
    private $exporter;

    public function __construct(Exportable $exporter) {
        $this->exporter = $exporter;
    }

    public function export(array $data) {
        $this->exporter->export($data);
    }
}

$data = ['nombre' => 'Maria'];

$pdf = new Exporter(new PdfExporter());
$pdf->export($data);

$csv = new Exporter(new CsvExporter());
$csv->export($data);

$excel = new Exporter(new ExcelExporter());
$excel->export($data);

?>