<?php

$EM_CONF['ot_sitekitceimgtextoverlay'] = [
    'title' => 'CE Image with text overlay',
    'description' => '"TYPO3 content element that displays an image with text overlay. Integrates with the Sitekit and ot-irrebuttons extensions.',
    'category' => 'frontend',
    'author' => 'Oliver Thiele',
    'author_email' => 'mail@oliver-thiele.de',
    'author_company' => 'Web Development Oliver Thiele',
    'state' => 'stable',
    'version' => '1.0.1',
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
