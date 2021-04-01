<h3>Fornecedor</h3>
{{-- comentario do blade --}}

@isset($fornecedores)

    @forelse ($fornecedores as $i => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone:({{ $fornecedor['ddd'] ?? '' }})
        {{ $fornecedor['telefone'] ?? '' }}
        <hr>
        @empty
            Não existem fornecedores cadastrados
    @endforelse
@endisset


