<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Prontuário #{{ $prontuario->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 20px;
            font-size: 14px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .header, .section {
            margin-bottom: 30px;
        }
        .header {
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
            display: flex;
            justify-content: space-between;
        }
        .logo {
            height: 80px;
            margin-bottom: 10px;
        }
        .small-text {
            font-size: 12px;
            color: #666;
        }
        h2 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }
        h3 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #444;
        }
        p {
            margin: 4px 0;
        }
        .grid {
            display: flex;
            flex-wrap: wrap;
        }
        .grid > div {
            /* width: 50%; */
            padding: 4px 0;
        }
        .signature {
            margin-top: 100px;
            text-align: center;
            font-size: 13px;
            color: #444;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Cabeçalho -->
        <div class="header">
            <table style="width: 100%">
              <tr>
                <td>
                  <img src="{{ public_path('images/ame-logo.png') }}" alt="Logo AME" style="height: 80px; width: auto;">
                  <p class="small-text">Av. Sabiniano Maia, 00, Guarabira - PB<br> CNPJ: 00.000.000/0001-00</p>
                </td>
                <td style="text-align: right;">
                  <h2>Prontuário #{{ $prontuario->id }}</h2>
                  <p class="small-text">Emitido em: {{ $prontuario->getData() }}</p>
                </td>
              </tr>
            </table>
        </div>

        <!-- Dados do Paciente -->
        <div class="section">
            <h3>Dados do Paciente</h3>
            <div class="grid">
                <div><span class="bold">Nome:</span> {{ $prontuario->paciente->nome }}</div>
                <div><span class="bold">Data de Nascimento:</span> {{ $prontuario->paciente->getNascimentoFormated() }}</div>
                <div><span class="bold">Sexo:</span> {{ $prontuario->paciente->getGeneroFormated() }}</div>
                <div><span class="bold">CPF:</span> {{ $prontuario->paciente->getCPFFormated() }}</div>
                <div><span class="bold">Telefone:</span> {{ $prontuario->paciente->getTelefoneFormated() }}</div>
                <div><span class="bold">Email:</span> {{ $prontuario->paciente->email }}</div>
                <div><span class="bold">Endereço:</span> {{ $prontuario->paciente->endereco }}, {{ $prontuario->paciente->cidade }} - {{ $prontuario->paciente->uf }}</div>
            </div>
        </div>

        <!-- Diagnóstico -->
        <div class="section">
            <h3>Diagnóstico / CID-10</h3>
            <p>{{ $prontuario->diagnostico }}</p>
        </div>

        <!-- Queixa -->
        <div class="section">
            <h3>Queixa Principal / HDA / Antecedentes</h3>
            <p>{{ $prontuario->queixa }}</p>
        </div>

        <!-- Observação -->
        <div class="section">
            <h3>Observações</h3>
            <p>{{ $prontuario->obs }}</p>
        </div>

        <!-- Assinatura Digital -->
        <div class="signature">
            <p><strong>Carimbo do Médico</strong></p>
        </div>
    </div>
</body>
</html>
