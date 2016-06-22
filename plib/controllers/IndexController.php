<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class IndexController extends pm_Controller_Action
{
    public function indexAction()
    {
        $this->view->pageTitle = pm_Locale::lmsg('pageTitle', ['product' => 'Plesk']);

        $this->view->isExists = pm_Session::isExist();
        $this->view->client = pm_Session::getClient();
        $this->view->isImpersonated = pm_Session::isImpersonated();
        $this->view->clientId = pm_Session::getImpersonatedClientId();
        $this->view->currentDomain = pm_Session::getCurrentDomain();
        $this->view->currentDomains = pm_Session::getCurrentDomains(false);
        $this->view->mainCurrentDomains = pm_Session::getCurrentDomains(true);
    }
}
