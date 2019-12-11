<?php
namespace App\Controllers;

use App\Products;

class NewProductController extends ProductController
{
    private $products;

    public function __construct($app)
    {
        parent::__construct($app);
    }

    public function new()
    {
        return $this->app->view('products.new');
        
    }

public function newshow()
    {
        # If the user submitted the review form, we'll have a confirmation name
        # that we'll pass to the view to show them a confirmation message
        $confirmationName = $this->app->old('confirmationName');
        
        return $this->app->view('products.show', [
            'confirmationName' => $confirmationName
        ]);
    }
    
public function newProduct()
    {

        $this->app->validate([
            'name' => 'required',
            'description' => 'required|minLength:50',
            'price' => 'required|numeric',
            'available' => 'required|numeric',
            'weight' => 'required|numeric',
            'perishable' => 'required|min:(0)|max(1)'
        ]);
        # If the above validation fails, the user is redirected back to the new product page
        # and none of the following code will execute
        
        # Extract data from the form submission
        $name = $this->app->input('name');
        $description = $this->app->input('description');
        $price = $this->app->input('price');
        $available= $this->app->input('available');
        $weight = $this->app->input('weight');
        $perishable = $this->app->input('perishable');
        
        # Insert into the database
        $data = [
            'name' => $name,
            'description' => $content,
            'price' => $price,
            'available' => $available,
            'weight' => $weight,
            'perishable' => $perishable,
        ];
        $this->app->db()->insert('products', $data);
        
        
        # Send the user back to the product page with a `confirmationName`
        # we'll use to display a confirmation message.
        $this->app->redirect('/product/new');
    }

    
}