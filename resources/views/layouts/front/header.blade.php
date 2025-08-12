<!-- Header -->
<header id="header" class="header-default header-style-5 header-white">
    
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-gamepad me-2"></i>GameZone
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#games">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tournaments">Tournaments</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

                <!-- Authentication Section -->
                <div class="auth-section d-flex align-items-center gap-3">
                    <div class="auth-buttons logged-out">
                        <button class="btn btn-login" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="showLogin()">
                            <i class="fas fa-sign-in-alt me-1"></i>Login
                        </button>
                        <button class="btn btn-register" data-bs-toggle="modal" data-bs-target="#global_modal" onclick="register_modal()">
                            <i class="fas fa-user-plus me-1"></i>Register
                        </button>
                    </div>

                    <div class="dropdown user-dropdown logged-in">
                        <div class="user-avatar" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom">
                            <li class="user-info">
                                <div class="user-name">Pro Gamer</div>
                                <div class="user-email" style="font-size: 0.85rem; color: #94a3b8;">player@gamezone.com</div>
                            </li>
                            <li>
                                <a class="dropdown-item dropdown-item-custom" href="#profile">
                                    <i class="fas fa-user-circle"></i>My Account
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item dropdown-item-custom" href="#wallet">
                                    <i class="fas fa-wallet"></i>Wallet <span class="wallet-balance float-end">$1,250</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item dropdown-item-custom" href="#settings">
                                    <i class="fas fa-cog"></i>Settings
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item dropdown-item-custom" href="#logout" onclick="logout()">
                                    <i class="fas fa-sign-out-alt"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>
<!-- /Header -->
