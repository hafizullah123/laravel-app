namespace App\Http\Controllers;  

use App\Models\Register;  
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Hash;  

class RegisterController extends Controller  
{  
    public function index()  
    {  
        $registers = Register::all();  
        return view('registers.index', compact('registers'));  
    }  

    public function create()  
    {  
        return view('registers.create');  
    }  

    public function store(Request $request)  
    {  
        $request->validate([  
            'name' => 'required|string',  
            'email' => 'required|string|email|unique:registers,email',  
            'password' => 'required|string|min:6',  
        ]);  

        Register::create([  
            'name' => $request->name,  
            'email' => $request->email,  
            'password' => Hash::make($request->password),  
        ]);  

        return redirect()->route('registers.index')->with('success', 'Registration created successfully.');  
    }  

    public function show(Register $register)  
    {  
        return view('registers.show', compact('register'));  
    }  

    public function edit(Register $register)  
    {  
        return view('registers.edit', compact('register'));  
    }  

    public function update(Request $request, Register $register)  
    {  
        $request->validate([  
            'name' => 'required|string',  
            'email' => 'required|string|email|unique:registers,email,' . $register->id,  
            'password' => 'nullable|string|min:6',  
        ]);  

        $register->name = $request->name;  
        $register->email = $request->email;  

        if ($request->password) {  
            $register->password = Hash::make($request->password);  
        }  

        $register->save();  

        return redirect()->route('registers.index')->with('success', 'Registration updated successfully.');  
    }  

    public function destroy(Register $register)  
    {  
        $register->delete();  
        return redirect()->route('registers.index')->with('success', 'Registration deleted successfully.');  
    }  
}