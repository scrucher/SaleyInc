<?php

return [
    'interfaces' => [
        'google.cloud.compute.v1.GlobalForwardingRules' => [
            'Delete' => [
                'method' => 'delete',
                'uriTemplate' => '/compute/v1/projects/{project}/global/forwardingRules/{forwarding_rule}',
                'placeholders' => [
                    'forwarding_rule' => [
                        'getters' => [
                            'getForwardingRule',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'Get' => [
                'method' => 'get',
                'uriTemplate' => '/compute/v1/projects/{project}/global/forwardingRules/{forwarding_rule}',
                'placeholders' => [
                    'forwarding_rule' => [
                        'getters' => [
                            'getForwardingRule',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'Insert' => [
                'method' => 'post',
                'uriTemplate' => '/compute/v1/projects/{project}/global/forwardingRules',
                'body' => 'forwarding_rule_resource',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'List' => [
                'method' => 'get',
                'uriTemplate' => '/compute/v1/projects/{project}/global/forwardingRules',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'Patch' => [
                'method' => 'patch',
                'uriTemplate' => '/compute/v1/projects/{project}/global/forwardingRules/{forwarding_rule}',
                'body' => 'forwarding_rule_resource',
                'placeholders' => [
                    'forwarding_rule' => [
                        'getters' => [
                            'getForwardingRule',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
            'SetTarget' => [
                'method' => 'post',
                'uriTemplate' => '/compute/v1/projects/{project}/global/forwardingRules/{forwarding_rule}/setTarget',
                'body' => 'target_reference_resource',
                'placeholders' => [
                    'forwarding_rule' => [
                        'getters' => [
                            'getForwardingRule',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
