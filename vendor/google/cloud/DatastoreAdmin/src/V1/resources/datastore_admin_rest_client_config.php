<?php

return [
    'interfaces' => [
        'google.datastore.admin.v1.DatastoreAdmin' => [
            'ExportEntities' => [
                'method' => 'post',
                'uriTemplate' => '/v1/projects/{project_id}:export',
                'body' => '*',
                'placeholders' => [
                    'project_id' => [
                        'getters' => [
                            'getProjectId',
                        ],
                    ],
                ],
            ],
            'ImportEntities' => [
                'method' => 'post',
                'uriTemplate' => '/v1/projects/{project_id}:import',
                'body' => '*',
                'placeholders' => [
                    'project_id' => [
                        'getters' => [
                            'getProjectId',
                        ],
                    ],
                ],
            ],
            'CreateIndex' => [
                'method' => 'post',
                'uriTemplate' => '/v1/projects/{project_id}/indexes',
                'body' => 'index',
                'placeholders' => [
                    'project_id' => [
                        'getters' => [
                            'getProjectId',
                        ],
                    ],
                ],
            ],
            'DeleteIndex' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/projects/{project_id}/indexes/{index_id}',
                'placeholders' => [
                    'project_id' => [
                        'getters' => [
                            'getProjectId',
                        ],
                    ],
                    'index_id' => [
                        'getters' => [
                            'getIndexId',
                        ],
                    ],
                ],
            ],
            'GetIndex' => [
                'method' => 'get',
                'uriTemplate' => '/v1/projects/{project_id}/indexes/{index_id}',
                'placeholders' => [
                    'project_id' => [
                        'getters' => [
                            'getProjectId',
                        ],
                    ],
                    'index_id' => [
                        'getters' => [
                            'getIndexId',
                        ],
                    ],
                ],
            ],
            'ListIndexes' => [
                'method' => 'get',
                'uriTemplate' => '/v1/projects/{project_id}/indexes',
                'placeholders' => [
                    'project_id' => [
                        'getters' => [
                            'getProjectId',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'CancelOperation' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=projects/*/operations/*}:cancel',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteOperation' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=projects/*/operations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*/operations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListOperations' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=projects/*}/operations',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
