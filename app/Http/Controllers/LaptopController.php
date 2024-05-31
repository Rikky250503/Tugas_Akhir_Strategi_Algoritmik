<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    public function index(){
        return view('form');
    }

    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'min_ram' => 'required',
            'min_seri_intel' => 'required',
            'min_generasi' => 'required',
            'max_price' => 'required',
        ]);

        // Kriteria dari form
        $criteria = [
            'ram' => $request->input('min_ram'),
            'seri_intel' => $request->input('min_seri_intel'),
            'generasi' => $request->input('min_generasi'),
            'price' => $request->input('max_price'),
        ];

        // Prioritas untuk greedy search, diurutkan dari yang paling penting
        $priorities = ['price'];

        // Panggil fungsi greedyLaptopSearch untuk mencari laptop berdasarkan kriteria
        $selectedLaptops = $this->greedyLaptopSearch($criteria, $priorities);

        return view('hasil', compact('selectedLaptops'));
    }

    private function greedyLaptopSearch($criteria, $priorities)
    {
        // Ambil semua laptop dan urutkan berdasarkan prioritas harga
        // Urutkan berdasarkan prioritas harga
        $laptops = Laptop::orderBy('price', 'asc')->get();

        $selectedLaptops = [];

        foreach ($laptops as $index => $laptop) {
            $satisfiesCriteria = true;

            // Periksa kriteria berdasarkan urutan prioritas
            foreach ($priorities as $priority) {
                if (isset($criteria[$priority]) && $laptop->$priority > $criteria[$priority]) {
                    $satisfiesCriteria = false;
                    break;
                }
            }

            if ($satisfiesCriteria) {
                $selectedLaptops[] = $laptop;
            }
        }

        return $selectedLaptops;
    }
}
