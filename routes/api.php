<?php

$router->get('/api/comments/{slug}', 'CommentController@getComments');
$router->post('/api/comments', 'CommentController@postComment');
