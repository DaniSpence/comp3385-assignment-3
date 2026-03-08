<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Community Events Board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaf5f2;
            color: #1f2937;
        }

        .app-navbar {
            background: #ffffff;
            border-bottom: 1px solid #d9e7e2;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }

        .brand-badge {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: #0d9488;
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            margin-right: 10px;
        }

        .navbar-brand-text {
            font-weight: 700;
            color: #1f2937;
        }

        .nav-pill {
            font-size: 14px;
            border-radius: 10px;
            padding: 6px 12px !important;
            color: #4b5563 !important;
        }

        .nav-pill:hover,
        .nav-pill.active {
            background: #dff3ee;
            color: #0d9488 !important;
        }

        .page-shell {
            max-width: 1240px;
            margin: 0 auto;
        }

        .page-content {
            padding: 24px 20px 40px;
        }

        .btn-teal {
            background: #0d9488;
            border: none;
            color: #fff;
            border-radius: 10px;
            padding: 10px 16px;
            font-weight: 600;
        }

        .btn-teal:hover {
            background: #0b7f76;
            color: #fff;
        }

        .card-soft {
            border: 1px solid #d9e7e2;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
    </style>
</head>
<body>

    @unless(View::hasSection('hideNavbar'))
        <nav class="navbar navbar-expand-lg app-navbar">
            <div class="container page-shell">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/dashboard') }}">
                    <span class="brand-badge">📅</span>
                    <span class="navbar-brand-text">Events Board</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-3 me-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-pill {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                                Events
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-pill {{ request()->is('community-events/add') ? 'active' : '' }}" href="{{ url('/community-events/add') }}">
                                Create Event
                            </a>
                        </li>
                    </ul>

                    <div class="d-flex align-items-center gap-3">
                        <span class="rounded-circle d-inline-flex align-items-center justify-content-center"
                              style="width:32px;height:32px;background:#dff3ee;color:#4b5563;font-size:12px;font-weight:700;">
                            {{ strtoupper(substr(auth()->user()->name ?? 'JD', 0, 2)) }}
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    @endunless

    <div class="page-shell page-content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>