<?php

return [

    'list' => [

        'columns' => [
            'id',
            'model_name',
            'title',
            'brand' => \Czim\CmsModels\Support\Enums\ListDisplayStrategy::RELATION_REFERENCE,
            'variants' => [
                'strategy' => 'relation-count-link',
                'options'  => [
                    'relation' => 'product',
                ]
            ],
            'price',
            'sale',
        ],

        'filters' => [
            'special',
            'sale',
            'any' => [
                'strategy'         => 'string-split',
                'label_translated' => 'models.filter.anything-label',
                'target'           => '*',
            ],
        ],

        'default_action' => [
            [
                'strategy'    => \Czim\CmsModels\Support\Enums\ActionReferenceType::EDIT,
                'permissions' => 'models.app-models-product.edit',
            ],
            [
                'strategy'    => \Czim\CmsModels\Support\Enums\ActionReferenceType::SHOW,
                'permissions' => 'models.app-models-product.show',
            ],
        ],

        'parents' => [
            'categories',
            'brand',
        ],
    ],

    'form' => [

        'layout' => [
            'tab-main' => [
                'type' => 'tab',
                'label' => 'Main',
                'children' => [
                    'set-main' => [
                        'type' => 'fieldset',
                        'label' => 'Main',
                        'children' => [
                            'model_name',
                            'brand',
                            'categories',
                            'image',
                        ],
                    ],
                    'set-price' => [
                        'type' => 'fieldset',
                        'label' => 'Price',
                        'children' => [
                            'price',
                            'sale',
                        ],
                    ],
                    'set-special' => [
                        'type' => 'fieldset',
                        'label' => 'Special Status',
                        'children' => [
                            [
                                'type' => 'group',
                                'label' => 'Special',
                                'label_for' => 'special',
                                'columns' => [ 3, 2, 5 ],
                                'children' => [
                                    'special',
                                    [
                                        'type' => 'label',
                                        'label' => 'Custom',
                                        'label_for' => 'special_free',
                                    ],
                                    'special_free',
                                ]
                            ]
                        ],
                    ],
                ],
            ],
            'tab-description' => [
                'type' => 'tab',
                'label' => 'Description',
                'children' => [
                    'title',
                    'description',
                    'description_long',
                ],
            ],
        ],

        'fields' => [
            'model_name',
            'brand',
            'categories',
            'price',
            'image',
            'sale',
            'special',
            'special_free',
            'title',
            'description' => [
                'options' => [
                    'config' => 'minimal',
                ],
            ],
            'description_long' => [
                'options' => [
                    'collapse_toolbar' => true,
                ],
            ],
        ],
    ],

];
