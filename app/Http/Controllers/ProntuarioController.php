<?php

namespace App\Http\Controllers;

use App\Models\Prontuario;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\ProntuarioUpdateRequest;
use Pdf;

class ProntuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prontuario $prontuario)
    {
        return view('prontuarios.show', compact('prontuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prontuario $prontuario)
    {
        return view('prontuarios.edit', compact('prontuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProntuarioUpdateRequest $request, Prontuario $prontuario)
    {
        $validated = $request->validated();
        $prontuario->update($validated);

        return redirect()
            ->route('pacientes.prontuarios', $prontuario->paciente_id)
            ->with('success', 'Prontuário editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prontuario $prontuario)
    {
        //
    }

    public function pdf(Request $request, string $id)
    {
        $prontuario = Prontuario::find($id);
        $pdf = Pdf::loadView('prontuarios.pdf', compact('prontuario'));
        return $pdf->download("Prontuario_" . $prontuario->id . ".pdf");
    }
}
