<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CausesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CausesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CausesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Causes::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/causes');
        CRUD::setEntityNameStrings('une cause', 'causes');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::setFromDb(); // set columns from db columns.
        CRUD::addColumn([
            'name'      => 'photo',
            'label'     => 'Image',
            'type'      => 'image',
            'withFiles' => true,
            'height' => '80px',
            'width'  => '100px',
            ]);

        $this->crud->addColumn([
            'name' => 'id_org',
            'type' => 'select   ',
            'label' => "Organisation",
            'entity' => 'organisations',
            'attribute' => 'nom',
            'model' => "App\Models\Organisations",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
        ]);

        CRUD::column('libelle')->label("Libelle")->type('text');

        CRUD::column('objectif')->label("Objectif (fcfa)")->type('text');
        CRUD::column('collecte')->type('text');
        // CRUD::column('created_at')->label("date de création")->type('text');
        CRUD::column('status')->type('text');


        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */

    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CausesRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.
        $this->crud->addField([
            'name' => 'id_org',
            'type' => 'select   ',
            'label' => "Organisation",
            'entity' => 'organisations',
            'attribute' => 'nom',
            'model' => "App\Models\Organisations",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
        ]);
        $this->crud->addField([
            'name' => 'id_cate',
            'type' => 'select   ',
            'label' => "Categorie",
            'entity' => 'categories',
            'attribute' => 'libelle',
            'model' => "App\Models\Categories",
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
        ]);
        CRUD::field('libelle')->label("Libelle")->type('text')->wrapperAttributes( ['class' => 'form-group col-md-6']);

        CRUD::addField([
            'name'      => 'photo',
            'label'     => 'Image',
            'type'      => 'upload',
            'withFiles' => true,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            ]);

        CRUD::field('objectif')->label("Objectif (Montant à atteindre) en fcfa")->type('number')->wrapperAttributes( ['class' => 'form-group col-md-6']);
        CRUD::field('description')->type('summernote')->wrapperAttributes( ['class' => 'form-group col-md-12']);


        CRUD::addField([
            'name'      => 'galerie',
            'label'     => 'Images pour la galerie',
            'type'      => 'upload_multiple',
            'withFiles' => true,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            ]);


        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
