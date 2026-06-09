<?php
 return [

    'custom' => [
        'nomeProduto' => [
            'required' => 'O nome do produto tem que ser informado.',
            'max' => 'O nome do produto deve ter no máximo :max caracteres.',
        ],

        'materia' => [
            'required' => 'A matéria-prima tem que ser informada.',
            'max' => 'A matéria-prima deve ter no máximo :max caracteres.',
        ],

        'dataFabricacao' => [
            'required' => 'A data de fabricação tem que ser informada.',
            'date' => 'O campo data de fabricação deve ser uma data válida.',
        ],

        'quantidade' => [
            'required' => 'O campo quantidade é obrigatório.',
            'numeric' => 'O campo quantidade aceita apenas números.',
            'max' => 'O número de produtos não pode ser maior que :max.',
        ],

        'preco' => [
            'required' => 'É obrigatório preencher o valor do produto.',
            'numeric' => 'O campo preço deve ser um número.',
        ],
    ],
];