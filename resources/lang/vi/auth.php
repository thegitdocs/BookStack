<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Thông tin đăng nhập này không khớp với dữ liệu của chúng tôi.',
    'throttle' => 'Quá nhiều lần đăng nhập sai. Vui lòng thử lại sau :seconds giây.',

    // Login & Register
    'sign_up' => 'Đăng ký',
    'log_in' => 'Đăng nhập',
    'log_in_with' => 'Đăng nhập với :socialDriver',
    'sign_up_with' => 'Đăng kí với :socialDriver',
    'logout' => 'Đăng xuất',

    'name' => 'Tên',
    'username' => 'Tên đăng nhập',
    'email' => 'Email',
    'password' => 'Mật khẩu',
    'password_confirm' => 'Xác nhận mật khẩu',
    'password_hint' => 'Cần tối thiểu 7 kí tự',
    'forgot_password' => 'Quên Mật khẩu?',
    'remember_me' => 'Ghi nhớ đăng nhập',
    'ldap_email_hint' => 'Vui lòng điền một địa chỉ email để sử dụng tài khoản này.',
    'create_account' => 'Tạo Tài khoản',
    'already_have_account' => 'Bạn đã có tài khoản?',
    'dont_have_account' => 'Bạn không có tài khoản?',
    'social_login' => 'Đăng nhập bằng MXH',
    'social_registration' => 'Đăng kí bằng MXH',
    'social_registration_text' => 'Đăng kí và đăng nhập bằng dịch vụ khác.',

    'register_thanks' => 'Cảm ơn bạn đã đăng ký!',
    'register_confirm' => 'Vui lòng kiểm tra email và bấm vào nút xác nhận để truy cập :appName.',
    'registrations_disabled' => 'Việc đăng kí đang bị tắt',
    'registration_email_domain_invalid' => 'Tên miền của email không có quyền truy cập tới ứng dụng này',
    'register_success' => 'Cảm ơn bạn đã đăng kí! Bạn đã được xác nhận và đăng nhập.',


    // Password Reset
    'reset_password' => 'Đặt lại mật khẩu',
    'reset_password_send_instructions' => 'Nhập email vào ô dưới đây và bạn sẽ nhận được một email với liên kết để đặt lại mật khẩu.',
    'reset_password_send_button' => 'Send Reset Link',
    'reset_password_sent_success' => 'A password reset link has been sent to :email.',
    'reset_password_success' => 'Your password has been successfully reset.',
    'email_reset_subject' => 'Reset your :appName password',
    'email_reset_text' => 'You are receiving this email because we received a password reset request for your account.',
    'email_reset_not_requested' => 'If you did not request a password reset, no further action is required.',


    // Email Confirmation
    'email_confirm_subject' => 'Confirm your email on :appName',
    'email_confirm_greeting' => 'Thanks for joining :appName!',
    'email_confirm_text' => 'Please confirm your email address by clicking the button below:',
    'email_confirm_action' => 'Confirm Email',
    'email_confirm_send_error' => 'Email confirmation required but the system could not send the email. Contact the admin to ensure email is set up correctly.',
    'email_confirm_success' => 'Your email has been confirmed!',
    'email_confirm_resent' => 'Confirmation email resent, Please check your inbox.',

    'email_not_confirmed' => 'Email Address Not Confirmed',
    'email_not_confirmed_text' => 'Your email address has not yet been confirmed.',
    'email_not_confirmed_click_link' => 'Please click the link in the email that was sent shortly after you registered.',
    'email_not_confirmed_resend' => 'If you cannot find the email you can re-send the confirmation email by submitting the form below.',
    'email_not_confirmed_resend_button' => 'Resend Confirmation Email',

    // User Invite
    'user_invite_email_subject' => 'You have been invited to join :appName!',
    'user_invite_email_greeting' => 'An account has been created for you on :appName.',
    'user_invite_email_text' => 'Click the button below to set an account password and gain access:',
    'user_invite_email_action' => 'Set Account Password',
    'user_invite_page_welcome' => 'Welcome to :appName!',
    'user_invite_page_text' => 'To finalise your account and gain access you need to set a password which will be used to log-in to :appName on future visits.',
    'user_invite_page_confirm_button' => 'Confirm Password',
    'user_invite_success' => 'Password set, you now have access to :appName!'
];