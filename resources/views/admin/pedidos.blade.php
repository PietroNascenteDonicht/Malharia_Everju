@extends('admin.app')

@section('content')
    <section class="app-layout">
        <span class="titles">
            <h1>Pedidos</h1>
            <h2>Gerencie todos os pedidos da loja</h2>
        </span>

        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th>Pedido</th>
                        <th>Cliente</th>
                        <th>Data</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                        <tr>
                            <td>{{$pedido->id}}</td>
                            <td>{{$pedido->usuario}}</td>
                            <td>{{$pedido->updated_at}}</td>
                            <td>{{$pedido->total}}</td>
                            <td class="badge {{$pedido->status}}">{{$pedido->status}}</td>
                            <td><a href="{{ route('admin.pedido-detalhes', $pedido->id) }}">Ver detalhes</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
