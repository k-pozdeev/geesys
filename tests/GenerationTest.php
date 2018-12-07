<?php

namespace GeesysTests;

use GeesysPdfWriter\PdfWriter;
use GeesysPdfWriter\SourceData;
use PHPUnit\Framework\TestCase;

class GenerationTest extends TestCase
{
    public function testGeneration() {
        $pdfWriter = new PdfWriter();
        $sourceData = new SourceData(
            '1234',
            '4321',
            '07.12.2018',
            'Заказчика имя',
            'ИНН заказчика',
            'КПП заказчика',
            '197000, Санкт-Петербург, дом заказчика',
            'Агента имя',
            'ИНН агента',
            'КПП агента',
            '197000, Санкт-Петербург, дом агента',
            'Джейсон Стетхем',
            'ИНН Джейсона',
            'КПП Джейсона',
            '197000, Санкт-Петербург, автомобиль Джейсона'
        );
        //$outputFile = tempnam(sys_get_temp_dir(), '');
        $outputFile = '/home/keer/Desktop/test.pdf';
        $pdfWriter->printToPdf($sourceData, $outputFile);
        $this->assertTrue(file_exists($outputFile));
    }
}