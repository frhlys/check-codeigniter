<?php
$config = array(
    array(
        'field' => 'id',
        'label' => 'ID',
        'rules' => 'required|numeric'
    ),
    array(
        'field' => 'first_name',
        'label' => 'First Name',
        'rules' => 'required|alpha'
    ),
    array(
        'field' => 'last_name',
        'label' => 'Last Name',
        'rules' => 'required|alpha'
    ),
    array(
        'field' => 'role',
        'label' => 'Role',
        'rules' => 'required|alpha'
    ),
    array(
        'field' => 'job',
        'label' => 'Job Title',
        'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
        'field' => 'about_desc',
        'label' => 'About Description',
        'rules' => 'required|min_length[10]|max_length[500]'
    ),
    array(
        'field' => 'age',
        'label' => 'Age',
        'rules' => 'required|numeric|greater_than[10]|less_than[100]'
    ),
    array(
        'field' => 'residence',
        'label' => 'Residence',
        'rules' => 'required|alpha_numeric_spaces'
    ),
    array(
        'field' => 'email',
        'label' => 'Email Address',
        'rules' => 'required|valid_email'
    ),
    array(
        'field' => 'phone',
        'label' => 'Phone Number',
        'rules' => 'required|numeric|exact_length[10]'
    ),
    array(
        'field' => 'social_media',
        'label' => 'Social Media Link',
        'rules' => 'required|valid_url'
    ),
    array(
        'field' => 'availability',
        'label' => 'Availability',
        'rules' => 'required|in_list[Available,Unavailable]'
    ),
    array(
        'field' => 'profile_pic',
        'label' => 'Profile Picture',
        'rules' => 'callback_validate_image'
    )
);
