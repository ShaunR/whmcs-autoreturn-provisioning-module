<?php


if (!defined('WHMCS')) {
    die('This file cannot be directly accessed');
}

function autoreturn_MetaData()
{
    return [
        //
        'DisplayName' => 'Auto Return',

        //
        'APIVersion' => '1.1',

        //
        'RequiresServer' => false,

        // 
        'DefaultNonSSLPort' => '80',

        //
        'DefaultSSLPort' => '443'
    ];

}

function autoreturn_ConfigOptions()
{

    return [

        // Module Action Create
        'configoption1' => [
            'FriendlyName' => 'On Create',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => ''
        ],

        // Module Action Renew
        'configoption2' => [
            'FriendlyName' => 'On Renew',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => ''
        ],

        // Module Action Suspend
        'configoption3' => [
            'FriendlyName' => 'On Suspend',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => ''
        ],

        // Module Action Unsuspend
        'configoption4' => [
            'FriendlyName' => 'On Unsuspend',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => ''
        ],
        
        // Module Action Terminate
        'configoption5' => [
            'FriendlyName' => 'On Terminate',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => ''
        ],


        // Module Action Change Package
        'configoption6' => [
            'FriendlyName' => 'On Change Package',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => ''
        ],

        // Module Action Change Password
        'configoption7' => [
            'FriendlyName' => 'On Change Password',
            'Type' => 'text',
            'Size' => '25',
            'Default' => '',
            'Description' => ''

        ]

    ];

}


function autoreturn_CreateAccount(array $params = [])
{
    return $params['configoption1'];
}

function autoreturn_Renew(array $params = [])
{
    return $params['configoption2'];
}

function autoreturn_SuspendAccount(array $params = [])
{
    return $params['configoption3'];
}

function autoreturn_UnsuspendAccount(array $params = [])
{
    return $params['configoption4'];
}

function autoreturn_TerminateAccount(array $params = [])
{
    return $params['configoption5'];
}

function autoreturn_ChangePackage(array $params = [])
{
    return $params['configoption6'];
}

function autoreturn_ChangePassword(array $params = [])
{
    return $params['configoption7'];
}
