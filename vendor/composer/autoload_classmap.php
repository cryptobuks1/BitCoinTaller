<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'Blocktrail\\SDK\\APIClient' => $vendorDir . '/blocktrail/blocktrail-sdk/src/APIClient.php',
    'Blocktrail\\SDK\\Bitcoin\\BIP32Path' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Bitcoin/BIP32Path.php',
    'Blocktrail\\SDK\\Bitcoin\\BIP44' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Bitcoin/BIP44.php',
    'Blocktrail\\SDK\\Blocktrail' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Blocktrail.php',
    'Blocktrail\\SDK\\BlocktrailSDK' => $vendorDir . '/blocktrail/blocktrail-sdk/src/BlocktrailSDK.php',
    'Blocktrail\\SDK\\Connection\\Exceptions\\EmptyResponse' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Exceptions/EmptyResponse.php',
    'Blocktrail\\SDK\\Connection\\Exceptions\\EndpointSpecificError' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Exceptions/EndpointSpecificError.php',
    'Blocktrail\\SDK\\Connection\\Exceptions\\GenericHTTPError' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Exceptions/GenericHTTPError.php',
    'Blocktrail\\SDK\\Connection\\Exceptions\\GenericServerError' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Exceptions/GenericServerError.php',
    'Blocktrail\\SDK\\Connection\\Exceptions\\InvalidCredentials' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Exceptions/InvalidCredentials.php',
    'Blocktrail\\SDK\\Connection\\Exceptions\\MissingEndpoint' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Exceptions/MissingEndpoint.php',
    'Blocktrail\\SDK\\Connection\\Exceptions\\ObjectNotFound' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Exceptions/ObjectNotFound.php',
    'Blocktrail\\SDK\\Connection\\Exceptions\\UnknownEndpointSpecificError' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Exceptions/UnknownEndpointSpecificError.php',
    'Blocktrail\\SDK\\Connection\\Response' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/Response.php',
    'Blocktrail\\SDK\\Connection\\RestClient' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Connection/RestClient.php',
    'Blocktrail\\SDK\\Wallet' => $vendorDir . '/blocktrail/blocktrail-sdk/src/Wallet.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'ExplorerController' => $baseDir . '/app/controllers/ExplorerController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'Normalizer' => $vendorDir . '/patchwork/utf8/src/Normalizer.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
