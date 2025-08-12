@extends('layouts.front.app')

@section('title', 'Home')


@section('content')
   
<!-- Enhanced Hero Section with Featured Games -->
    <section id="home" class="hero-section">
        <div class="container">
            {{-- <!-- Hero Content -->
            <div class="hero-content floating mt-4">
                <h1 class="hero-title">ULTIMATE GAMING EXPERIENCE</h1>
                <p class="hero-subtitle">Join millions of gamers worldwide in the most epic gaming adventures. Compete, win, and become a legend!</p>
                <a href="#games" class="btn-gaming">
                    <i class="fas fa-play me-2"></i>START PLAYING NOW
                </a>
            </div> --}}

            <!-- Featured Games Section in Hero -->
            <div class="hero-games">
                <h3 class="hero-games-title d-none">🎮 Featured Games</h3>
                <div class="row g-4">
                    <!-- Game 1: Cyber Legends -->
                    <div class="col-lg-3 col-md-6">
                        <div class="game-card-hero">
                            <div class="game-image-hero">
                                <i class="fas fa-robot"></i>
                                <span class="game-status">LIVE</span>
                            </div>
                            <h4 class="game-title-hero">Dargon & Tiger</h4>
                            <p class="game-category">Action RPG</p>
                            
                            <a class="game-play-btn" href="{{ route('first_game.index') }}">
                                <i class="fas fa-play me-2"></i>Play Now
                            </a>
                        </div>
                    </div>

                    <!-- Game 2: Battle Arena -->
                    <div class="col-lg-3 col-md-6">
                        <div class="game-card-hero">
                            <div class="game-image-hero" style="background: linear-gradient(135deg, #ef4444, #f59e0b);">
                                <i class="fas fa-fire"></i>
                                <span class="game-status">HOT</span>
                            </div>
                            <h4 class="game-title-hero">Battle Arena</h4>
                            <p class="game-category">Battle Royale</p>
                            <a class="game-play-btn" href="javascript:void(0)">
                                <i class="fas fa-crosshairs me-2"></i>Join Battle
                            </a>
                        </div>
                    </div>

                    <!-- Game 3: Space Odyssey -->
                    <div class="col-lg-3 col-md-6">
                        <div class="game-card-hero">
                            <div class="game-image-hero" style="background: linear-gradient(135deg, #8b5cf6, #06b6d4);">
                                <i class="fas fa-rocket"></i>
                                <span class="game-status">NEW</span>
                            </div>
                            <h4 class="game-title-hero">Space Odyssey</h4>
                            <p class="game-category">Space Shooter</p>
                            <a class="game-play-btn" onclick="playGame('space-odyssey')">
                                <i class="fas fa-rocket me-2"></i>Launch Game
                            </a>
                        </div>
                    </div>

                    <!-- Game 4: Fantasy Quest -->
                    <div class="col-lg-3 col-md-6">
                        <div class="game-card-hero">
                            <div class="game-image-hero" style="background: linear-gradient(135deg, #10b981, #22c55e);">
                                <i class="fas fa-dragon"></i>
                                <span class="game-status" style="background: var(--warning-color);">BETA</span>
                            </div>
                            <h4 class="game-title-hero">Fantasy Quest</h4>
                            <p class="game-category">Adventure RPG</p>
                            <a class="game-play-btn" onclick="playGame('fantasy-quest')">
                                <i class="fas fa-sword me-2"></i>Start Quest
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<script>
    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-custom');
        if (window.scrollY > 50) {
            navbar.style.background = 'rgba(15, 23, 42, 0.98)';
        } else {
            navbar.style.background = 'rgba(15, 23, 42, 0.95)';
        }
    });

   

    function logout() {
        if (confirm('Are you sure you want to logout?')) {
            document.body.classList.remove('user-logged-in');
            alert('Logged out successfully!');
        }
    }

    // Game play functions
    function playGame(gameName) {
        const gameNames = {
            'cyber-legends': 'Cyber Legends',
            'battle-arena': 'Battle Arena',
            'space-odyssey': 'Space Odyssey',
            'fantasy-quest': 'Fantasy Quest'
        };
        
        alert(`Loading ${gameNames[gameName]}...\nGame would start here!`);
        
        // Simulate game loading
        setTimeout(() => {
            alert(`Welcome to ${gameNames[gameName]}! Game is now starting...`);
        }, 1500);
    }

    // Game card hover effects
    document.querySelectorAll('.game-card-hero').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
</script>