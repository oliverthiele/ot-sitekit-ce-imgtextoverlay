<?php

$EM_CONF['ot_sitekitceimgtextoverlay'] = [
    'title' => 'CE Image with text overlay',
    'description' => '',
    'category' => 'frontend',
    'author' => 'Oliver Thiele',
    'author_email' => 'mail@oliver-thiele.de',
    'author_company' => 'Web Development Oliver Thiele',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '13.4.0-13.4.99',
                    'ot_sitekitbase' => '*',
                    'ot_irrebuttons' => '3.2.2-3.2.99',
                ],
            'conflicts' =>
                [],
            'suggests' =>
                [],
        ],
];
