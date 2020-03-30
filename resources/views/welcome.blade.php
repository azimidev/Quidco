@extends('layouts.app')
@section ('content')
    <section class="hero is-primary is-bold has-text-centered">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Hassan Azimi
                </h1>
                <h2 class="subtitle">
                    Quidco Test
                </h2>
            </div>
        </div>
    </section>
    <div class="container">
        {{-- Vue Component --}}
        <search></search>
    </div>
@endsection
