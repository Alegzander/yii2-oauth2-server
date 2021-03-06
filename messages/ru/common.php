<?php
return [
    'A redirect URI must be supplied when multiple redirect URIs are registered' => 'Если зарегистрировано несколько адресов перенаправления должен быть предоставлен адрес перенаправления',
    'An unsupported scope was requested' => 'Запрошена неподдерживаемая область видимости',
    'Authorization code doesn\'t exist or is invalid for the client' => 'Код авторизации не найден или недопустимый для клиента',
    'client credentials are required' => 'Учётные данные клиента являются обязательными',
    'Expiration (exp) time must be a unix time stamp' => 'Время истечения (exp) должно быть меткой времени Юникс',
    'Expiration (exp) time must be present' => 'Должно присутсвовать время истечения (exp)',
    'Invalid audience (aud)' => 'Неправильные получатели JWT (aud)',
    'Invalid issuer (iss) or subject (sub) provided' => 'Предоставлен некорректный инициатор (iss) или принцип JWT (sub)',
    'Invalid issuer (iss) provided' => 'Предоставлен некорректный инициатор',
    'Invalid refresh token' => 'Недопустимый маркер обновления',
    'Invalid subject (sub) provided' => 'Предоставлен недопустимый принцип JWT (sub)',
    'Invalid user authkey' => 'Недопустимый ключ авторизации пользователя',
    'Invalid username and password combination' => 'Неправильная пара логин/пароль',
    'JSON Token Identifier (jti) has already been used' => 'JSON Токен Идентификатор (jti) уже используется',
    'JWT cannot be used before the Not Before (nbf) time' => 'JWT не может быть использован до Не Раньше времени (nbf)',
    'JWT failed signature verification' => 'JWT проверка подписи не удалась',
    'JWT has expired' => 'JWT истёк',
    'JWT is malformed' => 'JWT деформирован',
    'Malformed auth header' => 'Деформирован заголовок авторизации',
    'Malformed token (missing "expires" or "client_id")' => 'Деформирован токен (пропущен "expires" или "client_id")',
    'Missing parameter: "code" is required' => 'Пропущен параметр: "code" является обязательным',
    'Missing parameter: "refresh_token" is required' => 'Пропущен параметр: "refresh_token" является обязательным',
    'Missing parameters: "assertion" required' => 'Пропущены параметры: "assertion" является обязательным',
    'Missing parameters: "authkey" and "username" required' => 'Пропущены параметры: "authkey" и "username" являются обязательными',
    'Missing parameters: "username" and "password" required' => 'Пропущены параметры: "username" и "password" являются обязательными',
    'No client id supplied' => 'Не передан идентификатор клиента',
    'No redirect URI was supplied or stored' => 'Не был передан или сохранен адрес перенаправления',
    'Not Before (nbf) time must be a unix time stamp' => 'Не Раньше время (nbf) должно быть меткой времени Юникс',
    'Only one method may be used to authenticate at a time (Auth header, GET or POST)' => 'Только один метод может быть использован для аутентификации (Auth заголовок, GET или POST)',
    'Refresh token has expired' => 'Маркер обновления истёк',
    'The access token provided has expired' => 'Предоставленный маркер доступа истёк',
    'The access token provided is invalid' => 'Предоставлен недопустимый маркер доступа',
    'The authorization code has expired' => 'Код авторизации истёк',
    'The client credentials are invalid' => 'Недопустимые учётные данные клиента',
    'The client id supplied is invalid' => 'Предоставленный идентификатор клиента является недопустимым',
    'The content type for POST requests must be "application/x-www-form-urlencoded"' => 'Тип содержимого для POST запросов должен быть "application/x-www-form-urlencoded"',
    'The grant type is unauthorized for this client_id' => 'Тип разрешения неавторизован для данного идентификатора клиента',
    'The grant type was not specified in the request' => 'В запросе не указан тип разрешения',
    'The redirect URI is mandatory and was not supplied' => 'Адрес перенаправления является обязательным и не был предоставлен',
    'The redirect URI is missing or do not match' => 'Адрес перенаправления пропущен или не совпадает',
    'The redirect URI must not contain a fragment' => 'Адрес перенаправления не должен содержать фрагментов',
    'The redirect URI provided is missing or does not match' => 'Адрес перенаправления пропущен или не соответствует',
    'The request method must be POST when requesting an access token' => 'Метод запроса должен быть POST если запрашивается маркер доступа',
    'The request requires higher privileges than provided by the access token' => 'Запрос требует более высоких привилегий, чем предоставляемые маркером доступа',
    'The scope requested is invalid for this client' => 'Запрошенная область видимости недопустима для данного клиента',
    'The scope requested is invalid for this request' => 'Запрошенная область видимости недопустима для данного запроса',
    'This application requires you specify a scope parameter' => 'Это приложение требует указать параметр области видимости',
    'This client is invalid or must authenticate using a client secret' => 'Этот клиент является недействительным или должен пройти аутентификацию с помощью секретного ключа клиента',
    'Unable to retrieve user information' => 'Не удалось получить информацию о пользователе',
    'When putting the token in the body, the method must be POST' => 'При установке маркера в теле, метод должен быть POST',
    'you must set the user_id on the array returned by getUserDetails' => 'вы должны установить user_id в массиве возвращаемом функцией getUserDetails',
];
