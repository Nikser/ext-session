<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_SessionExample_CustomButtons extends pm_Hook_CustomButtons
{
    public function getButtons()
    {
        return [
            [
                'place' => [
                    self::PLACE_DOMAIN,
                    self::PLACE_ADMIN_HOME,
                    self::PLACE_RESELLER_HOME,
                    self::PLACE_CUSTOMER_HOME,
                ],
                'title' => pm_Locale::lmsg('sessionButtonTitle'),
                'description' => pm_Locale::lmsg('sessionButtonDescription'),
                'icon' => pm_Context::getBaseUrl() . 'images/icon.png',
                'link' => pm_Context::getActionUrl('index'),
            ],
        ];
    }
}
