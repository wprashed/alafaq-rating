<?php
/*
Title: Post Submit
Method: post
Message: Post Saved
Logged in: false
*/

  // Where to save this form
  piklist('field', array(
    'type' => 'hidden'
    ,'scope' => 'post'
    ,'field' => 'post_type'
    ,'value' => 'cratings'
  ));


  piklist('field', array(
    'type' => 'text'
    ,'scope' => 'post'
    ,'field' => 'post_title'
    ,'label' => __('Client Name', 'ml-guest-post')
    ,'attributes' => array(
      'wrapper_class' => 'post_title'
      ,'style' => 'width: 100%'
    )
  ));
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
    'type' => 'editor'
    ,'scope' => 'post'
    ,'field' => 'post_content'
    ,'label' => __('Testimonial', 'ml-guest-post')
    ,'attributes' => array(
      'wrapper_class' => 'post_content'
      ,'style' => 'width: 100%'
    )
  ));

  piklist('field', array(
    'type' => 'radio'
    ,'scope' => 'post_meta'
    ,'field' => 'cr_one',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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
  'scope' => 'post_meta',
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

  piklist('field', array(
    'type' => 'hidden'
    ,'scope' => 'post'
    ,'field' => 'post_status'
    ,'value' => 'pending'
  ));

  // Submit button
  piklist('field', array(
    'type' => 'submit'
    ,'field' => 'submit'
    ,'value' => 'Submit'
  ));