<?php

namespace common\component;

interface UserNotificationInterface
{
    public function getEmail();

    public function getSubject();
}