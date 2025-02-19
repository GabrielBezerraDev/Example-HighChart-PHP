<?php
// Inclua o autoload do Composer
require 'vendor/autoload.php';

// Use a biblioteca Highcharts
use Ghunti\HighchartsPHP\Highchart;

$dados = [
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "40.23 Falha de Ultrassom",
        "quem_paga" => "Flex",
        "perda" => "676"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "14",
        "ofensor" => "Eng. Área Técnica IM",
        "classificador" => "Falha de teste",
        "motivo" => "39.23 Falha de Componente",
        "quem_paga" => "Flex",
        "perda" => "634"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.26 Sem internet",
        "quem_paga" => "Flex",
        "perda" => "564"
    ],    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.26 Sem internet",
        "quem_paga" => "Flex",
        "perda" => "564"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.26 Sem internet",
        "quem_paga" => "Flex",
        "perda" => "564"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.26 Sem internet",
        "quem_paga" => "Flex",
        "perda" => "564"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.26 Sem internet",
        "quem_paga" => "Flex",
        "perda" => "564"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.26 Sem internet",
        "quem_paga" => "Flex",
        "perda" => "564"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.26 Sem internet",
        "quem_paga" => "Flex",
        "perda" => "564"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.25 Servidor fora do ar",
        "quem_paga" => "Flex",
        "perda" => "431"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "16",
        "ofensor" => "TI",
        "classificador" => "Falha de teste",
        "motivo" => "40.26 Sem internet",
        "quem_paga" => "Flex",
        "perda" => "564"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "13",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "42.23 Falha de Temperatura",
        "quem_paga" => "Flex",
        "perda" => "125"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "18",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "41.23 Falha Elétrica",
        "quem_paga" => "Flex",
        "perda" => "314"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "13",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "42.23 Falha de Temperatura",
        "quem_paga" => "Flex",
        "perda" => "125"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "18",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "41.23 Falha Elétrica",
        "quem_paga" => "Flex",
        "perda" => "314"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "13",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "42.23 Falha de Temperatura",
        "quem_paga" => "Flex",
        "perda" => "125"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "18",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "41.23 Falha Elétrica",
        "quem_paga" => "Flex",
        "perda" => "314"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "13",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "42.23 Falha de Temperatura",
        "quem_paga" => "Flex",
        "perda" => "125"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "18",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "41.23 Falha Elétrica",
        "quem_paga" => "Flex",
        "perda" => "314"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "18",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "41.23 Falha Elétrica",
        "quem_paga" => "Flex",
        "perda" => "314"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "13",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "42.23 Falha de Temperatura",
        "quem_paga" => "Flex",
        "perda" => "125"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "18",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "41.23 Falha Elétrica",
        "quem_paga" => "Flex",
        "perda" => "314"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "13",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "42.23 Falha de Temperatura",
        "quem_paga" => "Flex",
        "perda" => "125"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "18",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "41.23 Falha Elétrica",
        "quem_paga" => "Flex",
        "perda" => "314"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "13",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "42.23 Falha de Temperatura",
        "quem_paga" => "Flex",
        "perda" => "125"
    ],
    [
        "tipo" => "Produção em Massa",
        "data" => "2024-12-12 06:32:08",
        "linha" => "FLEX II - IM L23",
        "id_ofensor" => "18",
        "ofensor" => "Qualidade",
        "classificador" => "Falha de teste",
        "motivo" => "41.23 Falha Elétrica",
        "quem_paga" => "Flex",
        "perda" => "314"
    ],
];

