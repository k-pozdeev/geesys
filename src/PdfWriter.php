<?php

namespace GeesysPdfWriter;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfWriter
{
    /**
     * Метод распечатывает шаблон с предоставленными данными
     * и сохраняет PDF-файл по указанному пути.
     *
     * @param SourceData $data - объект с данными для подстановки
     * @param string $outfile - путь к файлу для сохранения сгенерированного документа
     * @return bool - true в случае успешного создания файла
     * @throws \ReflectionException
     */
    public function printToPdf(SourceData $data, string $outfile): bool {
        $template = $this->getTemplate();
        $filledTemplate = $this->substituteValues($template, $data);

        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->setBasePath(__DIR__ . '/../resources');

        $options = new Options();
        $options->setDefaultFont("Arial Unicode MS");
        $dompdf->setOptions($options);

        $dompdf->loadHtml($filledTemplate, 'UTF-8');
        $dompdf->render();
        $output = $dompdf->output();
        $result = file_put_contents($outfile, $output);
        return $result !== false;
    }

    /**
     * Строка с шаблоном
     *
     * @return string
     */
    private function getTemplate(): string {
        $templateFile = __DIR__ . '/../resources/template.html';
        $template = file_get_contents($templateFile);
        return $template;
    }

    /**
     * Подставляет данные в шаблон документа, подменяя ими плейсхолдеры.
     *
     * @param string $template
     * @param SourceData $data
     * @return string
     * @throws \ReflectionException | \Exception
     */
    private function substituteValues(string $template, SourceData $data): string {
        $class = new \ReflectionClass(SourceData::class);
        $properties = $class->getProperties(\ReflectionProperty::IS_PRIVATE);
        foreach ($properties as $property) {
            $getter = $this->getter($property->getName());
            $value = $data->$getter();
            $placeholder = $this->placeholder($property->getName());
            $count = 0;
            $template = str_replace($placeholder, $value, $template, $count);
            if ($count == 0) {
                throw new \Exception("В шаблоне документа не найден плейсхолдер " . $placeholder);
            }
        }
        return $template;
    }

    private function getter(string $propertyName) {
        return 'get' . ucfirst($propertyName);
    }

    private function placeholder(string $propertyName) {
        return '{{ ' . $propertyName . ' }}';
    }
}