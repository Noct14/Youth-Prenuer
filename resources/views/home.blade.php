@livewire('navbar')
@section('title', 'Home')
<head>
    @livewireStyles
    <meta charset="utf-8">
    <title>Home</title>
</head>


<style>
    @livewireScripts

    /* General body styling */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0; /* Light gray background */
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Ensure body takes full viewport height */
    }

    /* Warning section styling */
    .warning-section {
        background-color: #e0e0e0; /* Slightly darker gray for the warning background */
        padding: 50px 20px;
        text-align: center;
        margin-bottom: 30px; /* Space below the warning section */
        flex-grow: 1; /* Allow this section to grow and push the categories down */
        display: flex;
        flex-direction: column;
        justify-content: center; /* Center content vertically */
        align-items: center; /* Center content horizontally */
    }

    .warning-section h1 {
        font-size: 2.5em; /* Large font for "PERINGATAN!" */
        color: #333;
        margin-bottom: 10px;
    }

    .warning-section p {
        font-size: 1.2em; /* Slightly larger font for the descriptive text */
        color: #555;
        max-width: 600px; /* Limit width for readability */
        line-height: 1.5;
    }

    /* Category section styling */
    .category-section {
        padding: 30px 20px;
        background-color: #fff; /* White background for categories */
    }

    .category-section h2 {
        font-size: 1.5em;
        color: #333;
        margin-bottom: 20px;
    }

    .category-container {
        display: flex;
        gap: 20px; /* Space between category cards */
        flex-wrap: wrap; /* Allow cards to wrap on smaller screens */
        justify-content: center; /* Center cards if there's extra space */
    }

    .category-card {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 40px 30px; /* Increased padding for larger cards */
        text-align: center;
        flex: 1; /* Allow cards to grow and shrink */
        min-width: 200px; /* Minimum width for cards */
        max-width: 300px; /* Maximum width for cards */
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        font-size: 1.2em; /* Larger font for category names */
        color: #333;
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s; /* Smooth transition for hover effects */
    }

    .category-card:hover {
        transform: translateY(-5px); /* Lift effect on hover */
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
</style>
<div class="warning-section">
    <h1>PERINGATAN!</h1>
    <p>Website ini bisa bikin laper mata dan dompet.</p>
    <p>Masuk atas risiko sendiri ya~</p>
</div>


    <h2>Kategori Pilihan:</h2>
    <div class="category-container">
        @foreach($categories as $category)
            {{-- <a href="{{ route('category.show', $category->slug) }}" class="category-card">
                {{ $category->name }}
            </a> --}}
            <a href="/category/{{ $category['slug'] }}" class="category-card">
                {{ $category->name }}
            </a>
        @endforeach
    </div>

@include('components.footer')
