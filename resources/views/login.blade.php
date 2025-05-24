@extends('layout.login')

@section('content')
    @include('components.login')
    <script>
        document.getElementById('formAuthentication').addEventListener('submit', async function(e) {
            e.preventDefault(); // Hindari reload halaman

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                const res = await fetch('http://localhost:3000/auth/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        username: email,
                        password: password
                    })
                });

                const data = await res.json();

                if (res.ok) {
                    // Simpan token jika dibutuhkan
                    localStorage.setItem('token', data.token);

                    alert('Login berhasil sebagai: ' + data.data.role);

                    // Redirect atau simpan role/token sesuai kebutuhan
                    window.location.href = '/dashboard'; // Ganti dengan route Laravel yang sesuai
                } else {
                    alert(data.message || 'Login gagal');
                }
            } catch (error) {
                console.error('Login error:', error);
                alert('Terjadi kesalahan saat login');
            }
        });
    </script>
@endsection
