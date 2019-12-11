<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $welcomes = ['Welcome', 'Aloha!', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }
    public function contact(){
        return  $this->app->view('contact');
    }
    public function about(){
        return  $this->app->view('about');
    }
    public function practice()
    {
        # Set up all the variables we need to make a connection
    $host = $this->app->env('DB_HOST');
    $database = $this->app->env('DB_NAME');
    $username = $this->app->env('DB_USERNAME');
    $password = $this->app->env('DB_PASSWORD');
    $charset = $this->app->env('DB_CHARSET', 'utf8mb4');

    # DSN (Data Source Name) string
    # contains the information required to connect to the database
    $dsn = "mysql:host=$host;dbname=$database;charset=$charset";

    # Driver-specific connection options
    $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        # Create a PDO instance representing a connection to a database
        $pdo = new \PDO($dsn, $username, $password, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    dump('Connection succesful!');
    }
    public function practice2()
    {
        dump($this->app->db()->all('products'));
    }

     public function newProduct()
    {
        return $this->app->view('products.new');

        $this->app->validate([
            'name' => 'required',
            'description' => 'required|minLength:50',
            'price' => 'required|numeric',
            'available' => 'required|digit',
            'weight' => 'required|numeric',
            'perishable' => 'required|digit|min:(0)|max(1)'
        ]);
        
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
            'description' => $description,
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
