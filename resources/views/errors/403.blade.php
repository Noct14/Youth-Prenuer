@livewire('navbar')

<html lang="en">
  <head>
    <title>403 Forbidden</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      .box {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
        color: #333;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
      }

      .wrapper {
        max-width: 500px;
      }

      h1 {
        font-size: 80px;
        font-weight: 600;
        margin-bottom: 10px;
      }

      h2 {
        font-size: 24px;
        font-weight: 400;
        margin-bottom: 20px;
        color: #666;
      }

      p {
        font-size: 16px;
        color: #888;
        margin-bottom: 30px;
      }

      button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        text-decoration: none;
        border-radius: 6px;
        transition: background-color 0.3s ease;
      }

      button:hover {
        background-color: #555;
      }
    </style>
  </head>
  <div class="box">
    <div class="wrapper">
        <h1>403</h1>
        <h2>Akses Ditolak</h2>
        <p>Waduh... kamu gak punya izin buat masuk ke sini 😵‍💫</p>
        <a href="/">
            <button>Balik ke Home</button>
        </a>

    </div>
  </div>
</html>


@include('components.footer')
