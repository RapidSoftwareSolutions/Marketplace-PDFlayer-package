<?php
return array (
    'package' => 'PDFlayer',
    'tagline' => 'Create highly customizable PDFs from URLs & HTML.',
    'description' => 'Connect to the PDFlayer API to create highly customizable PDFs from URLs & HTML. Test a PDFlayer API call in your browser and export the code into your app.',
    'image' => 'https://logo.clearbit.com/pdflayer.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-PDFlayer-package',
    'keywords' => array (
        'API',
        'PDF',
        'PDFlayer',
    ),
    'accounts' => array (
        'domain' => 'pdflayer.com',
        'credentials' => array (
            'accessKey',
        ),
    ),
    'blocks' => array (
        array (
            'name' => 'getPdfFromUrl',
            'description' => 'Convert a site URL to a PDF document.',
            'args' => array (
                array (
                    'name' => 'accessKey',
                    'type' => 'credentials',
                    'info' => 'Your API Access Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'documentUrl',
                    'type' => 'String',
                    'info' => 'Full, including the HTTP Protocol, path to page you want to convert to a PDF documen.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getPdfFromHTML',
            'description' => 'Convert a site URL to a PDF document.',
            'args' => array (
                array (
                    'name' => 'accessKey',
                    'type' => 'credentials',
                    'info' => 'Your API Access Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'documentHtml',
                    'type' => 'File',
                    'info' => 'raw HTML code you would like to convert to a PDF document.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
    ),
    'custom' => array (
        'getPdfFromUrl' => array (
            'dictionary' => array (
                'accessKey' => 'access_key',
                'documentUrl' => 'document_url',
            ),
            'vendorUrl' => 'http://api.pdflayer.com/api/convert',
            'method' => 'GET',
            'custom' => true,
        ),
        'getPdfFromHTML' => array (
            'dictionary' => array (
                'accessKey' => 'access_key',
                'documentHtml' => 'document_html',
            ),
            'vendorUrl' => 'http://api.pdflayer.com/api/convert',
            'method' => 'POST',
            'custom' => true,
        ),
    ),
);