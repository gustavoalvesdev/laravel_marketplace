@extends('layouts.app')

@section('content')
    <h1>Criar Loja</h1>

    <form action="/admin/stores/store" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label>Nome Loja</label>
            <input type="text" name="name" class="form-control">
            <!-- form-control -->
        </div>
        <!-- form-group -->

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control">
            <!-- form-control -->
        </div>
        <!-- form-group -->

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control">
            <!-- form-control -->
        </div>
        <!-- form-group -->

        <div class="form-group">
            <label>Celular / Whatsapp</label>
            <input type="text" name="mobile_phone" class="form-control">
            <!-- form-control -->
        </div>
        <!-- form-group -->

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control">
            <!-- form-control -->
        </div>
        <!-- form-group -->

        <div class="form-group">
            <label>Usuário</label>
            <select name="user" class="form-control">
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <!-- form-control   -->
        </div>
        <!-- form-group -->

        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
            <!-- btn   -->
        </div>
        <!-- form-group -->
        
    </form>
@endsection
