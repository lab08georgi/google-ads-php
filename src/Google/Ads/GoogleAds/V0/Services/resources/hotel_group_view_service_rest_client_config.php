<?php

return [
    'interfaces' => [
        'google.ads.googleads.v0.services.HotelGroupViewService' => [
            'GetHotelGroupView' => [
                'method' => 'get',
                'uriTemplate' => '/v0/{resource_name=customers/*/hotelGroupViews/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