function makeChart($dados) {
    $primeiraCamadaDados = [];
    $ofensores = [];

    $segundaCamadaDados = [];
    $motivosDados = [];

    $totalPerda = 0;
    foreach ($dados as $dado) {
        // Processa a primeira camada
        if (array_key_exists($dado["ofensor"], $primeiraCamadaDados)) {
            $primeiraCamadaDados[$dado["ofensor"]]["y"] += (int)$dado["perda"];
            $totalPerda += (int)$dado["perda"];
        } else {
            $primeiraCamadaDados[$dado["ofensor"]] = [
                "name" => $dado["ofensor"],
                "y" => (int)$dado["perda"],
                "drilldown" => $dado["ofensor"]
            ];
            $motivosDados[$dado["ofensor"]] = 0;
            array_push($ofensores,$dado["ofensor"]);
            $totalPerda += (int)$dado["perda"];
        }

        // Processa a segunda camada
        if (array_key_exists($dado["ofensor"], $segundaCamadaDados)) {
            if (array_key_exists($dado["motivo"], $segundaCamadaDados[$dado["ofensor"]]["data"])) {
                $segundaCamadaDados[$dado["ofensor"]]["data"][$dado["motivo"]][1] += 1;
            } else {
                $segundaCamadaDados[$dado["ofensor"]]["data"][$dado["motivo"]] = [$dado["motivo"], 1];
            }
        } else {
            $segundaCamadaDados[$dado["ofensor"]] = [
                "name" => $dado["ofensor"],
                "id" => $dado["ofensor"],
                "data" => [
                    $dado["motivo"] => [$dado["motivo"], 1]
                ]
            ];
        }
    }

    //Calcula a porcentagem de quantos porcentos que determinado ofensor foi responsável pela perda de produtos
    foreach($ofensores as $ofensor){
        $primeiraCamadaDados[$ofensor]["y"] = ($primeiraCamadaDados[$ofensor]["y"] * 100)/$totalPerda;
    }   

    //Somando a quantidade total de motivos em relação a um ofensor
    foreach($ofensores as $ofensor){
        foreach($segundaCamadaDados[$ofensor]["data"] as $motivo){
            $motivosDados[$ofensor] += $motivo[1];
        }
    } 

    //Calcula a porcentagem de quantos porcentos que determinado motivo foi responsável pela perda de produtos
    foreach($ofensores as $ofensor){
        foreach($segundaCamadaDados[$ofensor]["data"] as $key => $motivo){
            $segundaCamadaDados[$ofensor]["data"][$key][1] = ($segundaCamadaDados[$ofensor]["data"][$key][1] * 100)/$motivosDados[$ofensor];
        }
    }  

    return [$primeiraCamadaDados, $segundaCamadaDados];
}

// Chama a função e recebe os resultados
[$primeiraCamadaDados, $segundaCamadaDados] = makeChart($dados);

// Crie o gráfico
$chart = new Highchart();

// Configurações do gráfico
$chart->chart->renderTo = 'container'; // ID do elemento HTML onde o gráfico será renderizado
$chart->chart->type = 'pie'; // Tipo de gráfico

$chart->title->text = 'Distribuição de Perdas por Ofensor'; // Título do gráfico
$chart->subtitle->text = 'Clique nas fatias para ver os detalhes.'; // Subtítulo

// Configurações de acessibilidade
$chart->accessibility->announceNewData->enabled = true;
$chart->accessibility->point->valueSuffix = '%';

// Configurações de plotagem
$chart->plotOptions->series->borderRadius = 5;
$chart->plotOptions->series->dataLabels = [
    [
        'enabled' => true,
        'distance' => 15,
        'format' => '{point.name}'
    ],
    [
        'enabled' => true,
        'distance' => '-30%',
        'filter' => [
            'property' => 'percentage',
            'operator' => '>',
            'value' => 5
        ],
        'format' => '{point.y:.1f}%',
        'style' => [
            'fontSize' => '0.9em',
            'textOutline' => 'none'
        ]
    ]
];

// Configurações do tooltip
$chart->tooltip->headerFormat = '<span style="font-size:11px">{series.name}</span><br>';
$chart->tooltip->pointFormat = '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>';

// Dados da série principal
$chart->series[] = [
    'name' => 'Ofensores',
    'colorByPoint' => true,
    'data' => array_values($primeiraCamadaDados) // Converte o array associativo em array indexado
];

// Dados de drilldown
$drilldownSeries = [];
foreach ($segundaCamadaDados as $ofensor => $data) {
    $drilldownSeries[] = [
        'name' => $ofensor,
        'id' => $ofensor,
        'data' => array_values($data['data']) // Converte o array associativo em array indexado
    ];
}
$chart->drilldown->series = $drilldownSeries;

// Renderize o gráfico
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico Highcharts</title>
    <!-- Inclua a biblioteca Highcharts JS -->
    <?php $chart->printScripts(); ?>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
</head>
<body>
    <div id="container" style="width: 100%; height: 500px;"></div>
    <script type="text/javascript"><?php echo $chart->render("chart1"); ?></script>
</body>
</html>