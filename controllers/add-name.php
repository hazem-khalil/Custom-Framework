<?php

$app['database']->store('users', [
    'name' => $_POST['name'],
]);

header('Location: /');