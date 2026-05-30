@extends('admin.app')

@section('content')

<section class="app-layout">
    <span class="titles">
        <h1>Dashboard</h1>
        <h2>Visão geral das vendas</h2>
    </span>

    <div class="div-info">

        <a class="info-item" href="">
            <svg class="svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 7H19V19C19 20.1046 18.1046 21 17 21H7C5.89543 21 5 20.1046 5 19V7Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.5 4H6.5L5 7H19L17.5 4Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 11L14.2 13L9.8 13L9 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <p class="add-info">+12%</p>
            <h1>{{$countPedidos}}</h1>
            <p class="sec">Total de Pedidos</p>
        </a>

        <a class="info-item svg-fill" href="">
            <svg class="SVG" fill="#000000" height="200px" width="200px" version="1.2" baseProfile="tiny" id="MO0ney_sign_by_Adioma" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M198.2,169.8c0-39.4-42.1-50.6-60.3-55.8c-34.4-9.6-37.3-22-36.8-28.3c1.2-15.5,18.2-19.3,34-15.9 c12.4,2.7,25.2,10,32.3,15.6L189.9,59c-11.1-7.6-25.3-17.4-46.1-21.4V12h-32.9v24.7C79,39.1,57.8,59.1,57.8,86.6 c0,26.8,19.4,39.4,38.8,48.8c16.2,7.7,61.4,15.8,58.8,36.2c-1.4,11.1-13.2,19.3-32.7,16.8c-17-2.1-35.2-16.4-35.2-16.4l-24.9,24.7 c15,12.1,30.9,19.7,48.2,23.2v24.1h32.9v-22.9C175.1,217.7,198.2,196.3,198.2,169.8z"></path> </g></svg>
            <p class="add-info">+18%</p>
        
            <h1>R$ {{$totalPedidos}}</h1>
            <p class="sec">Receita Total</p>
        </a>

        <a class="info-item" href="">
            <svg class="SVG" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 7H19V19C19 20.1046 18.1046 21 17 21H7C5.89543 21 5 20.1046 5 19V7Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.5 4H6.5L5 7H19L17.5 4Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M15 11L14.2 13L9.8 13L9 11" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <p class="add-info">+5</p>
            <h1>{{$produtosAtivos}}</h1>
            <p class="sec">Produtos Ativos</p>
        </a>

        <a class="info-item" href="">
            <svg class="SVG" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.16006 10.87C9.06006 10.86 8.94006 10.86 8.83006 10.87C6.45006 10.79 4.56006 8.84 4.56006 6.44C4.56006 3.99 6.54006 2 9.00006 2C11.4501 2 13.4401 3.99 13.4401 6.44C13.4301 8.84 11.5401 10.79 9.16006 10.87Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4.15997 14.56C1.73997 16.18 1.73997 18.82 4.15997 20.43C6.90997 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.91997 12.73 4.15997 14.56Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M18.3401 20C19.0601 19.85 19.7401 19.56 20.3001 19.13C21.8601 17.96 21.8601 16.03 20.3001 14.86C19.7501 14.44 19.0801 14.16 18.3701 14" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <p class="add-info">+23%</p>
            <h1>{{$countUsuarios}}</h1>
            <p class="sec">Clientes</p>
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th colspan="4" class="table-title">
                    Pedidos Recentes
                </th>
            </tr>
            <tr>
                <th>Pedido</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{$pedido->id}}</td>
                    <td>{{$pedido->usuario}}</td>
                    <td>{{$pedido->total}}</td>
                    <td class="badge {{$pedido->status}}">{{$pedido->status}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection