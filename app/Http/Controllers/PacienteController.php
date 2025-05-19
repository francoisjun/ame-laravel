<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\PacientePostRequest;
use App\Http\Requests\PacienteUpdateRequest;
use App\Http\Requests\ProntuarioPostRequest;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $pacientes = Paciente::query();
        if ($search) {
            $pacientes->where('nome', 'like', '%' . $search . '%');
        }
        
        $pacientes = $pacientes->paginate(20);
        
        return view('pacientes.index', compact('pacientes', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PacientePostRequest $request)
    {

        $validated = $request->validated();
        $paciente = Paciente::create($validated);

        return redirect()
            ->route('pacientes.index')
            ->with('success', 'Paciente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PacienteUpdateRequest $request, Paciente $paciente)
    {
        $validated = $request->validated();
        $paciente->update($validated);

        return redirect()
            ->route('pacientes.show', $paciente->id)
            ->with('success', 'Paciente editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()
            ->route('pacientes.index')
            ->with('success', 'Paciente deletado com sucesso!');
    }

    public function prontuarioIndex(Request $request, string $id) 
    {
        $paciente = Paciente::find($id);
        // dd($paciente->prontuarios);
        return view('pacientes.prontuarios', compact('paciente'));
    }

    public function prontuarioCreate(Request $request, string $id) 
    {
        $paciente = Paciente::find($id);
        // dd($paciente->prontuarios);
        return view('pacientes.prontuario-create', compact('paciente'));
    }

    public function prontuarioStore(ProntuarioPostRequest $request, string $id)
    {
        $validated = $request->validated();
        $paciente = Paciente::find($id);
        $paciente->prontuarios()->create($validated);

        return redirect()
            ->route('pacientes.index')
            ->with('success', 'Prontuário cadastrado com sucesso!');
    }
}
