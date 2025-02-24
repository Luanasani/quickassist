@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title text-center">Neues Ticket erstellen</h2>
            
            <form action="{{ route('tickets.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="title" class="form-label">Titel</label>
                    <input type="text" id="title" name="title" required class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Beschreibung</label>
                    <textarea id="description" name="description" required rows="4" class="form-control"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="priority" class="form-label">Priorität</label>
                    <select id="priority" name="priority" required class="form-select">
                        <option value="low">Niedrig</option>
                        <option value="medium">Mittel</option>
                        <option value="high">Hoch</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Ticket erstellen</button>
            </form>
        </div>
    </div>
</div>
@endsection
