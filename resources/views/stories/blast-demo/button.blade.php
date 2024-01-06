@storybook([
    'name' => 'Primary Button',
    'status' => 'readyForQA',
    'design' => "https://www.figma.com/file/LKQ4FJ4bTnCSjedbRpk931/Sample-File",
    'args' => [
        'label' => 'Button',
        'href' => 'http://area17.com',
        'icon' => 'plus-24',
        'iconPosition' => 'after'
    ],
    'argTypes' => [
        'iconPosition' =>[
            'options' => [
                'before', 'after'
            ],
            'control' => [
                'type' => 'radio'
            ]
        ],
        'icon' =>[
            'options' => [
                'help-24', 'menu-24', 'plus-24'
            ],
            'control' => [
                'type' => 'select'

            ]
        ]
    ]
])

<x-blast-demo.button
    :href="$href"
    :icon="$icon"
    :icon-position="$iconPosition"
>
    {{ $label }}
</x-blast-demo.button>
