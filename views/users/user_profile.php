<?php $attributes = array('id' => 'login_form', 'class' => 'form-horizontal'); ?>
<?php echo form_open('about_me/user_profile', $attributes); ?>

<p>
    <?php echo form_label('Full Name:'); ?>
    <?php
    $data = array(
        'name' => 'fullname',
        'placeholder' => 'Enter Full Name',
        'style' => 'width:90%',
        'value' => set_value('fullname')
    );
    echo form_input($data);
    ?>
</p>

<p>
    <?php echo form_label('Age:'); ?>
    <?php
    $data = array(
        'name' => 'age',
        'placeholder' => 'Enter Age',
        'style' => 'width:90%',
        'value' => set_value('age')
    );
    echo form_input($data);  
    ?>
</p>

<p>
    <?php echo form_label('Email:'); ?>
    <?php
    $data = array(
        'name' => 'email',
        'placeholder' => 'Enter Email',
        'style' => 'width:90%',
        'value' => set_value('email')
    );
    echo form_input($data);  
    ?>
</p>

<p>
    <?php echo form_label('Role:'); ?>
    <?php
    $data = array(
        'name' => 'role',
        'placeholder' => 'Enter Role',
        'style' => 'width:90%',
        'value' => set_value('role')
    );
    echo form_input($data);  
    ?>
</p>

<p>
    <?php echo form_label('Job:'); ?>
    <?php
    $data = array(
        'name' => 'job',
        'placeholder' => 'Enter Job',
        'style' => 'width:90%',
        'value' => set_value('job')
    );
    echo form_input($data);
    ?>
</p>

<p>
    <?php echo form_label('Phone:'); ?>
    <?php
    $data = array(
        'name' => 'phone',
        'placeholder' => 'Enter Phone',
        'style' => 'width:90%',
        'value' => set_value('phone')
    );
    echo form_input($data);
    ?>
</p>

<p>
    <?php echo form_label('Social Media:'); ?>
    <?php
    $data = array(
        'name' => 'social',
        'placeholder' => 'Enter Social Media Link',
        'style' => 'width:90%',
        'value' => set_value('social')
    );
    echo form_input($data);
    ?>
</p>

<p>
    <?php
    $data = array(
        'name' => 'submit',
        'class' => 'btn btn-primary',
        'value' => 'Submit'
    );
    echo form_submit($data);
    ?>
</p>

<?php echo form_close(); ?>
