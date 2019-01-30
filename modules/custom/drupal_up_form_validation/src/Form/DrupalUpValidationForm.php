<?php

namespace Drupal\drupal_up_form_validation\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/*
Drupal form with an example of form validation
 */
class DrupalUpValidationForm extends FormBase
{

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
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Name'),
            '#required' => true,
        ];
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Please say my name'),
        ];
        return $form;
    }

/*
Custom validation
 */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        if (strlen($form_state->getValue('name')) < 4) {
            $form_state->setErrorByName(
                'name',
                $this->t('Your name should be longer than 3 characters or I will not say it')
            );
        }
    }

    /**
     *{@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        drupal_set_message(
            $this->t('Your name is ') . $form_state->getValue('name')
        );
    }

}
