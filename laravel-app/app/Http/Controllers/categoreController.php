<?php

namespace App\Http\Controllers;

use App\Models\categore; // Import the Category model if you have one
use Illuminate\Http\Request;

class categoreController extends Controller
{
    public function index()
    { 
        // Retrieve all categories from the model
        $categories = $this->getAll(); // This should be defined to return actual data

        // Prepare the response array
        $response['categore'] = $categories;

        // Return the view with the data
        return view('page.categore.index', $response); // Correct view path
    }

    // Example method to get all categories
    public function getAll()
    {
        // You would typically fetch this from the database
        return categore::all(); // Replace this with your actual fetching logic
    }
}
