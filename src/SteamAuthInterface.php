<?php

namespace Matlord\LaravelSteamAuth;

interface SteamAuthInterface
{
    public function redirect();

    public function validate();

    public function getAuthUrl();

    public function getSteamId();

    public function getUserInfo();
}
