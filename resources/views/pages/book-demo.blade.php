@extends('layouts.app')

@section('title', 'Book a Demo - PSuite ERP')

@section('content')
    <section class="page-hero">
        <div class="container">
            <h1>Book a Demo</h1>
            <p>Schedule a personalized walkthrough of our ERP platform.</p>
        </div>
    </section>

    <section class="section">
        <div class="container" style="max-width: 600px;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('book-demo.submit') }}" method="POST" class="solution-card">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" name="company" id="company" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="solution_interested">Solution Interested</label>
                    <select name="solution_interested" id="solution_interested" class="form-control" required>
                        <option value="">Select a solution...</option>
                        @foreach($solutions as $solution)
                            <option value="{{ $solution->title }}" {{ request('solution') == $solution->slug ? 'selected' : '' }}>
                                {{ $solution->title }}
                            </option>
                        @endforeach
                        <option value="Multiple">Multiple Solutions</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message (Optional)</label>
                    <textarea name="message" id="message" rows="4" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Submit Request</button>
            </form>
        </div>
    </section>
@endsection