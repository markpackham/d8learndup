<?php

namespace Drupal\drupal_up_form_validation\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/*
Drupal form with an example of form validation
*/
class DrupalUpValidationForm extends FormBase{

/**
*{@inheritdoc}
*/
    public function getFormId()
    {
        return 'drupal_up_validation_form';
    }


    /**
*{@inheritdoc}
*/
public function buildForm(array $form, FormStateInterface $form_state)
{
    $form['name']=[
        '#type'=>'textfield',
        '#title'=>$this->t('Name'),
    ];
    $form['submit']=[
    '#type'=>'submit',
    '#value'=>$this->t('Please say my name'),
    ];
return $form;
}

public function submitForm(array &$form, FormStateInterface $form_state)
{
    drupal_set_message(
$this->t('Your name is ').$form_state->getValue('name')
    );
}

}
