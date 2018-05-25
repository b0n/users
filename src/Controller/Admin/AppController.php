<?php
namespace Users\Controller\Admin;

use App\Controller\Admin\AppController as BaseController;
use Crud\Controller\ControllerTrait;

/**
 * @property \Crud\Controller\Component\CrudComponent $Crud
 */
class AppController extends BaseController
{
    use ControllerTrait;

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'index' => [
                    'className' => 'Crud.Index',
                ],
                'view' => [
                    'className' => 'Crud.View',
                ],
                'add' => [
                    'className' => 'Crud.Add',
                    'view' => 'form',
                    'messages' => [
                        'success' => [
                            'text' => __d('croogo', 'The {name} has been saved.'),
                        ],
                        'error' => [
                            'text' => __d('croogo', 'The {name} could not be saved. Please, try again.'),
                        ]
                    ],
                ],
                'edit' => [
                    'className' => 'Crud.Edit',
                    'view' => 'form',
                    'messages' => [
                        'success' => [
                            'text' => __d('croogo', 'The {name} has been saved.'),
                        ],
                        'error' => [
                            'text' => __d('croogo', 'The {name} could not be saved. Please, try again.'),
                        ]
                    ],
                ],
                'delete' => [
                    'className' => 'Crud.Delete',
                    'messages' => [
                        'success' => [
                            'text' => __d('croogo', 'The {name} has been deleted.'),
                        ],
                        'error' => [
                            'text' => __d('croogo', 'The {name} could not be deleted. Please, try again.'),
                        ]
                    ],
                ],
            ]
        ]);
    }

    /**
     * @throws \Exception
     */
    public function index()
    {
        $this->Crud->execute();
    }

    /**
     * @throws \Exception
     */
    public function view()
    {
        $this->Crud->execute();
    }

    /**
     * @throws \Exception
     */
    public function add()
    {
        $this->Crud->execute();
    }

    /**
     * @throws \Exception
     */
    public function edit()
    {
        $this->Crud->execute();
    }

    /**
     * @throws \Exception
     */
    public function delete()
    {
        $this->Crud->execute();
    }
}
