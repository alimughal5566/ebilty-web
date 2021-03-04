<?php return [
    'plugin' => [
        'name' => 'Simple Contact',
        'description' => 'Простая контактная форма',
    ],
    'simplecontact' => [
        'from' => 'От',
        'subject' => 'Тема',
        'name' => 'Имя',
        'email' => 'Почта',
        'status' => 'Статус',
        'date' => 'Дата',
        'mainmenu' => 'Сообщения',
        'submenu' => 'Входящие',
        'permission' => 'Simple Contact',
        'permission_messages' => 'Сообщения',
        'permission_settings' => 'Настройки',
        'phone' => 'Телефон',
        'message' => 'Сообщение',
        'reply' => 'Ответить',
        'print' => 'Печать',
        'print_message' => 'Сообщение распечатано',
        'back' => 'Назад',
        'message_delete_success' => 'Сообщение удалено',
        'message_delete_error' => 'Что-то пошло не так, сообщение не удалено',
        'message_not_found_error' => 'Сообщение не найдено!',
        'message_reply_error' => 'Что-то пошло не так, ответ не отправлен',
        'message_reply_success' => 'Сообщение успешно отправлено',
        'message_reply' => 'Ответить',
        'button_submit_reply' => 'Отправить',
        'button_close_reply' => 'Отмена',
    ],
    'settings' => [
        'section_contact_label' => 'Настройки',
        'redirect_label' => 'Редирект',
        'redirect_comment' => 'Включить редирект после отправки сообщения',
        'redirect_url_label' => 'Страница',
        'redirect_url_comment' => 'Куда будет перенаправлен пользователь после отправки им сообщения',
        'success_message' => 'Сообщение об успешной отправке',
        'success_message_comment' => 'Данное сообщение появится на форме после отправки пользователем сообщения',
        'section_mail_label' => 'Настройки почты',
        'notification_label' => 'Уведомления',
        'notification_comment' => 'Послать уведомление при отправке пользователем сообщения',
        'notification_email_address' => 'Почтовый адрес для уведомлений',
        'notification_email_address_comment' => 'Почтовый адрес куда будет отправлено уведомление',
        'auto_reply_label' => 'Автоматический ответ',
        'auto_reply_comment' => 'Автоматически ответить пользователю на почту после отправки им сообщения',
        'section_recaptcha_label' => 'Настройки reCAPTCHA',
        'section_recaptcha_comments' => 'Показывать или нет reCAPTCHA на форме',
        'recaptcha_label' => 'reCAPTCHA',
        'recaptcha_comment' => 'Показывать reCAPTCHA на форме',
        'site_key_label' => 'Ключ сайта',
        'site_key_comment' => 'Ключ сайта от google',
        'secret_key_label' => 'Секретный ключ',
        'secret_key_comment' => 'Секретный ключ от google',
        'form_top_text_label' => 'Заголовок формы',
        'form_top_text_comment' => 'Этот текст будет сверху формы',
    ],
    'component' => [
        'name' => 'Simple Contact Form',
        'description' => 'Добавить форму на страницу',
        'name_title' => 'Надпись для имени',
        'name_description' => 'Текст над полем для имени(обязательно)',
        'name_validation_message' => '',
        'email_title' => 'Надпись для почты',
        'email_description' => 'Текст над полем для почты(обязательно)',
        'email_validation_message' => '',
        'phone_title' => 'Надпись для телефона',
        'phone_description' => 'Текст над полем для телефона',
        'subject_title' => 'Надпись для темы',
        'subject_description' => 'Текст над полем темы(обязательно)',
        'subject_validation_message' => '',
        'message_title' => 'Надпись для сообщения',
        'message_description' => 'Текс над полем сообщения(обязательно)',
        'message_validation_message' => '',
        'display_phone_field' => 'Поле для телефона',
        'display_phone_field_description' => 'Показывать поле для телефона?',
        'button_text' => 'Текст кнопки',
        'button_description' => 'Текст для кнопки отправки(обязательно)',
        'button_validation_message' => '',
    ],
    'widget' => [
        'label' => 'Contact Us - Общий',
        'properties_title' => 'Заголовок виджета',
        'properties_chart' => 'Тип графика',
        'properties_chart_option_bar' => 'Bar',
        'properties_chart_option_pie' => 'Pie',
        'new' => 'Новые',
        'replied' => 'Отвеченные',
        'total' => 'Всего',
    ],
];
