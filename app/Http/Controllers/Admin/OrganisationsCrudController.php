<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrganisationsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OrganisationsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrganisationsCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Organisations::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/organisations');
        CRUD::setEntityNameStrings('une organisation', 'organisations');
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

        // CRUD::column('logo')->type('text');
        CRUD::addColumn([
            'name'      => 'logo',
            'label'     => 'Logo',
            'type'      => 'image',
            'withFiles' => true,
            'height' => '60px',
            'width'  => '60px',
            ]);
        CRUD::column('nom')->type('text');
        // CRUD::column('')->type('text');
        CRUD::column('numero')->type('text');

        $this->crud->addColumn([
            // run a function on the CRUD model and show its return value
            'name' => "causes",
            'label' => "Cause.s", // Table column heading
            'type' => "model_function",
            'function_name' => 'getCausesCount', // the method in your Model
            // 'function_parameters' => [$one, $two], // pass one/more parameters to that method
            // 'limit' => 100, // Limit the number of characters shown
         ]);
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
        CRUD::setValidation(OrganisationsRequest::class);
        // CRUD::setFromDb(); // set fields from db columns.

        CRUD::field('nom')->label("Nom de l'organisation")->type('text')->wrapperAttributes( ['class' => 'form-group col-md-6']);
        CRUD::addField([
            'name'      => 'logo',
            'label'     => 'Logo',
            'type'      => 'upload',
            'withFiles' => true,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6'
            ],
            ]);

        CRUD::field('lien_facebook')->label("Lien page facebook")->type('text')->wrapperAttributes( ['class' => 'form-group col-md-6']);
        CRUD::field('lien_insta')->label("Lien page Instagram")->type('text')->wrapperAttributes( ['class' => 'form-group col-md-6']);
        CRUD::field('numero')->label("Contact")->type('text')->wrapperAttributes( ['class' => 'form-group col-md-6']);
        CRUD::field('whatsapp')->label("Numéro Whatsapp")->type('text')->wrapperAttributes( ['class' => 'form-group col-md-6']);
        CRUD::field('description')->type('summernote');

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
