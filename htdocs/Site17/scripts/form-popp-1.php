<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'LifeSkills :New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'noreply@mrsoftwares.in',
    'to' => 'admissions@treehouselifeskills.com'
    ),
    'fields' => array(
    'name-1' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name-1',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name-1\' is required.'
    )
    ),
    'name-2' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'name-2',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name-2\' is required.'
    )
    ),
    'mail' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'phone' => array(
    'order' => 4,
    'type' => 'tel',
    'label' => 'phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'phone\' is required.'
    )
    ),
    'text' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Grade&#x2F;Class',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Grade&#x2F;Class\' is required.'
    )
    ),
    'School' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'School',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'School\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>