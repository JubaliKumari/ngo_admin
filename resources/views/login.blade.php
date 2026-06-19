<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;

            /* ===== BACKGROUND IMAGE ===== */
            background-image: url('https://images.unsplash.com/photo-1593113598332-cd288d649433?w=1600');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Dark overlay on top of image */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 0;
        }

        .login-box {
            position: relative;
            z-index: 1;
            width: 400px;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px 35px;
            border-radius: 14px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .logo {
            text-align: center;
            margin-bottom: 8px;
        }

        .logo span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            background: #22c55e;
            border-radius: 14px;
            font-size: 22px;
        }

        h2 {
            text-align: center;
            margin-bottom: 6px;
            color: #1f2937;
            font-size: 22px;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 24px;
        }

        label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 5px;
            margin-top: 14px;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.2s;
            outline: none;
        }

        input:focus {
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
        }

        button {
            width: 100%;
            padding: 13px;
            background: #22c55e;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            margin-top: 22px;
            transition: background 0.2s;
        }

        button:hover {
            background: #16a34a;
        }

        .error {
            color: #ef4444;
            background: #fef2f2;
            border: 1px solid #fecaca;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>

<div class="login-box">

    <div class="logo">
        <span>🤝</span>
    </div>

    <h2>NGO Admin Login</h2>
    <p class="subtitle">Sign in to manage your organization</p>

    @if ($errors->any())
        <div class="error">
            ⚠️ {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <label>Email Address</label>
        <input
            type="email"
            name="email"
            placeholder="admin@example.com"
            value="{{ old('email') }}"
            required
        >

        <label>Password</label>
        <input
            type="password"
            name="password"
            placeholder="Enter your password"
            required
        >

        <button type="submit">Login →</button>

    </form>
</div>

</body>
</html>