<?php
const DS = DIRECTORY_SEPARATOR;
Yii::setAlias('@webroot', realpath(dirname(__FILE__) . DS . '..'));

return [
    'adminEmail' => 'admin@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
];
