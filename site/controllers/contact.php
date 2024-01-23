<?php
return function($kirby, $pages, $page) {

    $alert = null;

    if($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if(empty(get('website')) === false) {
            // go($page->url());
            exit;
        }

        $data = [
            'name'  => get('name'),
            'email' => get('email'),
            'message'  => get('message')
        ];

        $rules = [
            'name'  => ['required', 'minLength' => 2],
            'email' => ['required', 'email'],
            'message'  => ['required', 'minLength' => 40, 'maxLength' => 3000],
        ];

        $messages = [
            'name'  => 'Please enter a valid name with 2 or more characters.',
            'email' => 'Wait, is this a valid email address?',
            'message'  => 'Please enter a message between 40 and 3000 characters.'
        ];

        // some of the data is invalid
        if($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'email',
                    'from'     => 'hello@therarebeast.com',
                    'replyTo'  => $data['email'],
                    'to'       => 'erik@therarebeast.com',
                    'subject'  => esc($data['name']) . ' filled out your contact form.',
                    'data'     => [
                        'message'   => esc($data['message']),
                        'sender' => esc($data['name']),
                        'email' => esc($data['email'])
                    ]
                ]);

            } catch (Exception $error) {
                if(option('debug')):
                    $alert['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
                else:
                    $alert['error'] = 'The form could not be sent!';
                endif;
            }

            // no exception occurred, let's send a success message
            if (empty($alert) === true) {
                $success = 'Thanks for reaching out! We\'ll get back to you soon.';
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};