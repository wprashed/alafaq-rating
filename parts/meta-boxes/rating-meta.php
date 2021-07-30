<?php
/** 
* Title: Customer Ratings
* Post Type: cratings
*/

piklist('field', array(
    'type' => 'text'
    ,'scope' => 'post_meta'
    ,'field' => 'project_name'
    ,'label' => __('Project Name', 'ml-guest-post')
    ,'attributes' => array(
      'style' => 'width: 100%'
    )
  ));

  piklist('field', array(
    'type' => 'radio',
    'field' => 'cr_one',
    'label' => 'Marketing approch',
    'choices' => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5'
    )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_two',
  'label' => 'Enquiriy, acknowledgemnt',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_three',
  'label' => 'Bid Submission and Technical Evaluation',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_four',
  'label' => 'Tender Result Followup',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_five',
  'label' => 'Design and engineering Technical Submittals',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_six',
  'label' => 'Quality of Mobalization',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_seven',
  'label' => 'Professionalism& Courtesy of Staff',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_eight',
  'label' => 'Work Crew Support',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_nine',
  'label' => 'Safety and Environmental Support',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_ten',
  'label' => 'Team Availability during waranty and Maintainance',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_eleven',
  'label' => 'Handing Over and Closing Process',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));

piklist('field', array(
  'type' => 'radio',
  'field' => 'cr_twel',
  'label' => 'Overall Impression on ALAFAQ',
  'choices' => array(
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
    '5' => '5'
  )
));